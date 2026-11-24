<?php

declare(strict_types=1);

require_once __DIR__ . '/lib.php';

$page = $_GET['page'] ?? 'home';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verify_csrf();
    $action = $_POST['action'] ?? '';

    if ($action === 'update_cart') {
        $newCart = [];
        foreach ((array) ($_POST['quantity'] ?? []) as $productId => $quantity) {
            $product = find_product((int) $productId);
            if ($product && (int) $quantity > 0 && (int) $product['stock'] > 0) {
                $newCart[(int) $productId] = min((int) $quantity, (int) $product['stock']);
            }
        }
        $_SESSION['cart'] = $newCart;
        flash('Your cart has been updated.');
        redirect(url('cart'));
    }

    if ($action === 'apply_coupon') {
        $code = strtoupper(trim((string) ($_POST['coupon'] ?? '')));
        $valid = false;
        foreach (read_json('coupons.json') as $coupon) {
            if ($coupon['active'] && strtoupper($coupon['code']) === $code) {
                $valid = true;
                break;
            }
        }
        if ($valid) {
            $_SESSION['coupon'] = $code;
            flash('Coupon applied successfully.');
        } else {
            unset($_SESSION['coupon']);
            flash('That coupon code is not valid.', 'error');
        }
        redirect(url('cart'));
    }

    if ($action === 'register') {
        $name = trim((string) ($_POST['name'] ?? ''));
        $email = strtolower(trim((string) ($_POST['email'] ?? '')));
        $password = (string) ($_POST['password'] ?? '');
        $users = read_json('users.json');
        $exists = array_filter($users, fn ($u) => strtolower($u['email']) === $email);
        if (!$name || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($password) < 6 || $exists) {
            flash('Please enter valid details. The email may already be registered.', 'error');
        } else {
            $id = time();
            $users[] = ['id' => $id, 'name' => $name, 'email' => $email, 'password' => password_hash($password, PASSWORD_DEFAULT), 'addresses' => [], 'created_at' => date('c')];
            write_json('users.json', $users);
            $_SESSION['user_id'] = $id;
            flash('Your account has been created.');
        }
        redirect(url('account'));
    }

    if ($action === 'login') {
        $email = strtolower(trim((string) ($_POST['email'] ?? '')));
        $password = (string) ($_POST['password'] ?? '');
        foreach (read_json('users.json') as $user) {
            if (strtolower($user['email']) === $email && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                flash('Welcome back, ' . $user['name'] . '.');
                redirect(url('account'));
            }
        }
        flash('The email address or password was incorrect.', 'error');
        redirect(url('account'));
    }

    if ($action === 'logout') {
        unset($_SESSION['user_id']);
        flash('You have been logged out.');
        redirect(url('account'));
    }

    if ($action === 'contact') {
        $name = trim((string) ($_POST['name'] ?? ''));
        $email = trim((string) ($_POST['email'] ?? ''));
        $message = trim((string) ($_POST['message'] ?? ''));
        if (!empty($_POST['website'])) { redirect(url('contact')); }
        if (!$name || !filter_var($email, FILTER_VALIDATE_EMAIL) || !$message) {
            flash('Please complete all required enquiry fields.', 'error');
        } else {
            $enquiries = read_json('enquiries.json');
            $enquiries[] = [
                'id' => time(),
                'name' => $name,
                'email' => $email,
                'phone' => trim((string) ($_POST['phone'] ?? '')),
                'type' => trim((string) ($_POST['enquiry_type'] ?? 'General enquiry')),
                'product' => trim((string) ($_POST['product'] ?? '')),
                'preferred_contact' => trim((string) ($_POST['preferred_contact'] ?? 'Email')),
                'message' => $message,
                'status' => 'New',
                'created_at' => date('c'),
            ];
            write_json('enquiries.json', $enquiries);
            send_transactional_email(settings()['email'], 'New website enquiry from ' . $name, "Name: {$name}\nEmail: {$email}\nMessage: {$message}");
            flash('Thank you. Your enquiry has been submitted.');
        }
        redirect(url('contact'));
    }

    if ($action === 'checkout') {
        $items = cart_items();
        if (!$items) {
            flash('Your cart is empty.', 'error');
            redirect(url('cart'));
        }

        $required = ['name', 'email', 'phone', 'address', 'suburb', 'state', 'postcode', 'country'];
        foreach ($required as $field) {
            if (trim((string) ($_POST[$field] ?? '')) === '') {
                flash('Please complete all required checkout fields.', 'error');
                redirect(url('checkout'));
            }
        }
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            flash('Please enter a valid email address.', 'error');
            redirect(url('checkout'));
        }

        $settings = settings();
        $payment = (string) ($_POST['payment_method'] ?? 'cod');
        if (!in_array($payment, $settings['payment_methods'], true)) {
            flash('The selected payment method is unavailable.', 'error');
            redirect(url('checkout'));
        }
        if ($payment === 'stripe' && empty($settings['stripe_payment_link'])) {
            flash('Stripe is shown in demo mode. Add a Stripe Payment Link in Admin → Settings before using it.', 'error');
            redirect(url('checkout'));
        }
        if ($payment === 'paypal' && empty($settings['paypal_checkout_url'])) {
            flash('PayPal is shown in demo mode. Add a PayPal checkout URL in Admin → Settings before using it.', 'error');
            redirect(url('checkout'));
        }

        $subtotal = cart_subtotal();
        $discount = coupon_discount($subtotal);
        $deliveryMethod = (string) ($_POST['delivery_method'] ?? 'delivery');
        $delivery = delivery_cost($subtotal - $discount, $deliveryMethod);
        $total = max(0, $subtotal - $discount + $delivery);
        $orderNo = order_number();
        $status = in_array($payment, ['cod', 'bank'], true) ? 'Processing' : 'Awaiting Payment';

        $order = [
            'id' => time() . random_int(10, 99),
            'order_number' => $orderNo,
            'user_id' => current_user()['id'] ?? null,
            'customer' => [
                'name' => trim((string) $_POST['name']),
                'email' => trim((string) $_POST['email']),
                'phone' => trim((string) $_POST['phone']),
                'billing_address' => trim((string) $_POST['address']),
                'delivery_address' => trim((string) ($_POST['delivery_address'] ?: $_POST['address'])),
                'suburb' => trim((string) $_POST['suburb']),
                'state' => trim((string) $_POST['state']),
                'postcode' => trim((string) $_POST['postcode']),
                'country' => trim((string) $_POST['country']),
                'delivery_instructions' => trim((string) ($_POST['delivery_instructions'] ?? '')),
                'order_notes' => trim((string) ($_POST['order_notes'] ?? '')),
            ],
            'items' => array_map(fn ($item) => [
                'id' => $item['id'], 'sku' => $item['sku'], 'name' => $item['name'],
                'price' => product_price($item), 'quantity' => $item['quantity'], 'line_total' => $item['line_total'],
            ], $items),
            'subtotal' => $subtotal,
            'discount' => $discount,
            'coupon' => $_SESSION['coupon'] ?? null,
            'delivery_method' => $deliveryMethod,
            'delivery' => $delivery,
            'total' => $total,
            'payment_method' => $payment,
            'payment_status' => in_array($payment, ['cod', 'bank'], true) ? 'Pending' : 'Awaiting Gateway',
            'status' => $status,
            'created_at' => date('c'),
        ];
        $orders = read_json('orders.json');
        $orders[] = $order;
        write_json('orders.json', $orders);
        send_order_notifications($order);

        if (in_array($payment, ['cod', 'bank'], true)) {
            update_inventory($items);
        }

        $_SESSION['last_order'] = $orderNo;
        $_SESSION['cart'] = [];
        unset($_SESSION['coupon']);

        if ($payment === 'stripe') {
            redirect($settings['stripe_payment_link']);
        }
        if ($payment === 'paypal') {
            redirect($settings['paypal_checkout_url']);
        }
        redirect(url('order-confirmation', ['order' => $orderNo]));
    }
}

