<?php
$page = 'our_services';
$page_title = "Metal Doors Melbourne | Steel & Security Doors";
include 'includes/header.php'; ?>

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h1>Metal Doors</h1>
        </div>
    </div>
</div>

<section class="svc-intro section">
    <div class="container">
        <div class="svc-intro-wrap">
            <div class="svc-intro-image">
                <img src="images/service_3.jpg" alt="Steel double door on a commercial building in Melbourne">
                <div class="svc-badge">
                    <i class="fa-solid fa-award"></i>
                    <div>
                        <strong>Free Quotes</strong>
                        <span>Within 100km of Campbellfield</span>
                    </div>
                </div>
            </div>
            <div class="svc-intro-text">
                <span class="svc-label">Metal Doors</span>
                <h2>Heavy-Duty Steel Doors</h2>
                <p>When an opening needs real strength, a steel door is the answer. <?= $company; ?> builds and
                    installs metal doors for warehouses, factories, plant rooms, switch rooms, shops and homes that
                    need a higher level of security.</p>
                <p>Single or double leaf, solid or vented, each door is built with a rigid steel frame and fitted with
                    quality hinges, closers and locks to suit how it will be used.</p>
                <ul class="svc-checklist">
                    <li>Single & double steel doors</li>
                    <li>Exit & personnel doors</li>
                    <li>Plant room & vented doors</li>
                    <li>High-security entries</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="svc-features section">
    <div class="container">
        <div class="svc-heading">
            <span class="svc-label">Highlights</span>
            <h2>Why Steel Doors</h2>
        </div>
        <div class="svc-feature-grid">
            <div class="svc-feature">
                <i class="fa-solid fa-lock"></i>
                <h5>Hard to Break</h5>
                <p>Solid steel leaves and frames that resist forced entry far better than timber or glass.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-warehouse"></i>
                <h5>Built for Traffic</h5>
                <p>Stands up to daily knocks, trolleys and constant opening on busy commercial sites.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-key"></i>
                <h5>Hardware Options</h5>
                <p>Fitted with deadlocks, panic bars, closers or keypad-ready strikes to suit the opening.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-cloud-rain"></i>
                <h5>Weather Resistant</h5>
                <p>Primed and powder coated to resist rust and fading in Melbourne's changing weather.</p>
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
            <a href="fences" class="svc-related-card">
                <img src="images/service_4.jpg" alt="Steel slat fencing Melbourne">
                <span>Fences<i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="gates" class="svc-related-card">
                <img src="images/service_5.jpg" alt="Steel gates Melbourne">
                <span>Gates<i class="fa-solid fa-arrow-right"></i></span>
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
                <h3>Need a Steel Door?</h3>
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
