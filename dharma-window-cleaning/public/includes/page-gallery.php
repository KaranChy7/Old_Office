<?php
// Client's own photos and job videos (uploaded 2026-11-04). Videos: [mp4, alt, category, poster].
$gallery_images = [
    ['images/gutter-cleaning.png', 'Roof gutter before and after cleaning', 'gutters'],
    ['images/gutter-cleaning.mp4', 'Clearing a gutter packed with leaves and debris', 'gutters', 'images/gutter-cleaning-video.jpg'],
    ['images/aluminum-gutter-guard.jpg', 'Gutter before and after aluminium gutter guard is fitted', 'gutters'],
    ['images/gutter-branches.jpg', 'Branches and plant growth pulled out of a blocked gutter', 'gutters'],
    ['images/window-cleaning-detail.jpg', 'Cleaning a tall glass window with a water-fed pole', 'windows'],
    ['images/solar-panel-cleaning-roof.mp4', 'Cleaning solar panels on a tiled roof', 'solar', 'images/solar-panel-cleaning.jpg'],
    ['images/solar-panel-cleaning.mp4', 'Water-fed brush cleaning rooftop solar panels', 'solar', 'images/solar-panel-cleaning-detail.jpg'],
    ['images/solarpanel.jpg', 'Bird mesh fitted around rooftop solar panels', 'solar'],
    ['images/solar-bird-proofing.mp4', 'Bird mesh keeping pigeons out from under solar panels', 'solar', 'images/solar-bird-pigeons.jpg'],
    ['images/solar-bird-mesh.mp4', 'Walk-around of bird mesh fitted to a solar array', 'solar', 'images/solar-bird-mesh.jpg'],
    ['images/roof-pressure-wash.mp4', 'Pressure washing a terracotta tiled roof', 'roof', 'images/roof-pressure-wash.jpg'],
    ['images/roof-pressure-wash-detail.jpg', 'Clean terracotta roof with solar panels after a pressure wash', 'roof'],
    ['images/roof-pressure-wash-brick.mp4', 'Pressure washing the roof of a brick home', 'roof', 'images/roof-pressure-wash-house.jpg'],
    ['images/driveway-pressure-clean.mp4', 'Surface cleaner lifting grime off a concrete driveway', 'driveway', 'images/driveway-pressure-clean.jpg'],
];
?>
<!-- ═══════════════════════════════════════
     GALLERY — FULL PROJECT SHOWCASE
══════════════════════════════════════ -->
<section class="gallery gallery--page" id="gallery-page">
    <div class="gallery__container">

        <div class="gallery__header gallery__header--center">
            <div class="gallery__badge" data-reveal>Our work</div>
            <h1 data-reveal data-delay="100">Projects gallery.</h1>
            <p data-reveal data-delay="200">Windows, gutters, roofs, solar panels and pressure washing &mdash; properties
                left spotless within <?= $radius ?> of <?= $suburb ?>, <?= $state ?>.</p>
        </div>

        <div class="gallery__grid gallery__grid--page">

            <?php foreach ($gallery_images as $i => $item):
                [$src, $alt, $cat] = $item;
                $poster = $item[3] ?? '';
                $delay = ($i % 4) * 60;
            ?>
            <div class="gallery__item" data-category="<?= htmlspecialchars($cat) ?>" data-reveal data-delay="<?= $delay ?>">
                <div class="gallery__photo">
                    <?php if ($poster): ?>
                    <video controls muted playsinline preload="metadata" poster="<?= htmlspecialchars($poster) ?>"
                        aria-label="<?= htmlspecialchars($alt) ?>">
                        <source src="<?= htmlspecialchars($src) ?>" type="video/mp4">
                    </video>
                    <?php else: ?>
                    <img src="<?= htmlspecialchars($src) ?>" alt="<?= htmlspecialchars($alt) ?>">
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>

        </div>

        <div class="gallery__page-cta" data-reveal>
            <h2>Like what you see?</h2>
            <p>Get a personalised quote for your cleaning needs today.</p>
            <div class="gallery__page-cta-actions">
                <a href="quote.php" class="gallery__btn">
                    Get a quote
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon-sm">
                        <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z" />
                    </svg>
                </a>
                <a href="tel:<?= $phone_link ?>" class="gallery__btn gallery__btn--outline">
                    Call <?= $phone ?>
                </a>
            </div>
        </div>

    </div>
</section>
