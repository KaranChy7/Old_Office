<?php
$page = 'our_services';
$page_title = "Commercial Metalwork Melbourne | Steel Fabrication";
include 'includes/header.php'; ?>

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h1>Commercial Metalwork</h1>
        </div>
    </div>
</div>

<section class="svc-intro section">
    <div class="container">
        <div class="svc-intro-wrap">
            <div class="svc-intro-image">
                <img src="images/service_1.jpg" alt="Commercial steel staircase and handrails in Melbourne">
                <div class="svc-badge">
                    <i class="fa-solid fa-award"></i>
                    <div>
                        <strong>Free Quotes</strong>
                        <span>Within 100km of Campbellfield</span>
                    </div>
                </div>
            </div>
            <div class="svc-intro-text">
                <span class="svc-label">Commercial Metalwork</span>
                <h2>Steelwork for Business</h2>
                <p>Factories, warehouses, shops and industrial sites need metalwork that copes with heavy use and
                    keeps people and stock secure. <?= $company; ?> fabricates and installs commercial steelwork across
                    Melbourne, built to your site measurements and the job it has to do.</p>
                <p>We handle one-off items and larger packages of work, and schedule installation to keep disruption to
                    your operations as low as possible.</p>
                <ul class="svc-checklist">
                    <li>Security grilles & screens</li>
                    <li>Stairs, platforms & handrails</li>
                    <li>Bollards & guard rails</li>
                    <li>Custom brackets & frames</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="svc-features section">
    <div class="container">
        <div class="svc-heading">
            <span class="svc-label">Highlights</span>
            <h2>Made for Heavy Use</h2>
        </div>
        <div class="svc-feature-grid">
            <div class="svc-feature">
                <i class="fa-solid fa-industry"></i>
                <h5>Industrial Strength</h5>
                <p>Heavy-gauge steel and solid welds for sites with forklifts, trucks and constant foot traffic.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-shield-halved"></i>
                <h5>Site Security</h5>
                <p>Grilles, cages and screens that protect windows, stock rooms, plant and equipment.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-helmet-safety"></i>
                <h5>Safer Workplaces</h5>
                <p>Handrails, guard rails and platforms that help keep staff and visitors safe around your site.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-clock"></i>
                <h5>Planned Installs</h5>
                <p>Installation timed around your trading or production hours to keep your business moving.</p>
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
                <h3>Need Commercial Steelwork?</h3>
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
