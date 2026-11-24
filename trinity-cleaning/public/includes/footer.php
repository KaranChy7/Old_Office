<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-block">
                <a href="./" class="logo">
                    <img src="images/logo.png" alt="Company Logo">
                </a>
                <div class="co-info">
                    <a href="tel:<?= $phone; ?>"><span>Call us at: </span> <?= $phone; ?></a>
                    <a href="mailto:<?= $email; ?>"><span>Mail us at: </span> <?= $email; ?></a>
                </div>
                <!-- <p> We’re available <?= $work_day; ?> from <?= $work_hrs; ?>, to respond to emails and messages. Reach out today to start your construction journey with Grayling Construction—trusted experts in renovations, new builds, and custom projects across Central Brisbane and nearby suburbs. Let’s bring your vision to life! -->
                </p>
            </div>
        </div>
        <div class="footer-wrapper">
            <div class="footer-block">
                <h5>about Us</h5>
                <div class="desc">
                    <p>With 27 years of experience, we specialize in bricklaying, paving, and landscaping.
                        Our expert team delivers reliable, high-quality results for both residential and commercial
                        projects, ensuring every job meets your expectations.
                    </p>
                </div>
            </div>
            <div class="footer-block">
                <h5>Our services </h5>
                <div class="footer-sub-block">
                    <ul class="quick-link">
                        <li class="footer-item">
                            <div class="footer-link">
                                Bricklaying
                            </div>
                        </li>
                        <li class="footer-item">
                            <div class="footer-link">
                                Brick piering
                            </div>
                        </li>
                        <li class="footer-item">
                            <div class="footer-link">
                                Landscaping
                            </div>
                        </li>
                        <li class="footer-item">
                            <div class="footer-link">
                                Paving
                            </div>
                        </li>

                        <li class="footer-item">
                            <div class="footer-link">
                                Commercial & Residential
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- <div class="footer-sub-block">
                    <h5>quick links</h5>
                    <ul class="quick-link">
                        <li class="footer-item">
                            <div class="footer-link">
                                Service Areas
                            </div>
                        </li>
                    </ul>
                </div> -->
            </div>
            <!-- <div class="footer-block">
                <h5>quick quote</h5>
                <form action="" class="form">
                    <div class="form-group">
                        <input type="text" class="form-input" placeholder="Full Name" name="Full Name">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-input" placeholder="Phone Number" name="Phone Number">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" placeholder="Email" name="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" placeholder="Location" name="Location">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" placeholder="Required Service" name="Required Service">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" placeholder="Descriptoin of Job" name="Descriptoin of Job">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-custom-large btn-secondary">send</button>
                    </div>
                </form>
            </div> -->
            <div class="footer-block">
                <iframe src="<?= $map; ?>" frameborder="0"></iframe>
            </div>
        </div>
    </div>
    <div class="bottom-wrap">
        <div class="left">
            <p>© <?= date('Y'); ?> all rights reserved</p>
            <a href="https://linearwebsolutions.com.au/"><?= $company; ?></a>
        </div>
        <div class="right">
            <p>designed and developed by</p>
            <a href="">Linear WEb Solutions</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/main-javascript.js"></script>
</body>
<!-- End of Body Section -->

</html>
<!-- End -->