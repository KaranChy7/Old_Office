<section class="how-we-work" id="how-we-work">
    <div class="how-we-work__container">

        <div class="how-we-work__content">

            <div class="section-badge section-badge--dark" data-reveal><?= icon('list') ?>How it works</div>

            <h2 class="how-we-work__title" data-reveal data-delay="100">Booking a clean is simple.</h2>

            <p class="how-we-work__subtitle" data-reveal data-delay="200">
                Whether it is your home, office or business premises, getting a clean booked takes just three
                steps &mdash; any time of the day or night.
            </p>

            <div class="how-we-work__steps" data-reveal data-delay="300">

                <div class="how-we-work__step">
                    <span class="how-we-work__step-icon"><?= icon('phone') ?></span>
                    <div class="how-we-work__step-content">
                        <span class="how-we-work__step-num">Step 01</span>
                        <h3 class="how-we-work__step-title">Tell us what needs cleaning</h3>
                        <p class="how-we-work__step-desc">Call <?= e($phone) ?> or send a quote request with your
                            suburb and the type of cleaning you need.</p>
                    </div>
                </div>

                <div class="how-we-work__step">
                    <span class="how-we-work__step-icon"><?= icon('calendar') ?></span>
                    <div class="how-we-work__step-content">
                        <span class="how-we-work__step-num">Step 02</span>
                        <h3 class="how-we-work__step-title">Pick a time that suits you</h3>
                        <p class="how-we-work__step-desc">We are open <?= e($work_hrs) ?>, <?= e($work_day) ?>, so we
                            can clean early, late or on weekends.</p>
                    </div>
                </div>

                <div class="how-we-work__step">
                    <span class="how-we-work__step-icon"><?= icon('sparkle') ?></span>
                    <div class="how-we-work__step-content">
                        <span class="how-we-work__step-num">Step 03</span>
                        <h3 class="how-we-work__step-title">Enjoy a clean space</h3>
                        <p class="how-we-work__step-desc">Our experienced, fully insured team gets the job done
                            so you can get back to your day.</p>
                    </div>
                </div>

            </div>

        </div>

        <div class="how-we-work__media" data-reveal="right" data-delay="150">
            <div class="how-we-work__image-wrap">
                <img src="images/2.jpg" alt="Mopping a timber floor during a house clean in Sydney" class="how-we-work__image" loading="lazy">
            </div>
            <div class="how-we-work__tag">
                <span class="how-we-work__tag-icon"><?= icon('clock') ?></span>
                <span>
                    <span class="how-we-work__tag-title">Open <?= e($work_hrs) ?></span>
                    <span class="how-we-work__tag-sub"><?= e($work_day) ?></span>
                </span>
            </div>
        </div>

    </div>
</section>
