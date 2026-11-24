<footer>
    <div class="container">
        <div class="footer-wrapper">
            <div class="footer-block">
                <div class="logo">
                    <img src="images/logo.png" alt="Footer Logo">
                </div>
                <div class="about">
                    <p>Hortsol is committed to delivering dependable workmanship, careful attention to detail, and
                        professional customer service. We take pride in creating lasting results while making every
                        property-maintenance visit smooth, organised, and stress-free.
                    </p>
                </div>
            </div>
            <div class="footer-block">
                <div class="footer_title">
                    <h2 class="h6">Quick Links</h2>
                </div>
                <ul>
                    <li>
                        <div class="footer_info">
                            <a href="./">Home</a>
                        </div>
                    </li>
                    <li>
                        <div class="footer_info">
                            <a href="page-about">About Us</a>
                        </div>
                    </li>
                    <li>
                        <div class="footer_info">
                            <a href="page-service">Services</a>
                        </div>
                    </li>
                    <li>
                        <div class="footer_info">
                            <a href="page-gallery">Gallery</a>
                        </div>
                    </li>
                    <li>
                        <div class="footer_info">
                            <a href="page-quote">Request a Quote</a>
                        </div>
                    </li>
                    <li>
                        <div class="footer_info">
                            <a href="page-contact">Contact Us</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="footer-block">
                <div class="footer_title">
                    <h2 class="h6">Our Services</h2>
                </div>
                <ul>
                    <li>
                        <div class="footer_info">
                            <a href="page-service#lawn-mowing">Lawn Mowing</a>
                        </div>
                    </li>
                    <li>
                        <div class="footer_info">
                            <a href="page-service#acreage-maintenance">Acreage Maintenance</a>
                        </div>
                    </li>
                    <li>
                        <div class="footer_info">
                            <a href="page-service#garden-maintenance">Garden Maintenance</a>
                        </div>
                    </li>
                    <li>
                        <div class="footer_info">
                            <a href="page-service#landscaping">Landscaping</a>
                        </div>
                    </li>
                    <li>
                        <div class="footer_info">
                            <a href="page-service#weed-management">Weed Management</a>
                        </div>
                    </li>
                    <li>
                        <div class="footer_info">
                            <a href="page-service#lawn-health-renovation">Lawn Health &amp; Renovation</a>
                        </div>
                    </li>
                    <li>
                        <div class="footer_info">
                            <a href="page-service#turf-installation">Turf Installation</a>
                        </div>
                    </li>
                    <li>
                        <div class="footer_info">
                            <a href="page-service#property-clean-ups">Property Clean-Ups</a>
                        </div>
                    </li>
                    <li>
                        <div class="footer_info">
                            <a href="page-service#exterior-maintenance">Exterior Maintenance</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="footer-block">
                <div class="footer_title">
                    <h2 class="h6">Company Info</h2>
                </div>
                <ul>
                    <li class="remove">
                        <div class="footer_info">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <p><?php echo $address; ?></p>
                        </div>
                    </li>
                    <li class="remove">
                        <a href="tel:<?php echo $phone; ?>" class="footer_info">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <p><?php echo $phone; ?></p>
                        </a>
                    </li>

                    <li class="remove">
                        <a href="mailto:<?php echo $email; ?>" class="footer_info">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <p><?php echo $email; ?></p>
                        </a>
                    </li>
                    <li class="remove">
                        <div class="footer_info">
                            <div class="icon">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>
                            <p><?= $work_hrs ?> <?= $work_day ?><span> (working hours)</span></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="block">
                <p>© Copyright <?php echo date('Y'); ?> <?php echo $co; ?> Designed & Developed by</p> <a
                    href="https://linearwebsolutions.com.au/" target="_blank"> Linear Web Solutions</a>
            </div>
        </div>
    </div>
</footer>







<nav class="mobile-action-bar" aria-label="Quick contact">
    <a href="tel:<?php echo $phone; ?>" class="action-call">
        <i class="fas fa-phone-alt" aria-hidden="true"></i> Call Now
    </a>
    <a href="page-quote" class="action-quote">
        <i class="fas fa-file-lines" aria-hidden="true"></i> Request a Quote
    </a>
</nav>

<div class="scrollevent"><a class="scrollToTop" href="#">
        <button class="btn btn-scroll-up"><i class="fa fa-chevron-up"></i></button></a>
</div>



<!-- Jquery Links -->
<!-- Jquery Source-->
<script type="text/javascript" src="js/jquery-v2.2.2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>

<!-- <script type="text/javascript" src="js/slider.js"></script> -->
<!-- Jquery Plugins-->

<script type="text/javascript" src="js/isotope.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!-- Custom Jquery-->
<script type="text/javascript" src="js/main.js"></script>


</body>
<!-- End of Body Section -->

</html>
<!-- End -->