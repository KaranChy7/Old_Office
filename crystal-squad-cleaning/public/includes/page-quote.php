<section class="quote">
    <div class="quote__container">

        <div class="quote__header">
            <div class="section-badge" data-reveal><?= icon('send') ?>Free quote</div>
            <h2 class="quote__title" data-reveal data-delay="100">Get a free cleaning quote in 3 easy steps.</h2>
            <p class="quote__subtitle" data-reveal data-delay="200">Choose your service, tell us about the property
                and we'll come back to you with a free, no-obligation quote.</p>
        </div>

        <div class="quote__grid">

            <!-- Quote form -->
            <form class="quote__form" id="quote-form" method="post" autocomplete="on" data-reveal="left">

                <!-- Step 1 -->
                <fieldset class="quote__step">
                    <legend class="quote__step-title"><span class="quote__step-num">1</span>Choose your service</legend>
                    <div class="quote__services">
                        <?php foreach ($services as $i => $item): ?>
                        <label class="quote__service">
                            <input type="radio" name="service" value="<?= e($item['title']) ?>" <?= $i === 0 ? 'checked' : '' ?> required />
                            <span class="quote__service-box">
                                <span class="quote__service-icon"><?= icon($item['icon']) ?></span>
                                <?= e($item['title']) ?>
                            </span>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </fieldset>

                <!-- Step 2 -->
                <fieldset class="quote__step">
                    <legend class="quote__step-title"><span class="quote__step-num">2</span>About the property</legend>

                    <div class="quote__toggle">
                        <label>
                            <input type="radio" name="property_type" value="Residential" checked />
                            <span><?= icon('residence') ?>Residential</span>
                        </label>
                        <label>
                            <input type="radio" name="property_type" value="Commercial" />
                            <span><?= icon('building') ?>Commercial</span>
                        </label>
                    </div>

                    <div class="contact__row">
                        <div class="contact__field">
                            <label for="quote-suburb">Suburb</label>
                            <input type="text" id="quote-suburb" name="suburb" autocomplete="address-level2" maxlength="80" required />
                        </div>
                        <div class="contact__field">
                            <label for="quote-date">Preferred Date</label>
                            <input type="date" id="quote-date" name="preferred_date" />
                        </div>
                    </div>

                    <div class="contact__field">
                        <label for="quote-notes">Job details</label>
                        <textarea id="quote-notes" name="notes" maxlength="1000" rows="4"
                            placeholder="Property size, number of rooms, anything we should know…"></textarea>
                    </div>
                </fieldset>

                <!-- Step 3 -->
                <fieldset class="quote__step">
                    <legend class="quote__step-title"><span class="quote__step-num">3</span>Your details</legend>
                    <div class="contact__row">
                        <div class="contact__field">
                            <label for="quote-name">Full Name</label>
                            <input type="text" id="quote-name" name="full_name" autocomplete="name" maxlength="80" required />
                        </div>
                        <div class="contact__field">
                            <label for="quote-phone">Phone</label>
                            <input type="tel" id="quote-phone" name="phone" autocomplete="tel" maxlength="20"
                                pattern="[0-9 +()\-]{8,20}" required />
                        </div>
                    </div>
                    <div class="contact__field">
                        <label for="quote-email">Email</label>
                        <input type="email" id="quote-email" name="email" autocomplete="email" maxlength="120" required />
                    </div>
                </fieldset>

                <!-- Spam trap: hidden from people, bots fill it in -->
                <div class="form-trap" aria-hidden="true">
                    <label for="quote-website">Leave this empty</label>
                    <input type="text" id="quote-website" name="website" tabindex="-1" autocomplete="off" />
                </div>

                <button type="submit" class="contact__submit quote__submit">
                    Request my free quote
                    <?= icon('send') ?>
                </button>

                <input name="to" type="hidden" value="<?= e($email) ?>">
                <input name="successMessage" type="hidden" value="Your Quote Request Has Been Delivered.">
            </form>

            <!-- Sidebar -->
            <aside class="quote__aside" data-reveal="right">
                <div class="quote__box quote__box--dark">
                    <h3 class="quote__box-title">What happens next?</h3>
                    <ol class="quote__next">
                        <li><span><?= icon('send') ?></span>Send your quote request</li>
                        <li><span><?= icon('phone') ?></span>We contact you about the job</li>
                        <li><span><?= icon('calendar') ?></span>Book a time that suits you, 24/7</li>
                    </ol>
                </div>

                <div class="quote__box">
                    <h3 class="quote__box-title">Why Old School Cleaning?</h3>
                    <ul class="quote__why">
                        <li><?= icon('award') ?><?= e($exp) ?> years experience</li>
                        <li><?= icon('shield') ?>Fully insured</li>
                        <li><?= icon('clock') ?>Open <?= e($work_hrs) ?>, <?= e($work_day) ?></li>
                        <li><?= icon('map') ?><?= e($service_area) ?></li>
                    </ul>
                </div>

                <a href="tel:<?= str_replace(' ', '', $phone) ?>" class="quote__call">
                    <span class="quote__call-icon"><?= icon('phone') ?></span>
                    <span>
                        <span class="quote__call-label">Prefer to call?</span>
                        <span class="quote__call-number"><?= e($phone) ?></span>
                    </span>
                </a>
            </aside>

        </div>
    </div>
</section>
