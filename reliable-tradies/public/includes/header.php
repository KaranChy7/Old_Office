<?php
// =============================================
// GLOBAL WEBSITE VARIABLES — Edit here only
// =============================================

$company_name = "Reliable Tradies Group";
$company_short = "Reliable Tradies";
$tagline = "Quality Craft, Reliable Results";
$abn = "41 103 231 058";
$phone = "0433 926 141";
$phone_link = "tel:0433926141";
$email = "info@reliabletradiesgroup.com.au";
$email_link = "mailto:info@reliabletradiesgroup.com.au";
$address = "Salisbury SA 5108";
$address_full = "Salisbury, SA 5108, Australia";
$hours = "Mon – Sat: 7:00am – 4:00pm";
$hours_short = "Mon–Sat 7am–4pm";
$radius = "SA";
$experience = "20";
$experience_label = "Years of Experience";

$map_embed = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13077.123456789!2d138.6200!3d-34.7600!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab0c4a7a4a4a4a4%3A0x1234567890abcdef!2sSalisbury+SA+5108!5e0!3m2!1sen!2sau!4v1700000000000!5m2!1sen!2sau";

$facebook_url = "https://facebook.com/#";
$instagram_url = "https://instagram.com/#";
$linkedin_url = "";
$youtube_url = "";

// =============================================
// HERO SLIDER SLIDES
// =============================================
$hero_slides = [
    [
        "service" => "Painting",
        "eyebrow" => "Interior & Exterior",
        "heading" => "Brush Strokes That",
        "heading_em" => "Transform Spaces.",
        "desc" => "From feature walls to full exterior repaints — premium-grade finishes, immaculate prep work, and zero mess left behind.",
        "image" => "images/image-8.jpg",
        "link" => "service-painting",
        "link_label" => "Our Painting Services",
        "icon" => "fa-paint-roller",
    ],
    [
        "service" => "Tiling",
        "eyebrow" => "Bathrooms, Kitchens & More",
        "heading" => "Precision Tiling,",
        "heading_em" => "Every Square Metre.",
        "desc" => "Expert tiling for bathrooms, kitchens, living areas, and outdoor spaces. We work with all tile types and deliver a perfect finish.",
        "image" => "images/image-12.jpg",
        "link" => "service-tiling",
        "link_label" => "Our Tiling Services",
        "icon" => "fa-border-all",
    ],
    [
        "service" => "Flooring",
        "eyebrow" => "Hybrid · Laminate · Vinyl",
        "heading" => "Floors That",
        "heading_em" => "Last a Lifetime.",
        "desc" => "Timber, hybrid, laminate and vinyl flooring installed to perfection. Beautiful underfoot — built for everyday Australian life.",
        "image" => "images/image-17.jpg",
        "link" => "service-flooring",
        "link_label" => "Our Flooring Services",
        "icon" => "fa-layer-group",
    ],
    [
        "service" => "Concrete",
        "eyebrow" => "Driveways · Slabs · Polishing",
        "heading" => "Concrete Built",
        "heading_em" => "To Stand the Test.",
        "desc" => "Driveways, crossovers, slabs, patios, screeding and polishing. Durable concrete solutions for residential and commercial projects.",
        "image" => "images/image-22.jpg",
        "link" => "service-concrete",
        "link_label" => "Our Concrete Services",
        "icon" => "fa-helmet-safety",
    ],
];

