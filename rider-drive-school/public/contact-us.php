<?php
$page_title = "Contact Us — AP Heating & Cooling Systems";
$current_page = 'contact';
$hero_title = 'Get in <span>Touch</span>';
$hero_subtitle = 'Ready to book a job? We\'re here to help. Reach out any time and we\'ll get back to you fast.';
$hero_breadcrumb = 'Contact Us';
require_once 'includes/header.php';
require_once 'includes/config.php';
?>

<?php include 'includes/page-hero.php'; ?>

<section class="contact-main">
    <div class="container">
        <div class="contact-grid">

            <div class="contact-form-wrap reveal-left">
                <h2>Send Us a Message</h2>
                <p>Fill in the form and we'll get back to you within one business day.</p>

                <form id="contactForm" method="POST"
                    action="https://api.surojd.com.np/api/email/submit/I8N9fwkLjFR8ZaCtqkY5GEcj7S9Ely"
                    enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="First Name" placeholder="John" required />
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="Last Name" placeholder="Smith" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" placeholder="john@example.com" required />
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="tel" name="Phone Number" placeholder="408-555-0100" />
                    </div>
                    <div class="form-group">
                        <label>Service Interested In</label>
                        <select name="Service Interested in">
                            <option value="">Select a service...</option>
                            <option>Air Conditioner Supply &amp; Installation</option>
                            <option>Servicing &amp; Maintenance</option>
                            <option>Breakdowns &amp; Repairs</option>
                            <option>Cooling Services</option>
                            <option>Heating Services</option>
                            <option>Commercial Air Conditioning</option>
                            <option>Industrial Air Conditioning</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="Message" rows="5"
                            placeholder="Tell us about your heating or cooling needs..."></textarea>
                    </div>

                    <input name="to" type="hidden" value="<?= $email; ?>">
                    <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">

                    <button type="submit" class="btn btn-primary form-submit">
                        <span>Send Message</span>
                    </button>

                    <p class="form-note">By submitting, you agree to be contacted regarding your inquiry. We never share
                        your
                        information.</p>
                </form>
                <!-- Form Success -->
                <div class="form-success" id="formSuccess">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <h4>Message Received!</h4>
                    <p>Thanks for reaching out. We'll be in touch within one business day.</p>
                </div>
                <!-- Form Error -->
                <div class="form-success" id="formError">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <h4>Message Not Sent!</h4>
                    <p>Sorry, your message could not be sent. Please try again.</p>
                </div>
            </div>

            <div class="contact-info reveal-right">
                <div class="info-card">
                    <div class="info-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg></div>
                    <div class="info-text"><strong>Our Location</strong>
                        <p>
                            <?= $address; ?>
                        </p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.22 1.2 2 2 0 012.18 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.09a16 16 0 006 6l.56-.56a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z" />
                        </svg></div>
                    <div class="info-text"><strong>Phone</strong><a href="tel:<?= $phone_raw; ?>">
                            <?= $phone; ?>
                        </a>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <polyline points="22,6 12,13 2,6" />
                        </svg></div>
                    <div class="info-text"><strong>Email</strong><a href="mailto:<?= $email; ?>">
                            <?= $email; ?>
                        </a>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 6 12 12 16 14" />
                        </svg></div>
                    <div class="info-text">
                        <strong>Business Hours</strong>
                        <div class="hours-table">
                            <div class="hours-row"><span class="day">
                                    <?= $hours1; ?>
                                </span><span class="time">
                                    <?= $hours2; ?>
                                </span></div>
                            <div class="hours-row"><span class="day">Phone</span><span class="time">
                                    <?= $calling_hours; ?>
                                </span></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/callus.php'; ?>
<?php include 'includes/footer.php'; ?>