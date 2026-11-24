<!-- ===== CALL US CTA ===== -->
<section class="call-us">
    <div class="cta-bg"></div>
    <div class="container">
        <div class="cta-inner">

            <div class="cta-content" data-animate="left">
                <div class="cta-label">Ready to Get Started?</div>
                <h2>
                    Let's Build Something<br><em>Exceptional Together.</em>
                </h2>
                <p>
                    Whether it's painting a room, tiling a bathroom, laying new floors, or pouring concrete —
                    <?= $company_name ?> is ready to deliver. Get your free, no-obligation quote today.
                </p>
            </div>

            <div class="cta-actions" data-animate="right">
                <div class="phone-big">
                    <div class="ph-icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="ph-details">
                        <span>Call us now</span>
                        <a href="<?= $phone_link ?>"><?= $phone ?></a>
                    </div>
                </div>
                <a href="quote" class="btn-primary">
                    <i class="fa-solid fa-file-invoice"></i> Get a Free Quote
                </a>
                <p class="hours-note"><i class="fa-regular fa-clock"></i> <?= $hours_short ?></p>
            </div>

        </div>
    </div>
</section>