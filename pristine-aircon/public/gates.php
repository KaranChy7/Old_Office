<?php
$page = 'our_services';
$page_title = "Steel Gates Melbourne | Driveway & Sliding Gates";
include 'includes/header.php'; ?>

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h1>Gates</h1>
        </div>
    </div>
</div>

<section class="svc-intro section">
    <div class="container">
        <div class="svc-intro-wrap">
            <div class="svc-intro-image">
                <img src="images/service_5.jpg" alt="Modern black steel driveway gate in Melbourne">
                <div class="svc-badge">
                    <i class="fa-solid fa-award"></i>
                    <div>
                        <strong>Free Quotes</strong>
                        <span>Within 100km of Campbellfield</span>
                    </div>
                </div>
            </div>
            <div class="svc-intro-text">
                <span class="svc-label">Gates</span>
                <h2>Custom Steel Gates</h2>
                <p>Your gate is the first thing people see and the first line of security for your property.
                    <?= $company; ?> builds custom steel gates for driveways, side paths, factories and car parks across
                    Melbourne, sized to the opening and made to run smoothly for years.</p>
                <p>We match your gate to your fence or build a new feature design, and set up frames ready for a motor
                    if you want to automate now or later.</p>
                <ul class="svc-checklist">
                    <li>Driveway swing gates</li>
                    <li>Sliding & cantilever gates</li>
                    <li>Pedestrian & side gates</li>
                    <li>Commercial site gates</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="svc-features section">
    <div class="container">
        <div class="svc-heading">
            <span class="svc-label">Highlights</span>
            <h2>Gates That Work</h2>
        </div>
        <div class="svc-feature-grid">
            <div class="svc-feature">
                <i class="fa-solid fa-gears"></i>
                <h5>Automation Ready</h5>
                <p>Frames and tracks prepared for gate motors, remotes and intercoms.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-arrows-left-right"></i>
                <h5>Smooth Operation</h5>
                <p>Quality hinges, rollers and latches so your gate opens easily without sagging.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-car"></i>
                <h5>Safe Driveways</h5>
                <p>Keeps kids and pets in and unwanted visitors and vehicles out.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-pen-ruler"></i>
                <h5>Your Design</h5>
                <p>Modern slats, classic pickets or decorative iron, finished in the colour you choose.</p>
            </div>
        </div>
    </div>
</section>

<section class="svc-related section">
    <div class="container">
        <div class="svc-heading">
            <div>
                <span class="svc-label">More From IR Iron Door</span>
                <h2>Other Services</h2>
            </div>
            <a href="our_services" class="btn btn-primary btn-custom-mid">all services</a>
        </div>
        <div class="svc-related-grid">
            <a href="commercial-metalworks" class="svc-related-card">
                <img src="images/service_1.jpg" alt="Commercial metalwork Melbourne">
                <span>Commercial Metalwork<i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="residential-metalworks" class="svc-related-card">
                <img src="images/service_2.jpg" alt="Residential metalwork Melbourne">
                <span>Residential Metalwork<i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="metal-doors" class="svc-related-card">
                <img src="images/service_3.jpg" alt="Steel doors Melbourne">
                <span>Metal Doors<i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="fences" class="svc-related-card">
                <img src="images/service_4.jpg" alt="Steel slat fencing Melbourne">
                <span>Fences<i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="doors" class="svc-related-card">
                <img src="images/service_6.jpg" alt="Entry and security doors Melbourne">
                <span>Doors<i class="fa-solid fa-arrow-right"></i></span>
            </a>
        </div>
    </div>
</section>

<section class="svc-cta">
    <div class="container">
        <div class="svc-cta-box">
            <div>
                <h3>Looking for a New Gate?</h3>
                <p>Talk to our team <?= $work_day; ?>, <?= $work_hrs; ?>, for honest advice and a free, no-obligation quote.</p>
            </div>
            <div class="svc-cta-actions">
                <a href="request_a_quote" class="btn btn-primary btn-custom-mid">get a free quote</a>
                <a href="tel:<?= str_replace(' ', '', $phone); ?>" class="btn btn-custom-mid btn-cta-phone"><i class="fa-solid fa-phone"></i> <?= $phone; ?></a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
