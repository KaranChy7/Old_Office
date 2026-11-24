<section class="booking">
    <div class="booking__container">
        <div class="booking__grid">

            <div class="booking__info" data-reveal="left">
                <div class="section-badge"><?= icon('calendar') ?>Book a clean</div>

                <h2 class="booking__title">Book your cleaning service in Sydney or Bankstown.</h2>

                <p class="booking__subtitle">Choose a date and time that suits you and we'll call to confirm the
                    details. We work <?= e($work_hrs) ?>, <?= e($work_day) ?>.</p>

                <ul class="booking__points">
                    <li><?= icon('check') ?><?= e($exp) ?> years cleaning experience</li>
                    <li><?= icon('check') ?>Fully insured team</li>
                    <li><?= icon('check') ?>Residential and commercial cleaning</li>
                </ul>

                <p class="booking__contact-link">
                    Prefer to talk it through first?
                    <a href="tel:<?= str_replace(' ', '', $phone) ?>">Call <?= e($phone) ?> &rarr;</a>
                </p>
            </div>

            <div class="booking__form-wrap" data-reveal="right">
                <h2 class="booking__form-title">Booking details</h2>
                <p class="booking__form-sub">We'll call you to confirm your booking.</p>

                <form class="booking__form" id="booking-form" method="post" autocomplete="on">
                    <div class="booking__row">
                        <div class="booking__field">
                            <label for="booking-name">Full Name</label>
                            <input type="text" id="booking-name" name="full_name" autocomplete="name" maxlength="80" required />
                        </div>
                        <div class="booking__field">
                            <label for="booking-phone">Phone</label>
                            <input type="tel" id="booking-phone" name="phone" autocomplete="tel" maxlength="20"
                                pattern="[0-9 +()\-]{8,20}" required />
                        </div>
                    </div>

                    <div class="booking__field">
                        <label for="booking-email">Email</label>
                        <input type="email" id="booking-email" name="email" autocomplete="email" maxlength="120" required />
                    </div>

                    <div class="booking__field">
                        <label for="booking-address">Address</label>
                        <input type="text" id="booking-address" name="address" autocomplete="street-address" maxlength="160" required />
                    </div>

                    <div class="booking__field">
                        <label for="booking-service">Service</label>
                        <select id="booking-service" name="service">
                            <?php foreach ($services as $item): ?>
                            <option><?= e($item['title']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="booking__row">
                        <div class="booking__field">
                            <label for="booking-date">Preferred Date</label>
                            <input type="date" id="booking-date" name="preferred_date" required />
                        </div>
                        <div class="booking__field">
                            <label for="booking-time">Preferred Time</label>
                            <select id="booking-time" name="preferred_time">
                                <option>Morning</option>
                                <option>Afternoon</option>
                                <option>Evening</option>
                                <option>Overnight</option>
                                <option>Flexible</option>
                            </select>
                        </div>
                    </div>

                    <div class="booking__field">
                        <label for="booking-notes">Anything else?</label>
                        <textarea id="booking-notes" name="notes" maxlength="1000" rows="4"
                            placeholder="Property type, size, access details&hellip;"></textarea>
                    </div>

                    <!-- Spam trap: hidden from people, bots fill it in -->
                    <div class="form-trap" aria-hidden="true">
                        <label for="booking-website">Leave this empty</label>
                        <input type="text" id="booking-website" name="website" tabindex="-1" autocomplete="off" />
                    </div>

                    <button type="submit" class="booking__submit">
                        Confirm booking request
                        <?= icon('send') ?>
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>
