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
                        <p>Native Green Lawn And Garden Services is a Kellyville based lawn and garden business with 12
                            years of experience. We look after lawns, gardens and green waste for homes and businesses
                            across the Hills District and greater Sydney.
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
                        <li class="footer-item"><a href="./" class="footer-link">Home</a></li>
                        <li class="footer-item"><a href="#about" class="footer-link">about us</a></li>
                        <li class="footer-item"><a href="#gallery" class="footer-link">our gallery</a></li>
                        <li class="footer-item"><a href="#services" class="footer-link">our services</a></li>
                        <li class="footer-item"><a href="#contact" class="footer-link">contact us</a></li>

                        <!-- <li class="footer-item">
                            <div class="label">
                                <h6>ABN : </h6>
                            </div>
                            <a href="tel:<?= $abn; ?>" class="footer-link"><?= $abn; ?></a>
                        </li> -->


                    </ul>
                </div>
                <div class="footer-block">
                    <h5>services</h5>
                    <ul class="quick-link">
                        <li class="footer-item">
                            <a href="#services" class="footer-link">Garden Maintenance</a>
                        </li>
                        <li class="footer-item">
                            <a href="#services" class="footer-link">Landscaping & Gardening</a>
                        </li>
                        <li class="footer-item">
                            <a href="#services" class="footer-link">Rubbish Removal</a>
                        </li>
                        <li class="footer-item">
                            <a href="#services" class="footer-link">Lawn Mowing</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-block">
                    <ul class="quick-link">
                        <li class="footer-item">
                            <div class="label">
                                <h6>phone</h6>
                                <a href="tel:<?= $phone; ?>" class="footer-link"><?= $phone; ?></a>
                            </div>
                        </li>

                        <li class="footer-item">
                            <div class="label">
                                <h6>email</h6>
                                <a href="mailto:<?= $email; ?>" class="footer-link"><?= $email; ?></a>
                            </div>
                        </li>
                        <li class="footer-item">
                            <div class="label">
                                <h6>address</h6>
                                <div class="footer-link"><?= $address; ?></div>
                            </div>
                        </li>

                        <li class="footer-item">
                            <div class="label">
                                <h6>ABN</h6>
                                <div class="footer-link"><?= $abn; ?></div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="bottom-wrap">
            <p> © <?= $company ; ?></p>
            <p>all rights reserved Copyright. <?= date('Y'); ?></p>
            <a href="https://linearwebsolutions.com.au/">Linear Web Solutions</a>

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
<script type="text/javascript" src="js/main.js"></script>
</body>
<!-- End of Body Section -->

</html>
<!-- End -->