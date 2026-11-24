<!-- ===== FOOTER ===== -->
<footer class="site-footer">
    <div class="footer-main">
        <div class="container">
            <div class="footer-grid">

                <!-- Col 1: Brand -->
                <div class="footer-col">
                    <img src="images/logo.png" alt="<?= $company_name ?> Logo" class="footer-logo">

                    <!-- <div class="footer-logo-text">
                    <div class="footer-logo-text">
                        <div class="logo-name"><?= $company_name ?></div>
                        <div class="logo-sub">Salisbury SA · Trusted Tradies</div>
                    </div> -->
                    <p style="margin-top:16px;"><?= $company_name ?> delivers premium painting, tiling, flooring, and
                        concrete services across Salisbury and surrounding areas of South Australia. Quality craft
                        backed by <?= $experience ?> years of experience.</p>
                    <div class="footer-social">
                        <?php if (!empty($facebook_url)): ?>
                            <a href="<?= $facebook_url ?>" target="_blank" rel="noopener" aria-label="Facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        <?php endif; ?>
                        <?php if (!empty($instagram_url)): ?>
                            <a href="<?= $instagram_url ?>" target="_blank" rel="noopener" aria-label="Instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        <?php endif; ?>
                        <?php if (!empty($linkedin_url)): ?>
                            <a href="<?= $linkedin_url ?>" target="_blank" rel="noopener" aria-label="LinkedIn">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        <?php endif; ?>
                        <?php if (!empty($youtube_url)): ?>
                            <a href="<?= $youtube_url ?>" target="_blank" rel="noopener" aria-label="YouTube">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="./">Home</a></li>
                        <li><a href="about_us">About Us</a></li>
                        <li><a href="our_services">Our Services</a></li>
                        <li><a href="contact_us">Contact Us</a></li>
                        <li><a href="quote">Free Quote</a></li>
                    </ul>
                </div>

                <!-- Col 3: Services -->
                <div class="footer-col">
                    <h4>Our Services</h4>
                    <ul>
                        <?php foreach ($services as $srv): ?>
                            <li><a href="our_services#<?= $srv['slug'] ?>"><?= $srv['name'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Col 4: Contact -->
                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <span><?= $address_full ?></span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-phone"></i>
                        <a href="<?= $phone_link ?>"><?= $phone ?></a>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-envelope"></i>
                        <a href="<?= $email_link ?>"><?= $email ?></a>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fa-regular fa-clock"></i>
                        <span><?= $hours ?></span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-location-crosshairs"></i>
                        <span><?= $radius ?></span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <p>&copy; <?= date('Y') ?> <a href="./"><?= $company_name ?></a>. All rights reserved.</p>
                <p class="footer-abn">ABN: <?= $abn ?></p>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to top -->
<button class="scroll-top" id="scroll-top" aria-label="Scroll to top">
    <i class="fa-solid fa-arrow-up"></i>
</button>

<!-- Main JS -->
<script src="js/main.js"></script>
</body>

</html>