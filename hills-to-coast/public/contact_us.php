<?php
$page = 'contact_us';
include 'includes/header.php';
include 'includes/breadcrumb.php';
?>
<div class="page-contact section">
    <div class="container">
        <div class="contact-wrap">
            <div class="left-block">
                <div class="section-title">
                    <h5>Get in Touch and Let's Connect</h5>
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
                <form class="form" method="POST"
                    action="https://api.surojd.com.np/api/email/submit/mrPfE8ePf6Wb1x7L6EXSF5GRuDax2a"
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
                    <div class="form-group">
                        <label for="phone">phone</label>
                        <input id="phone" type="text" class="form-input" placeholder="enter your contact no"
                            name="Phone">
                    </div>
                    <div class="form-group">
                        <label for="email">email address</label>
                        <input id="email" type="text" class="form-input" placeholder="enter your email address"
                            name="Email Address">
                    </div>
                    <div class="form-group">
                        <label for="address">address</label>
                        <input id="address" type="text" class="form-input" placeholder="enter your address"
                            name="Address">
                    </div>
                    <div class="form-group">
                        <label for="message">message</label>
                        <input id="message" type="text" class="form-input" placeholder="enter your message"
                            name="Your Message">
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="btn btn-custom-large btn-secondary">submit</button>
                    </div>

                    <input name="to" type="hidden" value="<?= $email; ?>">
                    <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
                </form>
            </div>
        </div>
    </div>

</div>
<?php include 'includes/footer.php'; ?>