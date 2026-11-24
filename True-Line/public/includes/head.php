<?php
$page_title = $page_title ?? 'True-Line Installs  ';
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?= htmlspecialchars($page_desc ?? '') ?>" />
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="#141414" />
    <title><?= htmlspecialchars($page_title) ?></title>

    <!-- Open Graph / Twitter -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="True-Line Installs" />
    <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>" />
    <meta property="og:description" content="<?= htmlspecialchars($page_desc ?? '') ?>" />
    <meta property="og:image" content="images/18.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>" />
    <meta name="twitter:description" content="<?= htmlspecialchars($page_desc ?? '') ?>" />
    <meta name="twitter:image" content="images/18.jpg" />

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!-- Google Fonts: Oswald + Inter (+ Russo One for the logo) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700;900&family=Inter:wght@400;500;600&family=Russo+One&display=swap"
        rel="stylesheet" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/main.min.css" />

    <!-- Favicon placeholder -->
    <link rel="icon" type="image/svg+xml" href="images/favicon.svg" />

    <!-- Structured data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "True-Line Installs",
        "description": "Custom metal fabrication and installation — cladding, grilles, balustrades, wrought iron and structural steelwork — serving Melbourne, VIC.",
        "telephone": "+61478314984",
        "email": "info@trulineinstalls.com.au",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "6/43 Yazaki Way",
            "addressLocality": "Carrum Downs",
            "addressRegion": "VIC",
            "postalCode": "3201",
            "addressCountry": "AU"
        },
        "areaServed": "Melbourne, VIC",
        "openingHours": "Mo-Fr 07:00-16:30"
    }
    </script>
</head>

<body>