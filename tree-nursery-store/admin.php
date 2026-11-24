<?php

declare(strict_types=1);

require_once __DIR__ . '/lib.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verify_csrf();
    $action = $_POST['action'] ?? '';

    if ($action === 'admin_login') {
        $username = (string) ($_POST['username'] ?? '');
        $password = (string) ($_POST['password'] ?? '');
        if (DEFAULT_ADMIN_USER !== '' && DEFAULT_ADMIN_PASSWORD !== ''
            && hash_equals(DEFAULT_ADMIN_USER, $username)
            && hash_equals(DEFAULT_ADMIN_PASSWORD, $password)) {
            $_SESSION['admin_logged_in'] = true;
            flash('Admin login successful.');
            redirect('admin.php');
        }
        flash('Invalid administrator credentials.', 'error');
        redirect('admin.php');
    }

    if ($action === 'admin_logout') {
        unset($_SESSION['admin_logged_in']);
        flash('You have been logged out.');
        redirect('admin.php');
    }

    if (!admin_logged_in()) {
        redirect('admin.php');
    }

    if ($action === 'save_product') {
        $all = products();
        $id = (int) ($_POST['id'] ?? 0);
        $name = trim((string) ($_POST['name'] ?? ''));
        if (!$name) {
            flash('Product name is required.', 'error');
            redirect('admin.php?tab=products');
        }
        $record = [
            'id' => $id ?: ((int) max(array_column($all, 'id')) + 1),
            'sku' => trim((string) ($_POST['sku'] ?? '')) ?: 'TREE-' . time(),
            'slug' => category_slug($name),
            'name' => $name,
            'botanical_name' => trim((string) ($_POST['botanical_name'] ?? '')),
            'categories' => array_values(array_filter(array_map('trim', explode(',', (string) ($_POST['categories'] ?? ''))))),
            'price' => (float) ($_POST['price'] ?? 0),
            'sale_price' => trim((string) ($_POST['sale_price'] ?? '')) === '' ? null : (float) $_POST['sale_price'],
            'stock' => max(0, (int) ($_POST['stock'] ?? 0)),
            'image' => trim((string) ($_POST['image'] ?? '')) ?: 'public/images/product-detail.jpg',
            'short_description' => trim((string) ($_POST['short_description'] ?? '')),
            'description' => trim((string) ($_POST['description'] ?? '')),
            'mature_height' => trim((string) ($_POST['mature_height'] ?? '')),
            'mature_width' => trim((string) ($_POST['mature_width'] ?? '')),
            'sunlight' => trim((string) ($_POST['sunlight'] ?? '')),
            'soil' => trim((string) ($_POST['soil'] ?? '')),
            'water' => trim((string) ($_POST['water'] ?? '')),
            'growth_rate' => trim((string) ($_POST['growth_rate'] ?? '')),
            'foliage' => trim((string) ($_POST['foliage'] ?? '')),
            'flowering' => trim((string) ($_POST['flowering'] ?? '')),
            'fruit' => trim((string) ($_POST['fruit'] ?? '')),
            'climate' => trim((string) ($_POST['climate'] ?? '')),
            'coastal' => isset($_POST['coastal']),
            'residential' => isset($_POST['residential']),
            'commercial' => isset($_POST['commercial']),
            'flower_colour' => trim((string) ($_POST['flower_colour'] ?? '')),
            'badge' => trim((string) ($_POST['badge'] ?? 'Recommended')),
            'featured' => isset($_POST['featured']),
            'created_at' => date('c'),
        ];
        $updated = false;
        foreach ($all as &$product) {
            if ((int) $product['id'] === $id) {
                $record['created_at'] = $product['created_at'] ?? date('c');
                $product = $record;
                $updated = true;
                break;
            }
        }
        unset($product);
        if (!$updated) $all[] = $record;
        write_json('products.json', $all);
        flash($updated ? 'Product updated.' : 'Product added.');
        redirect('admin.php?tab=products');
    }

    if ($action === 'delete_product') {
        $id = (int) ($_POST['id'] ?? 0);
        $all = array_values(array_filter(products(), fn ($product) => (int) $product['id'] !== $id));
        write_json('products.json', $all);
        flash('Product deleted.');
        redirect('admin.php?tab=products');
    }

    if ($action === 'update_order') {
        $id = (string) ($_POST['id'] ?? '');
        $orders = read_json('orders.json');
        foreach ($orders as &$order) {
            if ((string) $order['id'] === $id) {
                $order['status'] = (string) ($_POST['status'] ?? $order['status']);
                $order['payment_status'] = (string) ($_POST['payment_status'] ?? $order['payment_status']);
                if ($order['status'] === 'Refunded') $order['refund_recorded_at'] = date('c');
            }
        }
        unset($order);
        write_json('orders.json', $orders);
        flash('Order status updated.');
        redirect('admin.php?tab=orders');
    }

    if ($action === 'update_enquiry') {
        $id = (string) ($_POST['id'] ?? '');
        $items = read_json('enquiries.json');
        foreach ($items as &$item) {
            if ((string) $item['id'] === $id) $item['status'] = (string) ($_POST['status'] ?? 'New');
        }
        unset($item);
        write_json('enquiries.json', $items);
        flash('Enquiry status updated.');
        redirect('admin.php?tab=enquiries');
    }

    if ($action === 'save_settings') {
        $current = settings();
        $current['business_name'] = trim((string) $_POST['business_name']);
        $current['phone'] = trim((string) $_POST['phone']);
        $current['email'] = trim((string) $_POST['email']);
        $current['address'] = trim((string) $_POST['address']);
        $current['hours'] = trim((string) $_POST['hours']);
        $current['flat_delivery'] = (float) $_POST['flat_delivery'];
        $current['free_delivery_minimum'] = (float) $_POST['free_delivery_minimum'];
        $current['pickup_enabled'] = isset($_POST['pickup_enabled']);
        $current['low_stock_threshold'] = (int) $_POST['low_stock_threshold'];
        $current['payment_methods'] = array_values((array) ($_POST['payment_methods'] ?? []));
        $current['stripe_payment_link'] = trim((string) ($_POST['stripe_payment_link'] ?? ''));
        $current['paypal_checkout_url'] = trim((string) ($_POST['paypal_checkout_url'] ?? ''));
        write_json('settings.json', $current);
        flash('Business, delivery and payment settings saved.');
        redirect('admin.php?tab=settings');
    }
}

