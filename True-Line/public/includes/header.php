<?php
$current_page = $current_page ?? '';
require_once __DIR__ . '/services-data.php';
?>

<!-- Scroll Progress -->
<div class="scroll-progress" aria-hidden="true">
    <div class="scroll-progress__bar" id="scroll-progress-bar"></div>
</div>

<!-- Site Header -->
<header class="site-header" id="site-header">
    <div class="header-inner">

        <div class="nav-panel" id="main-nav">

            <!-- Primary Navigation (left) -->
            <nav class="nav nav--left" aria-label="Primary navigation">

                <div class="nav__item nav__item--dropdown">
                    <a href="metal-projects.php" class="nav__link <?= $current_page === 'projects' ? 'active' : '' ?>">Projects</a>
                    <button type="button" class="nav__dropdown-toggle" aria-expanded="false"
                        aria-label="Show Projects submenu">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="nav__dropdown">
                        <?php foreach ($tl_projects as $nav_project): ?>
                            <a href="<?= $nav_project['slug'] ?>.php" class="nav__dropdown-link"><?= $nav_project['name'] ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="nav__item nav__item--dropdown">
                    <a href="services.php"
                        class="nav__link <?= $current_page === 'services' ? 'active' : '' ?>">Services</a>
                    <button type="button" class="nav__dropdown-toggle" aria-expanded="false"
                        aria-label="Show Services submenu">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="nav__dropdown nav__dropdown--mega">
                        <?php foreach ($tl_services as $nav_slug => $nav_item): ?>
                            <a href="<?= $nav_slug ?>.php" class="nav__dropdown-link"><?= $nav_item['name'] ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <a href="information.php" class="nav__link <?= $current_page === 'information' ? 'active' : '' ?>">Information</a>
            </nav>

            <!-- Secondary Navigation (right) -->
            <nav class="nav nav--right" aria-label="Secondary navigation">

                <a href="materials-metal-fabrication.php" class="nav__link">Shop</a>
                <a href="about.php" class="nav__link <?= $current_page === 'about' ? 'active' : '' ?>">About</a>
                <a href="contact.php" class="nav__link <?= $current_page === 'contact' ? 'active' : '' ?>">Contact</a>


                <a href="tel:0478314984" class="nav__phone" aria-label="Call us on 0478 314 984">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                    </svg>
                    <span>0478 314 984</span>
                </a>
            </nav>

        </div>

        <!-- Logo -->
        <a href="index.php" class="logo" aria-label="Tru-Line Installs — Home">
            <?php $logo_class = 'logo__mark'; include __DIR__ . '/partials/logo.php'; ?>
        </a>

        <div class="nav-backdrop" id="nav-backdrop"></div>

        <!-- Hamburger -->
        <button class="hamburger" id="hamburger" aria-label="Toggle navigation" aria-expanded="false"
            aria-controls="main-nav">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>
</header>