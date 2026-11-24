<?php $page = 'contact'; ?>
<?php include 'includes/header.php'; ?>
<div class="breadcrumb-wrapper">
    <div class="container">
        <div class="bread-title">
            <h4>Contact</h4>
        </div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./" class="breadcrumb-link">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <div class="breadcrumb-link">Contact Us</div>
            </li>
        </ol>
    </div>
</div>

<div class="page-contact">
    <div class="container">
        <div class="contact-title">
            <h5>Contact Us</h5>
            <h6>Any Question or Remarks? Just Write Us A Message.</h6>
        </div>
        <div class="contact-wrapper">
            <div class="contact-info">
                <div class="desc">
                    <h6>Contact Information</h6>
                    <p>Fill up the form and our team will get back to you within 24 hours.</p>
                </div>
                <div class="info">
                    <div class="co-detail">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="text">
                            <a href="tel:<?php echo $phone; ?>" class="info-link"><?php echo $phone; ?></a>
                        </div>
                    </div>
                    <div class="co-detail">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="text">
                            <a href="mailto:<?php echo $email; ?>" class="info-link"><?php echo $email; ?></a>
                        </div>
                    </div>
                    <div class="co-detail">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="text">
                            <a href="#" class="info-link"><?php echo $address; ?></a>
                        </div>
                    </div>
                </div>
                <div class="contact-social-link">
                    <a href="<?= $facebook; ?>" class="cntct-link">
                        <div class="icon-img"><i class="fab fa-facebook-f"></i></div>
                    </a>
                    <a href="<?= $insta; ?>" class="cntct-link insta">
                        <div class="icon-img"><i class="fab fa-instagram"></i></div>
                    </a>
                    <a href="<?= $google; ?>" class="cntct-link google">
                        <div class="icon-img"><i class="fab fa-google"></i></div>
                    </a>
                    <!-- <a href="" class="cntct-link linke">
                        <div class="icon-img"><i class="fab fa-linkedin-in"></i></div>
                    </a> -->
                </div>
            </div>
            <div class="contact-form">
                <div class="title">
                    <h5>Basic Info</h5>
                </div>
                <form class="form" method="POST"
                    action="https://api.surojd.com.np/api/email/submit/LiLwP0cL3KjytI2MjLPPzOaMcmaf0i"
                    enctype="multipart/form-data">

                    <div class="form-block">
                        <label for="first_name">First Name</label>
                        <input type="text" name="First Name" id="first_name" class="form-fill">
                    </div>
                    <div class="form-block">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="Last Name" id="last_name" class="form-fill">
                    </div>
                    <div class="form-block">
                        <label for="phone">Phone No</label>
                        <input type="tel" name="Phone No" id="phone" class="form-fill">
                    </div>
                    <div class="form-block">
                        <label for="email">Email</label>
                        <input type="email" name="Email" id="email" class="form-fill">
                    </div>
                    <div class="form-block">
                        <label for="message">Message</label>
                        <textarea name="Message" id="message" rows="5" class="form-fill"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-custom">Submit</button>

                    <input name="to" type="hidden" value="<?= $email; ?>">
                    <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">

                </form>
            </div>

        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>