<!-- ═══════════════════════════════════════
     CALL US
══════════════════════════════════════ -->
<section class="call-us">
    <div class="call-us__media" aria-hidden="true">
        <img src="images/aluminum-gutter-guard.jpg" alt="" class="call-us__bg-image">
        <div class="call-us__overlay"></div>
    </div>

    <div class="call-us__container">
        <div class="call-us__content" data-reveal>

            <div class="call-us__badge">Ready when you are</div>

            <h2>Have a project idea? Drop us a line.</h2>
            <p>Get a personalised quote for your cleaning needs today. Fast, easy, and tailored to perfection.
                Serving within <?= $radius ?> of <?= $suburb ?>, <?= $state ?>.</p>

            <div class="call-us__actions">
                <a href="quote.php" class="call-us__btn-primary">
                    Get a quote
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon-sm">
                        <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z" />
                    </svg>
                </a>
                <a href="tel:<?= $phone_link ?>" class="call-us__btn-secondary">
                    Call <?= $phone ?>
                </a>
            </div>

            <ul class="call-us__stats">
                <li>
                    <strong><?= $radius ?></strong>
                    <span>Service radius</span>
                </li>
                <li>
                    <strong>100%</strong>
                    <span>Insured company</span>
                </li>
                <li>
                    <strong>Eco</strong>
                    <span>Friendly products</span>
                </li>
            </ul>

        </div>
    </div>
</section>
