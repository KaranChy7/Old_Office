<footer class="section">
    <div class="container">
        <div class="footer-top">
            <a href="#" target="_blank" class="info-block">
                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                <p class="text"><?php echo $address; ?></p>
            </a>
            <a href="tel:<?php echo $phone; ?>" class="info-block">
                <div class="icon"><i class="fas fa-phone-alt"></i></div>
                <p class="text"><?php echo $phone; ?></p>
            </a>
            <a href="mailto:<?php echo $email; ?>" class="info-block">
                <div class="icon"><i class="fas fa-envelope-open-text"></i></div>
                <p class="text"><?php echo $email; ?></p>
            </a>
        </div>
        <div class="footer-middle section">
            <div class="block">
                <h5 class="title"> about us</h5>
                <p> With over 10 years of experience in the transport and logistics industry, Saqib Transport Pty Ltd is your trusted partner for all moving and transport needs. We pride ourselves on delivering safe, reliable, and professional services, tailored to meet your individual or commercial requirements.
                </p>
                <div class="icons">
                    <a href="<?= $facebook ?>" target="_blank" class="facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="<?= $instagram ?>" target="_blank" class="instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="<?= $twitter ?>" target="_blank" class="twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
            <div class="block">
                <h5 class="title">our services</h5>
                <ul>
                    <li>Courier Services</li>
                    <li>Local Removals</li> 
                    <li>Trailer Hire</li>
                    <li>Truck Hire</li> 
                    <li>Office Relocation</li> 
                    <li>House Removals</li> 
                    <li> Furniture Removal</li>                    
                </ul>
                <div class="abn">
                    <span>ABN</span> <?php echo $abn; ?>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="block">
                <p> © Copyright <?php echo date('Y'); ?>. <?php echo $company; ?>. Designed & Developed By <a
                        href="https://linearwebsolutions.com.au/" target="_blank">Linear Web Solutions</a></p>
            </div>
        </div>
        <!-- <div class="image"><img src="images/footer.png" alt=""></div> -->
    </div>
</footer>

<div class="scrollevent"><a class="scrollToTop" href="#">
        <button class="btn btn-scroll-up"> <i class="fa fa-chevron-up"></i></button></a>
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