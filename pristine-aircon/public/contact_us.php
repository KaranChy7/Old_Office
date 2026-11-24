<?php
$page = 'contact_us';
$page_title = "Contact Us | Metal Doors & Gates Campbellfield VIC";
include 'includes/header.php'; ?>
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h1>Contact Us</h1>
        </div>
    </div>
</div>
<div class="page-contact">
    <div class="container">
        <div class="contact section">
            <div class="information">
                <div class="title">
                    <h2>Talk to Our Team</h2>
                    <p>Have a question about a door, gate, fence or custom metalwork job? Call us <?= $work_day; ?>,
                        <?= $work_hrs; ?>, or send a message and we will get back to you during business hours.</p>
                </div>
                <div class="contact-form">
                    <div class="form-image">
                        <img src="images/gallery/gallery1.jpg" alt="Contact <?= $company; ?> for metalwork in Melbourne">
                    </div>
                    <div class="form-block">
                        <div class="title">
                            <h4>Send Us an Enquiry</h4>
                            <p>Fill out the form below and our team will get back to you within business hours to discuss
                                your project.</p>
                        </div>

                        <form class="form" method="POST"
                            action="https://api.surojd.com.np/api/email/submit/YzN7vdat3WOxaBxk7fahKQlkZz2NP4"
                            enctype="multipart/form-data">
                            <div class="form-group half-width">
                                <input type="text" class="form-input" placeholder="First Name" name="First Name" />
                            </div>
                            <div class="form-group half-width">
                                <input type="text" class="form-input" placeholder="Last Name" name="Last Name" />
                            </div>
                            <div class="form-group half-width">
                                <input type="email" class="form-input" placeholder="Email" name="email" />
                            </div>
                            <div class="form-group half-width">
                                <input type="tel" class="form-input" placeholder="Phone" name="Phone Number" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-input" placeholder="Address" name="Address" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-input" placeholder="Subject" name="Subject" />
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-input" rows="5" placeholder="Message"
                                    name="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-custom-large  btn-secondary" type="submit"
                                    value="Submit now">Submit
                                    Now</button>
                            </div>
                            <input name="to" type="hidden" value="<?= $email; ?>">
                            <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
                        </form>
                    </div>
                </div>
                <div class="google-map">
                    <iframe src="<?= $map; ?>" width="100%" height="400" frameborder="0" style="border:0;"
                        allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="container">
                    <div class="info-wrapper">

                        <div class="block">
                            <div class="logo">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-detail">
                                <h6>Address</h6>
                                <p><?= $address; ?></p>
                            </div>
                        </div>
                        <a href="tel:<?= str_replace(' ', '', $phone); ?>" class="block info-center">
                            <div class="logo">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="info-detail">
                                <h6>Phone</h6>
                                <p><?= $phone; ?></p>
                            </div>
                        </a>
                        <a href="mailto:<?= $email; ?>" class="block">
                            <div class="logo">
                                <i class="fas fa-envelope-open"></i>
                            </div>
                            <div class="info-detail">
                                <h6>Email</h6>
                                <p><?= $email; ?></p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>