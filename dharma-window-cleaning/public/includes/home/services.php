<?php require_once 'includes/services-contain.php'; ?>
<!-- ═══════════════════════════════════════
     SERVICES
══════════════════════════════════════ -->
<section class="services" id="services">
    <div class="services__container">

        <div class="services__header">
            <div class="services__badge" data-reveal>Our Services</div>
            <h2 data-reveal data-delay="100">Expert cleaning for every property.</h2>
            <p data-reveal data-delay="200">
                We offer expert cleaning services for residential, commercial and strata properties, ensuring
                immaculate results with a focus on quality and reliability. Serving within an <?= $radius ?> radius
                of <?= $suburb ?>, <?= $state ?>, our experienced team guarantees a spotless space every time.
            </p>
        </div>

        <div class="services__grid">

            <?php $i = 0; foreach ($services as $slug => $svc): ?>
            <a href="<?= $slug ?>.php" class="services__card" data-reveal data-delay="<?= $i * 50 ?>">
                <div class="services__card-media">
                    <?php if (!empty($svc['video'])): ?>
                    <!-- Client job video: plays muted while the card is on screen (main.js) -->
                    <video class="services__card-image" data-inview-play muted loop playsinline preload="none"
                        poster="<?= $svc['video_poster'] ?>" aria-label="<?= htmlspecialchars($svc['hero_alt']) ?>">
                        <source src="<?= $svc['video'] ?>" type="video/mp4">
                    </video>
                    <?php else: ?>
                    <img src="<?= $svc['hero_image'] ?>" alt="<?= htmlspecialchars($svc['hero_alt']) ?>" class="services__card-image">
                    <?php endif; ?>
                </div>
                <div class="services__card-body">
                    <h3><?= htmlspecialchars($svc['title']) ?></h3>
                    <p><?= htmlspecialchars($svc['tagline']) ?></p>
                    <span class="services__card-link">
                        View details
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z" />
                        </svg>
                    </span>
                </div>
            </a>
            <?php $i++; endforeach; ?>

        </div>

    </div>
</section>
