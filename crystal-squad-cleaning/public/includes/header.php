<?php
// Business details — change them here only, every page echoes these variables
$company      = 'Old School Cleaning & Maintenance Services';
$phone        = '0410 800 873';
$email        = '';
$address      = 'Sydney, NSW, Australia';
$service_area = 'Sydney, Bankstown and surrounding areas';
$abn          = '71 797 007 177';
$work_hrs     = '24 Hours';
$work_day     = '7 Days a Week';
$exp          = '15+';
$website      = 'https://oldschoolcleaningservices.com.au';
// Placeholder Google search link — replace with the business's real Google reviews link when supplied
$google_reviews = 'https://www.google.com/search?q=' . urlencode($company . ' Sydney reviews');

require_once __DIR__ . '/icons.php';

// Safe output helper for text and attributes
function e($text)
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

$current_page = $current_page ?? '';
$page_title   = isset($page_title) ? $page_title . ' | ' . $company : $company . ' | Cleaning Services Sydney & Bankstown';
$page_desc    = $page_desc ?? 'Residential and commercial cleaning in ' . $service_area . '. ' . $exp . ' years experience, fully insured, available 24 hours, 7 days a week. Call ' . $phone . '.';

// Canonical URL: home is the site root, other pages use their file name without .php
$page_file    = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php', '.php');
$canonical    = $website . '/' . ($page_file === 'index' ? '' : $page_file);
$phone_intl   = '+61' . substr(str_replace(' ', '', $phone), 1);

// Structured data so search engines understand the business
$schema = [
    '@context'     => 'https://schema.org',
    '@type'        => 'LocalBusiness',
    'name'         => $company,
    'url'          => $website,
    'telephone'    => $phone_intl,
    'image'        => $website . '/images/1.jpg',
    'description'  => $page_desc,
    'address'      => ['@type' => 'PostalAddress', 'addressLocality' => 'Sydney', 'addressRegion' => 'NSW', 'addressCountry' => 'AU'],
    'areaServed'   => ['Sydney', 'Bankstown'],
    'openingHoursSpecification' => [
        '@type'     => 'OpeningHoursSpecification',
        'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
        'opens'     => '00:00',
        'closes'    => '23:59',
    ],
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name'  => 'Cleaning Services',
        'itemListElement' => array_map(function ($service) {
            return ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => $service['title']]];
        }, $services),
    ],
];
?>
<!DOCTYPE html>
<html lang="en-AU">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= e($page_title) ?></title>
    <meta name="description" content="<?= e($page_desc) ?>" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?= e($canonical) ?>" />

    <!-- Social sharing -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= e($company) ?>" />
    <meta property="og:title" content="<?= e($page_title) ?>" />
    <meta property="og:description" content="<?= e($page_desc) ?>" />
    <meta property="og:url" content="<?= e($canonical) ?>" />
    <meta property="og:image" content="<?= e($website) ?>/images/1.jpg" />
    <meta property="og:locale" content="en_AU" />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- Security -->
    <meta name="referrer" content="strict-origin-when-cross-origin" />

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!-- Google Fonts: Oswald + Inter + Playfair Display -->
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700;900&family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap"
        rel="stylesheet" />

    <!-- Font Awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/main.min.css" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/logo.png" />

    <!-- Business details for search engines -->
    <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?></script>
</head>

<body>

    <!-- Scroll Progress -->
    <div class="scroll-progress" aria-hidden="true">
        <div class="scroll-progress__bar" id="scroll-progress-bar"></div>
    </div>

    <!-- Top Bar -->
    <div class="topbar">
        <div class="topbar__inner">
            <div class="topbar__group">
                <span class="topbar__item"><?= icon('map') ?>Servicing <?= e($service_area) ?></span>
                <span class="topbar__item topbar__item--hide-sm"><?= icon('clock') ?>Open <?= e($work_hrs) ?>, <?= e($work_day) ?></span>
            </div>
            <div class="topbar__group">
                <span class="topbar__item topbar__item--hide-sm"><?= icon('shield') ?>Fully Insured</span>
                <a href="tel:<?= str_replace(' ', '', $phone) ?>" class="topbar__item"><?= icon('phone') ?><?= e($phone) ?></a>
                <?php if ($email): ?>
                <a href="mailto:<?= e($email) ?>" class="topbar__item topbar__item--hide-sm"><?= icon('mail') ?><?= e($email) ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Site Header -->
    <header class="site-header" id="site-header">
        <div class="header-inner">

            <!-- Logo -->
            <a href="index.php" class="logo" aria-label="<?= e($company) ?> home">
                <img src="images/logo.png" alt="<?= e($company) ?> logo" class="logo__img" width="120" height="80" />
            </a>

            <!-- Navigation -->
            <nav class="nav" id="main-nav" aria-label="Main navigation">
                <a href="index.php" class="nav__link <?= $current_page === 'home' ? 'active' : '' ?>">Home</a>
                <!-- Services dropdown -->
                <div class="nav__dropdown" id="nav-dropdown">
                    <div class="nav__dropdown-head">
                        <a href="services.php"
                            class="nav__link <?= $current_page === 'services' || find_service($services, $current_page) ? 'active' : '' ?>">Services</a>
                        <button type="button" class="nav__dropdown-toggle" id="nav-dropdown-toggle"
                            aria-label="Show services" aria-expanded="false"><?= icon('chevron') ?></button>
                    </div>
                    <div class="nav__menu">
                        <?php foreach ($services as $item): ?>
                        <a href="<?= $item['slug'] ?>.php"
                            class="nav__menu-link <?= $current_page === $item['slug'] ? 'active' : '' ?>">
                            <span class="nav__menu-icon"><?= icon($item['icon']) ?></span><?= e($item['title']) ?>
                        </a>
                        <?php endforeach; ?>
                        <a href="services.php" class="nav__menu-all">View all services <?= icon('arrow') ?></a>
                    </div>
                </div>
                <a href="about.php" class="nav__link <?= $current_page === 'about' ? 'active' : '' ?>">About</a>
                <a href="gallery.php" class="nav__link <?= $current_page === 'gallery' ? 'active' : '' ?>">Gallery</a>
                <a href="blog.php" class="nav__link <?= $current_page === 'blog' ? 'active' : '' ?>">Blog</a>
                <a href="contact.php" class="nav__link <?= $current_page === 'contact' ? 'active' : '' ?>">Contact</a>
                <a href="quote.php" class="nav__cta"><?= icon('send') ?>Get a quote</a>

                <!-- Contact details, shown inside the mobile menu only -->
                <div class="nav__contact">
                    <a href="tel:<?= str_replace(' ', '', $phone) ?>"><?= icon('phone') ?><?= e($phone) ?></a>
                    <?php if ($email): ?>
                    <a href="mailto:<?= e($email) ?>"><?= icon('mail') ?><?= e($email) ?></a>
                    <?php endif; ?>
                    <span><?= icon('clock') ?><?= e($work_hrs) ?>, <?= e($work_day) ?></span>
                    <span><?= icon('pin') ?><?= e($address) ?></span>
                </div>
            </nav>

            <div class="nav-backdrop" id="nav-backdrop"></div>

            <!-- Tablet / mobile actions -->
            <div class="header-actions">
                <a href="tel:<?= str_replace(' ', '', $phone) ?>" class="header-call" aria-label="Call <?= e($phone) ?>">
                    <?= icon('phone') ?><span class="header-call__text"><?= e($phone) ?></span>
                </a>

                <!-- Hamburger -->
                <button class="hamburger" id="hamburger" aria-label="Toggle navigation" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>

        </div>
    </header>