if (!admin_logged_in()) {
    ?>
    <!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Admin Login</title><link rel="stylesheet" href="public/css/variables.css"><link rel="stylesheet" href="public/css/base.css"><link rel="stylesheet" href="public/css/header.css"><link rel="stylesheet" href="public/css/hero.css"><link rel="stylesheet" href="public/css/sections.css"><link rel="stylesheet" href="public/css/products.css"><link rel="stylesheet" href="public/css/shop-forms.css"><link rel="stylesheet" href="public/css/cart-account.css"><link rel="stylesheet" href="public/css/footer.css"><link rel="stylesheet" href="public/css/utilities.css"><link rel="stylesheet" href="public/css/admin.css"><link rel="stylesheet" href="public/css/responsive.css"></head><body class="admin-body"><main class="admin-login-wrap"><?= render_flashes() ?><form method="post" class="admin-login-card"><?= csrf_field() ?><input type="hidden" name="action" value="admin_login"><div class="brand-mark large">🌿</div><p class="eyebrow">Website administration</p><h1>Nursery Admin Login</h1><label>Username<input name="username" required></label><label>Password<input type="password" name="password" required></label><button class="btn btn-primary btn-lg full">Log In</button><p class="admin-warning"><?= DEFAULT_ADMIN_USER !== '' && DEFAULT_ADMIN_PASSWORD !== '' ? 'Use the administrator credentials configured in the PHP environment.' : 'Admin login is disabled until ADMIN_USERNAME and ADMIN_PASSWORD are set in the PHP environment.' ?></p><a class="text-link" href="index.php">← Return to storefront</a></form></main></body></html>
    <?php
    exit;
}

