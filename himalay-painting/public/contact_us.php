<?php
$page = 'contact_us';
include 'includes/header.php';
// include 'includes/icon-slider.php';
include 'includes/breadcrumb.php';
?>



<div class="pages page-contact">
    <div class="container">
        <div class="contact-wrap section">
            <div class="social-icons">
                <div class="main-icon-wrap">
                    <div class="title">
                        <h6>Let's connect on socials</h6>
                    </div>
                    <div class="icons-wrap">
                        <div class="icon-div">
                            <a href="<?= $facebook; ?>" class="icon-block">
                                <i class="fa-brands fa-facebook-square"></i>
                            </a>
                        </div>
                        <div class="icon-div">
                            <a href="<?= $google; ?>" class="icon-block">
                                <i class="fa-brands fa-google"></i>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="co-info">
                    <div class="info-detail">
                        <i class="fa-solid fa-phone"></i>
                        <p class="address"><?= $phone ?></p>
                    </div>
                    <?php if (trim($phone1) != '') { ?>
                    <div class="info-detail">
                        <i class="fa-solid fa-phone"></i>
                        <p class="address"><?= $phone1 ?></p>
                    </div>
                    <?php } ?>
                    <div class="info-detail">
                        <i class="fa-solid fa-envelope"></i>
                        <p class="address"><?= $email ?></p>
                    </div>
                    <div class="info-detail">
                        <i class="fa-solid fa-user-clock"></i>
                        <p class="address">Open <?= $work_day; ?>, <?= $work_hrs; ?></p>
                    </div>
                    <div class="info-detail">
                        <i class="fa-solid fa-phone-volume"></i>
                        <p class="address">Best time to call: <?= $call_hrs; ?></p>
                    </div>
                    <div class="info-detail">
                        <i class="fa-solid fa-location-dot"></i>
                        <p class="address"><?= $address ?></p>
                    </div>
                </div>
            </div>
            <div class="form-wrap">
                <div class="title">
                    <h4>Contact</h4>
                    <p>Send us a message about your pressure cleaning, window, roof, gutter, signage or landscaping job
                        and we will get back to you with a free quote.</p>
                </div>
                <form method="POST" class="form"
                    action="https://api.surojd.com.np/api/email/submit/UakpdFDvgXOWzYpDtKghMwVhbHAWF3"
                    enctype="multipart/form-data">
                    <div class="form-group half-width">
                        <input name="First Name" type="text" class="form-input" placeholder="First Name">
                    </div>
                    <div class="form-group half-width">
                        <input name="Last Name" type="text" class="form-input" placeholder="Last Name">
                    </div>
                    <div class="form-group half-width">
                        <input name="Email" type="text" class="form-input" placeholder="Email">
                    </div>
                    <div class="form-group half-width">
                        <input name="Phone No" type="text" class="form-input" placeholder="Phone No">
                    </div>
                    <div class="form-group full-width">
                        <textarea name="Message" rows="5" class="form-input" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group button">
                        <button type="submit" class="btn btn-primary btn-custom-large">Send</button>
                    </div>
                    <input name="to" type="hidden" value="<?= $email; ?>">
                    <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
                </form>
            </div>
        </div>
    </div>
</div>



<?php include 'includes/footer.php'; ?>