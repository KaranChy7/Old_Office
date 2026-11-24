<!-- ═══════════════════════════════════════
     SERVICE AREA
══════════════════════════════════════ -->
<section class="service-area" id="service-area">
    <div class="service-area__media" aria-hidden="true">
        <img src="images/roof-pressure-wash-detail.jpg" alt="" class="service-area__bg-image">
        <div class="service-area__overlay"></div>
    </div>

    <div class="service-area__container">

        <div class="service-area__radius" data-reveal="left">
            <div class="service-area__radius-rings" aria-hidden="true">
                <span class="service-area__ring service-area__ring--3"></span>
                <span class="service-area__ring service-area__ring--2"></span>
                <span class="service-area__ring service-area__ring--1"></span>
                <span class="service-area__pin">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12 2a8 8 0 00-8 8c0 5.4 8 12 8 12s8-6.6 8-12a8 8 0 00-8-8zm0 11a3 3 0 110-6 3 3 0 010 6z" />
                    </svg>
                </span>
            </div>
            <div class="service-area__radius-label"><?= $suburb ?> <?= $state ?> &middot; <?= $radius ?></div>
        </div>

        <div class="service-area__content" data-reveal="right" data-delay="150">
            <div class="service-area__badge">Where we work</div>
            <h2>Serving within an <?= $radius ?> radius of <?= $suburb ?>.</h2>
            <p>Our team is based in <?= $address ?> and looks after residential, commercial and
                strata properties right across our <?= $radius ?> coverage area in <?= htmlspecialchars($region) ?>.</p>


            <div class="service-area__stats">
                <div class="service-area__stat">
                    <div class="service-area__stat-number"><?= $radius ?></div>
                    <div class="service-area__stat-label">Service radius</div>
                </div>
                <div class="service-area__stat">
                    <div class="service-area__stat-number">Eco</div>
                    <div class="service-area__stat-label">Friendly products</div>
                </div>
                <div class="service-area__stat">
                    <div class="service-area__stat-number">100%</div>
                    <div class="service-area__stat-label">Insured company</div>
                </div>
                <div class="service-area__stat">
                    <div class="service-area__stat-number"><?= $experience ?></div>
                    <div class="service-area__stat-label">Experience</div>
                </div>
            </div>

            <a href="quote.php" class="service-area__btn">
                Check we cover your suburb
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon-sm">
                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z" />
                </svg>
            </a>
        </div>

    </div>
</section>