// =============================================
// SERVICES — with sub-services & individual pages
// =============================================
$services = [
    [
        "name" => "Painting",
        "slug" => "painting",
        "page" => "service-painting",
        "icon" => "fa-solid fa-paint-roller",
        "short" => "Interior & exterior painting with premium finishes.",
        "desc" => "Transform your space with our professional painting services. From interior feature walls to full exterior repaints, we deliver flawless finishes using premium-grade paints and precise technique.",
        "image" => "images/image-2.jpg",
        "hero_image" => "images/image-3.jpg",
        "list" => ["Interior Painting", "Exterior Painting", "Feature Walls", "Colour Consultations", "Repaints & Touch-ups", "Deck & Fence Staining"],
        "sub_services" => [
            [
                "title" => "Interior Painting",
                "desc" => "Transform your living spaces with crisp, even coats and premium paints. We cover ceilings, walls, trims, and feature walls with meticulous preparation and a clean, professional finish.",
                "image" => "images/painting/interior-painting.jpg",
                "list" => ["Living rooms & bedrooms", "Ceilings & cornices", "Feature accent walls", "Doors, trims & skirtings", "Colour consultations included"],
            ],
            [
                "title" => "Exterior Painting",
                "desc" => "Protect and refresh your property's exterior with durable, weather-resistant paints suited to South Australia's climate. Full prep including pressure washing, sanding, and priming.",
                "image" => "images/painting/exterior-painting.jpg",
                "list" => ["Full exterior repaints", "Weatherboard & render homes", "Eaves, fascia & gutters", "Pressure washing prep", "Anti-fungal & UV-resistant coatings"],
            ],
            [
                "title" => "Spray Painting",
                "desc" => "Achieve a smooth, flawless finish with our professional spray painting services. Ideal for large surfaces, fences, doors, and commercial properties, spray painting delivers fast, even coverage with a high-quality result.",
                "image" => "images/painting/exterior-painting.jpg",
                "list" => [
                    "Smooth and even paint application",
                    "Residential & commercial projects",
                    "Doors, fences & exterior surfaces",
                    "Fast and efficient coverage",
                    "Premium paints and coatings"
                ],
            ],
            [
                "title" => "Fence Painting",
                "desc" => "Enhance the appearance and durability of your fencing with expert fence painting solutions. We prepare, prime, and paint all fence types to protect against weathering while improving your property's curb appeal.",
                "image" => "images/painting/fence-painting.jpg",
                "list" => [
                    "Timber and metal fences",
                    "Fence restoration & repainting",
                    "Weather-resistant coatings",
                    "Surface preparation included",
                    "Long-lasting protective finishes"
                ],
            ],
            [
                "title" => "Residential Painting",
                "desc" => "Give your home a fresh new look with professional residential painting services tailored to your style and budget. We deliver quality workmanship and attention to detail for every room and exterior surface.",
                "image" => "images/painting/residential-painting.jpg",
                "list" => [
                    "Complete home painting solutions",
                    "Interior and exterior painting",
                    "New builds and renovations",
                    "Colour matching and advice",
                    "Clean and tidy workmanship"
                ],
            ],
            [
                "title" => "Commercial Painting",
                "desc" => "Maintain a professional appearance for your business with reliable commercial painting services. We work efficiently to minimise disruption while delivering durable, high-quality finishes for commercial properties.",
                "image" => "images/painting/residential-painting.jpg",
                "list" => [
                    "Offices, shops & retail spaces",
                    "Warehouses and industrial sites",
                    "Flexible scheduling available",
                    "Durable commercial-grade coatings",
                    "Minimal disruption to operations"
                ],
            ],
        ],
    ],
    [
        "name" => "Tiling",
        "slug" => "tiling",
        "page" => "service-tiling",
        "icon" => "fa-solid fa-border-all",
        "short" => "Expert tiling for bathrooms, kitchens & living areas.",
        "desc" => "From bathroom renovations to kitchen splashbacks and outdoor areas, our tiling team delivers exceptional precision and workmanship. We work with all tile types and styles.",
        "image" => "images/image-15.jpg",
        "hero_image" => "images/image-13.jpg",
        "list" => ["Bathroom Tiling", "Kitchen Splashbacks", "Floor Tiling", "Wall Tiling", "Outdoor Tiling", "Grout Restoration"],
        "sub_services" => [
            [
                "title" => "Bathroom Tiling",
                "desc" => "Complete bathroom tiling from floor to ceiling — showers, baths, wet areas, and feature walls. We handle waterproofing, layout planning, and grouting to a flawless standard.",
                "image" => "images/tiling/tiling.jpg",
                "list" => ["Shower recesses & wet areas", "Floor & wall tiling", "Feature tile installation", "Waterproofing membrane", "Grout colour selection"],
            ],
            [
                "title" => "Kitchen Splashbacks",
                "desc" => "Make your kitchen functional and stylish with a perfectly tiled splashback. We cut precisely around power points and windows, ensuring a professional result every time.",
                "image" => "images/tiling/floor-tilling.jpg",
                "list" => ["Subway & mosaic tiles", "Natural stone splashbacks", "Glass tile installation", "Precision cuts around fixtures", "Matching grout & sealant"],
            ],
            [
                "title" => "Floor & Outdoor Tiling",
                "desc" => "Durable floor tiling for indoor and outdoor areas including patios, entertaining areas, laundries, and commercial spaces. Non-slip finishes available for outdoor applications.",
                "image" => "images/tiling/outdoor-tiling.jpg",
                "list" => ["Indoor floor tiling", "Outdoor & alfresco tiling", "Non-slip tiles available", "Large format tile laying", "Grout restoration & resealing"],
            ],
            [
                "title" => "Waterproofing",
                "desc" => "Protect your property from moisture damage with professional waterproofing solutions. We apply high-quality waterproof membranes to bathrooms, laundries, balconies, and wet areas, ensuring compliance and long-lasting protection.",
                "image" => "images/tiling/waterproofing.jpg",
                "list" => [
                    "Bathroom & laundry waterproofing",
                    "Balcony and wet area protection",
                    "AS-compliant waterproof membranes",
                    "Leak prevention solutions",
                    "Pre-tiling waterproof preparation"
                ],
            ],
            [
                "title" => "Screeding",
                "desc" => "Create a smooth, level surface for flawless tile installation with our expert screeding services. We ensure proper falls, drainage, and surface preparation for both residential and commercial projects.",
                "image" => "images/tiling/screeding.jpg",
                "list" => [
                    "Floor levelling and preparation",
                    "Wet area screeding",
                    "Shower base screeding",
                    "Correct falls for drainage",
                    "Residential & commercial applications"
                ],
            ],
            [
                "title" => "Silicone",
                "desc" => "Achieve a clean, watertight finish with professional silicone sealing services. We apply high-quality silicone to bathrooms, kitchens, and tiled areas to prevent water penetration and enhance durability.",
                "image" => "images/tiling/silicone.jpg",
                "list" => [
                    "Bathroom silicone replacement",
                    "Kitchen and splashback sealing",
                    "Shower screen sealing",
                    "Mould-resistant silicone options",
                    "Neat and durable finishing work"
                ],
            ],

        ],
    ],
    [
        "name" => "Flooring",
        "slug" => "flooring",
        "page" => "service-flooring",
        "icon" => "fa-solid fa-layer-group",
        "short" => "Timber, hybrid, laminate & vinyl flooring solutions.",
        "desc" => "Upgrade your floors with our expert timber flooring installation services. We supply and install a full range of flooring options — hybrid, laminate, and vinyl — to suit every budget, style, and space.",
        "image" => "images/image-17.jpg",
        "hero_image" => "images/image-17.jpg",
        "list" => ["Hybrid Flooring", "Laminate Flooring", "Vinyl Flooring", "Floor Sanding & Polishing", "Subfloor Preparation", "Underlay Installation"],
        "sub_services" => [
            [
                "title" => "Hybrid Flooring Installation",
                "desc" => "The best of both worlds — hybrid flooring combines the look of real timber with the waterproof durability of vinyl. Ideal for any room including wet areas, kitchens, and high-traffic spaces.",
                "image" => "images/concrete/hybrid-flooring.jpg",
                "list" => ["100% waterproof construction", "Suitable for wet areas", "Click-lock installation", "Underlay included", "Wide range of timber looks", "Residential & commercial"],
            ],
            [
                "title" => "Laminate Flooring Installation",
                "desc" => "Cost-effective and visually stunning, laminate flooring delivers a premium timber appearance at a fraction of the cost. Durable, scratch-resistant, and easy to maintain.",
                "image" => "images/concrete/laminate-flooring.jpg",
                "list" => ["Timber-look finishes", "AC3 & AC4 wear ratings", "Floating floor system", "Moisture-resistant options", "T-bar & beading installation", "Subfloor levelling included"],
            ],
            [
                "title" => "Vinyl Flooring Installation",
                "desc" => "Luxury vinyl plank (LVP) flooring that's completely waterproof, warm underfoot, and built for Australian family life. Available in a huge range of colours and wood-look finishes.",
                "image" => "images/concrete/vinyl-flooring.jpg",
                "list" => ["Luxury Vinyl Plank (LVP)", "Sheet vinyl available", "Fully waterproof", "Commercial-grade options", "Direct stick & floating install", "Suitable over tiles & concrete"],
            ],
            [
                "title" => "Floor Polishing",
                "desc" => "Restore the beauty of your existing floors with our professional floor polishing services. We enhance the appearance, shine, and durability of timber and hard flooring surfaces, leaving them looking refreshed and protected.",
                "image" => "images/concrete/floor-polishing.webp",
                "list" => ["Timber floor polishing", "High-gloss & matte finishes", "Scratch removal", "Surface preparation", "Protective coating application", "Residential & commercial projects"],
            ],
            [
                "title" => "Floor Screeding",
                "desc" => "Create a smooth, level foundation for your flooring with our expert screeding services. We prepare subfloors to ensure a stable surface for tiles, timber, vinyl, laminate, and other floor coverings.",
                "image" => "images/concrete/screeding.jpg",
                "list" => ["Traditional sand & cement screeds", "Self-levelling screeds", "Subfloor preparation", "Floor levelling solutions", "Suitable for all floor types", "Residential & commercial applications"],
            ],
        ],
    ],
    [
        "name" => "Concrete",
        "slug" => "concrete",
        "page" => "service-concrete",
        "icon" => "fa-solid fa-helmet-safety",
        "short" => "Driveways, paths, slabs & decorative concrete work.",
        "desc" => "Our concrete specialists handle everything from residential driveways to commercial slabs, screeding, polishing, and decorative finishes. Durable, clean, and built to last in South Australia's climate.",
        "image" => "images/image-11.jpg",
        "hero_image" => "images/image-10.jpg",
        "list" => ["Screeding & Polishing", "Residential & Commercial", "Foundations & Slabs", "Driveways & Crossovers", "Sidewalks & Pathways", "Concrete Patios"],
        "sub_services" => [
            [
                "title" => "Screeding & Polishing",
                "desc" => "Perfectly level concrete floors achieved through expert screeding, and brilliant polished finishes for commercial showrooms, warehouses, and residential spaces.",
                "image" => "images/concrete/screeding.jpg",
                "list" => ["Floor screeding & levelling", "Polished concrete floors", "Grinding & surface prep", "Sealing & hardener application", "Residential & commercial", "New & existing concrete"],
            ],
            [
                "title" => "Foundations & Slabs",
                "desc" => "Structural concrete slabs and foundations laid to engineering specifications. We handle residential house slabs, shed bases, commercial footings, and more.",
                "image" => "images/concrete/slab-concrete.jpg",
                "list" => ["House & building slabs", "Shed & garage slabs", "Commercial footings", "Reinforced concrete", "Steel mesh & reo bar", "Engineer-spec pours"],
            ],
            [
                "title" => "Driveways, Crossovers & Patios",
                "desc" => "Beautifully finished driveways, council crossovers, sidewalks, and outdoor entertaining areas. Choose from plain, exposed aggregate, coloured, or stencilled concrete to match your home.",
                "image" => "images/concrete/concrete-driveway.jpg",
                "list" => ["Concrete driveways", "Council crossovers", "Sidewalks & pathways", "Concrete patios & entertaining areas", "Exposed aggregate", "Coloured & stencilled concrete"],
            ],
        ],
    ],
];

