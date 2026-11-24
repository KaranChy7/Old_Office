<?php
// Areas from the business details. Full details live on service-areas.php
$home_areas = [
    ['Sydney', 'green'],
    ['Bankstown', 'blue'],
    ['Surrounding areas', 'amber'],
];
?>
<section class="home-suburbs" id="service-suburbs">
    <div class="home-suburbs__container">

        <div class="home-suburbs__intro">
            <div class="section-badge" data-reveal><?= icon('map') ?>Service areas</div>
            <h2 class="home-suburbs__title" data-reveal data-delay="100">Cleaning across Sydney &amp; Bankstown</h2>
            <p class="home-suburbs__text" data-reveal data-delay="200">We provide residential and commercial cleaning
                in <?= e($service_area) ?> &mdash; <?= e($work_hrs) ?>, <?= e($work_day) ?>.</p>
        </div>

        <ul class="home-suburbs__list" data-reveal data-delay="300">
            <?php foreach ($home_areas as $area): ?>
            <li class="home-suburbs__chip home-suburbs__chip--<?= $area[1] ?>"><?= icon('pin') ?><?= e($area[0]) ?></li>
            <?php endforeach; ?>
        </ul>

        <div class="home-suburbs__actions" data-reveal>
            <a href="service-areas.php" class="home-suburbs__btn"><?= icon('map') ?>View Service Areas</a>
        </div>

    </div>
</section>
