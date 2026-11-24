<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Finesse Painting Services | Inala QLD | 26 Years of Excellence
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Barlow:wght@300;400;500;600;700&family=Barlow+Condensed:wght@600;700;800&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
    <!-- Slick Slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <!-- Custom Style -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- FLOATING CALL BUTTON -->
    <a href="tel:0409904617" class="float-call" aria-label="Call us">📞</a>
    <button class="back-top" id="backTop" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })">
        ↑
    </button>

    <!-- MOBILE NAV OVERLAY -->
    <div class="nav-overlay" id="navOverlay" onclick="closeMobileNav()"></div>
    <nav class="mobile-nav" id="mobileNav">
        <button class="mobile-nav-close" onclick="closeMobileNav()">✕</button>
        <a href="#about" onclick="closeMobileNav()">About Us</a>
        <a href="#services" onclick="closeMobileNav()">Services</a>
        <a href="#gallery" onclick="closeMobileNav()">Gallery</a>
        <a href="#why" onclick="closeMobileNav()">Why Us</a>
        <a href="#testimonials" onclick="closeMobileNav()">Reviews</a>
        <a href="#faq" onclick="closeMobileNav()">FAQ</a>
        <a href="#contact" onclick="closeMobileNav()">Contact</a>
        <a href="#quote" onclick="closeMobileNav()" style="color: var(--accent); margin-top: 10px">Get a Quote</a>
    </nav>

    <div class="topbar">
        <div class="container">
            <div class="topbar-inner">
                <div style="display: flex; gap: 24px; flex-wrap: wrap">
                    <a href="tel:0409904617">📞 0409 904 617</a>
                    <a href="mailto:ashkanrodman@yahoo.com.au">✉ ashkanrodman@yahoo.com.au</a>
                    <a href="#contact">📍 Inala QLD 4077</a>
                </div>
                <div class="topbar-right">
                    <span class="hours">⏰ Mon–Sat: 7:00 AM – 5:00 PM</span>
                    <span style="color: rgba(255, 255, 255, 0.25)">|</span>
                    <span style="color: rgba(255, 255, 255, 0.6); font-size: 12px">ABN: 41 410 220 939</span>
                </div>
            </div>
        </div>
    </div>

    <!-- HEADER -->
    <header id="mainHeader">
        <div class="container">
            <nav>
                <a href="#" class="logo">
                    <div class="logo-icon">
                        <svg viewBox="0 0 32 32">
                            <path d="M4 28 L16 4 L28 28 Z" fill="white" opacity="0.9" />
                            <rect x="9" y="20" width="14" height="3" fill="white" />
                        </svg>
                    </div>
                    <div class="logo-text">
                        <div class="brand">Finesse Painting</div>
                        <!-- <div class="tagline">Services — Est. 1998</div> -->
                    </div>
                </a>
                <ul class="nav-links">
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#why">Why Us</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="nav-cta">
                    <a href="tel:0409904617" class="nav-phone">📞 0409 904 617</a>
                    <a href="#quote" class="btn btn-red">Free Quote</a>
                </div>
                <button class="hamburger" id="hamburger" onclick="toggleMobileNav()">
                    <span></span><span></span><span></span>
                </button>
            </nav>
        </div>
    </header>