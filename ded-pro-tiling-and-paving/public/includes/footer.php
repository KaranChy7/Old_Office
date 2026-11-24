<footer class="footer section">
    <div class="container">
        <div class="footer-top">
            <div class="block">
                <a href="./" class="logo">
                    <img src="images/logo.png" alt="Logo">
                </a>
                <ul class="footer-wrap">
                    <li class="footer-item">
                        <div class="footer-link">Based in Victoria</div>
                    </li>
                    <li class="footer-item">
                        <a href="tel:<?= $phone; ?>" class="footer-link"><?= $phone; ?></a>
                    </li>
                    <li class="footer-item">
                        <a href="mailto:<?= $email; ?>" class="footer-link"><?= $email; ?></a>
                    </li>
                    <li class="footer-item">
                        <div class="footer-link"><?= $address; ?></div>
                    </li>
                    <li class="footer-item">
                        <div class="footer-link">Servicing Areas: <span>Bayside area & Mornington Shire</span></div>
                    </li>
                </ul>
            </div>
            <?php if ($page != 'contact_us') { ?>
                <div class="block">
                    <h3>get in contact</h3>
                    <form action="" class="form">
                        <div class="form-group half-width">
                            <input type="text" placeholder="Name" class="form-input">
                        </div>
                        <div class="form-group half-width">
                            <input type="text" placeholder="Email Address" class="form-input">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" rows="3" placeholder="Message" class="form-input"></textarea>
                        </div>
                        <div class="button">
                            <button type="submit" class="btn btn-custom-mid btn-whitey">submit</button>
                        </div>
                    </form>
                </div>
            <?php } else { ?>
                <div class="block">
                    <iframe src="<?= $map; ?>" frameborder="0"></iframe>
                </div>
            <?php } ?>
        </div>
        <div class="footer-bottom">
            <div class="block">
                <p>copyright ©</p>
                <a href="https://linearwebsolutions.com.au/" target="_blank">Linear Web Solutions </a>
                <p>| all rights reserved.</p>
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