<!-- ═══════════════════════════════════════
     GALLERY PREVIEW
══════════════════════════════════════ -->
<section class="gallery" id="gallery">
    <div class="gallery__container">

        <div class="gallery__header">
            <div class="gallery__badge" data-reveal>Our work</div>
            <h2 data-reveal data-delay="100">Projects gallery.</h2>
            <p data-reveal data-delay="200">Solar panels, gutters, windows and pressure washing &mdash; a look
                at some of our recent work.</p>
        </div>

        <div class="gallery__grid">

            <?php
            // Client's own photos (uploaded 2026-11-04)
            $preview_images = [
                ['images/gutter-cleaning.png', 'Roof gutter before and after cleaning'],
                ['images/aluminum-gutter-guard.jpg', 'Gutter before and after aluminium gutter guard is fitted'],
                ['images/solarpanel.jpg', 'Bird mesh fitted around rooftop solar panels'],
                ['images/window-cleaning-detail.jpg', 'Cleaning a tall glass window with a water-fed pole'],
                ['images/roof-pressure-wash.jpg', 'Pressure washing a terracotta tiled roof'],
                ['images/driveway-pressure-clean.jpg', 'Surface cleaner lifting grime off a concrete driveway'],
                ['images/solar-panel-cleaning-detail.jpg', 'Cleaning rooftop solar panels with a water-fed brush'],
                ['images/roof-pressure-wash-detail.jpg', 'Clean terracotta roof with solar panels after a pressure wash'],
            ];
            foreach ($preview_images as $i => [$src, $alt]): ?>
            <div class="gallery__item" data-reveal data-delay="<?= min($i, 2) * 80 ?>">
                <div class="gallery__photo">
                    <img src="<?= $src ?>" alt="<?= htmlspecialchars($alt) ?>">
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="gallery__cta-wrap" data-reveal>
            <a href="gallery.php" class="gallery__btn">
                see more
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon-sm">
                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z" />
                </svg>
            </a>
        </div>

    </div>
</section>