if ($page === 'home') {
    render_header();
    $allProducts = products();
    $featured = array_slice(array_values(array_filter($allProducts, fn ($p) => !empty($p['featured']))), 0, 8);
    $categoryCards = array_slice(array_filter(categories(), fn ($c) => $c !== 'All'), 0, 8);
    require __DIR__ . '/public/includes/hero.php';
    require __DIR__ . '/public/includes/categories.php';
    require __DIR__ . '/public/includes/featured-products.php';
    require __DIR__ . '/public/includes/why-choose-us.php';
    require __DIR__ . '/public/includes/our-story.php';
    require __DIR__ . '/public/includes/services-preview.php';
    require __DIR__ . '/public/includes/testimonials.php';
    require __DIR__ . '/public/includes/cta-band.php';
    render_footer();
    exit;
}

if ($page === 'shop') {
    $allProducts = products();
    $category = trim((string) ($_GET['category'] ?? ''));
    $search = trim((string) ($_GET['q'] ?? ''));
    $availability = trim((string) ($_GET['availability'] ?? ''));
    $sunlight = trim((string) ($_GET['sunlight'] ?? ''));
    $type = trim((string) ($_GET['type'] ?? ''));
    $sort = trim((string) ($_GET['sort'] ?? 'featured'));
    $minPrice = (float) ($_GET['min_price'] ?? 0);
    $maxPrice = (float) ($_GET['max_price'] ?? 1000);

    $filtered = array_values(array_filter($allProducts, function ($p) use ($category, $search, $availability, $sunlight, $type, $minPrice, $maxPrice) {
        $price = product_price($p);
        $categoryMatch = !$category || in_array($category, array_map('category_slug', $p['categories']), true);
        $haystack = strtolower(implode(' ', [$p['name'], $p['botanical_name'], implode(' ', $p['categories']), $p['short_description'], $p['sunlight'], $p['growth_rate']]));
        $searchMatch = !$search || str_contains($haystack, strtolower($search));
        $availabilityMatch = !$availability || ($availability === 'in-stock' ? $p['stock'] > 0 : $p['stock'] <= 0);
        $sunMatch = !$sunlight || str_contains(strtolower($p['sunlight']), strtolower($sunlight));
        $typeMatch = !$type || match ($type) {
            'evergreen' => str_contains(strtolower($p['foliage']), 'evergreen'),
            'deciduous' => str_contains(strtolower($p['foliage']), 'deciduous'),
            'coastal' => !empty($p['coastal']),
            'fruit' => str_contains(strtolower($p['fruit']), 'edible'),
            'commercial' => !empty($p['commercial']),
            default => true,
        };
        return $categoryMatch && $searchMatch && $availabilityMatch && $sunMatch && $typeMatch && $price >= $minPrice && $price <= $maxPrice;
    }));

    usort($filtered, function ($a, $b) use ($sort) {
        return match ($sort) {
            'newest' => strcmp($b['created_at'], $a['created_at']),
            'price-low' => product_price($a) <=> product_price($b),
            'price-high' => product_price($b) <=> product_price($a),
            'name' => strcmp($a['name'], $b['name']),
            'availability' => $b['stock'] <=> $a['stock'],
            default => ($b['featured'] <=> $a['featured']) ?: ($b['stock'] <=> $a['stock']),
        };
    });

    render_header('Shop');
    ?>
<section class="page-hero compact">
    <div class="container">
        <p class="eyebrow">Online nursery</p>
        <h1>Shop Trees, Plants and Accessories</h1>
        <p>Search, compare and order quality products for residential, commercial and landscape projects.</p>
    </div>
</section>
<section class="section shop-story">
    <div class="container split-grid">
        <div>
            <p class="eyebrow">Our Story</p>
            <h2>Selected for Better Outdoor Spaces</h2>
            <p>We are passionate about helping homeowners, landscapers and property professionals find quality trees for
                every type of outdoor space. Our carefully selected range includes screening trees, native trees, fruit
                trees, coastal varieties, feature trees and garden accessories.</p><a class="text-link"
                href="<?= e(url('about')) ?>">Read our full story →</a>
        </div><img src="public/images/shop-story.jpg" alt="Tree nursery product range">
    </div>
</section>
<section class="section section-tint">
    <div class="container shop-layout">
        <aside class="filters">
            <div class="filter-title">
                <h2>Filter Products</h2><a href="<?= e(url('shop')) ?>">Clear</a>
            </div>
            <form method="get"><input type="hidden" name="page" value="shop"><label>Search<input type="search" name="q"
                        value="<?= e($search) ?>" placeholder="Name or botanical name"></label><label>Category<select
                        name="category">
                        <option value="">All Categories</option>
                        <?php foreach (array_filter(categories(), fn ($c) => $c !== 'All') as $cat): ?><option
                            value="<?= e(category_slug($cat)) ?>"
                            <?= $category === category_slug($cat) ? 'selected' : '' ?>><?= e($cat) ?></option>
                        <?php endforeach; ?>
                    </select></label>
                <div class="two-cols"><label>Min Price<input type="number" name="min_price" min="0"
                            value="<?= e($minPrice) ?>"></label><label>Max Price<input type="number" name="max_price"
                            min="0" value="<?= e($maxPrice) ?>"></label></div><label>Availability<select
                        name="availability">
                        <option value="">Any</option>
                        <option value="in-stock" <?= $availability === 'in-stock' ? 'selected' : '' ?>>In Stock</option>
                        <option value="out-of-stock" <?= $availability === 'out-of-stock' ? 'selected' : '' ?>>Out of
                            Stock</option>
                    </select></label><label>Sunlight<select name="sunlight">
                        <option value="">Any</option>
                        <option value="full sun" <?= $sunlight === 'full sun' ? 'selected' : '' ?>>Full Sun</option>
                        <option value="partial shade" <?= $sunlight === 'partial shade' ? 'selected' : '' ?>>Partial
                            Shade</option>
                        <option value="indirect" <?= $sunlight === 'indirect' ? 'selected' : '' ?>>Indoor / Indirect
                        </option>
                    </select></label><label>Growing Type<select name="type">
                        <option value="">Any</option>
                        <?php foreach (['evergreen'=>'Evergreen','deciduous'=>'Deciduous','coastal'=>'Coastal Suitable','fruit'=>'Fruit Producing','commercial'=>'Commercial Suitable'] as $value=>$label): ?>
                        <option value="<?= e($value) ?>" <?= $type === $value ? 'selected' : '' ?>><?= e($label) ?>
                        </option><?php endforeach; ?>
                    </select></label><button class="btn btn-primary full">Apply Filters</button>
            </form>
        </aside>
        <div class="shop-results">
            <div class="results-toolbar">
                <p><strong><?= count($filtered) ?></strong> products found</p>
                <form method="get"><?php foreach ($_GET as $key => $value): if ($key !== 'sort'): ?><input type="hidden"
                        name="<?= e($key) ?>" value="<?= e($value) ?>"><?php endif; endforeach; ?><select name="sort"
                        onchange="this.form.submit()">
                        <option value="featured" <?= $sort === 'featured' ? 'selected' : '' ?>>Featured</option>
                        <option value="newest" <?= $sort === 'newest' ? 'selected' : '' ?>>Newest</option>
                        <option value="price-low" <?= $sort === 'price-low' ? 'selected' : '' ?>>Price: Low to High
                        </option>
                        <option value="price-high" <?= $sort === 'price-high' ? 'selected' : '' ?>>Price: High to Low
                        </option>
                        <option value="name" <?= $sort === 'name' ? 'selected' : '' ?>>Product Name</option>
                        <option value="availability" <?= $sort === 'availability' ? 'selected' : '' ?>>Availability
                        </option>
                    </select></form>
            </div><?php if ($filtered): ?><div class="product-grid compact-grid">
                <?= implode('', array_map('render_product_card', $filtered)) ?></div><?php else: ?><div
                class="empty-state">
                <h2>No matching products</h2>
                <p>Try changing your filters or browse the full product range.</p><a class="btn btn-primary"
                    href="<?= e(url('shop')) ?>">View All Products</a>
            </div><?php endif; ?>
        </div>
    </div>
</section>
<?php
    render_footer();
    exit;
}