$tab = $_GET['tab'] ?? 'dashboard';
$editProduct = isset($_GET['edit']) ? find_product((int) $_GET['edit']) : null;
$allProducts = products();
$orders = array_reverse(read_json('orders.json'));
$enquiries = array_reverse(read_json('enquiries.json'));
$users = read_json('users.json');
$settings = settings();
$revenue = array_sum(array_map(fn ($o) => in_array($o['status'], ['Cancelled','Refunded'], true) ? 0 : (float) $o['total'], $orders));
$lowStock = array_values(array_filter($allProducts, fn ($p) => $p['stock'] <= $settings['low_stock_threshold']));
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Nursery Administration</title><link rel="stylesheet" href="public/css/variables.css"><link rel="stylesheet" href="public/css/base.css"><link rel="stylesheet" href="public/css/header.css"><link rel="stylesheet" href="public/css/hero.css"><link rel="stylesheet" href="public/css/sections.css"><link rel="stylesheet" href="public/css/products.css"><link rel="stylesheet" href="public/css/shop-forms.css"><link rel="stylesheet" href="public/css/cart-account.css"><link rel="stylesheet" href="public/css/footer.css"><link rel="stylesheet" href="public/css/utilities.css"><link rel="stylesheet" href="public/css/admin.css"><link rel="stylesheet" href="public/css/responsive.css"></head><body class="admin-body"><div class="admin-shell"><aside class="admin-sidebar"><a class="brand" href="admin.php"><span class="brand-mark">🌿</span><span><strong>Nursery Admin</strong><small>Management Dashboard</small></span></a><nav><a class="<?= $tab === 'dashboard' ? 'active' : '' ?>" href="admin.php">Dashboard</a><a class="<?= $tab === 'products' ? 'active' : '' ?>" href="admin.php?tab=products">Products</a><a class="<?= $tab === 'orders' ? 'active' : '' ?>" href="admin.php?tab=orders">Orders</a><a class="<?= $tab === 'customers' ? 'active' : '' ?>" href="admin.php?tab=customers">Customers</a><a class="<?= $tab === 'enquiries' ? 'active' : '' ?>" href="admin.php?tab=enquiries">Enquiries</a><a class="<?= $tab === 'settings' ? 'active' : '' ?>" href="admin.php?tab=settings">Settings</a></nav><a class="btn btn-ghost full" href="index.php">View Website</a><form method="post"><?= csrf_field() ?><input type="hidden" name="action" value="admin_logout"><button class="btn btn-dark full">Log Out</button></form></aside><main class="admin-main"><header class="admin-topbar"><div><p class="eyebrow">Content and commerce management</p><h1><?= e(ucfirst($tab)) ?></h1></div><span><?= e(date('l, d F Y')) ?></span></header><?= render_flashes() ?>
<?php if ($tab === 'dashboard'): ?>
    <section class="metric-grid"><div><span>Products</span><strong><?= count($allProducts) ?></strong><small><?= count($lowStock) ?> low stock</small></div><div><span>Orders</span><strong><?= count($orders) ?></strong><small><?= count(array_filter($orders, fn($o)=>$o['status']==='Processing')) ?> processing</small></div><div><span>Customers</span><strong><?= count($users) ?></strong><small>Registered accounts</small></div><div><span>Order Value</span><strong><?= money($revenue) ?></strong><small>Excludes refunded/cancelled</small></div></section><div class="admin-grid"><section class="admin-panel"><div class="panel-heading"><h2>Recent Orders</h2><a href="admin.php?tab=orders">View all</a></div><div class="table-wrap"><table><thead><tr><th>Order</th><th>Customer</th><th>Status</th><th>Total</th></tr></thead><tbody><?php foreach (array_slice($orders,0,6) as $order): ?><tr><td><?= e($order['order_number']) ?></td><td><?= e($order['customer']['name']) ?></td><td><?= e($order['status']) ?></td><td><?= money($order['total']) ?></td></tr><?php endforeach; ?></tbody></table></div></section><section class="admin-panel"><div class="panel-heading"><h2>Low Stock</h2><a href="admin.php?tab=products">Manage</a></div><?php foreach (array_slice($lowStock,0,7) as $product): ?><div class="stock-row"><img src="<?= e($product['image']) ?>" alt=""><span><strong><?= e($product['name']) ?></strong><small><?= e($product['sku']) ?></small></span><b><?= e($product['stock']) ?></b></div><?php endforeach; ?></section></div>
