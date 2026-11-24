<?php
$site_tagline = 'Electric Camper Hire & Custom Fit-Outs';
$company = "GC-E Campers";
$phone = "0400 123 456";
$phone2 = "";
$email = "info@gcecampers.com.au";
$address = "14 Logistics Drive";
$address2 = "Arundel QLD 4214";
$abn = "";
$map = "https://www.google.com/maps/search/?api=1&query=14+Logistics+Drive+Arundel+QLD+4214";
$exp = "";
$work_day = "Mon–Fri: 8am – 5pm";
$work_hrs = "Sat: 9am – 2pm";
$facebook = "https://www.facebook.com/";
$instagram = "https://www.instagram.com/";
$google = "https://www.google.com/";
$linkedin = "https://www.linkedin.com/";
$hipage = "https://hipages.com.au/connect/";
$youtube = "https://www.youtube.com/";
$thanks = "";
require_once __DIR__ . '/services/services_data.php';
$page = isset($page) ? $page : '';
$hire_menu   = array_filter($service_pages, fn($s) => $s['group'] !== 'Build');
$fitout_menu = array_filter($service_pages, fn($s) => $s['group'] === 'Build');
$hire_active   = $page === 'camper_hire' || isset($hire_menu[$page]);
$fitout_active = $page === 'fitouts' || isset($fitout_menu[$page]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="<?php echo isset($page_desc) ? htmlspecialchars($page_desc) : 'GC-E Campers — Premium electric & hybrid camper hire and bespoke custom fit-outs on the Gold Coast. Explore Australia in style.'; ?>">
    <title>
        <?php echo isset($company) ?  $company : ($page ? $page . ' | ' . $company : $company . ' — ' . $site_tagline); ?>
    </title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&family=Jost:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,700;1,400&display=swap"
        rel="stylesheet">
    <!-- Icons (Remix Icons) -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    <!-- Mobile Nav Overlay -->
    <div class="mobile-nav__overlay" id="mobileOverlay"></div>

    <!-- Mobile Nav Drawer -->
    <nav class="mobile-nav" id="mobileNav" aria-label="Mobile navigation">
        <button class="mobile-nav__close" id="mobileNavClose" aria-label="Close menu">
            <i class="ri-close-line"></i>
        </button>
        <a href="./" class="<?php echo $page === 'home' ? 'active' : ''; ?>">Home</a>
        <div class="mobile-nav__group">
            <div class="mobile-nav__row">
                <a href="camper_hire" class="<?php echo $hire_active ? 'active' : ''; ?>">Hire</a>
                <button class="mobile-nav__toggle" type="button" aria-expanded="false" aria-controls="mobileSubHire"
                    aria-label="Show Hire services">
                    <i class="ri-arrow-down-s-line"></i>
                </button>
            </div>
            <div class="mobile-nav__sub" id="mobileSubHire">
                <div class="mobile-nav__sub-inner">
                    <?php foreach ($hire_menu as $slug => $s): ?>
                    <a href="<?php echo $slug; ?>"
                        class="<?php echo $page === $slug ? 'active' : ''; ?>"><?php echo htmlspecialchars($s['nav']); ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="mobile-nav__group">
            <div class="mobile-nav__row">
                <a href="fit_outs" class="<?php echo $fitout_active ? 'active' : ''; ?>">Fit-Outs</a>
                <button class="mobile-nav__toggle" type="button" aria-expanded="false" aria-controls="mobileSubFitouts"
                    aria-label="Show Fit-Outs services">
                    <i class="ri-arrow-down-s-line"></i>
                </button>
            </div>
            <div class="mobile-nav__sub" id="mobileSubFitouts">
                <div class="mobile-nav__sub-inner">
                    <?php foreach ($fitout_menu as $slug => $s): ?>
                    <a href="<?php echo $slug; ?>"
                        class="<?php echo $page === $slug ? 'active' : ''; ?>"><?php echo htmlspecialchars($s['nav']); ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <a href="about_us" class="<?php echo $page === 'about_us' ? 'active' : ''; ?>">About</a>
        <a href="gallery" class="<?php echo $page === 'gallery' ? 'active' : ''; ?>">Gallery</a>
        <a href="contact_us" class="<?php echo $page === 'contact_us' ? 'active' : ''; ?>">Contact</a>
        <div class="mobile-nav__cta">
            <a href="quote" class="btn btn--gold btn--block">Book Now</a>
        </div>
    </nav>

    <!-- Site Header -->
    <header class="site-header" id="siteHeader">
        <div class="container">

            <!-- Logo -->
            <a href="./" class="site-logo" aria-label="GC-E Campers home">
                <div>
                    <div class="site-logo__mark">GC&#8209;<span>E</span> CAMPERS</div>
                    <div class="site-logo__sub">Electric &amp; Hybrid Hire</div>
                </div>
            </a>

            <!-- Desktop Nav -->
            <nav class="site-nav" aria-label="Main navigation">
                <a href="./" class="<?php echo $page === 'home' ? 'active' : ''; ?>">Home</a>
                <div class="site-nav__item">
                    <a href="camper_hire" class="<?php echo $hire_active ? 'active' : ''; ?>">Hire <i
                            class="ri-arrow-down-s-line"></i></a>
                    <div class="site-nav__dropdown">
                        <?php foreach ($hire_menu as $slug => $s): ?>
                        <a href="<?php echo $slug; ?>"
                            class="<?php echo $page === $slug ? 'active' : ''; ?>"><?php echo htmlspecialchars($s['nav']); ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="site-nav__item">
                    <a href="fit_outs" class="<?php echo $fitout_active ? 'active' : ''; ?>">Fit-Outs <i
                            class="ri-arrow-down-s-line"></i></a>
                    <div class="site-nav__dropdown">
                        <?php foreach ($fitout_menu as $slug => $s): ?>
                        <a href="<?php echo $slug; ?>"
                            class="<?php echo $page === $slug ? 'active' : ''; ?>"><?php echo htmlspecialchars($s['nav']); ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <a href="about_us" class="<?php echo $page === 'about_us' ? 'active' : ''; ?>">About</a>
                <a href="gallery" class="<?php echo $page === 'gallery' ? 'active' : ''; ?>">Gallery</a>
                <a href="contact_us" class="<?php echo $page === 'contact_us' ? 'active' : ''; ?>">Contact</a>
            </nav>

            <!-- Header Actions -->
            <div class="header-actions">
                <a href="quote" class="btn btn--gold btn--sm">Book Now</a>
                <button class="menu-toggle" id="menuToggle" aria-label="Open menu" aria-expanded="false">
                    <span></span><span></span><span></span>
                </button>
            </div>

        </div>
    </header>