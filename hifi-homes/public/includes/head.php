<?php
if (!defined('SITE_URL')) {
    define('SITE_URL', 'https://hifihomes.com.au');
}

$page_title   = $page_title   ?? 'Hifi Homes';
$page_path    = $page_path    ?? '';
$page_robots  = $page_robots  ?? 'index, follow';

$canonical_url = SITE_URL . '/' . ltrim($page_path, '/');
$og_image_url  = SITE_URL . '/images/banner.jpg';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="<?= htmlspecialchars($page_robots) ?>" />
    <meta name="theme-color" content="#1f1e1e" />
    <title><?= htmlspecialchars($page_title) ?></title>
    <link rel="canonical" href="<?= htmlspecialchars($canonical_url) ?>" />

    <!-- Open Graph / Twitter -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Hifi Homes" />
    <meta property="og:url" content="<?= htmlspecialchars($canonical_url) ?>" />
    <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>" />
    <meta property="og:image" content="<?= htmlspecialchars($og_image_url) ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>" />
    <meta name="twitter:image" content="<?= htmlspecialchars($og_image_url) ?>" />

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!-- Google Fonts: Oswald + Inter -->
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700;900&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/main.css" />

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="images/favicon.svg" />

    <!-- Structured data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HomeGoodsStore",
        "name": "Hifi Homes",
        "description": "Bathroom, kitchen and laundry fixtures - vanities, basins, tapware, showers, mirrors and accessories - supplied to builders, renovators and homeowners across Melbourne, VIC.",
        "telephone": "+61485700141",
        "email": "info@hifihomes.com.au",
        "taxID": "30 647 287 581",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Clyde North",
            "addressRegion": "VIC",
            "postalCode": "3978",
            "addressCountry": "AU"
        },
        "areaServed": "Melbourne, VIC",
        "openingHours": "Mo-Sa 08:30-16:30"
    }
    </script>
</head>

<body>