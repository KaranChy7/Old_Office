<?php
require_once __DIR__ . '/../gallery-data.php';

// Home page shows 3 blocks only: the first job from each group. The rest are on gallery.php
$home_gallery = [];
foreach ($gallery_groups as $group) {
    $home_gallery[] = $group['items'][0];
}
?>
<section class="gallery" id="gallery">
    <div class="gallery__container">

        <div class="gallery__header">
            <div class="section-badge" data-reveal><?= icon('sparkle') ?>Our work</div>
            <h2 class="gallery__title" data-reveal data-delay="100">Before &amp; after: real cleaning jobs.</h2>
            <p class="gallery__subtitle" data-reveal data-delay="200">Kitchens, bathrooms and bedrooms &mdash; photos
                from homes we have cleaned and organised across <?= e($service_area) ?>.</p>
        </div>

        <div class="gallery__grid">
            <?php foreach ($home_gallery as $i => [$caption, $panels]): ?>
            <?php gallery_card($caption, $panels, $i * 80); ?>
            <?php endforeach; ?>
        </div>

        <div class="gallery__cta-wrap" data-reveal>
            <a href="gallery.php" class="gallery__btn"><?= icon('sparkle') ?>View full gallery</a>
        </div>

    </div>
</section>
