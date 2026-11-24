<?php require_once __DIR__ . '/config.php'; ?>
<footer id="footer">
    <div class="container">
        <div class="footer-grid">

            <div class="footer-brand">
                <a href="index.php" class="logo">
                    <img src="images/logo.png" alt="<?= htmlspecialchars($company); ?>" class="logo-img" />
                </a>
                <p><?= $experience; ?>+ years supplying, installing and servicing heating and cooling systems
                    across South Australia. AP Heating &amp; Cooling Systems is your trusted local
                    partner for residential, commercial and industrial air conditioning.</p>
                <div class="footer-socials">
                    <a href="##" class="social-btn" aria-label="Facebook">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
                        </svg>
                    </a>
                    <a href="#" class="social-btn" aria-label="Instagram">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" />
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                        </svg>
                    </a>
                    <a href="##" class="social-btn" aria-label="LinkedIn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z" />
                            <rect x="2" y="9" width="4" height="12" />
                            <circle cx="4" cy="4" r="2" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="footer-col">
                <h4>Quick Links</h4>
                <div class="footer-links">
                    <a href="index.php">Home</a>
                    <a href="about-us.php">About Us</a>
                    <a href="services.php">Our Services</a>
                    <a href="cooling.php">Cooling</a>
                    <a href="heating.php">Heating</a>
                    <a href="gallery.php">Gallery</a>
                    <a href="faq.php">FAQ</a>
                    <a href="contact-us.php">Contact Us</a>
                    <a href="get-free-quote.php">Get a Free Quote</a>
                </div>
            </div>


            <div class="footer-col">
                <h4>Contact Info</h4>
                <div class="footer-contact">
                    <div class="contact-row">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        <span><?= $address; ?></span>
                    </div>
                    <div class="contact-row">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.22 1.2 2 2 0 012.18 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.09a16 16 0 006 6l.56-.56a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z" />
                        </svg>
                        <a href="tel:<?= $phone_raw; ?>"><?= $phone; ?></a>
                    </div>
                    <div class="contact-row">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <polyline points="22,6 12,13 2,6" />
                        </svg>
                        <a href="mailto:<?= $email; ?>"><?= $email; ?></a>
                    </div>
                    <div class="contact-row">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 6 12 12 16 14" />
                        </svg>
                        <span><?= $hours1; ?><br /><?= $hours2; ?><br /><?= $calling_hours; ?></span>
                    </div>

                    <div class="contact-row">

                        <a> License no: AU57696</a>
                    </div>
                </div>
            </div>

        </div>

        <div class=" footer-bottom">
            <p>&copy; <?= date('Y'); ?> <span><?= $company_legal; ?></span> All rights reserved.
                <?= $address; ?>. ABN
                <?= $abn; ?></p>

        </div>
    </div>
</footer>

<script src="js/main.js"></script>
</body>

</html>