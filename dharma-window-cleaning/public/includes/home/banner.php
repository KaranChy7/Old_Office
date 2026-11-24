<!-- ═══════════════════════════════════════
     BANNER — FULL-BLEED
══════════════════════════════════════ -->
<section class="banner" id="home">
    <div class="banner__media" aria-hidden="true">
        <img src="images/window-cleaning-detail.jpg" alt="" class="banner__bg-image">
        <div class="banner__overlay"></div>
    </div>

    <div class="banner__container">

        <div class="banner__content">

            <div class="banner__badge" data-reveal>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                </svg>
                Eco-Friendly Products
            </div>

            <h1 data-reveal data-delay="100">
                Sparkling Clean,
                <em>Naturally!</em>
            </h1>

            <p data-reveal data-delay="200">
                Experience a spotless home with eco-friendly products! Window, gutter, roof and solar panel
                cleaning, pressure washing and property maintenance within <?= $radius ?> of <?= $suburb ?>, <?= $state ?>.
            </p>

            <div class="banner__actions" data-reveal data-delay="300">
                <a href="quote.php" class="banner__btn-primary">
                    Get a quote
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon-sm">
                        <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z" />
                    </svg>
                </a>
                <a href="tel:<?= $phone_link ?>" class="banner__btn-secondary">
                    Call <?= $phone ?>
                </a>
            </div>

        </div>

        <!-- Promo video supplied by the client -->
        <!-- Desktop: card beside the text. Mobile/tablet: full-bleed background (controls removed in main.js) -->
        <div class="banner__video">
            <video id="banner-video" autoplay muted loop playsinline controls preload="metadata" poster="images/video-poster.jpg"
                aria-label="<?= $business_name ?> promo video">
                <source src="images/video.mp4" type="video/mp4">
            </video>
        </div>

    </div>
</section>
