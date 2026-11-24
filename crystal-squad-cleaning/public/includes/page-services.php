<section class="page-services">
    <div class="page-services__container">

        <div class="page-services__header">
            <div class="section-badge" data-reveal><?= icon('broom') ?>Our services</div>
            <h2 class="page-services__title" data-reveal data-delay="100">Cleaning services across Sydney &amp;
                Bankstown.</h2>
            <p class="page-services__subtitle" data-reveal data-delay="200"><?= count($services) ?> residential and
                commercial cleaning services from one experienced, fully insured team &mdash; available
                <?= e($work_hrs) ?>, <?= e($work_day) ?>.</p>
        </div>

        <div class="page-services__grid">
            <?php foreach ($services as $i => $service): ?>
            <div class="page-services__card" id="<?= $service['slug'] ?>" data-reveal data-delay="<?= ($i % 4) * 50 ?>">
                <div class="page-services__card-media">
                    <img src="images/services/<?= $service['slug'] ?>.jpg" alt="<?= e($service['title']) ?> in Sydney" class="page-services__card-image" loading="lazy" />
                    <span class="page-services__card-icon"><?= icon($service['icon']) ?></span>
                </div>
                <span class="page-services__card-tag"><?= $service['tag'] ?></span>
                <h3 class="page-services__card-title"><?= e($service['title']) ?></h3>
                <p class="page-services__card-desc"><?= $service['desc'] ?></p>
                <a href="<?= $service['slug'] ?>.php" class="page-services__card-link" aria-label="View <?= e($service['title']) ?> details">
                    View details <?= icon('arrow') ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
