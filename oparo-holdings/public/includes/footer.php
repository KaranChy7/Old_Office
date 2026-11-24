<?php if($page != 'thanks'){ ?>
<footer>
    <div class="container">
        <div class="footer-wrapper">
            <div class="row">
                <div class="col-lg-4 col-md-6 ">
                    <div class="footer-block">
                        <a href="./" class="logo">
                            <img src="images/logo.png" alt="">
                        </a>
                        <div class="footer-about-desc">
                            <p>Delivering reliable home improvement solutions with a focus on quality workmanship,
                                practical results, and dependable service, ensuring every project is completed to a high
                                standard with attention to detail and customer satisfaction.</p>
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
                            <li><a href="services" class="quick-link">Services</a></li>
                            <li><a href="gallery" class="quick-link">Gallery</a></li>
                            <li><a href="quote" class="quick-link">Request A Quote</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-block">
                        <div class="footer-title">
                            <h6>Popular Services</h6>
                        </div>
                        <ul class="unordered-block">
                            <li>
                                <a href="services#service1" class="quick-link">Home Improvement</a>
                            </li>
                            <li>
                                <a href="services#service2" class="quick-link">Fencing</a>
                            </li>
                            <li>
                                <a href="services#service3" class="quick-link">Retaining Walls</a>
                            </li>
                            <li>
                                <a href="services#service4" class="quick-link">Pergolas</a>
                            </li>
                            <li>
                                <a href="services#service5" class="quick-link">Renovation</a>
                            </li>
                            <li>
                                <a href="services#service6" class="quick-link">Verandas</a>
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
                                <a href="#:<?= $abn; ?>" class="footer-cntct">
                                    <i class="fa-regular fa-id-card"></i>
                                    <p><?= $abn; ?></p>
                                </a>
                            </li>
                            <li>
                                <a href="bdl:<?= $bdl; ?>" class="footer-cntct">
                                    <i class="fa-solid fa-id-badge"></i>
                                    <p><?= $bdl; ?></p>
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-call-button">
        <a href="tel:<?= $phone;?>"><i class="fa fa-phone"></i></a>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="bottom-wrapper">
                <div class="block">
                    <p>© Copyright <?= date('Y');?> </p>
                    <a href="./"><?= $company;?></a>
                </div>
                <!-- <div class="develop">
                    <div class="text-center">Designed & Developed by</div>
                    <a href="https://linearwebsolutions.com.au/" target="_blank">Linear Web Solutions</a>
                </div> -->
            </div>
        </div>
    </div>
</footer>
<?php } ?>
<!-- Jquery Links -->
<!-- Jquery Source-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Jquery Plugins-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!-- Custom Jquery-->
<script type="text/javascript" src="js/main.js"></script>
</body>
<!-- End of Body Section -->

</html>
<!-- End -->