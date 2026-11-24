<footer>
    <div class="container">
        <div class="footer-wrapper">
            <div class="row">
                <div class="col-lg-4 col-md-12 ">
                    <div class="footer-block">
                        <div class="logo">
                            <img src="images/logo.png" alt="">
                        </div>
                        <div class="footer-about-desc">
                            <p>Colls Rural Contractors is a Collinsville-based fencing contractor delivering rural,
                                commercial and Colorbond fencing up to 300 km from our base, with a strong focus on
                                quality workmanship and fences built to last.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12">
                    <div class="footer-block">
                        <div class="footer-title">
                            <h6>Link</h6>
                        </div>
                        <ul>
                            <li><a href="./" class="quick-link">Home</a></li>
                            <li><a href="about" class="quick-link">About Us</a></li>
                            <li><a href="service" class="quick-link">Services</a></li>
                            <li><a href="gallery" class="quick-link">Gallery</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="footer-block">
                        <div class="footer-title">
                            <h6>Popular Services</h6>
                        </div>
                        <ul>
                            <li>
                                <a href="service#Services1" class="quick-link">Rural Contract Fencing</a>
                            </li>
                            <li>
                                <a href="service#Services2" class="quick-link">Commercial Rural Fencing</a>
                            </li>
                            <li>
                                <a href="service#Services3" class="quick-link">Colorbond Fencing</a>
                            </li>
                            <li>
                                <a href="service#Services4" class="quick-link">Wire Fencing</a>
                            </li>
                            <li>
                                <a href="service#Services5" class="quick-link">Fence Repairs</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
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
                                    <p class="wrap-it"><?= $email; ?></p>
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
                                    <span>Work hours:</span>
                                    <p><?= $work_day; ?> (<?= $work_hrs; ?>)</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-call-button">
        <a href="tel:<?= $telephone; ?>"><i class="fa fa-phone"></i></a>
    </div>
</footer>


<div class="footer-bottom">
    <div class="container">
        <div class="bottom-wrapper">
            <div class="block">
                <p>© Copyright <?= date('Y'); ?> </p>
                <a href="./"><?= $company; ?></a>
            </div>
            <div class="develop">
                <div class="text-center">Designed & Developed by</div>
                <a href="https://linearwebsolutions.com.au/" target="_blank">Linear Web Solultions</a>
            </div>
        </div>
    </div>
</div>




<div class="scrollevent"><a class="scrollToTop" href="#">
        <button class="btn btn-scroll-up"><i class="fa fa-chevron-up"></i></button></a>
</div>

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