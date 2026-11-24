<?php
$page = 'our_services';
$page_title = "Residential Metalwork Melbourne | Balustrades & Handrails";
include 'includes/header.php'; ?>

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h1>Residential Metalwork</h1>
        </div>
    </div>
</div>

<section class="svc-intro section">
    <div class="container">
        <div class="svc-intro-wrap">
            <div class="svc-intro-image">
                <img src="images/service_2.jpg" alt="Modern stair balustrade with steel handrail">
                <div class="svc-badge">
                    <i class="fa-solid fa-award"></i>
                    <div>
                        <strong>Free Quotes</strong>
                        <span>Within 100km of Campbellfield</span>
                    </div>
                </div>
            </div>
            <div class="svc-intro-text">
                <span class="svc-label">Residential Metalwork</span>
                <h2>Steel for Your Home</h2>
                <p>The right metalwork makes a home safer and finishes it off properly. <?= $company; ?> designs and
                    builds custom steel and wrought iron pieces for houses, townhouses and units across Melbourne, from
                    a single handrail to a full set of balcony balustrades.</p>
                <p>Choose a clean modern profile or a traditional decorative style, and we will build it to suit your
                    home and finish it in a colour that matches.</p>
                <ul class="svc-checklist">
                    <li>Balustrades & handrails</li>
                    <li>Window & security grilles</li>
                    <li>Pergola & carport frames</li>
                    <li>Decorative iron features</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="svc-features section">
    <div class="container">
        <div class="svc-heading">
            <span class="svc-label">Highlights</span>
            <h2>Style With Strength</h2>
        </div>
        <div class="svc-feature-grid">
            <div class="svc-feature">
                <i class="fa-solid fa-house"></i>
                <h5>Suits Your Home</h5>
                <p>Designs matched to the age, style and colours of your property, inside and out.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-stairs"></i>
                <h5>Safe Stairs & Balconies</h5>
                <p>Sturdy rails and balustrades that give your family a firm, safe hold on every level.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-palette"></i>
                <h5>Colour Matched</h5>
                <p>Powder coated in black, silver grey, charcoal or a custom colour of your choice.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-ruler-combined"></i>
                <h5>Made to Measure</h5>
                <p>Every piece is built from on-site measurements for a neat fit with no gaps.</p>
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
                <h3>Planning Metalwork at Home?</h3>
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
