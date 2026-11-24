<?php
require_once __DIR__ . '/services-contain.php';
$current_page = $current_page ?? '';
$page_title   = $page_title ?? $business_name;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($page_title) ?></title>

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!-- Google Fonts: Oswald + Inter + Playfair Display -->
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700;900&family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap"
        rel="stylesheet" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/main.min.css" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png" />
</head>

<body>

    <!-- Scroll Progress -->
    <div class="scroll-progress" aria-hidden="true">
        <div class="scroll-progress__bar" id="scroll-progress-bar"></div>
    </div>

    <!-- Top Contact Bar -->
    <div class="top-bar">
        <div class="top-bar__inner">
            <div class="top-bar__left">
                <a href="tel:<?= $phone_link ?>" class="top-bar__item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.36 11.36 0 003.57.57 1 1 0 011 1V20a1 1 0 01-1 1C10.61 21 3 13.39 3 4a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.57 1 1 0 01-.25 1.01l-2.2 2.21z" />
                    </svg>
                    <?= $phone ?>
                </a>
                <a href="mailto:<?= $email ?>" class="top-bar__item top-bar__item--email">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 4l-8 5-8-5V6l8 5 8-5z" />
                    </svg>
                    <?= $email ?>
                </a>
            </div>
            <div class="top-bar__right">
                <span class="top-bar__item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12 2a8 8 0 00-8 8c0 5.4 8 12 8 12s8-6.6 8-12a8 8 0 00-8-8zm0 11a3 3 0 110-6 3 3 0 010 6z" />
                    </svg>
                    <?= $address ?> &middot; Servicing within <?= $radius ?>
                </span>
                <?php if ($hours): ?>
                <span class="top-bar__item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm.5 5v5.25l4.5 2.67-.75 1.23L11 13V7h1.5z" />
                    </svg>
                    <?= $hours ?>
                </span>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Site Header -->
    <header class="site-header" id="site-header">
        <div class="header-inner">

            <!-- Logo -->
            <a href="index.php" class="logo" aria-label="<?= $business_name ?> Home">
                <img src="images/logo.png" alt="<?= $business_name ?>" class="logo__image">
            </a>

            <!-- Navigation -->
            <nav class="nav" id="main-nav" role="navigation" aria-label="Main navigation">
                <a href="index.php" class="nav__link <?= $current_page === 'home' ? 'active' : '' ?>">Home</a>

                <a href="about.php" class="nav__link <?= $current_page === 'about' ? 'active' : '' ?>">About</a>

                <div class="nav__item nav__item--dropdown">
                    <a href="services.php"
                        class="nav__link <?= $current_page === 'services' ? 'active' : '' ?>">Services</a>
                    <button type="button" class="nav__dropdown-toggle" aria-label="Toggle services menu"
                        aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="nav__chevron">
                            <path d="M7 10l5 5 5-5z" />
                        </svg>
                    </button>

                    <div class="nav__dropdown">
                        <?php foreach ($services as $slug => $svc): ?>
                        <a href="<?= $slug ?>.php" class="nav__dropdown-link"><?= htmlspecialchars($svc['title']) ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <a href="gallery.php" class="nav__link <?= $current_page === 'gallery' ? 'active' : '' ?>">Gallery</a>
                <a href="reviews.php" class="nav__link <?= $current_page === 'reviews' ? 'active' : '' ?>">Reviews</a>
                <a href="contact.php" class="nav__link <?= $current_page === 'contact' ? 'active' : '' ?>">Contact</a>
                <a href="quote.php" class="nav__cta">Get a quote</a>
            </nav>

            <div class="nav-backdrop" id="nav-backdrop"></div>

            <!-- Hamburger -->
            <button class="hamburger" id="hamburger" aria-label="Toggle navigation" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>
    </header>
