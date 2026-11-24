<?php require_once __DIR__ . '/services-data.php'; ?>
<!-- ═══════════════════════════════════════
     SERVICES
══════════════════════════════════════ -->
<section class="pp-services" id="services">
    <div class="pp-container">
        <div class="pp-section-head">
            <p class="pp-eyebrow">Our Services</p>
            <h2 class="pp-title">Every Surface, Inside and Out.</h2>
        </div>

        <div class="pp-services__grid">
            <?php foreach ($pp_services_data as $slug => $s): ?>
                <article class="pp-service-card">
                    <div class="pp-service-card__media">
                        <img src="images/<?= $s['img'] ?>" alt="<?= $s['alt'] ?>" loading="lazy" />
                    </div>
                    <span class="pp-service-card__icon pp-bg--<?= $s['color'] ?>"><?= pp_icon($s['icon']) ?></span>
                    <div class="pp-service-card__body">
                        <h3><a href="<?= $slug ?>.php" class="pp-service-card__link"><?= $s['title'] ?></a></h3>
                        <p><?= $s['summary'] ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
