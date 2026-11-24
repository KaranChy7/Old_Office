<?php 
    $page = 'contact';
    include 'includes/header.php'; 
?>


<!-- breadcrumb starts -->
<div class="breadcrumb section">
    <div class="container">
        <h4 class="bread-title">Get a Quote</h4>
    </div>
</div>
<!-- breadcrumb ends -->
<div class="contact section">
    <div class="container">
        <div class="contact-wrap">
            <div class="contact-block contact-image">
                <img src="images/contact.jpg" alt="">
            </div>
            <div class="contact-block">
                <div class="section-heading align-left">
                    <h6>Get in touch</h6>
                    <h3>Any Question?</h3>
                    <h4>Write down and send us.</h4>
                </div>
                <form class="form contact-form" action="https://formsubmit.co/<?= $email;?>" method="POST">
                    <div class="form-set">
                        <label for="fullname"><i class="fas fa-user"></i><span>Name</span> </label>
                        <input type="text" id="fullname" class="form-input" name="fullname" />
                    </div>
                    <div class="form-set">
                        <label for="address"><i class="fas fa-map-marker-alt"></i><span>Address</span></label>
                        <input type="text" id="address" class="form-input" name="address" />
                    </div>
                    <div class="form-set">
                        <label for="phone"><i class="fas fa-mobile-alt"></i><span>Phone</span></label>
                        <input type="phone" id="phone" class="form-input" name="phone" />
                    </div>
                    <div class="form-set">
                        <label for="email"><i class="fas fa-envelope-open-text"></i><span>Email</span></label>
                        <input type="email" id="email" class="form-input" name="email" />
                    </div>
                    <div class="form-set">
                        <label for="subject"><i class="fas fa-book-open"></i><span>Subject</span></label>
                        <input type="text" id="subject" class="form-input" name="subject" />
                    </div>
                    <div class="form-set message">
                        <label for="message"><i class="fas fa-comments"></i><span>Message</span></label>
                        <textarea id="message" class="form-input msg" name="message" id="Message"> </textarea>
                    </div>
                    <div class="form-set">
                        <input type="submit" class="form-input btn btn-custom-large btn-primary" value="Send a Message">
                    </div>
                    <input type="text" name="_honey" style="display:none">
                    <input type="hidden" name="_template" value="table">
                    <input type="hidden" name="_subject" value="Contact Form!">
                    <input type="hidden" name="_next" value="http://localhost/project/inna_group_bathroom/thanks">
                </form>
            </div>
        </div>
        <div class="contact-detail">
            <div class="details">
                <div class="topic">
                    <h6>Office Address</h6>
                </div>
                <div class="info">
                    <i class="fas fa-map-marker-alt"></i>
                    <p><?= $address;?></p>
                </div>
            </div>
            <div class="details">
                <div class="topic">
                    <h6>Office Contact No</h6>
                </div>
                <a href="tel:<?= $phone;?>" class="info">
                    <i class="fas fa-mobile-alt"></i>
                    <p><?= $phone;?></p>
                </a>
            </div>
            <div class="details">
                <div class="topic">
                    <h6>Office E-mail Address</h6>
                </div>
                <a href="mailto:<?= $email;?>" class="info">
                    <i class="fas fa-envelope-open-text"></i>
                    <p><?= $email;?></p>
                </a>
            </div>
        </div>
        <div class="google-map">
            <iframe src="<?= $map;?>" frameborder="0"></iframe>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>