<?php elseif ($tab === 'products'): ?>
    <div class="admin-grid products-admin"><section class="admin-panel"><div class="panel-heading"><h2><?= $editProduct ? 'Edit Product' : 'Add Product' ?></h2><?php if($editProduct): ?><a href="admin.php?tab=products">Cancel edit</a><?php endif; ?></div><form method="post" class="admin-form"><?= csrf_field() ?><input type="hidden" name="action" value="save_product"><input type="hidden" name="id" value="<?= e($editProduct['id'] ?? '') ?>"><div class="form-grid"><label>Product Name *<input name="name" required value="<?= e($editProduct['name'] ?? '') ?>"></label><label>Botanical Name<input name="botanical_name" value="<?= e($editProduct['botanical_name'] ?? '') ?>"></label><label>SKU<input name="sku" value="<?= e($editProduct['sku'] ?? '') ?>"></label><label>Categories <small>(comma separated)</small><input name="categories" value="<?= e(isset($editProduct['categories']) ? implode(', ', $editProduct['categories']) : 'Screening Trees') ?>"></label><label>Price<input type="number" step="0.01" name="price" value="<?= e($editProduct['price'] ?? '0') ?>"></label><label>Sale Price<input type="number" step="0.01" name="sale_price" value="<?= e($editProduct['sale_price'] ?? '') ?>"></label><label>Stock Quantity<input type="number" min="0" name="stock" value="<?= e($editProduct['stock'] ?? '0') ?>"></label><label>Badge<input name="badge" value="<?= e($editProduct['badge'] ?? 'Recommended') ?>"></label><label class="span-2">Image Path<input name="image" value="<?= e($editProduct['image'] ?? 'public/images/product-detail.jpg') ?>"></label><label class="span-2">Short Description<textarea name="short_description"><?= e($editProduct['short_description'] ?? '') ?></textarea></label><label class="span-2">Full Description<textarea name="description" rows="4"><?= e($editProduct['description'] ?? '') ?></textarea></label><label>Mature Height<input name="mature_height" value="<?= e($editProduct['mature_height'] ?? '') ?>"></label><label>Mature Width<input name="mature_width" value="<?= e($editProduct['mature_width'] ?? '') ?>"></label><label>Sunlight<input name="sunlight" value="<?= e($editProduct['sunlight'] ?? '') ?>"></label><label>Soil<input name="soil" value="<?= e($editProduct['soil'] ?? '') ?>"></label><label>Water<input name="water" value="<?= e($editProduct['water'] ?? '') ?>"></label><label>Growth Rate<input name="growth_rate" value="<?= e($editProduct['growth_rate'] ?? '') ?>"></label><label>Foliage<input name="foliage" value="<?= e($editProduct['foliage'] ?? '') ?>"></label><label>Flowering<input name="flowering" value="<?= e($editProduct['flowering'] ?? '') ?>"></label><label>Fruit Information<input name="fruit" value="<?= e($editProduct['fruit'] ?? '') ?>"></label><label>Climate<input name="climate" value="<?= e($editProduct['climate'] ?? '') ?>"></label><label>Flower Colour<input name="flower_colour" value="<?= e($editProduct['flower_colour'] ?? '') ?>"></label><div class="checkbox-row span-2"><label><input type="checkbox" name="featured" <?= !empty($editProduct['featured']) ? 'checked' : '' ?>> Featured</label><label><input type="checkbox" name="coastal" <?= !empty($editProduct['coastal']) ? 'checked' : '' ?>> Coastal</label><label><input type="checkbox" name="residential" <?= !isset($editProduct['residential']) || !empty($editProduct['residential']) ? 'checked' : '' ?>> Residential</label><label><input type="checkbox" name="commercial" <?= !empty($editProduct['commercial']) ? 'checked' : '' ?>> Commercial</label></div></div><button class="btn btn-primary full"><?= $editProduct ? 'Update Product' : 'Add Product' ?></button></form></section><section class="admin-panel product-table-panel"><div class="panel-heading"><h2>Product Catalogue</h2><span><?= count($allProducts) ?> products</span></div><div class="table-wrap"><table><thead><tr><th>Product</th><th>Price</th><th>Stock</th><th>Actions</th></tr></thead><tbody><?php foreach ($allProducts as $product): ?><tr><td><div class="table-product"><img src="<?= e($product['image']) ?>" alt=""><span><strong><?= e($product['name']) ?></strong><small><?= e($product['sku']) ?></small></span></div></td><td><?= money(product_price($product)) ?></td><td><?= e($product['stock']) ?></td><td><a href="admin.php?tab=products&edit=<?= e($product['id']) ?>">Edit</a><form method="post" class="inline-form" onsubmit="return confirm('Delete this product?')"><?= csrf_field() ?><input type="hidden" name="action" value="delete_product"><input type="hidden" name="id" value="<?= e($product['id']) ?>"><button>Delete</button></form></td></tr><?php endforeach; ?></tbody></table></div></section></div>
