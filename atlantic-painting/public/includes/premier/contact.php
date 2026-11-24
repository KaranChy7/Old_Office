<?php
$pp_paint_types = ['Interior', 'Exterior', 'Roof spray', 'Commercial'];
$pp_colours     = ['Warm neutrals', 'Cool greys', 'Bold colour', 'Not sure yet'];
?>
<!-- ═══════════════════════════════════════
     CONTACT / FREE QUOTE
══════════════════════════════════════ -->
<section class="pp-contact" id="contact">
    <div class="pp-container">
    <div class="pp-contact__grid">

        <!-- Details -->
        <div class="pp-contact__info">
            <p class="pp-contact__eyebrow">Free Consultation</p>
            <h2>Tell Us About the Space &mdash; We&rsquo;ll Handle the Rest.</h2>
            <p class="pp-contact__text">Fill in the form and we&rsquo;ll call within one business day to lock in a
                free, no-obligation site visit.</p>

            <ul class="pp-contact__perks">
                <li><?= pp_icon('check') ?>Free in-home colour consultation</li>
                <li><?= pp_icon('check') ?>Fixed-price written quote, no surprises</li>
                <li><?= pp_icon('check') ?>Five-year workmanship warranty</li>
            </ul>

            <ul class="pp-contact__details">
                <li>
                    <span class="pp-contact__icon"><?= pp_icon('phone') ?></span>
                    <span><small>Call us now</small><a href="tel:<?= $pp_company['phone_tel'] ?>"><?= $pp_company['phone'] ?></a></span>
                </li>
                <li>
                    <span class="pp-contact__icon"><?= pp_icon('mail') ?></span>
                    <span><small>Email</small><a href="mailto:<?= $pp_company['email'] ?>"><?= $pp_company['email'] ?></a></span>
                </li>
                <li>
                    <span class="pp-contact__icon"><?= pp_icon('pin') ?></span>
                    <span><small>Based in</small><?= $pp_company['location'] ?></span>
                </li>
                <li>
                    <span class="pp-contact__icon"><?= pp_icon('home') ?></span>
                    <span><small>Service areas</small><?= $pp_company['areas'] ?></span>
                </li>
            </ul>
        </div>

        <!-- Form -->
        <form class="pp-form" id="pp-quote-form" action="handlers/send-quote.php" method="post" novalidate>
            <div class="pp-form__status" id="pp-form-status" role="status" hidden></div>

            <fieldset class="pp-form__group">
                <legend>What needs painting?</legend>
                <div class="pp-chips">
                    <?php foreach ($pp_paint_types as $t): ?>
                        <label class="pp-chip"><input type="checkbox" name="paint[]" value="<?= $t ?>" /><span><?= $t ?></span></label>
                    <?php endforeach; ?>
                </div>
            </fieldset>

            <fieldset class="pp-form__group">
                <legend>Which colour family?</legend>
                <div class="pp-chips">
                    <?php foreach ($pp_colours as $c): ?>
                        <label class="pp-chip"><input type="radio" name="colour" value="<?= $c ?>" /><span><?= $c ?></span></label>
                    <?php endforeach; ?>
                </div>
            </fieldset>

            <div class="pp-form__row">
                <label class="pp-field">
                    <span>Full name *</span>
                    <input type="text" name="name" autocomplete="name" required />
                </label>
                <label class="pp-field">
                    <span>Phone number *</span>
                    <input type="tel" name="phone" autocomplete="tel" required />
                </label>
            </div>

            <div class="pp-form__row">
                <label class="pp-field">
                    <span>Email</span>
                    <input type="email" name="email" autocomplete="email" />
                </label>
                <label class="pp-field">
                    <span>Suburb</span>
                    <input type="text" name="suburb" autocomplete="address-level2" />
                </label>
            </div>

            <label class="pp-field">
                <span>Tell us about your project</span>
                <textarea name="message" rows="4"></textarea>
            </label>

            <!-- Spam trap: leave empty -->
            <input type="text" name="website" class="pp-form__trap" tabindex="-1" autocomplete="off" aria-hidden="true" />

            <button type="submit" class="pp-btn pp-btn--yellow pp-btn--lg pp-form__submit">Get My Free Quote <?= pp_icon('chevron') ?></button>
        </form>

    </div>
    </div>
</section>
