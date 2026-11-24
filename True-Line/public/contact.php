<?php
$page_title   = 'Contact Us | True-Line Installs';
 
$current_page = 'contact';
require_once 'includes/head.php';
require_once 'includes/header.php';

$banner = [
    'title'    => 'Contact<br>Us',
    'tag'      => 'Contact',
    'overline' => 'Have A Question?<br>Let&rsquo;s Talk',
    'image'    => 24,
];
require 'includes/partials/page-banner.php';
?>

<section class="contact" id="contact">
    <div class="container">
        <div class="contact__grid">

            <div class="contact__info" data-reveal="left">
                <span class="section-eyebrow">Contact Details</span>
                <h2 class="section-title">Let's Discuss Your Project</h2>
                <p class="section-lead contact__lead">We're available Monday to Friday, 7am–4:30pm. Give us a call or
                    fill in the form and we'll get back to you promptly.</p>

                <div class="contact__details">
                    <div class="contact__detail">
                        <div class="contact__detail-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                            </svg>
                        </div>
                        <div class="contact__detail-content">
                            <label>Phone</label>
                            <a href="tel:0478314984">0478 314 984</a>
                        </div>
                    </div>
                    <div class="contact__detail">
                        <div class="contact__detail-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                            </svg>
                        </div>
                        <div class="contact__detail-content">
                            <label>Email</label>
                            <a href="mailto:info@trulineinstalls.com.au">info@trulineinstalls.com.au</a>
                        </div>
                    </div>
                    <div class="contact__detail">
                        <div class="contact__detail-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                            </svg>
                        </div>
                        <div class="contact__detail-content">
                            <label>Address</label>
                            <p>6/43 Yazaki Way, Carrum Downs VIC 3201</p>
                        </div>
                    </div>
                    <div class="contact__detail">
                        <div class="contact__detail-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67V7z" />
                            </svg>
                        </div>
                        <div class="contact__detail-content">
                            <label>Business Hours</label>
                            <p>Mon – Fri: 7:00 AM – 4:30 PM</p>
                        </div>
                    </div>
                </div>

                <div class="contact__service-area">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                    </svg>
                    <p>
                        <strong>Service Area — Melbourne, VIC</strong>
                        Carrum Downs, Frankston, Mornington Peninsula, Dandenong, Cranbourne, Bayside &amp; surrounds.
                    </p>
                </div>
            </div>

            <div class="contact__form-wrap" data-reveal="right">
                <h3 class="contact__form-title">Send Us a Message</h3>
                <p class="contact__form-sub">Have a question or general enquiry? Drop us a line and we'll get back to
                    you within one business day.</p>

                <form class="contact__form" id="contact-form" name="contact" method="post" action="api/send-mail.php"
                    data-netlify="true" netlify-honeypot="company_website" novalidate>
                    <input type="hidden" name="form-name" value="contact" />
                    <p class="form-honeypot" aria-hidden="true"><label>Leave this empty <input type="text"
                                name="company_website" tabindex="-1" autocomplete="off" /></label></p>
                    <div class="contact__row">
                        <div class="contact__field">
                            <label for="first-name">First Name</label>
                            <input type="text" id="first-name" name="first_name" placeholder="John" required />
                        </div>
                        <div class="contact__field">
                            <label for="last-name">Last Name</label>
                            <input type="text" id="last-name" name="last_name" placeholder="Smith" required />
                        </div>
                    </div>
                    <div class="contact__row">
                        <div class="contact__field">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="04xx xxx xxx" required />
                        </div>
                        <div class="contact__field">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="john@example.com" />
                        </div>
                    </div>
                    <div class="contact__field">
                        <label for="service">Service Required</label>
                        <select id="service" name="service">
                            <option value="" selected>Select a service…</option>
                            <?php foreach ($tl_services as $item): $label = strip_tags(html_entity_decode($item['name'])); ?>
                            <option value="<?= htmlspecialchars($label) ?>"><?= htmlspecialchars($label) ?></option>
                            <?php endforeach; ?>
                            <option value="Metal / Glass Project">Metal / Glass Project</option>
                            <option value="Other / Not Sure">Other / Not Sure</option>
                        </select>
                    </div>
                    <div class="contact__field">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="How can we help?" rows="5"
                            required></textarea>
                    </div>
                    <button type="submit" class="contact__submit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon-md">
                            <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
                        </svg>
                        Send Message
                    </button>
                    <p class="form-status" role="status" aria-live="polite"></p>
                </form>

                <p class="contact__quote-link">
                    Looking for pricing on a specific job?
                    <a href="quote.php">Get a free quote instead →</a>
                </p>
            </div>

        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
<?php require_once 'includes/scripts.php'; ?>