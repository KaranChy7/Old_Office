<?php
// Single service page body. The page file sets $service before including this.
?>
<section class="service-detail">
    <div class="service-detail__container">

        <!-- Main content -->
        <div class="service-detail__main">
            <div class="service-detail__media" data-reveal>
                <img src="images/services/<?= $service['slug'] ?>.jpg" alt="<?= e($service['title']) ?> in Sydney and Bankstown" class="service-detail__image" />
                <span class="service-detail__media-icon"><?= icon($service['icon']) ?></span>
            </div>

            <div class="section-badge" data-reveal><?= icon($service['icon']) ?><?= $service['tag'] ?></div>
            <h2 class="service-detail__title" data-reveal data-delay="100"><?= e($service['title']) ?> in Sydney &amp; Bankstown</h2>

            <?php foreach ($service['intro'] as $paragraph): ?>
            <p class="service-detail__text" data-reveal data-delay="150"><?= $paragraph ?></p>
            <?php endforeach; ?>

            <div class="service-detail__included" data-reveal data-delay="200">
                <h3 class="service-detail__subtitle"><?= icon('list') ?>What we cover</h3>
                <ul class="service-detail__points">
                    <?php foreach ($service['points'] as $point): ?>
                    <li><?= icon('check') ?><?= e($point) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="service-detail__included" data-reveal data-delay="200">
                <h3 class="service-detail__subtitle"><?= icon('award') ?>Why choose us for <?= e(strtolower($service['title'])) ?></h3>
                <ul class="service-detail__points">
                    <li><?= icon('check') ?><?= e($exp) ?> years experience</li>
                    <li><?= icon('check') ?>Fully insured</li>
                    <li><?= icon('check') ?>Available <?= e($work_hrs) ?>, <?= e($work_day) ?></li>
                    <li><?= icon('check') ?>Servicing <?= e($service_area) ?></li>
                </ul>
            </div>

            <div class="service-detail__actions" data-reveal data-delay="250">
                <a href="quote.php" class="service-detail__btn-primary"><?= icon('send') ?>Get a free quote</a>
                <a href="tel:<?= str_replace(' ', '', $phone) ?>" class="service-detail__btn-secondary"><?= icon('phone') ?>Call <?= e($phone) ?></a>
            </div>
        </div>

        <!-- Sidebar -->
        <aside class="service-detail__sidebar">
            <div class="service-detail__box" data-reveal="right">
                <h2 class="service-detail__box-title">Our Services</h2>
                <ul class="service-detail__list">
                    <?php foreach ($services as $item): ?>
                    <li>
                        <a href="<?= $item['slug'] ?>.php"
                            class="service-detail__list-link <?= $item['slug'] === $service['slug'] ? 'active' : '' ?>">
                            <span class="service-detail__list-icon"><?= icon($item['icon']) ?></span>
                            <?= e($item['title']) ?>
                            <?= icon('arrow', 'icon service-detail__list-arrow') ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="service-detail__box service-detail__box--contact" data-reveal="right" data-delay="100">
                <h2 class="service-detail__box-title">Need a cleaner?</h2>
                <p class="service-detail__box-text">Call us any time or send a request for a free quote.</p>
                <ul class="service-detail__contact">
                    <li>
                        <span class="service-detail__contact-icon"><?= icon('phone') ?></span>
                        <a href="tel:<?= str_replace(' ', '', $phone) ?>"><?= e($phone) ?></a>
                    </li>
                    <?php if ($email): ?>
                    <li>
                        <span class="service-detail__contact-icon"><?= icon('mail') ?></span>
                        <a href="mailto:<?= e($email) ?>"><?= e($email) ?></a>
                    </li>
                    <?php endif; ?>
                    <li>
                        <span class="service-detail__contact-icon"><?= icon('clock') ?></span>
                        <span><?= e($work_hrs) ?>, <?= e($work_day) ?></span>
                    </li>
                    <li>
                        <span class="service-detail__contact-icon"><?= icon('map') ?></span>
                        <span><?= e($service_area) ?></span>
                    </li>
                </ul>
                <a href="quote.php" class="service-detail__box-btn"><?= icon('send') ?>Get a free quote</a>
            </div>
        </aside>

    </div>
</section>
