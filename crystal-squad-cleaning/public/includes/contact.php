<section class="contact contact--page" id="contact">
    <div class="contact__container">

        <!-- Intro -->
        <div class="contact__intro">
            <div class="section-badge" data-reveal><?= icon('phone') ?>Get in touch</div>
            <h2 class="contact__title" data-reveal data-delay="100">Talk to Old School Cleaning.</h2>
            <p class="contact__subtitle" data-reveal data-delay="200">Questions about a clean in Sydney or Bankstown?
                Call us or send a message &mdash; we are available <?= e($work_hrs) ?>, <?= e($work_day) ?>.</p>
        </div>

        <!-- Contact cards -->
        <div class="contact__cards">
            <a href="tel:<?= str_replace(' ', '', $phone) ?>" class="contact__card contact__card--red" data-reveal data-delay="0">
                <span class="contact__card-icon"><?= icon('phone') ?></span>
                <span class="contact__card-label">Call us</span>
                <span class="contact__card-value"><?= e($phone) ?></span>
            </a>
            <?php if ($email): ?>
            <a href="mailto:<?= e($email) ?>" class="contact__card" data-reveal data-delay="50">
                <span class="contact__card-icon"><?= icon('mail') ?></span>
                <span class="contact__card-label">Email us</span>
                <span class="contact__card-value"><?= e($email) ?></span>
            </a>
            <?php endif; ?>
            <div class="contact__card contact__card--green" data-reveal data-delay="100">
                <span class="contact__card-icon"><?= icon('clock') ?></span>
                <span class="contact__card-label">Opening hours</span>
                <span class="contact__card-value"><?= e($work_hrs) ?>, <?= e($work_day) ?></span>
            </div>
            <div class="contact__card" data-reveal data-delay="150">
                <span class="contact__card-icon"><?= icon('map') ?></span>
                <span class="contact__card-label">Service area</span>
                <span class="contact__card-value"><?= e($service_area) ?></span>
            </div>
            <div class="contact__card contact__card--dark" data-reveal data-delay="200">
                <span class="contact__card-icon"><?= icon('pin') ?></span>
                <span class="contact__card-label">Based in</span>
                <span class="contact__card-value"><?= e($address) ?></span>
            </div>
        </div>

        <div class="contact__grid">

            <!-- Message form -->
            <div class="contact__form-wrap" data-reveal="left">
                <h2 class="contact__form-title">Send us a message</h2>
                <p class="contact__form-sub">Leave your details and we'll get back to you as soon as we can.</p>

                <form class="contact__form" id="contact-form" method="post" autocomplete="on">
                    <div class="contact__row">
                        <div class="contact__field">
                            <label for="contact-name">Full Name</label>
                            <input type="text" id="contact-name" name="full_name" autocomplete="name" maxlength="80" required />
                        </div>
                        <div class="contact__field">
                            <label for="contact-phone">Phone</label>
                            <input type="tel" id="contact-phone" name="phone" autocomplete="tel" maxlength="20"
                                pattern="[0-9 +()\-]{8,20}" required />
                        </div>
                    </div>

                    <div class="contact__field">
                        <label for="contact-email">Email</label>
                        <input type="email" id="contact-email" name="email" autocomplete="email" maxlength="120" required />
                    </div>

                    <div class="contact__field">
                        <label for="contact-message">Message</label>
                        <textarea id="contact-message" name="message" maxlength="1000" rows="5" required
                            placeholder="How can we help?"></textarea>
                    </div>

                    <!-- Spam trap: hidden from people, bots fill it in -->
                    <div class="form-trap" aria-hidden="true">
                        <label for="contact-website">Leave this empty</label>
                        <input type="text" id="contact-website" name="website" tabindex="-1" autocomplete="off" />
                    </div>

                    <button type="submit" class="contact__submit">
                        Send message
                        <?= icon('send') ?>
                    </button>

                    <input name="to" type="hidden" value="<?= e($email) ?>">
                    <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
                </form>
            </div>

            <!-- Quick answers -->
            <aside class="contact__faq" data-reveal="right">
                <h2 class="contact__faq-title"><?= icon('list') ?>Quick answers</h2>

                <div class="contact__faq-item">
                    <h3>When are you open?</h3>
                    <p><?= e($work_hrs) ?>, <?= e($work_day) ?> &mdash; including weekends.</p>
                </div>
                <div class="contact__faq-item">
                    <h3>Which areas do you service?</h3>
                    <p><?= e($service_area) ?>.</p>
                </div>
                <div class="contact__faq-item">
                    <h3>Are you insured?</h3>
                    <p>Yes, we are fully insured.</p>
                </div>
                <div class="contact__faq-item">
                    <h3>How experienced are you?</h3>
                    <p>We have <?= e($exp) ?> years of cleaning experience.</p>
                </div>
                <div class="contact__faq-item">
                    <h3>Do you clean homes and businesses?</h3>
                    <p>Yes &mdash; we provide residential and commercial cleaning.</p>
                </div>

                <a href="quote.php" class="contact__faq-btn"><?= icon('send') ?>Need a price? Get a free quote</a>
            </aside>

        </div>
    </div>
</section>
