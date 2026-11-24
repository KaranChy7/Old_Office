<section class="page-about">
    <div class="page-about__container">

        <!-- Our story -->
        <div class="page-about__hero" id="our-story">

            <div class="page-about__hero-content" data-reveal="left">
                <div class="section-badge"><?= icon('broom') ?>About us</div>

                <h2 class="page-about__title">Experienced cleaners for Sydney homes and businesses.</h2>

                <p class="page-about__text"><?= e($company) ?> is a residential and commercial cleaning business
                    based in <?= e($address) ?>, servicing <?= e($service_area) ?>. With more than 15 years of
                    experience, we clean offices, houses, rental properties, carpets, windows and commercial premises.</p>

                <p class="page-about__text">We are fully insured and available <?= e($work_hrs) ?>, <?= e($work_day) ?>,
                    so you can book the clean you need at a time that suits you &mdash; day, night or weekend.</p>

                <div class="page-about__stats">
                    <div class="page-about__stat">
                        <div class="page-about__stat-number"><?= e($exp) ?></div>
                        <div class="page-about__stat-label">Years experience</div>
                    </div>
                    <div class="page-about__stat">
                        <div class="page-about__stat-number">24/7</div>
                        <div class="page-about__stat-label">Availability</div>
                    </div>
                    <div class="page-about__stat">
                        <div class="page-about__stat-number"><?= count($services) ?></div>
                        <div class="page-about__stat-label">Cleaning services</div>
                    </div>
                </div>
            </div>

            <div class="page-about__media" data-reveal="right" data-delay="150">
                <img src="images/about.jpg" alt="Cleaner wiping a kitchen bench with a sponge" class="page-about__image">
            </div>

        </div>

        <!-- What we offer -->
        <div class="section-badge" data-reveal><?= icon('award') ?>Why choose us</div>
        <h2 class="page-about__title page-about__title--secondary" data-reveal data-delay="100">What you get with
            Old School Cleaning.</h2>

        <div class="page-about__grid">

            <div class="page-about__card" data-reveal data-delay="0">
                <div class="page-about__card-icon"><?= icon('award') ?></div>
                <h3 class="page-about__card-title"><?= e($exp) ?> years experience</h3>
                <p class="page-about__card-desc">More than 15 years of residential and commercial cleaning.</p>
            </div>

            <div class="page-about__card" data-reveal data-delay="50">
                <div class="page-about__card-icon"><?= icon('clock') ?></div>
                <h3 class="page-about__card-title">Open around the clock</h3>
                <p class="page-about__card-desc"><?= e($work_hrs) ?>, <?= e($work_day) ?> &mdash; we work around you.</p>
            </div>

            <div class="page-about__card" data-reveal data-delay="100">
                <div class="page-about__card-icon"><?= icon('shield') ?></div>
                <h3 class="page-about__card-title">Fully insured</h3>
                <p class="page-about__card-desc">Every job is carried out by a fully insured team.</p>
            </div>

            <div class="page-about__card" data-reveal data-delay="150">
                <div class="page-about__card-icon"><?= icon('map') ?></div>
                <h3 class="page-about__card-title">Local to Sydney</h3>
                <p class="page-about__card-desc">Servicing <?= e($service_area) ?>.</p>
            </div>

        </div>

    </div>
</section>
