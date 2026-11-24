<?php
$current_page = $current_page ?? '';
$page_path    = $page_path ?? '';

$main_categories = [
    [
        'label' => 'Design Series',
        'slug'  => 'design-series',
        'sub'   => [
            ['Opals', 'opals'],
            ['Celina', 'celina'],
            ['Biancas', 'biancas'],
            ['Xplus', 'xplus'], 
        ],
    ],
    [
        'label' => 'Vanities',
        'slug'  => 'vanities',
        'sub'   => [
            ['All Vanities', 'all-vanities'],
            ['Vanity Top', 'vanity-top'],
            ['Shaving Cabinet', 'shaving-cabinet'],
        ],
    ],
    [
        'label' => 'Basins',
        'slug'  => 'basins',
        'sub'   => [
            ['All Basins', 'all-basins'],
            ['Basin Taps', 'basins-taps'],
            ['Basin Wastes', 'basins-wastes'],
        ],
    ],
    [
        'label' => 'Bathtubs',
        'slug'  => 'bathtubs',
        'sub'   => [
            ['All Bathtubs', 'all-bathtubs'],
            ['Spa Bathtub (Massage Series)', 'spa-bathtub-massage-series'],
            ['Bathtub Accessories', 'bathtub-accessories'],
            ['Freestanding Bath Mixers', 'freestanding-bath-mixers'],
        ],
    ],
    [
        'label' => 'Toilets',
        'slug'  => 'toilets',
        'sub'   => [
            ['All Toilets', 'all-toilets'],
            ['Toilet Accessories', 'toilet-accessories'],
            ['Toilets Bidet Gun', 'toilets-bidet-gun'],
        ],
    ],
    [
        'label' => 'Shower',
        'slug'  => 'shower',
        'sub'   => [
            ['Shower Sets', 'shower-sets'],
            ['Shower Mixers', 'shower-mixers'],
            ['Showers Accessories', 'showers-accessories'],
            ['All Shower Products', 'all-shower-products'],
        ],
    ],
    [
        'label' => 'Mirror',
        'slug'  => 'mirror',
        'sub'   => [
            ['All Mirrors', 'all-mirrors'],
            ['LED Mirrors', 'led-mirrors'],
            ['LED Mirror Cabinets', 'led-mirror-cabinets'],
        ],
    ],
    [
        'label' => 'Kitchen & Laundry',
        'slug'  => 'kitchen-laundry',
        'sub'   => [
            ['All Products', 'all-products'],
            ['Sinks', 'sinks'],
            ['Kitchen&Laundry Taps', 'kitchen-laundry-taps'],
            ['Wastes', 'wastes'],
        ],
    ],
    [
        'label' => 'Bathroom Accessories',
        'slug'  => 'bathroom-accessories',
        'sub'   => [
            ['Towel Holders', 'towel-holders'],
            ['All Towel Holders', 'all-towel-holders'],
            ['Heating Towel Rail', 'heating-towel-rail'],
        ],
    ],
    [
        'label' => 'Door Accessories',
        'slug'  => 'door-accessories',
        'sub'   => [
            ['Door Handle Lock', 'door-handle-lock'],
            ['Doorstops', 'doorstops'],
            ['Door Hinge', 'door-hinge'],
            ['Door Pull Handle', 'door-pull-handle'],
            ['Sliding Door Lock + Handle', 'sliding-door-lock-handle'],
            ['Toilet Paper Holders', 'toilet-paper-holders'],
        ],
    ],
    [
        'label' => 'Floorings',
        'slug'  => 'flooring',
    ],
];
?>

<!-- Scroll Progress -->
<div class="scroll-progress" aria-hidden="true">
    <div class="scroll-progress__bar" id="scroll-progress-bar"></div>
</div>

<!-- Site Header -->
<header class="site-header" id="site-header">

    <!-- Row 1: Top utility bar -->
    <div class="header-topbar">
        <div class="header-topbar__inner">
            <a href="tel:0485700141" class="header-topbar__item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                </svg>
                <span>0485 700 141</span>
            </a>
            <span class="header-topbar__item header-topbar__item--hours">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67V7z" />
                </svg>
                <span>Monday &ndash; Saturday, 8:30 AM to 4:30 PM</span>
            </span>
            <a href="mailto:info@hifihomes.com.au" class="header-topbar__item header-topbar__item--email">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                </svg>
                <span>info@hifihomes.com.au</span>
            </a>
        </div>
    </div>

    <!-- Row 2: Logo + search + quote button -->
    <div class="header-main">
        <div class="header-main__inner">

            <a href="index.html" class="logo" aria-label="Hifi Homes — Home">
                <img src="images/logo.png" alt="Hifi Homes — Bathroom &amp; Kitchen Fixtures" class="logo__mark"
                    width="721" height="346">
            </a>

            <form class="header-search" action="index.html" method="get" id="header-search">
                <select class="header-search__select" name="cat" aria-label="Category">
                    <option value="">All Categories</option>
                    <option value="bathroom">Sink</option>
                </select>
                <input type="search" name="q" class="header-search__input" placeholder="Search products&hellip;"
                    aria-label="Search products" />
                <button type="submit" class="header-search__btn" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.2">
                        <circle cx="11" cy="11" r="7" stroke-linecap="round" />
                        <path d="M21 21l-4.35-4.35" stroke-linecap="round" />
                    </svg>
                </button>
            </form>

            <div class="header-actions">
                <a href="contact.html" class="header-actions__quote-btn">Get A Quote</a>

                <!-- Hamburger -->
                <button class="hamburger" id="hamburger" aria-label="Toggle navigation" aria-expanded="false"
                    aria-controls="main-nav">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>

        </div>
    </div>

    <!-- Row 3: Category navigation -->
    <div class="nav-panel" id="main-nav">
        <nav class="header-categories" aria-label="Product categories">
            <?php foreach ($main_categories as $cat): ?>
            <?php if (empty($cat['slug'])): ?>
            <div class="nav__item">
                <span class="nav__link"><?= htmlspecialchars($cat['label']) ?></span>
            </div>
            <?php elseif (empty($cat['sub'])): ?>
            <div class="nav__item">
                <a href="category-<?= htmlspecialchars($cat['slug']) ?>.html"
                    class="nav__link<?= $page_path === "category-{$cat['slug']}.php" ? ' active' : '' ?>"><?= htmlspecialchars($cat['label']) ?></a>
            </div>
            <?php else: ?>
            <div class="nav__item nav__item--dropdown">
                <a href="category-<?= htmlspecialchars($cat['slug']) ?>.html"
                    class="nav__link<?= $page_path === "category-{$cat['slug']}.php" ? ' active' : '' ?>"><?= htmlspecialchars($cat['label']) ?></a>
                <button type="button" class="nav__dropdown-toggle" aria-expanded="false"
                    aria-label="Show <?= htmlspecialchars($cat['label']) ?> submenu">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="nav__dropdown">
                    <?php foreach ($cat['sub'] as [$sub_label, $sub_slug]): ?>
                    <?php $sub_href = "category-{$cat['slug']}.html" . (strpos($sub_slug, 'all-') === 0 ? '' : "#{$sub_slug}"); ?>
                    <a href="<?= htmlspecialchars($sub_href) ?>"
                        class="nav__dropdown-link"><?= htmlspecialchars($sub_label) ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </nav>
    </div>

    <div class="nav-backdrop" id="nav-backdrop"></div>

</header>