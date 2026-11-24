<?php
$page = 'our_services';
$page_title = "Iron Doors Melbourne | Entry & Security Screen Doors";
include 'includes/header.php'; ?>

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h1>Doors</h1>
        </div>
    </div>
</div>

<section class="svc-intro section">
    <div class="container">
        <div class="svc-intro-wrap">
            <div class="svc-intro-image">
                <img src="images/service_6.jpg" alt="Black double entry doors in Melbourne">
                <div class="svc-badge">
                    <i class="fa-solid fa-award"></i>
                    <div>
                        <strong>Free Quotes</strong>
                        <span>Within 100km of Campbellfield</span>
                    </div>
                </div>
            </div>
            <div class="svc-intro-text">
                <span class="svc-label">Doors</span>
                <h2>Iron Entry Doors</h2>
                <p>A custom iron door gives your home a striking entrance and real peace of mind.
                    <?= $company; ?> designs and builds wrought iron entry doors, security screen doors and decorative
                    iron doors for homes and shopfronts throughout Melbourne.</p>
                <p>Let fresh air in while keeping your home locked and secure, with scroll work, arched tops or clean
                    modern lines made to suit your doorway.</p>
                <ul class="svc-checklist">
                    <li>Wrought iron entry doors</li>
                    <li>Security screen doors</li>
                    <li>Arched & double doors</li>
                    <li>Shopfront security doors</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="svc-features section">
    <div class="container">
        <div class="svc-heading">
            <span class="svc-label">Highlights</span>
            <h2>Beauty and Security</h2>
        </div>
        <div class="svc-feature-grid">
            <div class="svc-feature">
                <i class="fa-solid fa-door-open"></i>
                <h5>Grand Entrance</h5>
                <p>Decorative iron detail that gives your home instant street appeal.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-user-shield"></i>
                <h5>Peace of Mind</h5>
                <p>Strong frames, mesh options and quality locks that help keep intruders out.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-wind"></i>
                <h5>Fresh Air</h5>
                <p>Leave the main door open for airflow and light while the security door stays locked.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-ruler-combined"></i>
                <h5>Perfect Fit</h5>
                <p>Built to your exact doorway, including arched, oversized and double openings.</p>
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
            <a href="gates" class="svc-related-card">
                <img src="images/service_5.jpg" alt="Steel gates Melbourne">
                <span>Gates<i class="fa-solid fa-arrow-right"></i></span>
            </a>
        </div>
    </div>
</section>

<section class="svc-cta">
    <div class="container">
        <div class="svc-cta-box">
            <div>
                <h3>Want a Custom Iron Door?</h3>
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
