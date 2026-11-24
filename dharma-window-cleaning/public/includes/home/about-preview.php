<?php require_once 'includes/services-contain.php'; ?>
<!-- ═══════════════════════════════════════
     ABOUT US — HOMEPAGE INTRO
══════════════════════════════════════ -->
<section class="about-preview" id="about">
    <div class="about-preview__container">

        <div class="about-preview__intro">
            <div class="about-preview__badge" data-reveal>About Us</div>
            <h2 data-reveal data-delay="100">Outstanding cleaning services, designed around your property.</h2>
        </div>

        <div class="about-preview__split">

            <div class="about-preview__media" data-reveal="left">
                <span class="about-preview__media-panel" aria-hidden="true"></span>
                <img src="images/gutter-cleaning.png" alt="Roof gutter before and after cleaning by our team"
                    class="about-preview__image">
            </div>

            <div class="about-preview__copy" data-reveal="right" data-delay="150">
                <p class="about-preview__quote">&ldquo;Whether it&rsquo;s a one-time service or ongoing maintenance,
                    you can count on us to keep your property pristine and inviting.&rdquo;</p>

                <p><?= $business_name ?> is committed to providing outstanding cleaning services designed to meet
                    your specific needs. With <?= strtolower($experience) ?> of experience, we use modern techniques and ensure a safe, clean
                    environment for residential, commercial and strata properties. Our customer-centred approach
                    includes tailored cleaning plans, flexible scheduling and clear, upfront pricing.</p>

                <a href="about.php" class="about-preview__link">
                    Read our full story
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon-sm">
                        <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z" />
                    </svg>
                </a>
            </div>

        </div>

        <div class="about-preview__stat-strip" data-reveal data-delay="200">
            <div class="about-preview__stat">
                <strong><?= $radius ?></strong>
                <span>Radius of <?= $suburb ?></span>
            </div>
            <div class="about-preview__stat">
                <strong><?= $experience ?></strong>
                <span>Experience</span>
            </div>
            <div class="about-preview__stat">
                <strong>Eco</strong>
                <span>Friendly Products</span>
            </div>
            <div class="about-preview__stat">
                <strong>100%</strong>
                <span>Insured Company</span>
            </div>
        </div>

    </div>
</section>
