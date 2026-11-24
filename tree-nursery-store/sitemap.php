<?php

declare(strict_types=1);
require_once __DIR__ . '/lib.php';
header('Content-Type: application/xml; charset=UTF-8');
$base = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? 'example.com');
$urls = [
    'index.php',
    'index.php?page=shop',
    'index.php?page=about',
    'index.php?page=services',
    'index.php?page=contact',
    'index.php?page=faq',
    'index.php?page=delivery',
    'index.php?page=returns',
    'index.php?page=privacy',
    'index.php?page=terms',
];
foreach (products() as $product) {
    $urls[] = 'index.php?page=product&amp;slug=' . rawurlencode($product['slug']);
}
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
foreach ($urls as $path) {
    echo '<url><loc>' . e($base . '/' . $path) . '</loc><changefreq>weekly</changefreq></url>';
}
echo '</urlset>';
