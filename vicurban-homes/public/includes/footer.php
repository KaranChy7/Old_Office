<?php if($page != 'thanks') { ?>
<footer>
    <div class="container">
        <div class="footer-wrapper">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="footer-block">
                        <div class="title logo">
                            <img src="images/logo.png" alt="Logo Image">
                        </div>
                        <div class="detail detail1">
                            <p>KD Painters and Decorators Pty LTD delivers quality painting with clean finishes and
                                reliable service. With 5+ years of experience, we focus on lasting results and attention
                                to detail.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 offset-lg-1">
                    <div class="footer-block">
                        <div class="title">
                            <h4>Contact Info</h4>
                        </div>
                        <div class="detail">
                            <a href="tel:<?= $phone ?>" class="item">
                                <i class="fa fa-phone"></i>
                                <?= $phone ?>
                            </a>
                            <a href="mailto:<?= $email ?>" class="item">
                                <i class="fa fa-envelope"></i>
                                <?= $email ?>
                            </a>
                            <div class="item">
                                <i class="fa-solid fa-clock-rotate-left"></i>
                                <?= $working_hrs ?>
                            </div>
                            <div class="item">
                                <i class="fas fa-map-marker-alt"></i>
                                <?= $address ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="footer-block">
                        <div class="title">
                            <h4>Our Service</h4>
                        </div>

                        <div class="detail">
                            <a href="our_services" class="item sideline">
                                <h5>Commercial Painting</h5>
                            </a>
                            <a href="our_services" class="item sideline">
                                <h5> Residential Painting</h5>
                            </a>
                            <a href="our_services" class="item sideline">
                                <h5> Two-Pack Epoxy Flooring with Flakes
                                </h5>
                            </a>
                            <a href="our_services" class="item sideline">
                                <h5> Interior & Exterior Painting</h5>
                            </a>
                            <a href="our_services" class="item sideline">
                                <h5> All Types of Painting Services</h5>
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-icons">
        <a href="<?=  $google ?>" target="_blank" class="item"><i class="fab fa-google"></i></a>
        <a href="<?= $facebook ?>" target="_blank" class="item"><i class="fab fa-facebook-f"></i></a>
        <a href="<?= $instagram ?>" target="_blank" class="item"><i class="fab fa-instagram"></i></a>
    </div>
</footer>


<div class="footer-bottom">
    <div class="container">
        <div class="bottom-wrap">
            <div class="block">
                <p>©</p>
                <a href="./"><?= $company;?></a>
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


<div class="mobile-call-button">
    <a href="tel:<?= $phone;?>"><i class="fa fa-phone"></i></a>
</div>

<div class="scrollevent"><a class="scrollToTop" href="#">
        <button class="btn btn-scroll-up"><i class="fa fa-chevron-up"></i></button></a>
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