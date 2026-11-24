<?php
$page = 'contact';
include 'includes/header.php';
?>


<!-- Breadcrumb starting point -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h5>Contact Us</h5>
            <!-- <ul class="bread-row">
                <li class="bread-list"><a href="./" class="bread-link">Home</a></li>
                <li class="bread-list">Contact Us</li>
            </ul> -->
        </div>
        <div class="top-button">
            <a href="quote" class="btn btn-custom-medium btn-secondary">Get a Quote</a>
        </div>
    </div>
</div>
<!-- Breadcrumb ending point -->
<section class="contact_us">
    <div class="container-fluid">
        <div class="contact-wrapper section">
            <div class="row">
                <!-- <div class="col-lg-6"> -->
                <div class="contact-block block-left">
                    <div class="ofyc-info">
                        <a href="tel:<?= $phone; ?>" class="info">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="text">
                                <h5>Phone 24/7</h5>
                                <h6><?= $phone; ?></h6>
                            </div>
                        </a>
                        <a href="mailto:<?= $abn; ?>" class="info">
                            <div class="icon">
                                <i class="fa-regular fa-id-card"></i>
                            </div>
                            <div class="text">
                                <h5>ABN</h5>
                                <h6><?= $abn; ?></h6>
                            </div>
                        </a>
                        <a href="mailto:<?= $email; ?>" class="info">
                            <div class="icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <div class="text">
                                <h5>Email Address</h5>
                                <h6><?= $email; ?></h6>
                            </div>
                        </a>
                        <div target="_blank" class="info">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="text">
                                <h5>Address</h5>
                                <h6><?= $address; ?></h6>
                            </div>
                        </div>
                    </div>
                    <form method="POST" class="form"
                        action="https://api.surojd.com.np/api/email/submit/MJ3nc4p6GvEeRjzZFL6c4uQNGmae5x"
                        enctype="multipart/form-data">
                        <div class="form-title">
                            <h6>Contact Form</h6>
                        </div>
                        <div class="form-group">
                            <input class="form-fill" name="Full Name" type="text" placeholder="Full Name" required />
                        </div>
                        <div class="form-group">
                            <input class="form-fill" name="Phone" type="tel" placeholder="Phone No" required />
                        </div>
                        <div class="form-group">
                            <input class="form-fill" name="Address" type="text" placeholder="Address" required />
                        </div>
                        <div class="form-group">
                            <input class="form-fill" name="Email" type="email" placeholder="Your Email Address"
                                required />
                        </div>
                        <div class="form-group">
                            <input class="form-fill" name="Subject" type="text" placeholder="Subject" required />
                        </div>
                        <div class="form-group">
                            <textarea class="form-fill message" name="Message" placeholder="Message"
                                rows="4"></textarea>
                        </div>
                        <div class="form-submit">
                            <button type="submit" class="btn btn-primary btn-custom">Submit</button>
                        </div>
                        <input name="to" type="hidden" value="<?= $email; ?>">
                        <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
                    </form>
                </div>
                <!-- </div> -->
                <!-- <div class="col-lg-6"> -->
                <div class="contact-block">
                    <div class="map">
                        <iframe src="<?= $map; ?>" frameborder="0"></iframe>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>