<footer class="footer">
    <div class="container">
        <div class="footer-bg">
            <div class="footer-top">
                <a href="./" class="logo">
                    <img src="images/logo.png" alt="Company Logo">
                </a>
            </div>
            <div class="footer-wrapper">
                <div class="footer-block">
                    <h5>services</h5>
                    <ul class="quick-link">
                        <li class="footer-item">
                            <a href="services#Services1" class="footer-link">
                                Pressure Cleaning
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="services#Services2" class="footer-link">
                                Window Cleaning
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="services#Services3" class="footer-link">
                                Roof &amp; Gutter Cleaning
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="services#Services4" class="footer-link">
                                Signage Cleaning
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="services#Services5" class="footer-link">
                                Landscaping
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-block">
                    <h5>connect</h5>
                    <ul class="quick-link">
                        <li class="footer-item">
                            <a href="./" class="footer-link">
                                home
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="about" class="footer-link">
                                about us
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="services" class="footer-link">
                                services
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="gallery" class="footer-link">
                                gallery
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="contact_us" class="footer-link">
                                contact
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- <div class="footer-block">
                    <h5>more</h5>
                    <ul class="quick-link">
                        <li class="footer-item">
                            <a href="gallery" class="footer-link">
                                gallery
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="contact_us" class="footer-link">
                                contact
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="service_areas" class="footer-link">
                                service areas
                            </a>
                        </li>

                    </ul>
                </div> -->
                <div class="footer-block">
                    <h5>contact us</h5>
                    <ul class="quick-link">
                        <li class="footer-item">
                            <div class="footer-link">
                                <span>Phone: </span>
                                <p> <?= $phone; ?></p>
                            </div>
                        </li>
                        <li class="footer-item">
                            <div class="footer-link">
                                <span>ABN: </span>
                                <p> <?= $abn; ?></p>
                            </div>
                        </li>
                        <?php if (trim($phone1) != '') { ?>
                        <li class="footer-item">
                            <div class="footer-link">
                                <span>Phone1: </span>
                                <p> <?= $phone1; ?></p>
                            </div>
                        </li>
                        <?php } ?>
                        <li class="footer-item">
                            <div class="footer-link">
                                <span>hours: </span>
                                <p> <?= $work_day; ?>, <?= $work_hrs; ?></p>
                            </div>
                        </li>

                        <li class="footer-item">
                            <a href="mailto: <?= $email; ?>" class="footer-link">
                                <span>email:</span>
                                <p><?= $email; ?></p>
                            </a>
                        </li>
                        <li class="footer-item">
                            <div class="footer-link">
                                <span>address: </span>
                                <p> <?= $address; ?></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-wrap">
        <div class="left">
            <p>© <?= date('Y'); ?> all rights reserved</p>
            <a href="https://linearwebsolutions.com.au/"><?= $company; ?></a>
        </div>
    </div>
</footer>




<div class="mobile-call-button">
    <a href="tel:<?= $phone; ?>"><i class="fa fa-phone"></i></a>
</div>
<div class="scrollevent">
    <a class="scrollToTop" href="#">
        <button class="btn btn-scroll-up"><i class="fa fa-chevron-up"></i></button>
    </a>
</div>

<!-- Jquery Links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/js/bootstrap.bundle.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<!-- <script type="text/javascript" src="js/main-javascript.js"></script> -->
</body>
<!-- End of Body Section -->

</html>
<!-- End -->