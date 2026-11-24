<?php // GC-E CAMPERS — CONTACT MAIN ?>

<section class="section section--black" id="contact">
    <div class="container">
        <div class="contact-layout">

            <!-- Contact Info -->
            <div data-animate="fade-left">
                <div class="section-eyebrow">Reach Us</div>
                <h2 class="section-title section-title--sm">
                    Let's Talk <span class="text-gold">Adventure</span>
                </h2>

                <div class="contact-info">
                    <div class="contact-info__item">
                        <div class="contact-info__icon"><i class="ri-map-pin-2-line"></i></div>
                        <div class="contact-info__body">
                            <div class="contact-info__label">Workshop</div>
                            <div class="contact-info__value"><?php echo $address; ?><br><?php echo $address2; ?></div>
                        </div>
                    </div>
                    <div class="contact-info__item">
                        <div class="contact-info__icon"><i class="ri-phone-line"></i></div>
                        <div class="contact-info__body">
                            <div class="contact-info__label">Phone</div>
                            <div class="contact-info__value"><a href="tel:<?php echo str_replace(' ', '', $phone); ?>"><?php echo $phone; ?></a><?php if ($phone2): ?><br><a href="tel:<?php echo str_replace(' ', '', $phone2); ?>"><?php echo $phone2; ?></a><?php endif; ?></div>
                        </div>
                    </div>
                    <div class="contact-info__item">
                        <div class="contact-info__icon"><i class="ri-mail-line"></i></div>
                        <div class="contact-info__body">
                            <div class="contact-info__label">Email</div>
                            <div class="contact-info__value"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
                        </div>
                    </div>
                    <div class="contact-info__item">
                        <div class="contact-info__icon"><i class="ri-time-line"></i></div>
                        <div class="contact-info__body">
                            <div class="contact-info__label">Hours</div>
                            <div class="contact-info__value"><?php echo $work_day; ?><br><?php echo $work_hrs; ?></div>
                        </div>
                    </div>
                </div>

                <!-- Service areas -->
                <div class="contact-areas">
                    <div class="contact-areas__title">Service Areas</div>
                    <div class="contact-areas__list">
                        <?php
            $areas = ['Gold Coast', 'Brisbane', 'Sunshine Coast', 'Noosa', 'Northern NSW'];
            foreach ($areas as $area) :
            ?>
                        <span class="contact-areas__tag">
                            <i class="ri-map-pin-line"></i><?php echo $area; ?>
                        </span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-wrap" data-animate="fade-right">
                <h3 class="contact-form-wrap__title">Send a Message</h3>
                <p class="contact-form-wrap__note">We typically respond within a few hours.</p>

                <div class="form-success" id="contactSuccess">
                    <i class="ri-check-circle-line"></i> Thank you! We'll be in touch shortly.
                </div>

                <form id="contactForm"
                    action="https://api.surojd.com.np/api/email/submit/LiLwP0cL3KjytI2MjLPPzOaMcmaf0i"
                    enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="contact_name">Your Name</label>
                            <input type="text" id="contact_name" name="name" class="form-control"
                                placeholder="John Smith" required>
                            <span class="form-error" id="nameError">Please enter your name.</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="contact_email">Email Address</label>
                            <input type="email" id="contact_email" name="email" class="form-control"
                                placeholder="you@example.com" required>
                            <span class="form-error" id="emailError">Please enter a valid email.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="contact_subject">Subject</label>
                        <select id="contact_subject" name="subject" class="form-control">
                            <option value="">Select a topic…</option>
                            <option value="hire">Camper Hire Enquiry</option>
                            <option value="fitout">Custom Fit-Out Enquiry</option>
                            <option value="general">General Question</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="contact_message">Message</label>
                        <textarea id="contact_message" name="message" class="form-control"
                            placeholder="Tell us about your adventure plans…" required></textarea>
                        <span class="form-error" id="messageError">Please enter a message.</span>
                    </div>
                    <button type="submit" class="btn btn--gold btn--block btn--lg">
                        <i class="ri-send-plane-line"></i> Send Message
                    </button>

                    <input name="to" type="hidden" value="<?= $email; ?>">
                    <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
                </form>
            </div>

        </div>
    </div>
</section>