<?php elseif ($tab === 'orders'): ?>
    <section class="admin-panel"><div class="panel-heading"><h2>Order Management</h2><span><?= count($orders) ?> orders</span></div><div class="table-wrap"><table><thead><tr><th>Order</th><th>Customer</th><th>Items</th><th>Payment</th><th>Total</th><th>Update</th></tr></thead><tbody><?php foreach ($orders as $order): ?><tr><td><strong><?= e($order['order_number']) ?></strong><small><?= e(date('d M Y H:i', strtotime($order['created_at']))) ?></small></td><td><?= e($order['customer']['name']) ?><small><?= e($order['customer']['email']) ?></small></td><td><?= count($order['items']) ?></td><td><?= e($order['payment_status']) ?><small><?= e($order['payment_method']) ?></small></td><td><?= money($order['total']) ?></td><td><form method="post" class="order-update-form"><?= csrf_field() ?><input type="hidden" name="action" value="update_order"><input type="hidden" name="id" value="<?= e($order['id']) ?>"><select name="status"><?php foreach (['Awaiting Payment','Processing','Packed','Out for Delivery','Completed','Cancelled','Refunded'] as $status): ?><option <?= $order['status']===$status?'selected':'' ?>><?= e($status) ?></option><?php endforeach; ?></select><select name="payment_status"><?php foreach (['Pending','Awaiting Gateway','Paid','Failed','Refunded'] as $status): ?><option <?= $order['payment_status']===$status?'selected':'' ?>><?= e($status) ?></option><?php endforeach; ?></select><button class="btn btn-primary">Save</button></form></td></tr><?php endforeach; ?></tbody></table></div></section>
<?php elseif ($tab === 'customers'): ?>
    <section class="admin-panel"><div class="panel-heading"><h2>Registered Customers</h2><span><?= count($users) ?> accounts</span></div><div class="table-wrap"><table><thead><tr><th>Name</th><th>Email</th><th>Created</th><th>Orders</th></tr></thead><tbody><?php foreach ($users as $user): ?><tr><td><?= e($user['name']) ?></td><td><?= e($user['email']) ?></td><td><?= e(date('d M Y',strtotime($user['created_at']))) ?></td><td><?= count(array_filter($orders,fn($o)=>(string)($o['user_id']??'')===(string)$user['id'])) ?></td></tr><?php endforeach; ?></tbody></table></div></section>
