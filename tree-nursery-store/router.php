<?php

declare(strict_types=1);

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
if (str_starts_with($path, '/data/') || str_starts_with($path, '/backups/')) {
    http_response_code(403);
    exit('Forbidden');
}

$file = __DIR__ . $path;
if ($path !== '/' && is_file($file)) {
    return false;
}

if (preg_match('#^/shop/product/([^/]+)/?$#', $path, $match)) {
    $_GET['page'] = 'product';
    $_GET['slug'] = $match[1];
} elseif (preg_match('#^/shop/category/([^/]+)/?$#', $path, $match)) {
    $_GET['page'] = 'shop';
    $_GET['category'] = $match[1];
} elseif ($path === '/shop' || $path === '/shop/') {
    $_GET['page'] = 'shop';
} elseif ($path === '/about' || $path === '/about/') {
    $_GET['page'] = 'about';
} elseif ($path === '/services' || $path === '/services/') {
    $_GET['page'] = 'services';
} elseif ($path === '/contact' || $path === '/contact/') {
    $_GET['page'] = 'contact';
}

require __DIR__ . '/index.php';
