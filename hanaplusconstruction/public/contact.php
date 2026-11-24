<?php
$page = 'contact';
include 'includes/header.php'; ?>

<nav class="breadcrumb">
    <div class="container">
        <h4>Contact Us</h4>
        <ol class="breadcrumb-wrapper">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <p>Contact Us</p>
            </li>
        </ol>
    </div>
</nav>
<!-- Breadcrumb ends from here -->
<div class="contact section">
    <div class="container">
        <div class="contact-wrapper">
            <div class="formblock ">
                <div class="title">
                    <h4>Contact Details</h4>
                    <p>Get in touch with Native Green Lawn And Garden Services for lawn mowing, garden maintenance, landscaping or rubbish removal.</p>
                </div>
                <div class="wrap">
                    <div class="block">
                        <div class="con-link">
                            <i class="fas fa-home"></i>
                        </div>
                        <h5>Our Location</h5>
                        <p><?php echo $address; ?></p>
                    </div>
                    <div class="block">
                        <a href="tel:<?php echo $phone; ?>" class="con-link">
                            <i class="fas fa-phone"></i>
                        </a>
                        <h5>Call Us</h5>
                        <p><?php echo $phone; ?></p>
                    </div>
                    <div class="block">
                        <a href="mailto:<?php echo $email; ?>" class="con-link">
                            <i class="far fa-envelope"></i>
                        </a>
                        <h5>Email Us</h5>
                        <p><?php echo $email; ?></p>
                    </div>
                    <div class="block">
                        <div class="con-link">
                            <i class="far fa-clock"></i>
                        </div>
                        <h5>Opening Hours</h5>
                        <p><?php echo $work_hrs; ?></p>
                        <p>Monday to Saturday</p>

                    </div>
                </div>
            </div>

            <div class="formblock second-title">
                <div class="title">
                    <h4>Send Us a Message</h4>
                    <p>Tell us about your yard and the work you need, and we will get back to you as soon as
                        possible with a free quote.</p>
                </div>
                <form method="POST" class="form"
                    action="https://api.surojd.com.np/api/email/submit/I8gWNA5oExH2yYkDzos5TfDUYOfj0v"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="icon-block">
                            <i class="far fa-user"></i>
                        </div>
                        <input type="text" class="form-input" name="Full Name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <div class="icon-block">
                            <i class="fas fa-phone"></i>
                        </div>
                        <input type="tel" class="form-input" name="Phone No" placeholder="Phone Number"
                            pattern="^([0-9]{3})?([ ]{1})?([0-9]{3})?([ ]{1})?([0-9]{4})$" minlength="10">
                    </div>
                    <div class="form-group">
                        <div class="icon-block">
                            <i class="far fa-envelope"></i>
                        </div>
                        <input type="email" class="form-input" name="Email Address" placeholder="Your Email"
                            pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$">
                    </div>
                    <div class="form-group">
                        <div class="icon-block">
                            <i class="far fa-comment-alt"></i>
                        </div>
                        <textarea class="form-input message" name="Clients Message" rows="4"
                            placeholder="Your Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-secondary btn-custom-large" type="submit" value="Submit">
                    </div>
                    <input name="to" type="hidden" value="<?= $email; ?>">
                    <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
                </form>
            </div>

        </div>
    </div>
</div>

<div class="direction">
    <iframe src="<?php echo $map; ?>" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
</div>

<?php include 'includes/footer.php'; ?>