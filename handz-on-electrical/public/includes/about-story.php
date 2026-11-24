<div class="about-story">

    <section class="about-hero">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-text">
                    <span class="eyebrow">About <?= $co ?></span>
                    <h2>Local lawn, garden &amp; property care, led by <span>Cameron Lostroh</span></h2>
                    <p class="lead">Hortsol is a lawn, garden and property maintenance business based in Haigslea,
                        Queensland. We give local home and acreage owners a dependable, organised outdoor maintenance
                        service.</p>
                    <p>From regular mowing on a suburban block to keeping acreage under control, we look after the
                        whole outdoor space. Every job is planned around the property and carried out with care, so
                        your lawns, gardens and grounds stay tidy and healthy all year round.</p>
                    <ul class="hero-list">
                        <li><i class="fas fa-check"></i> Lawn &amp; acreage mowing</li>
                        <li><i class="fas fa-check"></i> Garden care &amp; landscaping</li>
                        <li><i class="fas fa-check"></i> Weed management &amp; spraying</li>
                        <li><i class="fas fa-check"></i> Turf installation &amp; lawn renovation</li>
                    </ul>
                    <!-- <div class="hero-buttons">
                        <div class="btn-effect large">
                            <a href="page-quote">Request a Quote <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <div class="btn-effect large ghost">
                            <a href="tel:<?= $phone ?>"><i class="fas fa-phone-alt"></i> <?= $phone ?></a>
                        </div>
                    </div> -->
                </div>

                <div class="hero-facts">
                    <div class="fact">
                        <i class="fas fa-map-location-dot"></i>
                        <span>Service area</span>
                        <strong>Haigslea, Walloon &amp; surrounds</strong>
                    </div>
                    <div class="fact">
                        <i class="fas fa-house-chimney"></i>
                        <span>Properties</span>
                        <strong>Residential homes &amp; acreage</strong>
                    </div>
                    <div class="fact">
                        <i class="fas fa-calendar-check"></i>
                        <span>Bookings</span>
                        <strong>One-off jobs or regular visits</strong>
                    </div>
                    <div class="fact">
                        <i class="fas fa-shield-halved"></i>
                        <span>Peace of mind</span>
                        <strong>Licensed, insured &amp; police checked</strong>
                    </div>
                    <div class="fact wide">
                        <i class="fas fa-phone-alt"></i>
                        <span>Call <?= $work_day ?></span>
                        <strong><a href="tel:<?= $phone ?>"><?= $phone ?></a> &middot; <?= $work_hrs ?></strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet Cameron -->
    <section class="about-block">
        <div class="container">
            <div class="cameron-grid">
                <div class="profile-card">
                    <?php if (file_exists(__DIR__ . '/../images/about/cameron.jpg')) { ?>
                    <img src="images/about/cameron.jpg" alt="Cameron Lostroh, Director of <?= $co ?>">
                    <?php } else { ?>
                    <div class="initials">CL</div>
                    <?php } ?>
                    <div class="h4">Cameron Lostroh</div>
                    <p>Director, <?= $co ?></p>
                </div>

                <div class="cameron-text">
                    <span class="eyebrow">Meet Cameron</span>
                    <h3>The person behind Hortsol</h3>
                    <p>Cameron leads Hortsol, and you can expect clear communication from your first enquiry through
                        to the finished job. He holds an ACDC commercial operator licence and a ground spray licence,
                        so weed control and spraying work is carried out by a licensed operator, safely and
                        responsibly.</p>
                    <blockquote>
                        &ldquo;Cameron is incredibly responsive and knowledgeable about horticulture and gave great
                        advice about lawn and garden care.&rdquo;

                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- Where we work -->
    <section class="about-block grey">
        <div class="container">
            <div class="block-heading">
                <span class="eyebrow">Where we work</span>
                <h3>Haigslea, Walloon & the surrounding region</h3>
                <p>Not sure if you're in our area? Call <a href="tel:<?= $phone ?>"><?= $phone ?></a> and
                    we'll let you know.</p>
            </div>

            <?php if (!empty($service_areas)) { ?>
            <div class="area-suburbs">
                <h4>Suburbs we cover</h4>
                <ul>
                    <?php foreach ($service_areas as $suburb) { ?>
                    <li><i class="fas fa-location-dot"></i> <?= $suburb ?></li>
                    <?php } ?>
                </ul>
            </div>
            <?php } ?>

            <div class="area-cards">
                <div class="area-card">
                    <i class="fas fa-house"></i>
                    <h4>Residential homes</h4>
                    <p>Regular mowing, garden care, landscaping, turf and clean-ups for house blocks.</p>
                </div>
                <div class="area-card">
                    <i class="fas fa-tractor"></i>
                    <h4>Acreage & semi-rural blocks</h4>
                    <p>Larger-scale mowing, fence-line spraying and weed management for bigger properties.</p>
                </div>
            </div>

            <div class="area-map">
                <iframe src="<?= $map ?>" loading="lazy" title="Map of the Hortsol service area"></iframe>
            </div>
        </div>
    </section>

    <!-- How we work -->
    <section class="about-block">
        <div class="container">
            <div class="block-heading center">
                <span class="eyebrow">How we work</span>
                <h3>People &bull; Properties &bull; Process</h3>
                <p>Our brand philosophy is more than a tagline. It&rsquo;s how each job is run.</p>
            </div>

            <div class="steps">
                <div class="step">
                    <span class="step-num">01</span>
                    <h4>People</h4>
                    <p>Clear communication from your first call, and honest advice on the best way to get the
                        result you want.</p>
                </div>
                <div class="step">
                    <span class="step-num">02</span>
                    <h4>Properties</h4>
                    <p>Work planned around each property&rsquo;s size, access and condition, from a house block to
                        several acres.</p>
                </div>
                <div class="step">
                    <span class="step-num">03</span>
                    <h4>Process</h4>
                    <p>Structured, organised visits so standards stay consistent, one-off or ongoing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer story -->
    <section class="about-block no-top">
        <div class="container">
            <div class="story-card">
                <i class="fas fa-quote-left"></i>
                <div>
                    <span class="eyebrow">From a regular mow to a garden makeover</span>
                    <p class="story-text">Sharon first booked Hortsol to mow her newly purchased property. That led to
                        designing and landscaping the front garden, then the backyard and a returf.</p>
                    <blockquote>
                        &ldquo;They are considered in what they suggest and prompt and efficient. I would recommend
                        them every day of the week.&rdquo;

                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/testimonials.php'; ?>

    <!-- Closing call to action -->
    <section class="about-cta">
        <div class="container">
            <div class="cta-card">
                <div>
                    <h3>Talk to Cameron about your property</h3>
                    <p>Tell us what you need and we&rsquo;ll be in touch to arrange your quote.</p>
                </div>
                <div class="btn-effect large white">
                    <a href="page-quote">Request a Quote <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
</div>