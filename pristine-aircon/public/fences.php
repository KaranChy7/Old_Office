<?php
$page = 'our_services';
$page_title = "Steel Fencing Melbourne | Tubular & Security Fences";
include 'includes/header.php'; ?>

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h1>Fences</h1>
        </div>
    </div>
</div>

<section class="svc-intro section">
    <div class="container">
        <div class="svc-intro-wrap">
            <div class="svc-intro-image">
                <img src="images/service_4.jpg" alt="Modern black steel slat fencing in Melbourne">
                <div class="svc-badge">
                    <i class="fa-solid fa-award"></i>
                    <div>
                        <strong>Free Quotes</strong>
                        <span>Within 100km of Campbellfield</span>
                    </div>
                </div>
            </div>
            <div class="svc-intro-text">
                <span class="svc-label">Fences</span>
                <h2>Strong Steel Fencing</h2>
                <p>A good fence marks your boundary, keeps people out and lifts the look of your property.
                    <?= $company; ?> fabricates and installs steel fencing for front yards, side boundaries, commercial
                    frontages and industrial sites across Melbourne.</p>
                <p>We set posts firmly, keep runs straight and level on sloping ground, and finish every panel to
                    stand up to years of sun and rain.</p>
                <ul class="svc-checklist">
                    <li>Tubular & flat-top fences</li>
                    <li>Spear-top & palisade fences</li>
                    <li>Front fences & boundaries</li>
                    <li>Commercial perimeter fencing</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="svc-features section">
    <div class="container">
        <div class="svc-heading">
            <span class="svc-label">Highlights</span>
            <h2>Fencing That Lasts</h2>
        </div>
        <div class="svc-feature-grid">
            <div class="svc-feature">
                <i class="fa-solid fa-shield-halved"></i>
                <h5>Better Security</h5>
                <p>Tall, rigid panels and spear tops that are hard to climb and hard to cut.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-eye"></i>
                <h5>Open or Private</h5>
                <p>Choose open bars to keep the view, or closer spacing and infill panels for privacy.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-mountain"></i>
                <h5>Any Ground</h5>
                <p>Raked or stepped panels that follow sloping blocks without unsightly gaps.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-brush"></i>
                <h5>Low Maintenance</h5>
                <p>Powder-coated steel that will not rot, warp or need painting like a timber fence.</p>
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
                <h3>Ready for a New Fence?</h3>
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
