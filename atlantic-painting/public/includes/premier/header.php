<?php
require_once __DIR__ . '/icons.php';

$page_title = $page_title ?? 'Atlantic Painting | Interior, Exterior & Commercial Painting Sydney';

// Company details (from atlanticpainting.com.au)
$pp_company = [
    'name'      => 'Atlantic Painting',
    'phone'     => '0430 961 644',
    'phone_tel' => '0430961644',
    'email'     => 'atlanticpaintingau@gmail.com',
    'location'  => 'Bexley NSW 2207',
    'areas'     => 'Inner West, Eastern Suburbs, St George &amp; Sutherland Shire',
];

// Nav targets are home-page sections; inner pages link back to them.
$current_page = $current_page ?? 'home';
$pp_base      = $current_page === 'home' ? '' : 'index.php';

$pp_nav = [
    'home'         => 'Home',
    'services'     => 'Services',
    'why-us'       => 'Why Us',
    'our-work'     => 'Our Work',
    'testimonials' => 'Testimonials',
    'contact'      => 'Contact',
];
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

    <!-- Google Fonts: Lexend + Inter + Caveat -->
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@500;600;700;800&family=Inter:wght@400;500;600;700&family=Caveat:wght@600;700&display=swap"
        rel="stylesheet" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/premier.min.css" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/atlantic-favicon.png" />
</head>

<body class="pp-body">

    <!-- Site Header -->
    <header class="pp-header" id="pp-header">
        <div class="pp-container pp-header__inner">

            <!-- Logo -->
            <a href="<?= $pp_base ?: '#home' ?>" class="pp-logo" aria-label="Atlantic Painting Home">
                <img src="images/atlantic-logo.png" alt="Atlantic Painting Service" width="393" height="92" />
            </a>

            <!-- Navigation -->
            <nav class="pp-nav" id="pp-nav" aria-label="Main navigation">
                <?php foreach ($pp_nav as $id => $label): ?>
                <a href="<?= $pp_base ?>#<?= $id ?>"
                    class="pp-nav__link<?= $id === $current_page ? ' is-active' : '' ?>"><?= $label ?></a>
                <?php endforeach; ?>

                <div class="pp-nav__extra">
                    <a href="<?= $pp_base ?>#contact" class="pp-btn pp-btn--yellow">Get a Free Quote</a>
                    <a href="tel:<?= $pp_company['phone_tel'] ?>" class="pp-phone">
                        <?= pp_icon('phone', 'pp-phone__icon') ?>
                        <span class="pp-phone__text">
                            <strong><?= $pp_company['phone'] ?></strong>
                            <small>Call Us Today</small>
                        </span>
                    </a>
                </div>
            </nav>

            <!-- Actions -->
            <div class="pp-header__actions">
                <a href="<?= $pp_base ?>#contact" class="pp-btn pp-btn--yellow pp-header__quote">Get a Free Quote</a>
                <a href="tel:<?= $pp_company['phone_tel'] ?>" class="pp-phone pp-header__phone">
                    <?= pp_icon('phone', 'pp-phone__icon') ?>
                    <span class="pp-phone__text">
                        <strong><?= $pp_company['phone'] ?></strong>
                        <small>Call Us Today</small>
                    </span>
                </a>

                <!-- Hamburger -->
                <button class="pp-hamburger" id="pp-hamburger" type="button" aria-label="Toggle navigation"
                    aria-expanded="false" aria-controls="pp-nav">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>

        </div>
    </header>

    <main>