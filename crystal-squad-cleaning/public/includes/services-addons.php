<section class="services-addons">
    <div class="services-addons__container">
        <div class="services-addons__grid">

            <div class="services-addons__col" data-reveal="left">
                <div class="services-addons__badge"><?= icon('residence') ?>For your home</div>
                <h2 class="services-addons__title">Residential cleaning.</h2>
                <p class="services-addons__subtitle">Houses, units and rentals across <?= e($service_area) ?>.</p>

                <div class="services-addons__pills">
                    <a href="house-cleaning.php" class="services-addons__pill"><?= icon('check') ?>House cleaning</a>
                    <a href="end-of-lease-cleaning.php" class="services-addons__pill"><?= icon('check') ?>End of lease cleaning</a>
                    <a href="carpet-cleaning.php" class="services-addons__pill"><?= icon('check') ?>Carpet cleaning</a>
                    <a href="window-cleaning.php" class="services-addons__pill"><?= icon('check') ?>Window cleaning</a>
                </div>
            </div>

            <div class="services-addons__col" data-reveal="right" data-delay="150">
                <div class="services-addons__badge"><?= icon('building') ?>For your business</div>
                <h2 class="services-addons__title">Commercial cleaning.</h2>
                <p class="services-addons__subtitle">Offices, shops and workplaces cleaned
                    <?= e($work_hrs) ?>, <?= e($work_day) ?> &mdash; outside your business hours if you prefer.</p>

                <div class="services-addons__actions">
                    <a href="quote.php" class="services-addons__btn-primary"><?= icon('send') ?>Get a free quote</a>
                    <a href="tel:<?= str_replace(' ', '', $phone) ?>" class="services-addons__btn-secondary"><?= icon('phone') ?>Call <?= e($phone) ?></a>
                </div>
            </div>

        </div>
    </div>
</section>
