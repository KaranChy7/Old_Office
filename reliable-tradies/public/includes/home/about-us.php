<!-- ===== HOME ABOUT US ===== -->
<section class="home-about">
    <div class="container">
        <div class="about-inner">

            <!-- Image Stack -->
            <div class="about-image-stack" data-animate="left">
                <div class="img-box-accent"></div>
                <div class="img-main">
                    <img src="images/image-3.jpg" alt="<?= $company_name ?> team at work">
                </div>
                <div class="img-accent">
                    <img src="images/image-11.jpg" alt="Quality tradie workmanship">
                </div>
                <div class="exp-badge">
                    <div class="exp-num"><?= $experience ?>+</div>
                    <div class="exp-text">Years Trusted</div>
                </div>
            </div>

            <!-- Content -->
            <div class="about-content" data-animate="right">
                <div class="section-label">Who We Are</div>
                <h2 class="section-title">
                    South Australia's <em>Reliable</em> Trade Specialists
                </h2>
                <p class="section-desc">
                    Founded on the values of honest workmanship and lasting results, <?= $company_name ?> has spent
                    <?= $experience ?> years building a reputation across Salisbury and greater South Australia for
                    delivering trade services that genuinely stand the test of time.
                </p>
                <p class="section-desc" style="margin-top:14px;">
                    We are a locally operated business with deep roots in the SA community — not a franchise, not a call
                    centre. When you hire us, you get a dedicated, skilled tradie who takes pride in every square metre
                    they work on.
                </p>

                <ul class="about-list">
                    <li><i class="fa-solid fa-check"></i> <?= $experience ?>+ years serving South Australia</li>
                    <li><i class="fa-solid fa-check"></i> Licensed, insured & ABN registered</li>
                    <li><i class="fa-solid fa-check"></i> Painting, Tiling, Flooring & Concrete specialists</li>
                    <li><i class="fa-solid fa-check"></i> Up to 100km travel radius from Salisbury</li>
                    <li><i class="fa-solid fa-check"></i> Monday to Saturday — 7am to 4pm</li>
                    <li><i class="fa-solid fa-check"></i> Free, no-obligation quotes</li>
                </ul>

                <div class="about-cta">
                    <a href="about_us" class="btn-primary">Learn More About Us</a>
                    <div class="abn-note">ABN: <span><?= $abn ?></span></div>
                </div>
            </div>

        </div>
    </div>
</section>