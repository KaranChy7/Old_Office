<!-- ═══════════════════════════════════════
     ABOUT — OUR STORY & FOUR PROMISES
══════════════════════════════════════ -->
<section class="page-about">
    <div class="page-about__container">

        <!-- Our story -->
        <div class="page-about__hero" id="our-story">

            <div class="page-about__hero-content" data-reveal="left">
                <div class="page-about__badge">Our story</div>

                <h1>Sparkling Clean, Naturally!</h1>

                <p><?= $business_name ?> is committed to providing outstanding cleaning services designed to meet
                    your specific needs. With <?= strtolower($experience) ?> of experience, we use modern techniques and ensure a safe, clean
                    environment for residential, commercial and strata properties. Our customer-centred approach
                    includes tailored cleaning plans, flexible scheduling and clear, upfront pricing.</p>

                <p>Whether it&rsquo;s a one-time service or ongoing maintenance, you can count on us to keep your
                    property pristine and inviting. We are dedicated to sustainability and environmentally conscious
                    practices, and we serve properties within an <?= $radius ?> radius of <?= $suburb ?>, <?= $state ?>.</p>

                <div class="page-about__stats">
                    <div class="page-about__stat">
                        <div class="page-about__stat-number"><?= $radius ?></div>
                        <div class="page-about__stat-label">Service radius</div>
                    </div>
                    <div class="page-about__stat">
                        <div class="page-about__stat-number">Eco</div>
                        <div class="page-about__stat-label">Friendly products</div>
                    </div>
                    <div class="page-about__stat">
                        <div class="page-about__stat-number"><?= $experience ?></div>
                        <div class="page-about__stat-label">Experience</div>
                    </div>
                </div>
            </div>

            <div class="page-about__media" data-reveal="right" data-delay="150">
                <img src="images/window-cleaning-detail.jpg" alt="Our team cleaning a tall glass window with a water-fed pole" class="page-about__image">
            </div>

        </div>

        <!-- Four promises -->
        <div class="page-about__badge page-about__badge--secondary" data-reveal>Why choose us</div>
        <h2 data-reveal data-delay="100">A strong commitment to
            exceptional results.</h2>

        <div class="page-about__grid">

            <div class="page-about__card" data-reveal data-delay="0">
                <div class="page-about__card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2l1.5 5.5L19 9l-5.5 1.5L12 16l-1.5-5.5L5 9l5.5-1.5L12 2z" />
                    </svg>
                </div>
                <h3>Expert Team</h3>
                <p>Our highly trained professionals bring <?= strtolower($experience) ?> of experience to ensure top-quality cleaning for every space.</p>
            </div>

            <div class="page-about__card" data-reveal data-delay="50">
                <div class="page-about__card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2l1.5 5.5L19 9l-5.5 1.5L12 16l-1.5-5.5L5 9l5.5-1.5L12 2z" />
                    </svg>
                </div>
                <h3>Eco-Friendly Products</h3>
                <p>We use non-toxic, environmentally friendly cleaning products that are safe for your family, pets, and the planet.</p>
            </div>

            <div class="page-about__card" data-reveal data-delay="100">
                <div class="page-about__card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2l1.5 5.5L19 9l-5.5 1.5L12 16l-1.5-5.5L5 9l5.5-1.5L12 2z" />
                    </svg>
                </div>
                <h3>Advanced Equipment</h3>
                <p>We utilise the latest cleaning technology and equipment to achieve superior results efficiently.</p>
            </div>

            <div class="page-about__card" data-reveal data-delay="150">
                <div class="page-about__card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2l1.5 5.5L19 9l-5.5 1.5L12 16l-1.5-5.5L5 9l5.5-1.5L12 2z" />
                    </svg>
                </div>
                <h3>Transparent Pricing</h3>
                <p>Enjoy honest and upfront pricing with no hidden fees, so you know exactly what to expect.</p>
            </div>

        </div>

    </div>
</section>