// Current page
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="<?= $company_name ?> — Professional Painting, Tiling, Flooring & Concrete services in Salisbury SA. Serving a 100km radius. Call <?= $phone ?>.">
    <meta name="keywords"
        content="painting Salisbury, tiling Adelaide, flooring SA, concrete Salisbury, tradies SA, reliable tradies">
    <meta name="author" content="<?= $company_name ?>">
    <title><?= $company_name ?> | Painting, Tiling, Flooring & Concrete — Salisbury SA</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=DM+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/logo.png">
</head>

<body>



    <!-- HEADER -->
    <header class="site-header" id="site-header">
        <!-- TOP BAR -->
        <div class="header-topbar">
            <div class="container">
                <div class="topbar-inner">
                    <div class="topbar-info">
                        <span><i class="fa-solid fa-location-dot"></i> <?= $address ?></span>
                        <span><i class="fa-solid fa-envelope"></i> <a href="<?= $email_link ?>"><?= $email ?></a></span>
                        <span><i class="fa-solid fa-id-card"></i> ABN: <?= $abn ?></span>
                    </div>
                    <div class="topbar-hours">
                        <i class="fa-regular fa-clock"></i> <?= $hours_short ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header-inner">

                <a href="./" class="site-logo">
                    <img src="images/logo.png" alt="<?= $company_name ?> Logo">
                </a>

                <nav class="site-nav" aria-label="Main Navigation">
                    <ul>
                        <li>
                            <a href="./" class="<?= $current_page === 'index.php' ? 'active' : '' ?>">Home</a>
                        </li>
                        <li>
                            <a href="about_us" class="<?= $current_page === 'about_us.php' ? 'active' : '' ?>">About
                                Us</a>
                        </li>
                        <li class="has-dropdown">
                            <a href="our_services"
                                class="<?= $current_page === 'our_services.php' ? 'active' : '' ?>">Services</a>
                            <ul class="dropdown">
                                <?php foreach ($services as $srv): ?>
                                <li class="dropdown-parent">
                                    <a href="<?= $srv['page'] ?>"><?= $srv['name'] ?></a>
                                    <ul class="dropdown-sub">
                                        <?php foreach ($srv['sub_services'] as $sub): ?>
                                        <li><a
                                                href="<?= $srv['page'] ?>#<?= strtolower(str_replace([' ', '&', '/'], ['-', '', ''], $sub['title'])) ?>"><?= $sub['title'] ?></a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li>
                            <a href="gallery" class="<?= $current_page === 'gallery.php' ? 'active' : '' ?>">Gallery</a>
                        </li>
                        <li>
                            <a href="contact_us"
                                class="<?= $current_page === 'contact_us.php' ? 'active' : '' ?>">Contact</a>
                        </li>
                    </ul>
                </nav>

                <div class="header-cta">
                    <a href="<?= $phone_link ?>" class="cta-phone">
                        <i class="fa-solid fa-phone"></i> <?= $phone ?>
                    </a>
                    <a href="quote" class="btn-primary">Get a Free Quote</a>
                </div>

                <div class="hamburger" id="hamburger" aria-label="Open menu" role="button" tabindex="0">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile nav -->
    <nav class="mobile-nav" id="mobile-nav" aria-label="Mobile Navigation">
        <ul>
            <li><a href="./">Home</a></li>
            <li><a href="about_us">About Us</a></li>
            <li class="mobile-has-sub">
                <a href="our_services" class="mobile-parent-link">Services <i
                        class="fa-solid fa-chevron-down mobile-chevron"></i></a>
                <ul class="mobile-sub" id="mobile-services">
                    <?php foreach ($services as $srv): ?>
                    <li class="mobile-sub-parent">
                        <a href="<?= $srv['page'] ?>" class="mobile-sub-heading"><?= $srv['name'] ?></a>
                        <ul class="mobile-sub-children">
                            <?php foreach ($srv['sub_services'] as $sub): ?>
                            <li><a
                                    href="<?= $srv['page'] ?>#<?= strtolower(str_replace([' ', '&', '/'], ['-', '', ''], $sub['title'])) ?>"><?= $sub['title'] ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li><a href="gallery">Gallery</a></li>
            <li><a href="contact_us">Contact</a></li>
        </ul>
        <div class="mobile-cta">
            <a href="quote" class="btn-primary">Get a Free Quote</a>
            <a href="<?= $phone_link ?>" class="btn-outline">
                <i class="fa-solid fa-phone"></i> <?= $phone ?>
            </a>
        </div>
    </nav>
    <div class="nav-overlay" id="nav-overlay"></div>

    <div class="mobile-call-btn">
        <a href="<?= $phone_link ?>" aria-label="Call us"><i class="fa-solid fa-phone"></i></a>
    </div>