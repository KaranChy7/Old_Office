<?php
$page = 'our_services';
$page_title = "Our Services | Metal Doors, Gates, Fences & Metalwork";
include 'includes/header.php'; ?>

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h1>Our Services</h1>
        </div>
    </div>
</div>

<section class="svc-overview section">
    <div class="container">
        <div class="svc-heading">
            <span class="svc-label">What We Make</span>
            <h2>Metalwork Services</h2>
            <p>From a single security door to a full commercial project, <?= $company; ?> designs, fabricates and
                installs steel and iron products for homes and businesses. Pick a service below to learn more.</p>
        </div>
        <div class="svc-card-grid">
            <a href="commercial-metalworks" class="svc-card">
                <div class="svc-card-image">
                    <img src="images/service_1.jpg" alt="Commercial metalwork and steel fabrication Melbourne">
                    <span class="num">01</span>
                </div>
                <div class="svc-card-body">
                    <h3>Commercial Metalwork</h3>
                    <p>Steel fabrication for workplaces, including stairs, platforms, guard rails, cages and custom
                        frames built to handle daily wear.</p>
                    <span class="svc-more">Learn more <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </a>
            <a href="residential-metalworks" class="svc-card">
                <div class="svc-card-image">
                    <img src="images/service_2.jpg" alt="Modern balustrades and handrails Melbourne">
                    <span class="num">02</span>
                </div>
                <div class="svc-card-body">
                    <h3>Residential Metalwork</h3>
                    <p>Handrails, balcony balustrades, window grilles and decorative iron that make your home safer
                        and finish it with style.</p>
                    <span class="svc-more">Learn more <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </a>
            <a href="metal-doors" class="svc-card">
                <div class="svc-card-image">
                    <img src="images/service_3.jpg" alt="Steel doors for commercial buildings Melbourne">
                    <span class="num">03</span>
                </div>
                <div class="svc-card-body">
                    <h3>Metal Doors</h3>
                    <p>Solid steel single and double doors for exits, plant rooms and storage areas, fitted with
                        heavy-duty hardware.</p>
                    <span class="svc-more">Learn more <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </a>
            <a href="fences" class="svc-card">
                <div class="svc-card-image">
                    <img src="images/service_4.jpg" alt="Modern steel slat fencing Melbourne">
                    <span class="num">04</span>
                </div>
                <div class="svc-card-body">
                    <h3>Fences</h3>
                    <p>Tubular, spear-top and palisade fencing for front yards, boundaries and commercial
                        perimeters, on flat or sloping ground.</p>
                    <span class="svc-more">Learn more <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </a>
            <a href="gates" class="svc-card">
                <div class="svc-card-image">
                    <img src="images/service_5.jpg" alt="Driveway and sliding gates Melbourne">
                    <span class="num">05</span>
                </div>
                <div class="svc-card-body">
                    <h3>Gates</h3>
                    <p>Driveway, sliding, pedestrian and site gates that run smoothly and come ready for gate
                        motors.</p>
                    <span class="svc-more">Learn more <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </a>
            <a href="doors" class="svc-card">
                <div class="svc-card-image">
                    <img src="images/service_6.jpg" alt="Modern entry doors Melbourne">
                    <span class="num">06</span>
                </div>
                <div class="svc-card-body">
                    <h3>Doors</h3>
                    <p>Wrought iron entry doors and security screen doors that welcome guests and keep intruders
                        out.</p>
                    <span class="svc-more">Learn more <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="svc-features section">
    <div class="container">
        <div class="svc-heading">
            <span class="svc-label">Why IR Iron Door</span>
            <h2>Quality You Can See</h2>
        </div>
        <div class="svc-feature-grid">
            <div class="svc-feature">
                <i class="fa-solid fa-helmet-safety"></i>
                <h5>Highly Experienced</h5>
                <p>Skilled fabricators and installers who work with steel and iron every day.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-ruler-combined"></i>
                <h5>Made to Measure</h5>
                <p>No off-the-shelf sizes. Everything is built to fit your property.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-spray-can"></i>
                <h5>Durable Finishes</h5>
                <p>Powder-coated in black, silver grey or your chosen colour for long-lasting protection.</p>
            </div>
            <div class="svc-feature">
                <i class="fa-solid fa-map-location-dot"></i>
                <h5>Local to Melbourne</h5>
                <p>Based in Campbellfield and working within 100 km, across metro and regional areas.</p>
            </div>
        </div>
    </div>
</section>

<section class="svc-cta section">
    <div class="container">
        <div class="svc-cta-box">
            <div>
                <h3>Not Sure What You Need?</h3>
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
