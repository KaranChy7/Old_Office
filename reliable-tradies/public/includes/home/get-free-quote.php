<!-- ===== GET FREE QUOTE ===== -->
<section class="get-quote">
    <div class="container">
        <div class="quote-inner">

            <!-- Content Left -->
            <div class="quote-content" data-animate="left">
                <div class="section-label">Free Quote</div>
                <h2 class="section-title">
                    Get a No-Obligation <em>Quote Today</em>
                </h2>
                <p class="section-desc">
                    Fill out the form and one of our trade specialists will be in touch within 24 hours to discuss your
                    project and arrange a site visit.
                </p>

                <div class="quote-perks">
                    <div class="perk">
                        <i class="fa-solid fa-check"></i>
                        <span>100% free and no obligation</span>
                    </div>
                    <div class="perk">
                        <i class="fa-solid fa-check"></i>
                        <span>Fast response within 24 hours</span>
                    </div>
                    <div class="perk">
                        <i class="fa-solid fa-check"></i>
                        <span>Detailed written quote provided</span>
                    </div>
                    <div class="perk">
                        <i class="fa-solid fa-check"></i>
                        <span>No pressure, no hidden costs</span>
                    </div>
                </div>

                <div class="service-areas">
                    <p><i class="fa-solid fa-location-crosshairs"></i> Serving <strong><?= $radius ?></strong> from
                        Salisbury SA.</p>
                </div>
            </div>

            <!-- Form Right -->
            <div class="quote-form-box" data-animate="right">
                <div class="form-title">Request a Quote</div>
                <div class="form-sub">We'll get back to you within 24 hours.</div>

                <form action="#" method="POST" id="home-quote-form" novalidate>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="hq-name">Full Name *</label>
                            <input class="form-input" type="text" id="hq-name" name="name" placeholder="Your full name"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="hq-phone">Phone Number *</label>
                            <input class="form-input" type="tel" id="hq-phone" name="phone" placeholder="04XX XXX XXX"
                                required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="hq-email">Email Address *</label>
                        <input class="form-input" type="email" id="hq-email" name="email"
                            placeholder="your@email.com.au" required>
                    </div>

                    <div class="form-group">
                        <label for="hq-service">Service Required *</label>
                        <select id="hq-service" name="service" required>
                            <option value="" disabled selected>Select a service</option>
                            <?php foreach ($services as $srv): ?>
                            <option value="<?= $srv['slug'] ?>"><?= $srv['name'] ?></option>
                            <?php endforeach; ?>
                            <option value="multiple">Multiple Services</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="hq-message">Project Details</label>
                        <textarea id="hq-message" name="message"
                            placeholder="Briefly describe your project..."></textarea>
                    </div>

                    <button type="submit" class="btn-primary form-submit">
                        <i class="fa-solid fa-paper-plane"></i> Send Quote Request
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>