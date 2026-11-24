<!-- ═══════════════════════════════════════
     SERVICES — PACKAGES
══════════════════════════════════════ -->
<section class="services-addons">
    <div class="services-addons__container">
        <div class="services-addons__grid">

            <div class="services-addons__col" data-reveal="left">
                <div class="services-addons__badge">Tailored packages</div>
                <h2>Combine services in one visit.</h2>
                <p>We offer flexible, tailored cleaning packages &mdash; pair any of these
                    services and we'll take care of them together.</p>

                <div class="services-addons__pills">
                    <?php foreach ($services as $svc): ?>
                    <span class="services-addons__pill">+ <?= htmlspecialchars($svc['title']) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="services-addons__col" data-reveal="right" data-delay="150">
                <div class="services-addons__badge">Need a custom scope?</div>
                <h2>One-time service or ongoing maintenance?</h2>
                <p>Either way, you can count on us to keep your property pristine and inviting.
                    Tell us about the property and we'll send a personalised quote.</p>

                <div class="services-addons__actions">
                    <a href="quote.php" class="services-addons__btn-primary">Get a quote</a>
                    <a href="tel:<?= $phone_link ?>" class="services-addons__btn-secondary">Call <?= $phone ?></a>
                </div>
            </div>

        </div>
    </div>
</section>
