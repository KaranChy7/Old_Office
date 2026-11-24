<!-- ═══════════════════════════════════════
     CONTACT / REQUEST A QUOTE
══════════════════════════════════════ -->
<section class="contact" id="contact">
    <div class="contact__container">
        <div class="contact__grid">

            <div class="contact__info" data-reveal="left">
                <div class="contact__badge">Get in touch</div>

                <h1>Let's get your space spotless.</h1>

                <p>Get in touch with us today to learn more about our offerings and discuss your unique
                    cleaning requirements. Tell us a little about the job and we'll send a personalised quote.</p>

                <div class="contact__details">
                    <div class="contact__detail">
                        <span class="contact__detail-label">Phone</span>
                        <a href="tel:<?= $phone_link ?>" class="contact__detail-value"><?= $phone ?></a>
                    </div>
                    <div class="contact__detail">
                        <span class="contact__detail-label">Email</span>
                        <a href="mailto:<?= $email ?>" class="contact__detail-value"><?= $email ?></a>
                    </div>
                    <div class="contact__detail">
                        <span class="contact__detail-label">Address</span>
                        <span class="contact__detail-value"><?= $address ?></span>
                    </div>
                    <?php if ($hours): ?>
                    <div class="contact__detail">
                        <span class="contact__detail-label">Hours</span>
                        <span class="contact__detail-value"><?= $hours ?></span>
                    </div>
                    <?php endif; ?>
                    <div class="contact__detail">
                        <span class="contact__detail-label">Service Area</span>
                        <span class="contact__detail-value">Within <?= $radius ?> of <?= $suburb ?>, <?= $state ?></span>
                    </div>
                    <?php if ($abn): ?>
                    <div class="contact__detail">
                        <span class="contact__detail-label">ABN</span>
                        <span class="contact__detail-value"><?= $abn ?></span>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="contact__form-wrap" data-reveal="right">
                <h2>Request your quote</h2>
                <p>Fast, easy, and tailored to perfection &mdash; with honest, upfront pricing.</p>

                <form class="contact__form" id="contact-form" novalidate>
                    <div class="contact__row">
                        <div class="contact__field">
                            <label for="quote-name">Full Name</label>
                            <input type="text" id="quote-name" name="full_name" required />
                        </div>
                        <div class="contact__field">
                            <label for="quote-phone">Phone</label>
                            <input type="tel" id="quote-phone" name="phone" required />
                        </div>
                    </div>

                    <div class="contact__field">
                        <label for="quote-email">Email</label>
                        <input type="email" id="quote-email" name="email" required />
                    </div>

                    <div class="contact__field">
                        <label for="quote-address">Property Address / Postcode</label>
                        <input type="text" id="quote-address" name="address" />
                    </div>

                    <div class="contact__row">
                        <div class="contact__field">
                            <label for="quote-service-type">Service</label>
                            <select id="quote-service-type" name="service_type">
                                <?php foreach ($services as $svc): ?>
                                <option><?= htmlspecialchars($svc['title']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="contact__field">
                            <label for="quote-property-type">Property Type</label>
                            <select id="quote-property-type" name="property_type">
                                <option>Residential</option>
                                <option>Commercial</option>
                                <option>Strata</option>
                            </select>
                        </div>
                    </div>

                    <div class="contact__field">
                        <label for="quote-notes">Anything else?</label>
                        <textarea id="quote-notes" name="notes" placeholder="Tell us about your project — windows, gutters, solar panels, preferred date, access…"
                            rows="4"></textarea>
                    </div>

                    <button type="submit" class="contact__submit">
                        Send request
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon-sm">
                            <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z" />
                        </svg>
                    </button>

                    <p>Prefer to talk? Call us on <a href="tel:<?= $phone_link ?>"><?= $phone ?></a>.</p>
                </form>
            </div>

        </div>
    </div>
</section>
