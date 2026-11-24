<?php
    $page = 'contact';  
    include 'includes/header.php'; 
?>
<!-- Breadcrumb Section -->
<section class="breadcrumb">
    <div class="container">
        <div class="wrapper">
            <h3>Contact Us</h3>
            <ul class="breadcrumb-listing">
                <li>
                    <a href="./">home</a>
                </li>
                <li>
                    <p>Contact Us</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Breadcrumb Section -->
<div class="page-contact section">
    <div class="container">
        <div class="contact-wrap">
            <div class="left-block">
                <div class="title">
                    <h3>Get in Touch with Us</h3>
                    <p>Connect with Us for Your Car Detailing Needs</p>
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
                <form action="https://formsubmit.co/<?= $email; ?>" method="POST" class="form">
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
                    <input type="hidden" name="_subject" value="New Contact Form!">
                    <input type="text" name="_honey" style="display:none">
                    <input type="hidden" name="_template" value="table">
                    <input type="hidden" name="_next" value="https://ashelectrical.au/thanks">
                </form>
                <div class="social-icon-group">
                    <a href="#" class="icon-block">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="icon-block">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="icon-block">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>