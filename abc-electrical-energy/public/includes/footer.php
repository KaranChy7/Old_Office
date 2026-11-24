<?php if ($page != 'thanks') { ?>
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-top-wrap">
                <div class="info-block">
                    <div class="icon-block">
                        <i class="fa-regular fa-map"></i>
                    </div>
                    <div class="info-desc">
                        <h6>address</h6>
                        <p><?= $address ?></p>
                    </div>
                </div>
                <div class="info-block">
                    <div class="icon-block">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>
                    <div class="info-desc">
                        <h6>contact no</h6>
                        <p><?= $phone ?></p>                                                
                    </div>                     
                </div>
                <div class="info-block">
                    <div class="icon-block">
                        <i class="fa-solid fa-at"></i>
                    </div>
                    <div class="info-desc">
                        <h6>email address</h6>
                        <p><?= $email ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-mid">
        <div class="container">

            <div class="mid-wrap">

                <div class="footer-block">
                    <ul class="quick-link">
                        <h5>quick links</h5>
                        <li class="footer-item"><a href="./" class="footer-link">home</a></li>
                        <li class="footer-item"><a href="about" class="footer-link">about us</a></li>
                        <li class="footer-item"><a href="services" class="footer-link">Services</a></li>
                        <li class="footer-item"><a href="our_project" class="footer-link">Gallery</a></li>
                        <li class="footer-item"><a href="contact_us" class="footer-link">contact us</a></li>
                    </ul>
                </div>
                <div class="footer-block">
                    <a href="./" class="logo">
                        <img src="images/logo.png" alt="Company Logo">
                    </a>
                    <div class="desc">
                        <p>With decades of expertise, Nasiri Building & Renovation Services is committed to transforming spaces with care and precision. We specialise in residential, commercial, and structural building solutions across NSW.
                        </p>
                    </div>
                </div>
                <div class="footer-block">
                    <ul class="quick-link">
                        <h5>social links</h5>
                        <li class="footer-item">
                            <div class="icon"><svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 1H8.27273C7.06718 1 5.911 1.47889 5.05864 2.33134C4.20616 3.18377 3.72727 4.33993 3.72727 5.54545V8.27273H1V11.9091H3.72727V19.1818H7.36364V11.9091H10.0909L11 8.27273H7.36364V5.54545C7.36364 5.30435 7.45945 5.07312 7.62991 4.90263C7.80036 4.73215 8.03164 4.63636 8.27273 4.63636H11V1Z"
                                        stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <a href="<?= $facebook ?>" class="footer-link" target="_blank">facebook</a>
                        </li>
                        <!-- <li class="footer-item">
                            <div class="icon"><svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.99999 8.22228C7.22727 8.22228 8.22222 7.22733 8.22222 6.00005C8.22222 4.77275 7.22727 3.77783 5.99999 3.77783C4.77269 3.77783 3.77777 4.77275 3.77777 6.00005C3.77777 7.22733 4.77269 8.22228 5.99999 8.22228Z"
                                        stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M1 8.22222V3.77778C1 2.24366 2.24366 1 3.77778 1H8.22222C9.75633 1 11 2.24366 11 3.77778V8.22222C11 9.75633 9.75633 11 8.22222 11H3.77778C2.24366 11 1 9.75633 1 8.22222Z"
                                        stroke="black" />
                                    <path d="M9.05554 2.95002L9.0611 2.94385" stroke="black" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <a href="<?= $instagram ?>" class="footer-link" target="_blank">instagram</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="bottom-wrap">
                <div class="block">
                    <p>© Copyright 2025.</p>
                    <a href="./"><?= $company; ?></a>
                    <!-- <p>all rights reserved.</p> -->
                </div>
                <div class=" develop">
                    <!-- <p>Designed & Developed by</p> -->
                    <a href="https://linearwebsolutions.com.au/" target="_blank"></a>
                </div>
            </div>
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