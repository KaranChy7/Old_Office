<?php
$page = 'contact_us';
include 'includes/header.php';
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
                            <a href="<?= $instagram; ?>" class="icon-block">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="co-info">
                    <div class="info-detail">
                        <i class="fa-solid fa-phone"></i>
                        <p class="address"><?= $phone ?></p>
                    </div>
                    <div class="info-detail">
                        <i class="fa-solid fa-envelope"></i>
                        <p class="address"><?= $email ?></p>
                    </div>
                    <div class="info-detail">
                        <i class="fa-solid fa-user-clock"></i>
                        <p class="address"><?= $work_hrs; ?> (<?= $work_day; ?>)</p>
                    </div>
                </div>
            </div>
            <div class="form-wrap">
                <div class="title">
                    <h4>Contact</h4>
                    <p>Please fill in the form to contact us for queries. I would love to hear from you. 👋</p>
                </div>
                <form class="form" method="POST" action="https://api.surojd.com.np/api/email/submit/<?= $formAPI; ?>"
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
    <?php include 'includes/service-area.php'; ?>
</div>



<?php include 'includes/footer.php'; ?>