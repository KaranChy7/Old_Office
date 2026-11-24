<?php require_once 'includes/header.php'; ?>

<!-- Page Banner -->
<section class="page-banner">
    <div class="container">
        <h1 class="banner-title">Contact Us</h1>
        <ul class="breadcrumb">
            <li><a href="./">Home</a></li>
            <li class="separator">›</li>
            <li class="active">Contact Us</li>
        </ul>
    </div>
</section>

<!-- Contact Page -->
<div class="contact-page">
    <div class="container">
        <div class="contact-grid">

            <!-- Info -->
            <div>
                <div class="section-label">Get In Touch</div>
                <h2 class="section-title">Let's Talk About <em>Your Project</em></h2>
                <p style="color:#5A5A5A; margin-bottom:30px; line-height:1.75;">
                    We'd love to hear about what you have in mind. Whether you're ready to book or just exploring
                    options, reach out — we'll respond promptly and without any pressure.
                </p>

                <div class="contact-info">
                    <div class="info-card" data-animate>
                        <div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div>
                            <h4>Our Location</h4>
                            <p><?= $address_full ?></p>
                        </div>
                    </div>
                    <div class="info-card" data-animate>
                        <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
                        <div>
                            <h4>Phone</h4>
                            <a href="<?= $phone_link ?>"><?= $phone ?></a>
                        </div>
                    </div>
                    <div class="info-card" data-animate>
                        <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <h4>Email</h4>
                            <a href="<?= $email_link ?>"><?= $email ?></a>
                        </div>
                    </div>
                    <div class="info-card" data-animate>
                        <div class="info-icon"><i class="fa-regular fa-clock"></i></div>
                        <div>
                            <h4>Business Hours</h4>
                            <p><?= $hours ?></p>
                        </div>
                    </div>
                    <div class="info-card" data-animate>
                        <div class="info-icon"><i class="fa-solid fa-location-crosshairs"></i></div>
                        <div>
                            <h4>Service Area</h4>
                            <p><?= $radius ?></p>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="map-box">
                        <iframe src="<?= $map_embed ?>" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="<?= $company_name ?> location map"></iframe>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="contact-form-box" data-animate="right">
                <h3>Send Us a Message</h3>
                <p>Fill in the form below and we'll get back to you within 24 hours.</p>

                <form action="#" method="POST" id="contact-form" novalidate>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="c-name">Full Name *</label>
                            <input type="text" id="c-name" name="name" placeholder="Your name" required>
                        </div>
                        <div class="form-group">
                            <label for="c-phone">Phone *</label>
                            <input type="tel" id="c-phone" name="phone" placeholder="04XX XXX XXX" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="c-email">Email Address *</label>
                        <input type="email" id="c-email" name="email" placeholder="your@email.com.au" required>
                    </div>
                    <div class="form-group">
                        <label for="c-subject">Subject</label>
                        <input type="text" id="c-subject" name="subject" placeholder="What's it about?">
                    </div>
                    <div class="form-group">
                        <label for="c-message">Message *</label>
                        <textarea id="c-message" name="message" placeholder="Tell us about your project or enquiry..."
                            required></textarea>
                    </div>
                    <button type="submit" class="btn-primary form-submit">
                        <i class="fa-solid fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>