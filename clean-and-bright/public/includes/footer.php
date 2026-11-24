<?php if ($page != 'thanks') { ?>
<footer class="footer section">
    <div class="container">
        <div class="footer-wrapper">
            <div class="wrap-block">
                <div class="footer-block">
                    <a href="./" class="logo">
                        <img src="images/logo.png" alt="Company Logo">
                    </a>
                    <div class="desc">
                        <p>21 Degrees ACR is a highly experienced air conditioning and refrigeration business based in
                            Ellenbrook, WA. Our team is committed to quality, reliability, and exceptional customer care
                            on every job.
                        </p>
                    </div>
                    <div class="social-icon-wrap">
                        <?php if ($facebook) { ?>
                        <a href="<?= $facebook; ?>" class="icon-block circle-radius">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <?php } ?>
                        <?php if ($instagram) { ?>
                        <a href="<?= $instagram; ?>" class="icon-block circle-radius">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <div class="wrap-block">

                <div class="footer-block">
                    <h5>quick links</h5>
                    <ul class="quick-link">
                        <li class="footer-item"><a href="./" class="footer-link">home</a></li>
                        <li class="footer-item"><a href="about_us" class="footer-link">about us</a></li>
                        <li class="footer-item"><a href="our_services" class="footer-link">our services</a></li>
                        <li class="footer-item"><a href="our_gallery" class="footer-link"> gallery</a></li>
                        <li class="footer-item"><a href="contact_us" class="footer-link">contact us</a></li>
                    </ul>
                </div>
                <div class="footer-block">
                    <h5>services</h5>
                    <ul class="quick-link">
                        <li class="footer-item">
                            <a href="our_services#Service1" class="footer-link">Domestic Air Conditioning</a>
                        </li>
                        <li class="footer-item">
                            <a href="our_services#Service2" class="footer-link">Commercial Air Conditioning</a>
                        </li>
                        <li class="footer-item">
                            <a href="our_services#Service3" class="footer-link">Ducted Air Conditioning</a>
                        </li>
                        <li class="footer-item">
                            <a href="our_services#Service4" class="footer-link">Cool Room &amp; Freezer
                                Refrigeration</a>
                        </li>
                        <li class="footer-item">
                            <a href="our_services#Service5" class="footer-link">Evaporative Cooling</a>
                        </li>
                        <li class="footer-item">
                            <a href="our_services#Service6" class="footer-link">Gas Reclaim &amp; Decommissioning</a>
                        </li>

                    </ul>
                </div>
                <div class="footer-block">
                    <ul class="quick-link">
                        <li class="footer-item">
                            <div class="label">
                                <h6>phone</h6>
                            </div>
                            <a href="tel:<?= $phone; ?>" class="footer-link"><?= $phone; ?></a>
                        </li>

                        <li class="footer-item">
                            <div class="label">
                                <h6>email</h6>
                            </div>
                            <a href="mailto:<?= $email; ?>" class="footer-link"><?= $email; ?></a>
                        </li>
                        <li class="footer-item">
                            <div class="label">
                                <h6>address</h6>
                            </div>
                            <div class="footer-link"><?= $address; ?></div>
                        <li class="footer-item">
                            <div class="label">
                                <h6>ABN</h6>
                            </div>
                            <div class="footer-link"><?= $abn; ?></div>
                        <li class="footer-item">
                            <div class="label">
                                <h6>RTA</h6>
                            </div>
                            <div class="footer-link"> AU069502</div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="bottom-wrap">
            <p>with love ©</p>
            <a href="https://linearwebsolutions.com.au/">Linear Web Solutions</a>
            <p>all rights reserved Copyright <?= date('Y'); ?></p>
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

<?php } ?>


<!-- Jquery Links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

<script>
wow = new WOW({
    boxClass: 'wow', // default
    animateClass: 'animate__animated', // default
    offset: 0, // default
    mobile: true, // default
    live: true // default
})
wow.init();
</script>
</body>
<!-- End of Body Section -->

</html>
<!-- End -->