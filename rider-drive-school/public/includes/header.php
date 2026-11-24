<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($page_title ?? $company); ?></title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link rel="apple-touch-icon" href="images/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow:wght@300;400;500;600;700&family=Barlow+Condensed:wght@400;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>

    <header id="header">
        <div class="container">
            <nav class="nav-inner">

                <a href="index.php" class="logo">
                    <img src="images/logo.png" alt="INFI8 Construction" class="logo-img" />
                </a>

                <ul class="nav-links">
                    <li><a href="index.php" <?= ($current_page ?? '') === 'home' ? 'class="active"' : ''; ?>>Home</a>
                    </li>
                    <li><a href="about-us.php"
                            <?= ($current_page ?? '') === 'about' ? 'class="active"' : ''; ?>>About</a></li>
                    <li class="has-dropdown">
                        <a href="services.php">Services</a>
                        <ul class="dropdown-menu">
                            <?php foreach ($general_services as [$label, $slug]): ?>
                            <li><a href="services.html#<?= $slug; ?>"><?= $label; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="has-dropdown dropdown-cooling">
                        <a href="cooling.php"
                            <?= ($current_page ?? '') === 'cooling' ? 'class="active"' : ''; ?>>Cooling</a>
                        <ul class="dropdown-menu">
                            <?php foreach ($cooling_services as [$label, $slug]): ?>
                            <li><a href="cooling.html#<?= $slug; ?>"><?= $label; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="has-dropdown dropdown-heating">
                        <a href="heating.php"
                            <?= ($current_page ?? '') === 'heating' ? 'class="active"' : ''; ?>>Heating</a>
                        <ul class="dropdown-menu">
                            <?php foreach ($heating_services as [$label, $slug]): ?>
                            <li><a href="heating.html#<?= $slug; ?>"><?= $label; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li><a href="gallery.php"
                            <?= ($current_page ?? '') === 'gallery' ? 'class="active"' : ''; ?>>Gallery</a></li>
                    <!-- <li><a href="faq.php" <?= ($current_page ?? '') === 'faq' ? 'class="active"' : ''; ?>>FAQ</a>
                    </li> -->
                    <li><a href="contact-us.php"
                            <?= ($current_page ?? '') === 'contact' ? 'class="active"' : ''; ?>>Contact</a></li>
                </ul>

                <div class="nav-cta">
                    <div class="nav-phone">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.22 1.2 2 2 0 012.18 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.09a16 16 0 006 6l.56-.56a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z" />
                        </svg>
                        <?= $phone; ?>
                    </div>
                    <a href="get-free-quote.php" class="btn btn-primary"><span>Get a Free Quote</span></a>
                </div>

                <button class="hamburger" id="hamburger" aria-label="Menu">
                    <span></span><span></span><span></span>
                </button>

            </nav>

            <div class="mobile-menu" id="mobileMenu">
                <a href="about-us.php" <?= ($current_page ?? '') === 'about' ? 'class="active"' : ''; ?>>About</a>

                <div class="mobile-dropdown">
                    <button type="button" class="mobile-dropdown-toggle">Services <span>+</span></button>
                    <div class="mobile-dropdown-panel">
                        <?php foreach ($general_services as [$label, $slug]): ?>
                        <a href="services.html#<?= $slug; ?>"><?= $label; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="mobile-dropdown dropdown-cooling">
                    <button type="button" class="mobile-dropdown-toggle">Cooling <span>+</span></button>
                    <div class="mobile-dropdown-panel">
                        <a href="cooling.html">All Cooling Services</a>
                        <?php foreach ($cooling_services as [$label, $slug]): ?>
                        <a href="cooling.html#<?= $slug; ?>"><?= $label; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="mobile-dropdown dropdown-heating">
                    <button type="button" class="mobile-dropdown-toggle">Heating <span>+</span></button>
                    <div class="mobile-dropdown-panel">
                        <a href="heating.html">All Heating Services</a>
                        <?php foreach ($heating_services as [$label, $slug]): ?>
                        <a href="heating.html#<?= $slug; ?>"><?= $label; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <a href="gallery.php" <?= ($current_page ?? '') === 'gallery' ? 'class="active"' : ''; ?>>Gallery</a>
                <!-- <a href="faq.php" <?= ($current_page ?? '') === 'faq' ? 'class="active"' : ''; ?>>FAQ</a> -->
                <a href="contact-us.php" <?= ($current_page ?? '') === 'contact' ? 'class="active"' : ''; ?>>Contact</a>
                <a href="get-free-quote.php">Get a Free Quote</a>
            </div>
        </div>
    </header>