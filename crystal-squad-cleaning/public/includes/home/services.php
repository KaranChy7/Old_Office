<?php
// The home page shows 6 services only. The full list is on services.php
$home_slugs    = ['office-cleaning', 'end-of-lease-cleaning', 'house-cleaning', 'carpet-cleaning', 'window-cleaning', 'commercial-cleaning'];
$home_services = [];
foreach ($home_slugs as $slug) {
    $home_services[] = find_service($services, $slug);
}
?>
<section class="services" id="services">
    <div class="services__container">

        <div class="services__header">
            <div class="section-badge" data-reveal><?= icon('broom') ?>What we do</div>
            <h2 class="services__title" data-reveal data-delay="100">Residential &amp; commercial cleaning services.</h2>
            <p class="services__subtitle" data-reveal data-delay="200">
                Residential and commercial cleaning for homes and businesses across <?= e($service_area) ?>.
                Book one service or combine a few &mdash; we are available around the clock.
            </p>
        </div>

        <div class="services__grid">
            <?php foreach ($home_services as $i => $service): ?>
            <div class="services__card" data-reveal data-delay="<?= ($i % 3) * 50 ?>">
                <div class="services__card-media">
                    <img src="images/services/<?= $service['slug'] ?>.jpg" alt="<?= e($service['title']) ?> in Sydney" class="services__card-image" loading="lazy" />
                    <span class="services__card-icon"><?= icon($service['icon']) ?></span>
                </div>
                <div class="services__card-body">
                    <h3 class="services__card-title"><?= e($service['title']) ?></h3>
                    <p class="services__card-desc"><?= $service['desc'] ?></p>
                    <a href="<?= $service['slug'] ?>.php" class="services__card-link" aria-label="View <?= e($service['title']) ?> details">
                        View details <?= icon('arrow') ?>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="gallery__cta-wrap" data-reveal>
            <a href="services.php" class="gallery__btn"><?= icon('broom') ?>View all services</a>
        </div>
    </div>
</section>
