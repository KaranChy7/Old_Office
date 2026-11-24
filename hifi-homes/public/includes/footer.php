<footer class="site-footer">
    <div class="site-footer__body">
        <div class="container">

            <div class="site-footer__grid">

                <div class="site-footer__col">
                    <a href="index.html" class="site-footer__logo-link" aria-label="Hifi Homes — Home">
                        <img src="images/logo.png" alt="Hifi Homes — Bathroom &amp; Kitchen Fixtures"
                            class="site-footer__logo" width="721" height="346">
                    </a>
                    <!-- <h3 class="site-footer__heading">About The Shop</h3> -->
                    <p class="site-footer__blurb">Hifi Homes supplies quality bathroom, kitchen and laundry
                        fixtures to builders, renovators and homeowners across Melbourne.</p>
                </div>

                <div class="site-footer__col">
                    <h3 class="site-footer__heading">Newsletter</h3>
                    <p class="site-footer__blurb">Be the first to know about new arrivals and special offers.</p>
                    <div class="site-footer__newsletter">
                        <input type="email" class="site-footer__newsletter-input" placeholder="Your email"
                            aria-label="Email address">
                        <button type="button" id="newsletter-submit"
                            class="site-footer__newsletter-btn">Subscribe</button>
                    </div>
                </div>

            </div>

            <div class="site-footer__bottom">
                <select class="site-footer__region" aria-label="Region">
                    <option>Australia (AUD $)</option>
                </select>

                <div class="site-footer__follow">
                    <span class="site-footer__bottom-label">Follow Us</span>
                    <a href="#" class="site-footer__follow-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.78-3.89 1.1 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99A10 10 0 0 0 22 12z" />
                        </svg>

                    </a>
                </div>

                <div class="site-footer__accept">
                    <span class="site-footer__bottom-label">We Accept</span>
                    <div class="site-footer__accept-icons">
                        <span class="site-footer__accept-icon" aria-label="Card payment">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8">
                                <rect x="2" y="5" width="20" height="14" rx="2" />
                                <path d="M2 10h20" />
                            </svg>
                        </span>
                        <span class="site-footer__accept-icon" aria-label="Bank transfer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8">
                                <path d="M3 10l9-6 9 6" />
                                <path d="M5 10v9M10 10v9M14 10v9M19 10v9" />
                                <path d="M3 19h18" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>

            <div class="site-footer__legal">
                &copy; <?= date('Y') ?> Hifi Homes. All rights reserved. &middot; ABN 30 647 287 581
            </div>

        </div>
    </div>
</footer>