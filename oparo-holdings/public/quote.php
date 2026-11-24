<?php
$page = 'quote';
include 'includes/header.php'; ?>
<!-- Breadcrumb starting point -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h5>Get a Quote</h5>
            <!-- <ul class="bread-row">
                <li class="bread-list"><a href="./" class="bread-link">Home</a></li>
                <li class="bread-list"><a href="service" class="bread-link">Services</a></li>
                <li class="bread-list">Get a Quote</li>
            </ul> -->

        </div>
        <div class="top-button">
            <a href="quote" class="btn btn-custom-medium btn-secondary">Get a Quote</a>
        </div>
    </div>
</div>
<!-- Breadcrumb ending point -->
<div class="page-quote section">
    <div class="container">
        <div class="quote-wrapper">
            <div class="quote-desc">
                <div class="title">
                    <h4>Get a Quote</h4>
                    <p>Let’s bring your vision to life — contact us today for a personalised quote that reflects your
                        style, needs, and budget.</p>
                </div>
                <div class="company-info">
                    <div class="company-info-block">
                        <h6>Your Address</h6>
                        <div class="company-desc">
                            <i class="fas fa-map-marker-alt"></i>
                            <p><?= $address; ?></p>
                        </div>
                    </div>
                    <div class="company-info-block">
                        <h6>Your Email Address</h6>
                        <div class="company-desc">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:<?= $email; ?>">
                                <p><?= $email; ?></p>
                            </a>
                        </div>
                    </div>
                    <div class="company-info-block">
                        <h6>Your Contact No</h6>
                        <div class="company-desc">
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:<?= $phone; ?>">
                                <p><?= $phone; ?></p>
                            </a>
                        </div>
                    </div>
                    <div class="company-info-block">
                        <h6>ABN</h6>
                        <div class="company-desc">
                            <i class="fa-regular fa-id-card"></i>
                            <a href="tel:<?= $abn; ?>">
                                <p><?= $abn; ?></p>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="company-link">
                    <a href="<?= $facebook; ?>" class="icon" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="<?= $instagram; ?>" class="icon" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="<?= $google; ?>" class="icon" target="_blank">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
            </div>
            <div class="form-wrap">
                <form method="POST" action="https://api.surojd.com.np/api/email/submit/MJ3nc4p6GvEeRjzZFL6c4uQNGmae5x"
                    enctype="multipart/form-data" class="form">
                    <div class="form-group">
                        <label for="name">your name</label>
                        <input type="text" id="name" name="Full Name" placeholder="Enter Your Name" class="form-fill">
                    </div>
                    <div class="form-group">
                        <label for="email">your email</label>
                        <input type="email" id="email" name="Email" placeholder="Enter Your Email Address"
                            class="form-fill">
                    </div>
                    <div class="form-group">
                        <label for="selectAny">select any service</label>
                        <select name="Select Any Service" id="selectAny" class="form-fill">
                            <option selected disabled>Select Any Services</option>
                            <option value="Home Improvement">Home Improvement</option>
                            <option value="Fencing">Fencing</option>
                            <option value="Retaining Walls">Retaining Walls</option>
                            <option value="Pergolas">Pergolas</option>
                            <option value="Renovation">Renovation</option>
                            <option value="Verandas">Verandas</option>
                            <option value="General Repairs">General Repairs</option>
                            <option value="Concreting">Concreting</option>
                            <option value="Excavation">Excavation</option>
                            <option value="Building Contractor">Building Contractor</option>
                            <option value="Tight-Access & Technical Work">Tight-Access & Technical Work</option>
                            <option value="Structural Fencing">Structural Fencing</option>
                            <option value="Retaining & Landscaping">Retaining & Landscaping</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="msg">message</label>
                        <textarea id="msg" name="Message" placeholder="Tell Us what u need." class="form-fill"
                            rows="6"></textarea>
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="btn btn-primary btn-custom">Submit</button>
                    </div>
                    <input name="to" type="hidden" value="<?= $email; ?>">
                    <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>