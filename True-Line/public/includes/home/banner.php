<!-- ═══════════════════════════════════════
     HERO
══════════════════════════════════════ -->
<section class="hero" id="home">
    <div class="hero__grid">

        <!-- Content panel -->
        <div class="hero__panel hero__panel--content">
            <div class="hero__content">
                <h1 class="hero__title" data-reveal>
                    Precision Metalwork<br>
                    <span>Built To Last</span>
                </h1>
                <a href="quote.php" class="hero__cta" data-reveal data-delay="100">Get a Quote</a>
            </div>

            <div class="hero__social" data-reveal data-delay="200">
                <?php $social_class = 'hero__social-link'; include __DIR__ . '/../partials/social-links.php'; ?>
            </div>

            <div class="hero__scroll" aria-hidden="true">
                <span>Scroll Down</span>
                <span class="hero__scroll-line"></span>
            </div>
        </div>

        <!-- Framed photo -->
        <figure class="hero__frame" data-reveal data-delay="150">
            <div class="hero__frame-inner" id="hero-frame-slider">
                <img src="images/14.jpg"
                    alt="Black slat pedestrian gate by True-Line Installs" class="hero__frame-img active">
                <img src="images/26.jpg"
                    alt="Frameless glass balcony balustrades" class="hero__frame-img">
                <img src="images/5.jpg"
                    alt="Powder-coated perforated planter boxes" class="hero__frame-img">
            </div>
        </figure>

        <!-- Media panel -->
        <div class="hero__panel hero__panel--media">
            <div class="hero__media-slider" id="hero-media-slider">
                <div class="hero__media-slide active">
                    <img src="images/18.jpg"
                    alt="Aluminium batten screen cladding across a home facade" class="hero__media-img">
                </div>
                <div class="hero__media-slide">
                    <img src="images/24.jpg"
                    alt="Frameless glass pool fence enclosing a paved courtyard" class="hero__media-img">
                </div>
                <div class="hero__media-slide">
                    <img src="images/12.jpg"
                    alt="Black horizontal slat privacy screen on a townhouse" class="hero__media-img">
                </div>
            </div>
            <div class="hero__media-overlay"></div>

            <span class="hero__tag">Metalwork</span>

            <p class="hero__overline">
                Make Your Creation<br>Look Better With Us
            </p>

            <div class="hero__slide-meta">
                <span class="hero__slide-count" id="hero-slide-count">01</span>
                <div class="hero__slide-progress">
                    <span class="hero__slide-progress-bar" id="hero-slide-progress"></span>
                </div>
            </div>
        </div>

    </div>
</section>
