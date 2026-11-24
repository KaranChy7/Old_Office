<?php

declare(strict_types=1);

require_once __DIR__ . '/lib.php';

header('Content-Type: application/json; charset=utf-8');

$action = $_GET['action'] ?? $_POST['action'] ?? '';

if ($action === 'search') {
    $query = strtolower(trim((string) ($_GET['q'] ?? '')));
    if (strlen($query) < 2) {
        echo json_encode(['results' => []]);
        exit;
    }
    $results = [];
    foreach (products() as $product) {
        $haystack = strtolower(implode(' ', [
            $product['name'], $product['botanical_name'], implode(' ', $product['categories']),
            $product['short_description'], $product['mature_height'], $product['sunlight'], $product['growth_rate'],
        ]));
        if (str_contains($haystack, $query)) {
            $results[] = [
                'name' => $product['name'],
                'botanical' => $product['botanical_name'],
                'price' => money(product_price($product)),
                'image' => $product['image'],
                'url' => url('product', ['slug' => $product['slug']]),
                'stock' => $product['stock'],
            ];
        }
        if (count($results) >= 7) break;
    }
    echo json_encode(['results' => $results]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

$csrf = $_SERVER['HTTP_X_CSRF_TOKEN'] ?? $_POST['csrf'] ?? '';
if (!hash_equals($_SESSION['csrf'] ?? '', (string) $csrf)) {
    http_response_code(419);
    echo json_encode(['error' => 'Session expired']);
    exit;
}

$productId = (int) ($_POST['product_id'] ?? 0);
$product = find_product($productId);
if (!$product) {
    http_response_code(404);
    echo json_encode(['error' => 'Product not found']);
    exit;
}

if ($action === 'cart_add') {
    if ((int) $product['stock'] <= 0) {
        http_response_code(422);
        echo json_encode(['error' => 'This product is out of stock']);
        exit;
    }
    $quantity = max(1, (int) ($_POST['quantity'] ?? 1));
    $current = (int) ($_SESSION['cart'][$productId] ?? 0);
    $_SESSION['cart'][$productId] = min((int) $product['stock'], $current + $quantity);
    echo json_encode(['ok' => true, 'message' => $product['name'] . ' added to cart.', 'cart_count' => cart_count()]);
    exit;
}

if ($action === 'cart_remove') {
    unset($_SESSION['cart'][$productId]);
    echo json_encode(['ok' => true, 'message' => 'Product removed from cart.', 'cart_count' => cart_count()]);
    exit;
}

if ($action === 'wishlist_toggle') {
    $list = wishlist();
    if (in_array($productId, $list, true)) {
        $list = array_values(array_filter($list, fn ($id) => $id !== $productId));
        $active = false;
    } else {
        $list[] = $productId;
        $active = true;
    }
    $_SESSION['wishlist'] = $list;
    echo json_encode(['ok' => true, 'active' => $active, 'wishlist_count' => count($list)]);
    exit;
}

http_response_code(400);
echo json_encode(['error' => 'Unknown action']);
