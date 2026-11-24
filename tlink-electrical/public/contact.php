<?php
$page = 'contact';
include 'includes/header.php';
?>

<div class="breadcrumb section">
    <div class="wrapper">
        <ul class="bread-wrap">
            <li class="bread-item"><a href="" class="bread-link">Home</a></li>
            <!-- <li class="bread-item">Service</li> -->
            <li class="bread-item">Contact Us</li>
        </ul>
        <h4 class="bread-title">Contact Us</h4>
    </div>
</div>
<!-- breadcrumb ending -->
<div class="contact section">
    <div class="information">
        <div class="title">
            <h2>Get in touch</h2>
            <p>Call or Email us regarding questions or issues</p>
        </div>
        <div class="google-map">
            <iframe src="<?= $map; ?>" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""
                aria-hidden="false" tabindex="0"></iframe>
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
                <a href="tel:<?= $phone; ?>" class="block info-center">
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
            <div class="contact-form">
                <div class="form-image">
                    <img src="images/contact.jpg" alt="">
                </div>
                <div class="form-block">
                    <div class="title">
                        <h4>For Free Quote</h4>
                        <p>Just fill out the following form, our expert team will contact and make sure you
                            get the highest level of help.</p>
                    </div>

                    <form class="form" method="POST"
                        action="https://api.surojd.com.np/api/email/submit/sj5pIUuRVJUBLILAI8mgNT5m2eq4x9"
                        enctype="multipart/form-data">


                        <div class="form-group half-width">
                            <input type="text" class="form-control" placeholder="Full Name" name="Full Name" />
                        </div>
                        <div class="form-group half-width">
                            <input type="email" class="form-control" placeholder="Email" name="Email" />
                        </div>
                        <div class="form-group half-width">
                            <input type="tel" class="form-control" placeholder="Phone" name="Phone Number" />
                        </div>
                        <div class="form-group half-width">
                            <input type="text" class="form-control" placeholder="Suburbs" name="Suburbs" />
                        </div>
                        <!-- <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject" name="Subject" />
                        </div> -->
                        <div class="form-group full-width">
                            <select name="Selected Service" class="form-control">
                                <option value="" selected disabled>Select Any Services</option>
                                <option value="Domestic Cleaning">Domestic Cleaning</option>
                                <option value="End Of Lease Cleaning">End Of Lease Cleaning</option>
                                <option value="Carpet Steam Cleaning">Carpet Steam Cleaning</option>
                                <option value="Couch cleaning">Couch cleaning</option>
                                <option value="Oven cleaning">Oven cleaning</option>
                                <option value="Window cleaning">Window cleaning</option>
                                <option value="Tile and grout cleaning">Tile and grout cleaning</option>
                                <option value="Builder cleaning">Builder cleaning</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control formstyle" rows="5" placeholder="Message"
                                name="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-custom-large  btn-secondary" type="submit" value="Submit now">Submit
                                Now</button>
                        </div>
                        <input name="to" type="hidden" value="<?= $email; ?>">
                        <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include 'includes/footer.php'; ?>