<?php elseif ($tab === 'enquiries'): ?>
    <section class="admin-panel"><div class="panel-heading"><h2>Customer Enquiries</h2><span><?= count($enquiries) ?> submissions</span></div><div class="enquiry-grid"><?php foreach ($enquiries as $item): ?><article class="enquiry-card"><div><span class="status-pill"><?= e($item['status']) ?></span><small><?= e(date('d M Y H:i',strtotime($item['created_at']))) ?></small></div><h3><?= e($item['name']) ?> — <?= e($item['type']) ?></h3><p><?= nl2br(e($item['message'])) ?></p><p><a href="mailto:<?= e($item['email']) ?>"><?= e($item['email']) ?></a> · <?= e($item['phone']) ?></p><form method="post"><?= csrf_field() ?><input type="hidden" name="action" value="update_enquiry"><input type="hidden" name="id" value="<?= e($item['id']) ?>"><select name="status"><option <?= $item['status']==='New'?'selected':'' ?>>New</option><option <?= $item['status']==='In Progress'?'selected':'' ?>>In Progress</option><option <?= $item['status']==='Resolved'?'selected':'' ?>>Resolved</option></select><button class="btn btn-primary">Update</button></form></article><?php endforeach; ?></div></section>
<?php elseif ($tab === 'settings'): ?>
    <section class="admin-panel settings-panel"><div class="panel-heading"><h2>Business, Delivery and Payment Settings</h2></div><form method="post" class="admin-form"><?= csrf_field() ?><input type="hidden" name="action" value="save_settings"><div class="form-grid"><label>Business Name<input name="business_name" value="<?= e($settings['business_name']) ?>"></label><label>Phone<input name="phone" value="<?= e($settings['phone']) ?>"></label><label>Email<input type="email" name="email" value="<?= e($settings['email']) ?>"></label><label>Opening Hours<input name="hours" value="<?= e($settings['hours']) ?>"></label><label class="span-2">Business Address / Service Area<input name="address" value="<?= e($settings['address']) ?>"></label><label>Flat Delivery Charge<input type="number" step="0.01" name="flat_delivery" value="<?= e($settings['flat_delivery']) ?>"></label><label>Free Delivery Minimum<input type="number" step="0.01" name="free_delivery_minimum" value="<?= e($settings['free_delivery_minimum']) ?>"></label><label>Low Stock Threshold<input type="number" name="low_stock_threshold" value="<?= e($settings['low_stock_threshold']) ?>"></label><label class="checkbox-label"><input type="checkbox" name="pickup_enabled" <?= $settings['pickup_enabled']?'checked':'' ?>> Enable pickup option</label><label class="span-2">Stripe Payment Link<input name="stripe_payment_link" value="<?= e($settings['stripe_payment_link']) ?>" placeholder="https://buy.stripe.com/..."></label><label class="span-2">PayPal Checkout URL<input name="paypal_checkout_url" value="<?= e($settings['paypal_checkout_url']) ?>" placeholder="https://www.paypal.com/checkoutnow?..."></label><fieldset class="span-2"><legend>Enabled Payment Methods</legend><div class="checkbox-row"><?php foreach (['cod'=>'Cash on Delivery','bank'=>'Bank Transfer','stripe'=>'Stripe','paypal'=>'PayPal','apple-pay'=>'Apple Pay','google-pay'=>'Google Pay'] as $value=>$label): ?><label><input type="checkbox" name="payment_methods[]" value="<?= e($value) ?>" <?= in_array($value,$settings['payment_methods'],true)?'checked':'' ?>> <?= e($label) ?></label><?php endforeach; ?></div></fieldset></div><button class="btn btn-primary">Save Settings</button><p class="admin-warning">Payment links are integration placeholders. Production payment confirmation, webhooks, refunds and tax handling require your selected gateway’s official server-side integration.</p></form></section>
<?php endif; ?>
</main></div></body></html>
