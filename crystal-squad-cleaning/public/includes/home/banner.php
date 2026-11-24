<section class="banner" id="home">
    <!-- Background video (the photo shows while it loads) -->
    <video class="banner__video" autoplay muted loop playsinline preload="metadata" poster="images/banner-poster.jpg"
        aria-hidden="true">
        <source src="videos/banner.mp4" type="video/mp4" />
    </video>
    <div class="banner__overlay"></div>

    <div class="banner__container">

        <div class="banner__content">

            <div class="banner__badge" data-reveal>
                <?= icon('award') ?>
                <?= e($exp) ?> Years Experience &middot; Fully Insured
            </div>

            <h1 class="banner__title" data-reveal data-delay="100">
                Cleaning Services in Sydney &amp; Bankstown,

            </h1>

            <p class="banner__subtitle" data-reveal data-delay="200">
                <?= e($company) ?> provides residential and commercial cleaning across
                <?= e($service_area) ?>.
            </p>

            <div class="banner__actions" data-reveal data-delay="300">
                <a href="quote.php" class="banner__btn-primary">
                    <?= icon('send') ?>
                    Get a free quote
                </a>
                <a href="tel:<?= str_replace(' ', '', $phone) ?>" class="banner__btn-secondary">
                    <?= icon('phone') ?>
                    Call <?= e($phone) ?>
                </a>
            </div>
        </div>

    </div>

    <!-- Contact info cards -->
    <div class="banner__info">
        <a href="tel:<?= str_replace(' ', '', $phone) ?>" class="banner__info-card banner__info-card--green" data-reveal
            data-delay="0">
            <span class="banner__info-icon"><?= icon('phone') ?></span>
            <span>
                <span class="banner__info-label">Call us</span>
                <span class="banner__info-value"><?= e($phone) ?></span>
            </span>
        </a>
        <div class="banner__info-card banner__info-card--amber" data-reveal data-delay="100">
            <span class="banner__info-icon"><?= icon('clock') ?></span>
            <span>
                <span class="banner__info-label">Open</span>
                <span class="banner__info-value"><?= e($work_hrs) ?>, <?= e($work_day) ?></span>
            </span>
        </div>
        <div class="banner__info-card banner__info-card--forest" data-reveal data-delay="200">
            <span class="banner__info-icon"><?= icon('pin') ?></span>
            <span>
                <span class="banner__info-label">Based in</span>
                <span class="banner__info-value"><?= e($address) ?></span>
            </span>
        </div>
        <div class="banner__info-card banner__info-card--lime" data-reveal data-delay="300">
            <span class="banner__info-icon"><?= icon('map') ?></span>
            <span>
                <span class="banner__info-label">Service area</span>
                <span class="banner__info-value"><?= e($service_area) ?></span>
            </span>
        </div>
    </div>
</section>