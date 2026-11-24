<?php 
    $page = 'contact';
    include 'includes/header.php'; 
?>
<!--Breadcrumb-->
<div class="breadcrumb">
    <div class="container">
        <h6>Contact Us</h6>
        <ol class="breadcrumb-wrapper">
            <li>
                <a href="./">Home </a>
            </li>
            <li class="active">Contact Us</li>
        </ol>
    </div>
</div>
<!--Breadcrumb ends-->
<div class="page-contact">
    <div class="container">
        <div class="contact section">
            <div class="container">
                <div class="contact-title">
                    <div class="left-side">
                        <h6>Contact Us</h6>
                        <h4>Please Get in Touch</h4>
                    </div>
                    <div class="right-side">
                        <div class="desc">
                            Our professional and friendly team is here to help with all your transport, packing, and removal needs. Call us directly or fill out the form below—we're ready to make your move simple and stress-free.
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form action="https://formsubmit.co/<?= $email ?>" method="POST" class="form">
                        <div class="form-group half-width">
                            <input type="text" class="form-input" placeholder="First Name" name="First Name">
                        </div>
                        <div class="form-group half-width">
                            <input type="text" class="form-input" placeholder="Last Name" name="Last Name">
                        </div>
                        <div class="form-group half-width">
                            <input type="address" class="form-input" placeholder="Address" name="Address">
                        </div>

                        <div class="form-group half-width">
                            <input type="email" class="form-input" placeholder="Email" name="Email">
                        </div>
                        <div class="form-group">
                            <input type="phone" class="form-input" placeholder="Phone Number" name="Phone Number">
                        </div>
                        <div class="form-group message">
                            <textarea class="form-input " placeholder="Message" name="Message" rows="8"></textarea>
                        </div>
                        <div class="form-group submit-btn">
                            <button type="submit" class="btn btn-custom btn-primary">Submit</button>
                        </div>
                        <input type="hidden" name="_subject" value="New Contact Submission!">
                        <input type="hidden" name="_template" value="table">
                        <input type="hidden" name="_next" value="https://echoindustrialservices.com.au/thanks">

                    </form>
                    <div class="icon-group-wrapper">
                        <div class="info">
                            <a href="mailto:<?= $email; ?>" class="info-block">
                                <div class="icon">
                                    <i class="far fa-envelope-open"></i>
                                </div>
                                <div class="txt">
                                    <div class="txt-title">Email Address</div>
                                    <p><?= $email ?></p>
                                </div>
                            </a>
                            <a href="tel:<?= $phone ?>" class="info-block">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="txt">
                                    <div class="txt-title">Phone Number</div>
                                    <p><?= $phone ?></p>
                                </div>
                            </a>
                            <div class="info-block">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="txt">
                                    <div class="txt-title">Address</div>
                                    <p><?= $address ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="social-icons">
                            <?php if($facebook) {?>
                            <a href="<?= $facebook ?>" class="icon-block">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <?php } ?>
                            <?php if($instagram) {?>
                            <a href="<?= $instagram ?>" class="icon-block">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <?php } ?>
                            <?php if($whatsapp) {?>
                            <a href="<?= $whatsapp ?>" class="icon-block">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>