if ($page === 'product') {
    $product = find_product((string) ($_GET['slug'] ?? ''));
    if (!$product) {
        http_response_code(404);
        render_header('Product Not Found');
        echo '<section class="section"><div class="container empty-state"><h1>Product not found</h1><a class="btn btn-primary" href="' . e(url('shop')) . '">Return to Shop</a></div></section>';
        render_footer();
        exit;
    }
    $related = array_slice(array_values(array_filter(products(), fn ($p) => $p['id'] !== $product['id'] && array_intersect($p['categories'], $product['categories']))), 0, 4);
    render_header($product['name']);
    $productSchema = json_encode([
        '@context' => 'https://schema.org', '@type' => 'Product', 'name' => $product['name'],
        'description' => $product['short_description'], 'sku' => $product['sku'], 'image' => $product['image'],
        'brand' => ['@type' => 'Brand', 'name' => settings()['business_name']],
        'offers' => ['@type' => 'Offer', 'priceCurrency' => 'AUD', 'price' => product_price($product),
            'availability' => $product['stock'] > 0 ? 'https://schema.org/InStock' : 'https://schema.org/OutOfStock'],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    echo '<script type="application/ld+json">' . $productSchema . '</script>';
    ?>
<section class="breadcrumbs">
    <div class="container"><a href="index.php">Home</a> / <a href="<?= e(url('shop')) ?>">Shop</a> /
        <span><?= e($product['name']) ?></span>
    </div>
</section>
<section class="section product-detail">
    <div class="container product-detail-grid">
        <div class="product-gallery">
            <div class="main-product-image"><img src="<?= e($product['image']) ?>" alt="<?= e($product['name']) ?>">
            </div>
            <div class="thumbnail-row"><button><img src="<?= e($product['image']) ?>"
                        alt="Front view"></button><button><img src="public/images/product-detail.jpg"
                        alt="Landscape example"></button><button><img src="public/images/planting-guide.jpg"
                        alt="Planting guide"></button></div>
        </div>
        <div class="product-summary">
            <p class="eyebrow"><?= e(implode(' · ', array_slice($product['categories'], 0, 2))) ?></p>
            <h1><?= e($product['name']) ?></h1>
            <p class="botanical large"><?= e($product['botanical_name']) ?></p>
            <div class="detail-price">
                <strong><?= money(product_price($product)) ?></strong><?php if ($product['sale_price'] !== null): ?><span
                    class="old-price"><?= money($product['price']) ?></span><?php endif; ?>
            </div>
            <p class="stock <?= $product['stock'] > 0 ? 'in' : 'out' ?>">
                <?= $product['stock'] > 0 ? e($product['stock'] . ' available') : 'Out of Stock' ?></p>
            <p><?= e($product['short_description']) ?></p>
            <div class="product-meta"><span><strong>SKU:</strong>
                    <?= e($product['sku']) ?></span><span><strong>Growth:</strong>
                    <?= e($product['growth_rate']) ?></span><span><strong>Sun:</strong>
                    <?= e($product['sunlight']) ?></span></div>
            <div class="purchase-row"><label>Quantity<input id="product-quantity" type="number" value="1" min="1"
                        max="<?= e($product['stock']) ?>"></label><button class="btn btn-primary btn-lg add-to-cart"
                    data-product-id="<?= e($product['id']) ?>" data-quantity-input="#product-quantity"
                    <?= $product['stock'] <= 0 ? 'disabled' : '' ?>>Add to Cart</button><button
                    class="btn btn-dark btn-lg buy-now" data-product-id="<?= e($product['id']) ?>"
                    <?= $product['stock'] <= 0 ? 'disabled' : '' ?>>Buy Now</button></div>
            <div class="button-row"><button class="btn btn-ghost wishlist-toggle"
                    data-product-id="<?= e($product['id']) ?>">♡ Add to Wishlist</button><a class="btn btn-call"
                    href="tel:<?= e(preg_replace('/\s+/', '', settings()['phone'])) ?>">Call About This Product</a>
            </div>
            <div class="share-row"><span>Share:</span><a href="#">Facebook</a><a href="#">Instagram</a><a
                    href="#">WhatsApp</a><a href="mailto:?subject=<?= rawurlencode($product['name']) ?>">Email</a></div>
        </div>
    </div>
</section>
<section class="section section-tint">
    <div class="container">
        <div class="tabs"><button class="active" data-tab="description">Description</button><button
                data-tab="specifications">Specifications</button><button data-tab="planting">Planting &
                Care</button><button data-tab="delivery">Delivery</button><button data-tab="reviews">Reviews</button>
        </div>
        <div class="tab-panel active" id="description">
            <h2>About <?= e($product['name']) ?></h2>
            <p><?= e($product['description']) ?></p>
            <p>Every product can be edited from the administration dashboard, including its description, categories,
                pricing, stock and growing specifications.</p>
        </div>
        <div class="tab-panel" id="specifications">
            <div class="spec-grid">
                <?php foreach ([['Mature Height',$product['mature_height']],['Mature Width',$product['mature_width']],['Growth Rate',$product['growth_rate']],['Sunlight',$product['sunlight']],['Soil',$product['soil']],['Water',$product['water']],['Foliage',$product['foliage']],['Flowering',$product['flowering']],['Fruit',$product['fruit']],['Climate',$product['climate']],['Coastal Suitable',$product['coastal']?'Yes':'No'],['Commercial Suitable',$product['commercial']?'Yes':'No']] as [$label,$value]): ?>
                <div><span><?= e($label) ?></span><strong><?= e($value) ?></strong></div><?php endforeach; ?>
            </div>
        </div>
        <div class="tab-panel" id="planting">
            <h2>Planting Instructions</h2>
            <p>Prepare a hole approximately twice the width of the root ball and no deeper than the container. Improve
                poor soil where appropriate, position the plant at its existing soil level, backfill carefully and water
                thoroughly.</p>
            <h3>Care Instructions</h3>
            <p>Water regularly during establishment, maintain mulch clear of the trunk and apply suitable fertiliser
                according to the plant type and season.</p>
        </div>
        <div class="tab-panel" id="delivery">
            <h2>Delivery Information</h2>
            <p>Delivery pricing is calculated from order value and selected delivery method. Large items, remote
                locations and special access requirements may require a customised quote.</p>
        </div>
        <div class="tab-panel" id="reviews">
            <h2>Customer Reviews</h2>
            <div class="review"><strong>★★★★★</strong>
                <p>Healthy specimen, accurate description and easy ordering.</p><small>Verified customer</small>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="section-heading">
            <div>
                <p class="eyebrow">You may also like</p>
                <h2>Related Products</h2>
            </div>
        </div>
        <div class="product-grid"><?= implode('', array_map('render_product_card', $related)) ?></div>
    </div>
</section>
<?php
    render_footer();
    exit;
}

if ($page === 'cart') {
    $items = cart_items();
    $subtotal = cart_subtotal();
    $discount = coupon_discount($subtotal);
    $delivery = delivery_cost($subtotal - $discount);
    render_header('Shopping Cart');
    ?>
<section class="page-hero compact">
    <div class="container">
        <p class="eyebrow">Your order</p>
        <h1>Shopping Cart</h1>
        <p>Review products, update quantities and continue to secure checkout.</p>
    </div>
</section>
<section class="section">
    <div class="container cart-layout"><?php if ($items): ?><form method="post" class="cart-list">
            <?= csrf_field() ?><input type="hidden" name="action"
                value="update_cart"><?php foreach ($items as $item): ?><div class="cart-item"><img
                    src="<?= e($item['image']) ?>" alt="<?= e($item['name']) ?>">
                <div class="cart-item-info"><a href="<?= e(url('product', ['slug' => $item['slug']])) ?>">
                        <h3><?= e($item['name']) ?></h3>
                    </a>
                    <p><?= e($item['botanical_name']) ?></p><span><?= money(product_price($item)) ?> each</span>
                </div><label>Quantity<input type="number" name="quantity[<?= e($item['id']) ?>]" min="0"
                        max="<?= e($item['stock']) ?>"
                        value="<?= e($item['quantity']) ?>"></label><strong><?= money($item['line_total']) ?></strong><button
                    type="button" class="remove-cart" data-product-id="<?= e($item['id']) ?>">Remove</button>
            </div><?php endforeach; ?><div class="cart-actions"><a class="btn btn-ghost"
                    href="<?= e(url('shop')) ?>">Continue Shopping</a><button class="btn btn-primary">Update
                    Cart</button></div>
        </form>
        <aside class="order-summary">
            <h2>Order Summary</h2>
            <div><span>Subtotal</span><strong><?= money($subtotal) ?></strong></div>
            <div><span>Discount</span><strong>-<?= money($discount) ?></strong></div>
            <div><span>Estimated delivery</span><strong><?= $delivery > 0 ? money($delivery) : 'Free' ?></strong></div>
            <div class="summary-total"><span>Estimated
                    total</span><strong><?= money($subtotal - $discount + $delivery) ?></strong></div>
            <form method="post" class="coupon-form"><?= csrf_field() ?><input type="hidden" name="action"
                    value="apply_coupon"><input name="coupon" placeholder="Discount code"
                    value="<?= e($_SESSION['coupon'] ?? '') ?>"><button class="btn btn-dark">Apply</button></form>
            <small>Try <strong>WELCOME10</strong> for the demo.</small><a class="btn btn-primary btn-lg full"
                href="<?= e(url('checkout')) ?>">Proceed to Checkout</a>
            <div class="secure-note">🔒 Secure checkout · Guest checkout available</div>
        </aside><?php else: ?><div class="empty-state wide">
            <h1>Your cart is empty</h1>
            <p>Explore trees, plants and accessories selected for Australian landscapes.</p><a class="btn btn-primary"
                href="<?= e(url('shop')) ?>">Start Shopping</a>
        </div><?php endif; ?>
    </div>
</section>
<?php
    render_footer();
    exit;
}

if ($page === 'checkout') {
    $items = cart_items();
    if (!$items) {
        redirect(url('cart'));
    }
    $user = current_user();
    $subtotal = cart_subtotal();
    $discount = coupon_discount($subtotal);
    $settings = settings();
    render_header('Checkout');
    ?>
<section class="page-hero compact">
    <div class="container">
        <p class="eyebrow">Secure order process</p>
        <h1>Checkout</h1>
        <p>Enter delivery details and select an enabled payment method.</p>
    </div>
</section>
<section class="section">
    <div class="container checkout-layout">
        <form method="post" class="checkout-form"><?= csrf_field() ?><input type="hidden" name="action"
                value="checkout">
            <section class="form-card">
                <h2>Contact Details</h2>
                <div class="form-grid"><label>Full Name *<input name="name" required
                            value="<?= e($user['name'] ?? '') ?>"></label><label>Email Address *<input type="email"
                            name="email" required value="<?= e($user['email'] ?? '') ?>"></label><label>Phone Number
                        *<input name="phone" required></label><label>Country *<input name="country" required
                            value="Australia"></label></div>
            </section>
            <section class="form-card">
                <h2>Billing and Delivery</h2>
                <div class="form-grid"><label class="span-2">Billing Address *<input name="address"
                            required></label><label class="span-2">Delivery Address <small>(leave blank if
                            same)</small><input name="delivery_address"></label><label>Suburb *<input name="suburb"
                            required></label><label>State *<select name="state" required>
                            <option value="">Choose state</option>
                            <?php foreach (['ACT','NSW','NT','QLD','SA','TAS','VIC','WA'] as $state): ?><option>
                                <?= e($state) ?></option><?php endforeach; ?>
                        </select></label><label>Postcode *<input name="postcode" pattern="[0-9]{4}"
                            required></label><label>Delivery Method<select name="delivery_method">
                            <option value="delivery">Local Delivery</option><?php if ($settings['pickup_enabled']): ?>
                            <option value="pickup">Nursery Pickup</option><?php endif; ?>
                        </select></label><label class="span-2">Delivery Instructions<textarea
                            name="delivery_instructions" rows="3"></textarea></label><label class="span-2">Order
                        Notes<textarea name="order_notes" rows="3"></textarea></label></div>
            </section>
            <section class="form-card">
                <h2>Payment Method</h2>
                <div class="payment-options">
                    <?php foreach ($settings['payment_methods'] as $method): $labels = ['cod'=>'Cash on Delivery','bank'=>'Direct Bank Transfer','stripe'=>'Credit / Debit Card via Stripe','paypal'=>'PayPal','apple-pay'=>'Apple Pay','google-pay'=>'Google Pay']; ?><label
                        class="payment-option"><input type="radio" name="payment_method" value="<?= e($method) ?>"
                            <?= $method === $settings['payment_methods'][0] ? 'checked' : '' ?>><span><strong><?= e($labels[$method] ?? ucfirst($method)) ?></strong><small><?= in_array($method, ['stripe','paypal'], true) ? 'Requires gateway URL in Admin settings.' : 'Available in this starter build.' ?></small></span></label><?php endforeach; ?>
                </div>
                <p class="secure-note">Full card information must be handled by the selected secure payment gateway and
                    is never stored by this website.</p>
            </section><button class="btn btn-primary btn-lg full">Place Order</button>
        </form>
        <aside class="order-summary sticky">
            <h2>Your Order</h2><?php foreach ($items as $item): ?><div class="mini-order-item"><img
                    src="<?= e($item['image']) ?>" alt=""><span><?= e($item['name']) ?> ×
                    <?= e($item['quantity']) ?></span><strong><?= money($item['line_total']) ?></strong></div>
            <?php endforeach; ?><div><span>Subtotal</span><strong><?= money($subtotal) ?></strong></div>
            <div><span>Discount</span><strong>-<?= money($discount) ?></strong></div>
            <div><span>Delivery</span><strong>Calculated by method</strong></div>
            <div class="summary-total"><span>Current total</span><strong><?= money($subtotal - $discount) ?></strong>
            </div>
            <p>Need checkout support?</p><a class="btn btn-call full"
                href="tel:<?= e(preg_replace('/\s+/', '', $settings['phone'])) ?>">Call <?= e($settings['phone']) ?></a>
        </aside>
    </div>
</section>
<?php
    render_footer();
    exit;
}

if ($page === 'order-confirmation') {
    $orderNo = (string) ($_GET['order'] ?? $_SESSION['last_order'] ?? '');
    $order = null;
    foreach (read_json('orders.json') as $candidate) {
        if ($candidate['order_number'] === $orderNo) {
            $order = $candidate;
            break;
        }
    }
    render_header('Order Confirmation');
    ?>
<section class="section confirmation">
    <div class="container">
        <div class="confirmation-card">
            <div class="success-icon">✓</div>
            <p class="eyebrow">Order received</p>
            <h1>Thank You for Your Order</h1><?php if ($order): ?><p>Your order number is
                <strong><?= e($order['order_number']) ?></strong>. A production website should send confirmation emails
                using your configured mail service.
            </p>
            <div class="confirmation-details">
                <div><span>Order Status</span><strong><?= e($order['status']) ?></strong></div>
                <div>
                    <span>Payment</span><strong><?= e(ucwords(str_replace('-', ' ', $order['payment_method']))) ?></strong>
                </div>
                <div><span>Total</span><strong><?= money($order['total']) ?></strong></div>
                <div><span>Delivery</span><strong><?= e(ucfirst($order['delivery_method'])) ?></strong></div>
            </div><?php else: ?><p>The order could not be loaded, but your reference is <?= e($orderNo) ?>.</p>
            <?php endif; ?><div class="button-row centered"><a class="btn btn-primary"
                    href="<?= e(url('shop')) ?>">Continue Shopping</a><a class="btn btn-ghost"
                    href="<?= e(url('account')) ?>">View Account</a></div>
        </div>
    </div>
</section>
<?php
    render_footer();
    exit;
}

if ($page === 'wishlist') {
    $wishProducts = array_values(array_filter(products(), fn ($p) => in_array((int) $p['id'], wishlist(), true)));
    render_header('Wishlist');
    echo '<section class="page-hero compact"><div class="container"><p class="eyebrow">Saved favourites</p><h1>Your Wishlist</h1><p>Keep favourite products together while planning your landscape.</p></div></section><section class="section"><div class="container">';
    echo $wishProducts ? '<div class="product-grid">' . implode('', array_map('render_product_card', $wishProducts)) . '</div>' : '<div class="empty-state"><h2>No saved products yet</h2><p>Select the heart icon on any product to save it here.</p><a class="btn btn-primary" href="' . e(url('shop')) . '">Browse Products</a></div>';
    echo '</div></section>';
    render_footer();
    exit;
}

if ($page === 'account') {
    $user = current_user();
    render_header('Customer Account');
    ?>
<section class="page-hero compact">
    <div class="container">
        <p class="eyebrow">Customer account</p>
        <h1><?= $user ? 'Welcome, ' . e($user['name']) : 'Login or Create an Account' ?></h1>
        <p>View orders, save favourites and manage account information.</p>
    </div>
</section>
<section class="section">
    <div class="container">
        <?php if ($user): $orders = array_reverse(array_values(array_filter(read_json('orders.json'), fn ($o) => (string) ($o['user_id'] ?? '') === (string) $user['id']))); ?>
        <div class="account-grid">
            <aside class="account-sidebar">
                <div class="avatar"><?= e(strtoupper(substr($user['name'],0,1))) ?></div>
                <h2><?= e($user['name']) ?></h2>
                <p><?= e($user['email']) ?></p><a href="<?= e(url('wishlist')) ?>">Saved Products</a><a
                    href="<?= e(url('delivery')) ?>">Delivery Information</a>
                <form method="post"><?= csrf_field() ?><input type="hidden" name="action" value="logout"><button
                        class="btn btn-ghost full">Log Out</button></form>
            </aside>
            <div>
                <div class="section-heading">
                    <div>
                        <p class="eyebrow">Purchase history</p>
                        <h2>Previous Orders</h2>
                    </div>
                </div><?php if ($orders): ?><div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Invoice</th>
                            </tr>
                        </thead>
                        <tbody><?php foreach ($orders as $order): ?><tr>
                                <td><?= e($order['order_number']) ?></td>
                                <td><?= e(date('d M Y', strtotime($order['created_at']))) ?></td>
                                <td><?= e($order['status']) ?></td>
                                <td><?= money($order['total']) ?></td>
                                <td><button onclick="window.print()">Download / Print</button></td>
                            </tr><?php endforeach; ?></tbody>
                    </table>
                </div><?php else: ?><div class="empty-state">
                    <h3>No orders yet</h3><a class="btn btn-primary" href="<?= e(url('shop')) ?>">Start Shopping</a>
                </div><?php endif; ?>
            </div>
        </div><?php else: ?><div class="auth-grid">
            <form method="post" class="form-card"><?= csrf_field() ?><input type="hidden" name="action" value="login">
                <p class="eyebrow">Existing customer</p>
                <h2>Log In</h2><label>Email Address<input type="email" name="email"
                        required></label><label>Password<input type="password" name="password" required></label><button
                    class="btn btn-primary full">Log In</button><a class="text-link" href="#"
                    onclick="alert('Connect this form to your preferred transactional email service for password resets.'); return false;">Forgot
                    your password?</a>
            </form>
            <form method="post" class="form-card"><?= csrf_field() ?><input type="hidden" name="action"
                    value="register">
                <p class="eyebrow">New customer</p>
                <h2>Create an Account</h2><label>Full Name<input name="name" required></label><label>Email Address<input
                        type="email" name="email" required></label><label>Password <small>(minimum 6
                        characters)</small><input type="password" name="password" minlength="6" required></label><button
                    class="btn btn-dark full">Create Account</button>
            </form>
        </div><?php endif; ?>
    </div>
</section>
<?php
    render_footer();
    exit;
}

if ($page === 'about') {
    render_header('About Us');
    ?>
<section class="page-hero">
    <div class="container">
        <p class="eyebrow">About our nursery</p>
        <h1>Helping Better Landscapes Grow</h1>
        <p>Quality products, dependable service and practical support for long-term landscape success.</p>
    </div>
</section>
<section class="section">
    <div class="container split-grid">
        <div class="story-image"><img src="public/images/about-nursery.jpg" alt="Tree nursery team and quality stock">
        </div>
        <div>
            <p class="eyebrow">Our company</p>
            <h2>Selected with Care, Supplied with Confidence</h2>
            <p>We provide a carefully selected range of trees, plants and garden products for residential, commercial
                and landscape projects. Our focus is on quality, dependable service and helping customers choose
                products that suit their property, environment and long-term goals.</p>
            <p>Our catalogue is structured to make comparing mature size, sunlight, water, foliage and suitability easy.
                This approach helps customers make informed choices before ordering.</p>
            <p>We value honest product information, responsive communication and nursery stock that is prepared for
                successful establishment.</p>
        </div>
    </div>
</section>
<section class="section section-tint">
    <div class="container">
        <div class="values-grid">
            <div><span>01</span>
                <h3>Quality</h3>
                <p>Carefully selected products with clear stock and specification information.</p>
            </div>
            <div><span>02</span>
                <h3>Dependability</h3>
                <p>Professional ordering, delivery guidance and customer communication.</p>
            </div>
            <div><span>03</span>
                <h3>Practical Advice</h3>
                <p>Helpful information designed around real landscape requirements.</p>
            </div>
            <div><span>04</span>
                <h3>Long-Term Value</h3>
                <p>Products chosen to contribute lasting structure, beauty and function.</p>
            </div>
        </div>
    </div>
</section>
<section class="cta-band">
    <div class="container cta-grid">
        <div>
            <h2>Ready to Find the Right Products?</h2>
            <p>Browse the range online or speak with the team about your project.</p>
        </div>
        <div class="button-row"><a class="btn btn-light" href="<?= e(url('shop')) ?>">Shop Now</a><a
                class="btn btn-outline-light" href="<?= e(url('contact')) ?>">Contact Us</a></div>
    </div>
</section>
<?php
    render_footer();
    exit;
}

if ($page === 'services' || $page === 'service') {
    $selectedName = (string) ($_GET['name'] ?? '');
    $selectedService = null;
    foreach (services() as $service) {
        if (category_slug($service[0]) === $selectedName) $selectedService = $service;
    }
    render_header($selectedService ? $selectedService[0] : 'Services');
    if ($selectedService): ?>
<section class="page-hero">
    <div class="container">
        <p class="eyebrow">Professional nursery service</p>
        <h1><?= e($selectedService[0]) ?></h1>
        <p><?= e($selectedService[1]) ?></p>
    </div>
</section>
<section class="section">
    <div class="container service-detail-grid">
        <div><img src="public/images/service-tree-supply.jpg" alt="<?= e($selectedService[0]) ?>"></div>
        <div>
            <p class="eyebrow">How we can help</p>
            <h2>Reliable Support from Selection to Establishment</h2>
            <p><?= e($selectedService[1]) ?></p>
            <p>Our process is designed to make product selection and ordering clearer. We help customers compare product
                size, growing conditions, intended use, availability and delivery considerations.</p>
            <ul class="check-list">
                <li>Residential and commercial product options</li>
                <li>Clear availability and specification information</li>
                <li>Flexible order and delivery planning</li>
                <li>Professional product enquiry support</li>
            </ul>
            <div class="button-row"><a class="btn btn-primary"
                    href="tel:<?= e(preg_replace('/\s+/', '', settings()['phone'])) ?>">Call About This Service</a><a
                    class="btn btn-ghost" href="<?= e(url('contact')) ?>">Send an Enquiry</a></div>
        </div>
    </div>
</section>
<?php else: ?>
<section class="page-hero">
    <div class="container">
        <p class="eyebrow">Nursery and landscape support</p>
        <h1>Services Designed Around Your Project</h1>
        <p>From selecting products to arranging delivery and establishment advice, our services make the process easier.
        </p>
    </div>
</section>
<section class="section">
    <div class="container service-page-grid"><?php foreach (services() as $index => $service): ?><article
            class="service-page-card"><img src="public/images/service-<?= ($index % 4) + 1 ?>.jpg"
                alt="<?= e($service[0]) ?>">
            <div>
                <p class="eyebrow">Service <?= str_pad((string)($index+1), 2, '0', STR_PAD_LEFT) ?></p>
                <h2><?= e($service[0]) ?></h2>
                <p><?= e($service[1]) ?></p>
                <div class="button-row"><a class="btn btn-primary"
                        href="<?= e(url('service', ['name' => category_slug($service[0])])) ?>">Learn More</a><a
                        class="btn btn-ghost"
                        href="tel:<?= e(preg_replace('/\s+/', '', settings()['phone'])) ?>">Call</a></div>
            </div>
        </article><?php endforeach; ?></div>
</section>
<?php endif;
    render_footer();
    exit;
}

if ($page === 'contact') {
    $settings = settings();
    render_header('Contact');
    ?>
<section class="page-hero">
    <div class="container">
        <p class="eyebrow">Contact the nursery</p>
        <h1>Speak with Our Team</h1>
        <p>Ask about products, availability, delivery, project supply or growing requirements.</p>
    </div>
</section>
<section class="section">
    <div class="container contact-layout">
        <div class="contact-details">
            <p class="eyebrow">Business information</p>
            <h2>We’re Here to Help</h2><a class="contact-card"
                href="tel:<?= e(preg_replace('/\s+/', '', $settings['phone'])) ?>"><span>☎</span>
                <div><small>Call Us</small><strong><?= e($settings['phone']) ?></strong></div>
            </a><a class="contact-card" href="mailto:<?= e($settings['email']) ?>"><span>✉</span>
                <div><small>Email</small><strong><?= e($settings['email']) ?></strong></div>
            </a>
            <div class="contact-card"><span>⌖</span>
                <div><small>Service Area</small><strong><?= e($settings['address']) ?></strong></div>
            </div>
            <div class="contact-card"><span>◷</span>
                <div><small>Opening Hours</small><strong><?= e($settings['hours']) ?></strong></div>
            </div>
            <div class="map-placeholder"><span>Google Map Embed</span><small>Add your Google Maps iframe or API key
                    here.</small></div>
        </div>
        <form method="post" class="form-card contact-form"><?= csrf_field() ?><input type="hidden" name="action"
                value="contact"><input class="honeypot" name="website" tabindex="-1" autocomplete="off">
            <p class="eyebrow">Online enquiry</p>
            <h2>Send a Message</h2>
            <div class="form-grid"><label>Full Name *<input name="name" required></label><label>Email *<input
                        type="email" name="email" required></label><label>Phone Number<input
                        name="phone"></label><label>Enquiry Type<select name="enquiry_type">
                        <option>General enquiry</option>
                        <option>Product enquiry</option>
                        <option>Delivery enquiry</option>
                        <option>Commercial supply</option>
                        <option>Order support</option>
                    </select></label><label class="span-2">Product of Interest<input
                        name="product"></label><label>Preferred Contact<select name="preferred_contact">
                        <option>Email</option>
                        <option>Phone</option>
                    </select></label><label class="span-2">Message *<textarea name="message" rows="6"
                        required></textarea></label></div><button class="btn btn-primary btn-lg">Submit Enquiry</button>
        </form>
    </div>
</section>
<section class="section section-tint">
    <div class="container">
        <div class="section-heading centered">
            <div>
                <p class="eyebrow">Common questions</p>
                <h2>Frequently Asked Questions</h2>
            </div>
        </div>
        <div class="faq-list">
            <?php foreach ([['Do you deliver trees?','Yes. Delivery can be configured by order value, product size, suburb, postcode or local zone.'],['Can I collect my order?','Pickup can be enabled by the administrator and selected during checkout.'],['How do I choose the right tree?','Use the shop filters and product specifications, or contact the team for selection assistance.'],['Can you supply commercial projects?','Yes. Commercial suitability is included in product data and larger orders can be discussed directly.']] as [$q,$a]): ?>
            <details>
                <summary><?= e($q) ?></summary>
                <p><?= e($a) ?></p>
            </details><?php endforeach; ?>
        </div>
    </div>
</section>
<?php
    render_footer();
    exit;
}

$policyPages = [
    'faq' => ['Frequently Asked Questions', 'Answers to common questions about products, ordering, delivery and customer accounts.'],
    'delivery' => ['Delivery Information', 'Delivery options can be calculated by order value, location, quantity, product size and local delivery rules.'],
    'returns' => ['Returns and Refund Policy', 'Contact the business promptly if an item arrives damaged, incorrect or materially different from its description. Live policies should be reviewed for Australian Consumer Law compliance.'],
    'privacy' => ['Privacy Policy', 'This starter collects information needed to process orders, respond to enquiries and manage customer accounts. Replace this content with a legally reviewed policy before launch.'],
    'terms' => ['Terms and Conditions', 'These sample terms outline website use, product availability, pricing, orders and delivery. Obtain legal review before publishing a production website.'],
];
if (isset($policyPages[$page])) {
    [$title, $intro] = $policyPages[$page];
    render_header($title);
    ?>
<section class="page-hero compact">
    <div class="container">
        <p class="eyebrow">Customer information</p>
        <h1><?= e($title) ?></h1>
        <p><?= e($intro) ?></p>
    </div>
</section>
<section class="section">
    <div class="container policy-content">
        <h2>Overview</h2>
        <p><?= e($intro) ?></p>
        <h2>Important Information</h2>
        <p>Information displayed on the website should be kept accurate by the administrator. Product availability may
            change, delivery estimates may depend on access and location, and growing results depend on climate,
            planting, soil and ongoing care.</p>
        <h2>Customer Support</h2>
        <p>For questions about this policy, contact <a
                href="mailto:<?= e(settings()['email']) ?>"><?= e(settings()['email']) ?></a> or call <a
                href="tel:<?= e(preg_replace('/\s+/', '', settings()['phone'])) ?>"><?= e(settings()['phone']) ?></a>.
        </p><?php if ($page === 'faq'): ?><div class="faq-list">
            <?php foreach ([['How can I search for a product?','Use the header search or shop filters to search by product name, botanical name, category, type, sunlight and other attributes.'],['What happens when stock reaches zero?','The add-to-cart button is disabled and the product is displayed as out of stock.'],['Can I order without an account?','Yes. Guest checkout is enabled.'],['Which payment methods are available?','Only methods enabled by the administrator appear at checkout.'],['How are refunds handled?','The administrator can update order and refund status. Connect your live gateway to process funds securely.']] as [$q,$a]): ?>
            <details>
                <summary><?= e($q) ?></summary>
                <p><?= e($a) ?></p>
            </details><?php endforeach; ?>
        </div><?php endif; ?>
    </div>
</section>
<?php
    render_footer();
    exit;
}

http_response_code(404);
render_header('Page Not Found');
echo '<section class="section"><div class="container empty-state"><h1>Page not found</h1><a class="btn btn-primary" href="index.php">Return Home</a></div></section>';
render_footer();