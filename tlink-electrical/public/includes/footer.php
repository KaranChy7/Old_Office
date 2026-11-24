<footer>
    <div class="container">
        <div class="footer-wrapper">
            <div class="row">
                <div class="col-lg-4 col-md-6 ">
                    <div class="footer-block">
                        <a href="./" class="logo">
                            <img src="images/logo.png" alt="Alternative Logo">
                        </a>
                        <div class="footer-about-desc">
                            <p>With over 10 years of experience, we provide top-quality cleaning solutions in
                                Perth, WA. Specializing in domestic, office, gym, and end of lease
                                cleaning, our dedicated team ensures exceptional service and customer
                                satisfaction. Contact us for a cleaner, healthier environment.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-block">
                        <div class="footer-title">
                            <h6>Link</h6>
                        </div>
                        <ul>
                            <li><a href="./" class="quick-link">Home</a></li>
                            <li><a href="about" class="quick-link">About Us</a></li>
                            <li><a href="service" class="quick-link">Services</a></li>
                            <li><a href="gallery" class="quick-link">Gallery</a></li>
                            <li><a href="contact" class="quick-link">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-block">
                        <div class="footer-title">
                            <h6>Popular Services</h6>
                        </div>
                        <ul>
                            <li>
                                <div class="quick-link">Domestic Cleaning</div>
                            </li>
                            <li>
                                <div class="quick-link">End Of Lease Cleaning</div>
                            </li>
                            <li>
                                <div class="quick-link">Carpet Steam Cleaning</div>
                            </li>
                            <li>
                                <div class="quick-link">Couch cleaning</div>
                            </li>
                            <li>
                                <div class="quick-link">Oven cleaning</div>
                            </li>
                            <li>
                                <div class="quick-link">Window cleaning</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-block">
                        <div class="footer-title">
                            <h6>Contact Info</h6>
                        </div>
                        <ul>
                            <li>
                                <a href="tel:<?= $phone; ?>" class="footer-cntct">
                                    <i class="fas fa-phone-alt"></i>
                                    <p><?= $phone; ?></p>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:<?= $email; ?>" class="footer-cntct">
                                    <i class="fas fa-envelope-open"></i>
                                    <p><?= $email; ?></p>
                                </a>
                            </li>
                            <li>
                                <div class="footer-cntct">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p><?= $address; ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="footer-cntct">
                                    <i class="fab fa-buysellads"></i>
                                    <p><?= $abn; ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-call-button">
        <a href="tel:<?= $phone; ?>"><i class="fa fa-phone"></i></a>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="bottom-wrapper">
                <div class="block">
                    <p>© Copyright <?= date('Y'); ?> </p>
                    <a href="./"><?= $company; ?></a>
                </div>
                <div class="develop">
                    <p>Designed & Developed by</p>
                    <a href="https://linearwebsolutions.au/" target="_blank">Linear Web Solutions</a>
                </div>
            </div>
        </div>
    </div>
</footer>




<!-- Jquery Links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>
<!-- End of Body Section -->

</html>
<!-- End -->