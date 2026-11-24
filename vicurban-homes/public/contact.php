<?php
$page = 'contact_us';
include 'includes/header.php';
?>

<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="breadcrumb">
    <div class="container">
        <ol class="breadcrumb-wrapper">
            <div class="bread-row">
                <li class="bread-item"><a href="./" class="bread-link">Home</a></li>
                <li class="bread-item active">Contact Us</li>
            </div>
        </ol>
    </div>
</nav>
<!-- Breadcrumb -->



<div class="page-contact section">
    <div class="container">
        <div class="contact-wrap">
            <div class="left-block">
                <div class="title">
                    <h3>Get in Touch with us </h3>
                    <p>Contact us now for fast responses and expert assistance. We’re here to help!</p>
                </div>
                <div class="contact-info">
                    <div class="cover-item">
                        <div class="contact-item">
                            <h6>address</h6>
                            <p><?= $address ?></p>
                        </div>
                    </div>
                    <div class="cover-item">
                        <a href="mailto:<?= $email ?>" class="contact-item">
                            <h6>email</h6>
                            <p><?= $email ?></p>
                        </a>
                    </div>
                    <div class="cover-item">
                        <a href="tel:<?= $phone ?>" class="contact-item">
                            <h6>phone</h6>
                            <p><?= $phone ?></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="right-block">
                <div class="title">
                    <h3>contact us</h3>
                </div>
                <form class="form" method="POST"
                    action="https://api.surojd.com.np/api/email/submit/az45Strdw5HL2QyVli9XMLzhb9lFbU"
                    enctype="multipart/form-data">

                    <div class="form-group half-width">
                        <label for="first">first name</label>
                        <input id="first" type="text" class="form-input" placeholder="enter your first name"
                            name="First Name">
                    </div>
                    <div class="form-group half-width">
                        <label for="last">last name</label>
                        <input id="last" type="text" class="form-input" placeholder="enter your last name"
                            name="Last Name">
                    </div>
                    <div class="form-group half-width">
                        <label for="phone">phone</label>
                        <input id="phone" type="tel" class="form-input" placeholder="enter your contact no"
                            name="Phone">
                    </div>
                    <div class="form-group half-width">
                        <label for="email">email address</label>
                        <input id="email" type="email" class="form-input" placeholder="enter your email address"
                            name="Email Address">
                    </div>
                    <div class="form-group">
                        <label for="address">address</label>
                        <input id="address" type="text" class="form-input" placeholder="enter your address"
                            name="Address">
                    </div>
                    <div class="form-group">
                        <label for="message">message</label>
                        <textarea id="message" class="form-input" placeholder="enter your message" name="Your Message"
                            rows="6"></textarea>
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="btn btn-custom-large btn-secondary">submit</button>
                    </div>

                    <input name="to" type="hidden" value="<?= $email; ?>">
                    <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
                </form>
                <div class="social-icon-group">
                    <a href="<?= $facebook; ?>" class="icon-block">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="<?= $instagram; ?>" class="icon-block">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="<?= $linkedin; ?>" class="icon-block">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>