<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';

function e(mixed $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function image_path(string $basename): string
{
    return is_file(__DIR__ . '/public/images/' . $basename . '.jpg')
        ? 'public/images/' . $basename . '.jpg'
        : 'public/images/' . $basename . '.svg';
}

function ensure_data_files(): void
{
    if (!is_dir(DATA_DIR)) {
        mkdir(DATA_DIR, 0775, true);
    }

    $defaults = [
        'products.json' => [],
        'orders.json' => [],
        'users.json' => [],
        'enquiries.json' => [],
        'coupons.json' => [
            ['code' => 'WELCOME10', 'type' => 'percent', 'value' => 10, 'active' => true],
            ['code' => 'SAVE25', 'type' => 'fixed', 'value' => 25, 'active' => true],
        ],
        'email-log.json' => [],
        'settings.json' => [
            'business_name' => SITE_NAME,
            'phone' => SITE_PHONE,
            'email' => SITE_EMAIL,
            'address' => SITE_ADDRESS,
            'hours' => SITE_HOURS,
            'payment_methods' => ['cod', 'bank', 'stripe', 'paypal'],
            'flat_delivery' => 45,
            'free_delivery_minimum' => 500,
            'pickup_enabled' => true,
            'low_stock_threshold' => 4,
            'stripe_payment_link' => '',
            'paypal_checkout_url' => '',
        ],
    ];

    foreach ($defaults as $file => $data) {
        $path = DATA_DIR . '/' . $file;
        if (!file_exists($path)) {
            write_json($file, $data);
        }
    }

    $products = read_json('products.json');
    if (!$products) {
        seed_products();
    }
}

function read_json(string $file): array
{
    $path = DATA_DIR . '/' . basename($file);
    if (!file_exists($path)) {
        return [];
    }
    $contents = file_get_contents($path);
    if ($contents === false || trim($contents) === '') {
        return [];
    }
    $decoded = json_decode($contents, true);
    return is_array($decoded) ? $decoded : [];
}

function write_json(string $file, array $data): bool
{
    if (!is_dir(DATA_DIR)) {
        mkdir(DATA_DIR, 0775, true);
    }
    $path = DATA_DIR . '/' . basename($file);
    $tmp = $path . '.tmp';
    $payload = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    if ($payload === false) {
        return false;
    }
    $handle = fopen($tmp, 'c');
    if (!$handle) {
        return false;
    }
    flock($handle, LOCK_EX);
    ftruncate($handle, 0);
    fwrite($handle, $payload);
    fflush($handle);
    flock($handle, LOCK_UN);
    fclose($handle);
    return rename($tmp, $path);
}

function categories(): array
{
    return [
        'All', 'Screening Trees', 'Small Residential Trees', 'Citrus Trees', 'Fruit Trees',
        'Coastal Trees', 'Evergreen Trees', 'Native Trees', 'Deciduous Trees', 'Accessories',
        'Standards', 'Feature Trees', 'Indoor', 'Large Residential Trees',
    ];
}

function category_slug(string $category): string
{
    return strtolower(trim(preg_replace('/[^a-z0-9]+/i', '-', $category), '-'));
}

function seed_products(): void
{
    $catalogue = [
        'Screening Trees' => [
            ['Lilly Pilly Resilience', 'Syzygium australe', 79], ['Waterhousea Sweeper', 'Waterhousea floribunda', 95],
            ['Emerald Lustre', 'Viburnum odoratissimum', 69], ['Green Pillar', 'Pittosporum tenuifolium', 72],
            ['Murray Cypress', 'Cupressocyparis leylandii', 89],
        ],
        'Small Residential Trees' => [
            ['Crepe Myrtle Tuscarora', 'Lagerstroemia indica', 85], ['Japanese Maple', 'Acer palmatum', 110],
            ['Dwarf Magnolia Teddy Bear', 'Magnolia grandiflora', 99], ['Flowering Pear Capital', 'Pyrus calleryana', 92],
            ['Silver Princess', 'Eucalyptus caesia', 105],
        ],
        'Citrus Trees' => [
            ['Meyer Lemon', 'Citrus × meyeri', 58], ['Tahitian Lime', 'Citrus latifolia', 62],
            ['Valencia Orange', 'Citrus sinensis', 64], ['Imperial Mandarin', 'Citrus reticulata', 66],
            ['Ruby Red Grapefruit', 'Citrus paradisi', 68],
        ],
        'Fruit Trees' => [
            ['Hass Avocado', 'Persea americana', 78], ['Pink Lady Apple', 'Malus domestica', 72],
            ['Kensington Pride Mango', 'Mangifera indica', 84], ['Lapins Cherry', 'Prunus avium', 76],
            ['Black Genoa Fig', 'Ficus carica', 68],
        ],
        'Coastal Trees' => [
            ['Coastal Banksia', 'Banksia integrifolia', 82], ['Norfolk Island Pine', 'Araucaria heterophylla', 115],
            ['New Zealand Christmas Tree', 'Metrosideros excelsa', 96], ['Coast Tea Tree', 'Leptospermum laevigatum', 74],
            ['Boobialla', 'Myoporum insulare', 64],
        ],
        'Evergreen Trees' => [
            ['Little Gem Magnolia', 'Magnolia grandiflora', 98], ['Olive Manzanillo', 'Olea europaea', 88],
            ['Bay Laurel', 'Laurus nobilis', 74], ['Queensland Kauri', 'Agathis robusta', 122],
            ['Brush Box', 'Lophostemon confertus', 90],
        ],
        'Native Trees' => [
            ['Lemon Scented Gum', 'Corymbia citriodora', 86], ['Tuckeroo', 'Cupaniopsis anacardioides', 80],
            ['Blueberry Ash', 'Elaeocarpus reticulatus', 82], ['Red Flowering Gum', 'Corymbia ficifolia', 118],
            ['Weeping Lilly Pilly', 'Waterhousea floribunda', 94],
        ],
        'Deciduous Trees' => [
            ['October Glory Maple', 'Acer rubrum', 98], ['Chinese Pistachio', 'Pistacia chinensis', 92],
            ['Claret Ash', 'Fraxinus angustifolia', 96], ['Golden Elm', 'Ulmus glabra', 104],
            ['London Plane', 'Platanus × acerifolia', 112],
        ],
        'Accessories' => [
            ['Premium Tree Stake Kit', 'Garden accessory', 24], ['Organic Planting Compost 30L', 'Soil improver', 18],
            ['Slow Release Native Fertiliser', 'Plant nutrition', 22], ['Tree Guard Heavy Duty', 'Plant protection', 28],
            ['Watering Ring 50cm', 'Irrigation accessory', 19],
        ],
        'Standards' => [
            ['Standard Bay Tree', 'Laurus nobilis', 125], ['Standard Lilly Pilly', 'Syzygium australe', 135],
            ['Standard Olive Tree', 'Olea europaea', 145], ['Standard Gardenia', 'Gardenia augusta', 115],
            ['Standard Magnolia', 'Magnolia grandiflora', 155],
        ],
        'Feature Trees' => [
            ['Dragon Tree', 'Dracaena draco', 165], ['Blue Atlas Cedar', 'Cedrus atlantica', 185],
            ['Queensland Bottle Tree', 'Brachychiton rupestris', 210], ['Jacaranda', 'Jacaranda mimosifolia', 105],
            ['Weeping Japanese Maple', 'Acer palmatum dissectum', 170],
        ],
        'Indoor' => [
            ['Fiddle Leaf Fig', 'Ficus lyrata', 48], ['Kentia Palm', 'Howea forsteriana', 62],
            ['Rubber Plant Burgundy', 'Ficus elastica', 44], ['Bird of Paradise', 'Strelitzia nicolai', 52],
            ['Dwarf Umbrella Tree', 'Schefflera arboricola', 39],
        ],
        'Large Residential Trees' => [
            ['Moreton Bay Fig', 'Ficus macrophylla', 180], ['Spotted Gum', 'Corymbia maculata', 132],
            ['English Oak', 'Quercus robur', 145], ['Southern Magnolia', 'Magnolia grandiflora', 138],
            ['River Red Gum', 'Eucalyptus camaldulensis', 126],
        ],
    ];

    $products = [];
    $id = 1001;
    foreach ($catalogue as $category => $items) {
        foreach ($items as $index => $item) {
            [$name, $botanical, $price] = $item;
            $slug = category_slug($name);
            $evergreen = !in_array($category, ['Deciduous Trees'], true) && !str_contains(strtolower($name), 'maple') && !str_contains(strtolower($name), 'pear');
            $stock = (($id + $index) % 9) + 2;
            $badges = ['Recommended', 'Best Seller', 'New Arrival', 'Limited Stock'];
            $products[] = [
                'id' => $id,
                'sku' => 'TREE-' . $id,
                'slug' => $slug,
                'name' => $name,
                'botanical_name' => $botanical,
                'categories' => [$category, $evergreen ? 'Evergreen Trees' : 'Deciduous Trees'],
                'price' => $price,
                'sale_price' => ($id % 6 === 0) ? round($price * 0.9, 2) : null,
                'stock' => $stock,
                'image' => 'public/images/' . $slug . '.svg',
                'short_description' => "A carefully selected {$name} suited to Australian gardens and professionally supplied for dependable establishment.",
                'description' => "{$name} ({$botanical}) is a premium nursery specimen selected for form, vigour and landscape performance. It is suitable for homeowners, landscapers and commercial projects seeking a reliable, attractive planting solution.",
                'mature_height' => $category === 'Indoor' ? '1.5–3 m' : (($id % 4) + 3) . '–' . (($id % 4) + 7) . ' m',
                'mature_width' => (($id % 3) + 2) . '–' . (($id % 3) + 4) . ' m',
                'sunlight' => $category === 'Indoor' ? 'Bright indirect light' : (($id % 2) ? 'Full sun' : 'Full sun to partial shade'),
                'soil' => 'Well-drained, improved soil',
                'water' => ($id % 3 === 0) ? 'Moderate' : 'Regular while establishing',
                'growth_rate' => ($id % 2) ? 'Moderate' : 'Fast',
                'foliage' => $evergreen ? 'Evergreen foliage' : 'Seasonal deciduous foliage',
                'flowering' => ($id % 4 === 0) ? 'Seasonal flowers' : 'Variety dependent',
                'fruit' => in_array($category, ['Fruit Trees', 'Citrus Trees'], true) ? 'Edible fruit producing' : 'Not primarily grown for fruit',
                'climate' => 'Suitable for many temperate Australian conditions',
                'coastal' => $category === 'Coastal Trees' || $id % 7 === 0,
                'residential' => true,
                'commercial' => $id % 3 !== 0,
                'flower_colour' => ['White', 'Pink', 'Cream', 'Red'][$id % 4],
                'badge' => $badges[$id % count($badges)],
                'featured' => $id % 3 === 0,
                'created_at' => date('c', strtotime('-' . ($id % 120) . ' days')),
            ];
            $id++;
        }
    }
    write_json('products.json', $products);
}

function settings(): array
{
    return array_merge([
        'business_name' => SITE_NAME,
        'phone' => SITE_PHONE,
        'email' => SITE_EMAIL,
        'address' => SITE_ADDRESS,
        'hours' => SITE_HOURS,
        'payment_methods' => ['cod', 'bank'],
        'flat_delivery' => 45,
        'free_delivery_minimum' => 500,
        'pickup_enabled' => true,
        'low_stock_threshold' => 4,
        'stripe_payment_link' => '',
        'paypal_checkout_url' => '',
    ], read_json('settings.json'));
}

function products(): array
{
    return read_json('products.json');
}

function find_product(int|string $idOrSlug): ?array
{
    foreach (products() as $product) {
        if ((string) $product['id'] === (string) $idOrSlug || $product['slug'] === (string) $idOrSlug) {
            return $product;
        }
    }
    return null;
}

function product_price(array $product): float
{
    return isset($product['sale_price']) && $product['sale_price'] !== null
        ? (float) $product['sale_price']
        : (float) $product['price'];
}

function money(float|int|string $amount): string
{
    return STORE_CURRENCY_SYMBOL . number_format((float) $amount, 2);
}

function url(string $page = 'home', array $params = []): string
{
    $params = array_merge(['page' => $page], $params);
    return 'index.php?' . http_build_query($params);
}

function redirect(string $location): never
{
    header('Location: ' . $location);
    exit;
}

function csrf_token(): string
{
    if (empty($_SESSION['csrf'])) {
        $_SESSION['csrf'] = bin2hex(random_bytes(24));
    }
    return $_SESSION['csrf'];
}

function csrf_field(): string
{
    return '<input type="hidden" name="csrf" value="' . e(csrf_token()) . '">';
}

function verify_csrf(): void
{
    if (!isset($_POST['csrf']) || !hash_equals($_SESSION['csrf'] ?? '', (string) $_POST['csrf'])) {
        http_response_code(419);
        exit('Your session expired. Please go back and try again.');
    }
}

function flash(string $message, string $type = 'success'): void
{
    $_SESSION['flash'][] = ['message' => $message, 'type' => $type];
}

function render_flashes(): string
{
    $items = $_SESSION['flash'] ?? [];
    unset($_SESSION['flash']);
    $html = '';
    foreach ($items as $item) {
        $html .= '<div class="flash flash-' . e($item['type']) . '">' . e($item['message']) . '</div>';
    }
    return $html;
}

function cart(): array
{
    return $_SESSION['cart'] ?? [];
}

function cart_count(): int
{
    return array_sum(array_map('intval', cart()));
}

function cart_items(): array
{
    $items = [];
    foreach (cart() as $productId => $quantity) {
        $product = find_product((int) $productId);
        if ($product) {
            $quantity = max(1, min((int) $quantity, (int) $product['stock']));
            $product['quantity'] = $quantity;
            $product['line_total'] = product_price($product) * $quantity;
            $items[] = $product;
        }
    }
    return $items;
}

function cart_subtotal(): float
{
    return array_sum(array_column(cart_items(), 'line_total'));
}

function coupon_discount(float $subtotal): float
{
    $couponCode = $_SESSION['coupon'] ?? '';
    if (!$couponCode) {
        return 0;
    }
    foreach (read_json('coupons.json') as $coupon) {
        if ($coupon['active'] && strtoupper($coupon['code']) === strtoupper($couponCode)) {
            return $coupon['type'] === 'percent'
                ? round($subtotal * ((float) $coupon['value'] / 100), 2)
                : min($subtotal, (float) $coupon['value']);
        }
    }
    return 0;
}

function delivery_cost(float $subtotal, string $method = 'delivery'): float
{
    $settings = settings();
    if ($method === 'pickup') {
        return 0;
    }
    if ($subtotal >= (float) $settings['free_delivery_minimum']) {
        return 0;
    }
    return (float) $settings['flat_delivery'];
}

function wishlist(): array
{
    return array_values(array_unique(array_map('intval', $_SESSION['wishlist'] ?? [])));
}

function current_user(): ?array
{
    if (empty($_SESSION['user_id'])) {
        return null;
    }
    foreach (read_json('users.json') as $user) {
        if ((string) $user['id'] === (string) $_SESSION['user_id']) {
            return $user;
        }
    }
    return null;
}

function order_number(): string
{
    return 'TN-' . date('Ymd') . '-' . strtoupper(substr(bin2hex(random_bytes(4)), 0, 6));
}

function update_inventory(array $orderedItems): void
{
    $all = products();
    foreach ($all as &$product) {
        foreach ($orderedItems as $item) {
            if ((int) $item['id'] === (int) $product['id']) {
                $product['stock'] = max(0, (int) $product['stock'] - (int) $item['quantity']);
            }
        }
    }
    unset($product);
    write_json('products.json', $all);
}


function send_transactional_email(string $to, string $subject, string $body): bool
{
    $settings = settings();
    $log = read_json('email-log.json');
    $log[] = [
        'to' => $to,
        'subject' => $subject,
        'body' => $body,
        'created_at' => date('c'),
    ];
    write_json('email-log.json', $log);

    if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    $headers = [
        'From: ' . $settings['business_name'] . ' <' . $settings['email'] . '>',
        'Reply-To: ' . $settings['email'],
        'Content-Type: text/plain; charset=UTF-8',
    ];

    // PHP mail() works only when the hosting server has an outgoing mail transport.
    // For production, replace this with SMTP or a transactional email provider.
    return @mail($to, $subject, $body, implode("\r\n", $headers));
}

function send_order_notifications(array $order): void
{
    $settings = settings();
    $lines = [];
    foreach ($order['items'] as $item) {
        $lines[] = $item['name'] . ' × ' . $item['quantity'] . ' — ' . money($item['line_total']);
    }
    $customerBody = "Thank you for your order.\n\nOrder: {$order['order_number']}\nStatus: {$order['status']}\n\n" . implode("\n", $lines) . "\n\nTotal: " . money($order['total']) . "\n\nWe will contact you about delivery or pickup.";
    $businessBody = "A new order has been received.\n\nOrder: {$order['order_number']}\nCustomer: {$order['customer']['name']}\nEmail: {$order['customer']['email']}\nPhone: {$order['customer']['phone']}\n\n" . implode("\n", $lines) . "\n\nTotal: " . money($order['total']);
    send_transactional_email($order['customer']['email'], 'Order confirmation ' . $order['order_number'], $customerBody);
    send_transactional_email($settings['email'], 'New website order ' . $order['order_number'], $businessBody);
}

function services(): array
{
    return [
        ['Tree and Plant Supply', 'Quality nursery stock for gardens, developments and landscape projects.'],
        ['Residential Tree Supply', 'Suitable trees for screening, shade, fruit, feature planting and compact spaces.'],
        ['Commercial Tree Supply', 'Reliable product sourcing for builders, landscapers and property professionals.'],
        ['Tree Delivery', 'Flexible delivery options based on location, product size and order requirements.'],
        ['Product Selection Assistance', 'Practical guidance to help match trees with space, climate and design goals.'],
        ['Landscape and Garden Supply', 'Trees, plants and essential accessories supplied in one convenient order.'],
        ['Planting Advice', 'Clear planting guidance to support healthy establishment and long-term growth.'],
        ['Tree Establishment Guidance', 'Helpful watering, feeding and early-care recommendations after delivery.'],
    ];
}

function admin_logged_in(): bool
{
    return !empty($_SESSION['admin_logged_in']);
}

function render_product_card(array $product): string
{
    $price = money(product_price($product));
    $oldPrice = $product['sale_price'] !== null ? '<span class="old-price">' . money($product['price']) . '</span>' : '';
    $stock = (int) $product['stock'];
    $stockLabel = $stock > 0 ? ($stock <= 4 ? 'Limited Stock' : 'In Stock') : 'Out of Stock';
    $disabled = $stock <= 0 ? 'disabled' : '';
    $category = $product['categories'][0] ?? '';
    $wishActive = in_array((int) $product['id'], wishlist(), true) ? 'active' : '';

    return '<article class="product-card" data-category="' . e(category_slug($category)) . '">
        <div class="product-media">
            <a href="' . e(url('product', ['slug' => $product['slug']])) . '"><img loading="lazy" src="' . e($product['image']) . '" alt="' . e($product['name']) . '"></a>
            <span class="product-badge">' . e($stock === 0 ? 'Out of Stock' : $product['badge']) . '</span>
            <button class="wishlist-toggle ' . $wishActive . '" data-product-id="' . e($product['id']) . '" aria-label="Add to wishlist">♥</button>
        </div>
        <div class="product-body">
            <p class="eyebrow">' . e($category) . '</p>
            <h3><a href="' . e(url('product', ['slug' => $product['slug']])) . '">' . e($product['name']) . '</a></h3>
            <p class="botanical">' . e($product['botanical_name']) . '</p>
            <p class="product-copy">' . e($product['short_description']) . '</p>
            <div class="price-line"><strong>' . $price . '</strong>' . $oldPrice . '<span class="stock ' . ($stock > 0 ? 'in' : 'out') . '">' . e($stockLabel) . '</span></div>
            <div class="card-actions">
                <button class="btn btn-primary add-to-cart" data-product-id="' . e($product['id']) . '" ' . $disabled . '>Add to Cart</button>
                <a class="btn btn-ghost" href="' . e(url('product', ['slug' => $product['slug']])) . '">View Details</a>
            </div>
        </div>
    </article>';
}

function render_header(string $title = ''): void
{
    $settings = settings();
    $pageTitle = $title ? $title . ' | ' . $settings['business_name'] : $settings['business_name'];
    $wishlistCount = count(wishlist());
    $localBusinessSchema = json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'GardenStore',
        'name' => $settings['business_name'],
        'telephone' => $settings['phone'],
        'email' => $settings['email'],
        'address' => $settings['address'],
        'openingHours' => $settings['hours'],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    echo '<!doctype html><html lang="en"><head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="csrf-token" content="' . e(csrf_token()) . '">
        <title>' . e($pageTitle) . '</title>
        <meta name="description" content="Premium trees, plants and garden products for Australian residential and commercial landscapes.">
        <meta property="og:title" content="' . e($pageTitle) . '">
        <meta property="og:type" content="website">
        <link rel="canonical" href="' . e($_SERVER['REQUEST_URI'] ?? '') . '">
        <script type="application/ld+json">' . $localBusinessSchema . '</script>
        <link rel="stylesheet" href="public/css/variables.css">
        <link rel="stylesheet" href="public/css/base.css">
        <link rel="stylesheet" href="public/css/header.css">
        <link rel="stylesheet" href="public/css/hero.css">
        <link rel="stylesheet" href="public/css/sections.css">
        <link rel="stylesheet" href="public/css/products.css">
        <link rel="stylesheet" href="public/css/shop-forms.css">
        <link rel="stylesheet" href="public/css/cart-account.css">
        <link rel="stylesheet" href="public/css/footer.css">
        <link rel="stylesheet" href="public/css/utilities.css">
        <link rel="stylesheet" href="public/css/admin.css">
        <link rel="stylesheet" href="public/css/responsive.css">
        <script defer src="public/js/app.js"></script>
    </head><body>
    <div class="announcement">Quality nursery stock • Secure checkout • Helpful product advice</div>
    <header class="site-header">
        <div class="container header-row">
            <a class="brand" href="index.php"><span class="brand-mark">🌿</span><span><strong>' . e($settings['business_name']) . '</strong><small>Tree Nursery & Plant Supply</small></span></a>
            <button class="menu-toggle" aria-label="Open menu">☰</button>
            <nav class="main-nav">
                <a href="index.php">Home</a><a href="' . e(url('shop')) . '">Shop</a><a href="' . e(url('about')) . '">About Us</a><a href="' . e(url('services')) . '">Services</a><a href="' . e(url('contact')) . '">Contact</a>
            </nav>
            <div class="header-tools">
                <div class="search-wrap"><input id="site-search" type="search" placeholder="Search trees, botanical names…" autocomplete="off"><div id="search-suggestions" class="suggestions"></div></div>
                <a class="icon-link" href="' . e(url('account')) . '" title="Account">◉</a>
                <a class="icon-link" href="' . e(url('wishlist')) . '" title="Wishlist">♡<span id="wishlist-count">' . $wishlistCount . '</span></a>
                <a class="icon-link" href="' . e(url('cart')) . '" title="Cart">🛒<span id="cart-count">' . cart_count() . '</span></a>
                <a class="btn btn-call" href="tel:' . e(preg_replace('/\s+/', '', $settings['phone'])) . '">Call Us Now</a>
            </div>
        </div>
    </header>
    <main>' . render_flashes();
}

function render_footer(): void
{
    $settings = settings();
    echo '</main>
    <footer class="site-footer"><div class="container footer-grid">
        <div><a class="brand footer-brand" href="index.php"><span class="brand-mark">🌿</span><span><strong>' . e($settings['business_name']) . '</strong></span></a><p>Supplying quality trees, plants and garden products for residential and commercial landscapes. Browse our online range or contact our team for product assistance.</p><form class="newsletter" onsubmit="event.preventDefault(); this.reset(); alert(\'Thank you for subscribing.\');"><input type="email" required placeholder="Your email address"><button class="btn btn-primary">Subscribe</button></form></div>
        <div><h4>Shop Categories</h4><a href="' . e(url('shop', ['category' => 'screening-trees'])) . '">Screening Trees</a><a href="' . e(url('shop', ['category' => 'native-trees'])) . '">Native Trees</a><a href="' . e(url('shop', ['category' => 'fruit-trees'])) . '">Fruit Trees</a><a href="' . e(url('shop', ['category' => 'feature-trees'])) . '">Feature Trees</a><a href="' . e(url('shop', ['category' => 'accessories'])) . '">Accessories</a></div>
        <div><h4>Services</h4><a href="' . e(url('services')) . '">Tree and Plant Supply</a><a href="' . e(url('services')) . '">Residential Delivery</a><a href="' . e(url('services')) . '">Commercial Supply</a><a href="' . e(url('services')) . '">Selection Assistance</a><a href="' . e(url('services')) . '">Planting Advice</a></div>
        <div><h4>Contact</h4><a href="tel:' . e(preg_replace('/\s+/', '', $settings['phone'])) . '">' . e($settings['phone']) . '</a><a href="mailto:' . e($settings['email']) . '">' . e($settings['email']) . '</a><p>' . e($settings['address']) . '</p><p>' . e($settings['hours']) . '</p><div class="payment-icons">VISA · Mastercard · Stripe · PayPal</div></div>
    </div><div class="container footer-bottom"><span>© ' . date('Y') . ' ' . e($settings['business_name']) . '</span><div><a href="' . e(url('privacy')) . '">Privacy</a><a href="' . e(url('terms')) . '">Terms</a><a href="' . e(url('delivery')) . '">Delivery</a><a href="' . e(url('returns')) . '">Returns</a><a href="admin.php">Admin</a></div></div></footer>
    <nav class="mobile-dock"><a href="index.php">⌂<span>Home</span></a><a href="' . e(url('shop')) . '">▦<span>Shop</span></a><button data-focus-search>⌕<span>Search</span></button><a href="' . e(url('cart')) . '">🛒<span>Cart</span></a><a href="tel:' . e(preg_replace('/\s+/', '', $settings['phone'])) . '">☎<span>Call</span></a></nav>
    </body></html>';
}

ensure_data_files();
