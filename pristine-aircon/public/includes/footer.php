<?php if ($page != 'thanks') { ?>
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="top-wrap">
                <div class="footer-block">
                    <a href="./" class="logo">
                        <img src="images/logo.png" alt="<?= $company; ?> logo">
                    </a>
                    <div class="desc">
                        <p> <?= $company; ?> designs, fabricates and installs metal doors, gates, fences and custom
                            metalwork for homes and businesses across Melbourne, from our base in
                            <?= $address; ?>.</p>
                    </div>
                </div>
                <div class="footer-block">
                    <ul class="quick-link">
                        <h5>quick links</h5>
                        <li class="footer-item"><a href="./" class="footer-link">home</a></li>
                        <li class="footer-item"><a href="about_us" class="footer-link">about us</a></li>
                        <li class="footer-item"><a href="our_gallery" class="footer-link">our projects</a></li>
                        <li class="footer-item"><a href="our_services" class="footer-link">our services</a></li>
                        <li class="footer-item"><a href="contact_us" class="footer-link">contact us</a></li>
                    </ul>
                </div>
                <div class="footer-block">
                    <ul class="quick-link">
                        <h5>office info</h5>
                        <li class="footer-item">
                            <a href="tel:<?= str_replace(' ', '', $phone); ?>" class="footer-link"><?= $phone ?></a>
                        </li>
                        <li class="footer-item">
                            <a href="mailto:<?= $email ?>" class="footer-link"><?= $email ?></a>
                        </li>
                        <li class="footer-item">
                            <div class="footer-link"><?= $address ?></div>
                        </li>
                        <li class="footer-item">
                            <div class="footer-link"><span>abn:</span> <?= $abn ?></div>
                        </li>
                    </ul>
                </div>
                <div class="footer-block">
                    <ul class="quick-link">
                        <h5>follow us</h5>
                        <li class="footer-item">
                            <!-- <div class="icon"><svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 1H8.27273C7.06718 1 5.911 1.47889 5.05864 2.33134C4.20616 3.18377 3.72727 4.33993 3.72727 5.54545V8.27273H1V11.9091H3.72727V19.1818H7.36364V11.9091H10.0909L11 8.27273H7.36364V5.54545C7.36364 5.30435 7.45945 5.07312 7.62991 4.90263C7.80036 4.73215 8.03164 4.63636 8.27273 4.63636H11V1Z"
                                        stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div> -->
                            <a href="<?= $facebook ?>" class="footer-link" target="_blank">facebook</a>
                        </li>
                        <li class="footer-item">
                            <a href="<?= $instagram ?>" class="footer-link" target="_blank">Instagram</a>
                        </li>
                        <li class="footer-item">
                            <a href="<?= $google ?>" class="footer-link" target="_blank">google</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="bottom-wrap">
                <div class="block">
                    <p>©</p>
                    <a href="./"><?= $company; ?></a>
                    <p>all rights reserved.</p>
                </div>
                <div class=" develop">
                    <p>Designed & Developed by</p>
                    <a href="https://linearwebsolutions.com.au/" target="_blank">Linear Web Solutions Pty
                        Ltd</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="mobile-call-button">
    <a href="tel:<?= str_replace(' ', '', $phone); ?>"><i class="fa fa-phone"></i></a>
</div>
<div class="scrollevent">
    <a class="scrollToTop" href="#">
        <button class="btn btn-scroll-up"><i class="fa fa-chevron-up"></i></button>
    </a>
</div>
<?php } ?>
<!-- Jquery Links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
<!-- End of Body Section -->

</html>
<!-- End -->