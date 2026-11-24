<?php
// Areas from the business details. Every service is available in each one.
$service_regions = [
    ['title' => 'Sydney', 'icon' => 'city', 'colour' => 'green'],
    ['title' => 'Bankstown', 'icon' => 'pin', 'colour' => 'blue'],
    ['title' => 'Surrounding Areas', 'icon' => 'map', 'colour' => 'amber'],
];
?>
<section class="service-areas">
    <div class="service-areas__container">

        <!-- Intro -->
        <div class="service-areas__intro">
            <div class="section-badge" data-reveal><?= icon('map') ?>Where we work</div>
            <h2 class="service-areas__title" data-reveal data-delay="100">Cleaning services in Sydney, Bankstown and
                surrounding areas.</h2>
            <p class="service-areas__text" data-reveal data-delay="200"><?= e($company) ?> provides residential and
                commercial cleaning across <?= e($service_area) ?>. Every one of our services is available in each
                area, <?= e($work_hrs) ?>, <?= e($work_day) ?>.</p>

            <div class="service-areas__tags" data-reveal data-delay="300">
                <span><?= icon('residence') ?>Residential cleaning</span>
                <span><?= icon('building') ?>Commercial cleaning</span>
                <span><?= icon('clock') ?>Open 24/7</span>
                <span><?= icon('shield') ?>Fully insured</span>
            </div>
        </div>

        <!-- Areas -->
        <div class="service-areas__grid">
            <?php foreach ($service_regions as $i => $region): ?>
            <div class="service-areas__region service-areas__region--<?= $region['colour'] ?>" data-reveal
                data-delay="<?= ($i % 2) * 100 ?>">
                <div class="service-areas__region-head">
                    <span class="service-areas__region-icon"><?= icon($region['icon']) ?></span>
                    <h3 class="service-areas__region-title">Cleaning in <?= e($region['title']) ?></h3>
                    <span class="service-areas__region-count"><?= count($services) ?> services</span>
                </div>
                <ul class="service-areas__list">
                    <?php foreach ($services as $service): ?>
                    <li><a href="<?= $service['slug'] ?>.php"><?= icon('check') ?><?= e($service['title']) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- CTA -->
        <div class="service-areas__cta" data-reveal>
            <div>
                <h3 class="service-areas__cta-title">Not sure if we cover your area?</h3>
                <p class="service-areas__cta-text">Call us any time and we'll let you know straight away.</p>
            </div>
            <div class="service-areas__cta-actions">
                <a href="tel:<?= str_replace(' ', '', $phone) ?>"
                    class="service-areas__btn"><?= icon('phone') ?><?= e($phone) ?></a>
                <a href="quote.php" class="service-areas__btn service-areas__btn--light"><?= icon('send') ?>Get a Free
                    Quote</a>
            </div>
        </div>

    </div>
</section>
