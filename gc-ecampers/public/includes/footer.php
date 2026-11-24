<?php // GC-E CAMPERS — FOOTER ?>

<footer class="site-footer">
    <div class="container">
        <div class="site-footer__grid">

            <!-- Brand col -->
            <div>
                <div class="site-logo__mark site-footer__logo">GC&#8209;<span>E</span>
                    CAMPERS</div>
                <p class="site-footer__about">
                    Premium camper hire, custom campervan fit-outs, VW ID. Buzz conversions, DIY camper modules
                    and private-drive experiences from the Gold Coast.
                </p>
                <div class="social-links">
                    <a href="<?php echo $facebook; ?>" target="_blank" rel="noopener" aria-label="Facebook"><i class="ri-facebook-fill"></i></a>
                    <a href="<?php echo $instagram; ?>" target="_blank" rel="noopener" aria-label="Instagram"><i class="ri-instagram-line"></i></a>
                </div>
            </div>

            <!-- Navigation -->
            <div>
                <div class="site-footer__col-title">Navigate</div>
                <ul class="site-footer__links">
                    <li><a href="index">Home</a></li>
                    <!-- <li><a href="camper_hire">Camper Hire</a></li>
                    <li><a href="fit_outs">Fit-Outs</a></li> -->
                    <li><a href="about_us">About Us</a></li>
                    <li><a href="contact_us">Contact</a></li>
                    <li><a href="quote">Get a Quote</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <div class="site-footer__col-title">Services</div>
                <ul class="site-footer__links">
                    <!-- <?php foreach ($service_pages as $slug => $s): ?>
                    <li><a href="<?php echo $slug; ?>"><?php echo htmlspecialchars($s['nav']); ?></a></li>
                    <?php endforeach; ?> -->

                    <li><a href="camper_hire">Camper Hire</a></li>
                    <li><a href="fit_outs">Fit-Outs</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <div class="site-footer__col-title">Contact</div>

                <div class="site-footer__contact-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path
                            d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 7.81 19.79 19.79 0 01.01 4.18a2 2 0 012-2.18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 9.91a16 16 0 006.12 6.12l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z" />
                    </svg>
                    <span>
                        <a href="tel:<?php echo str_replace(' ', '', $phone); ?>"><?php echo $phone; ?></a>
                        <?php if ($phone2): ?>
                        <br><a href="tel:<?php echo str_replace(' ', '', $phone2); ?>"><?php echo $phone2; ?></a>
                        <?php endif; ?>
                    </span>
                </div>
                <div class="site-footer__contact-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                        <polyline points="22,6 12,13 2,6" />
                    </svg>
                    <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                </div>
                <div class="site-footer__contact-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                        <circle cx="12" cy="10" r="3" />
                    </svg>
                    <span><?php echo $address . ' ' . $address2; ?></span>
                </div>
            </div>

        </div>

        <div class="site-footer__bottom">
            <p class="site-footer__copyright">&copy; <?php echo date('Y'); ?> <?php echo $company; ?>. All rights reserved.<?php if ($abn): ?> ABN <?php echo $abn; ?><?php endif; ?>
            </p>
            <div class="site-footer__legal">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Use</a>
            </div>
            <button class="back-to-top" id="backToTop" aria-label="Back to top">
                <i class="ri-arrow-up-line"></i>
            </button>
        </div>

    </div>
</footer>

<!-- Scripts -->
<script src="js/main.js"></script>
</body>

</html>