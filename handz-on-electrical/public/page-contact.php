<?php
    $page = 'page-contact';
    $title = 'Contact Us';
    $description = 'Contact Hortsol about lawn, garden and property maintenance in Haigslea, Walloon and surrounds. Call, email or send an enquiry online.';
    include 'includes/header.php'; ?>


<!--Breadcrumb-->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h1>Contact Us</h1>
            <ol class="breadcrumb-nav">
                <li>
                    <a href="./">Home </a>
                </li>
                <li class="active">Contact Us</li>
            </ol>
        </div>
    </div>
</div>
<!--Breadcrumb ends-->

<div class="contact section">
    <div class="container">
        <div class="contact-form">
            <form action="https://formsubmit.co/<?= $email;?>" method="POST" class="form" data-one-contact>
                <div class="form-group half-width">
                    <label for="c-name">Full name <span aria-hidden="true">*</span></label>
                    <input type="text" id="c-name" class="form-input" name="Full Name" autocomplete="name"
                        required aria-required="true">
                </div>
                <div class="form-group half-width">
                    <label for="c-email">Email</label>
                    <input type="email" id="c-email" class="form-input" name="email" autocomplete="email">
                </div>
                <div class="form-group half-width">
                    <label for="c-phone">Phone</label>
                    <input type="tel" id="c-phone" class="form-input" name="Phone Number" autocomplete="tel">
                </div>
                <div class="form-group half-width">
                    <label for="c-subject">Subject</label>
                    <input type="text" id="c-subject" class="form-input" name="Subject">
                </div>
                <p class="contact-hint form-group">Phone or email &ndash; please give us at least one so we can reply.</p>
                <div class="form-group message">
                    <label for="c-message">Message <span aria-hidden="true">*</span></label>
                    <textarea id="c-message" class="form-input message" name="Message" required
                        aria-required="true"></textarea>
                </div>
                <div class="form-group submit-btn">
                    <button type="submit" class="btn btn-custom-large btn-secondary">Send Message</button>
                    <p class="form-privacy"><i class="fas fa-lock"></i> We only use your details to reply to your
                        enquiry. Your message is sent to <?= $co ?> by email through our form provider, FormSubmit.</p>
                </div>
                <input type="hidden" name="_subject" value="New contact enquiry">
                <input type="text" name="_honey" style="display:none">
                <input type="hidden" name="_template" value="table">
                <input type="hidden" name="_next" value="<?= $site_url ? $site_url . '/thanks' : '' ?>">

            </form>
            <div class="info">
                <a href="mailto:<?= $email;?>" class="info-block">
                    <div class="icon">
                        <i class="far fa-envelope-open"></i>
                    </div>
                    <div class="txt">
                        <div class="txt-title">Email Address</div>
                        <p><?= $email;?></p>
                    </div>
                </a>
                <a href="tel:<?= $phone;?>" class="info-block">
                    <div class="icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="txt">
                        <div class="txt-title">Phone Number</div>
                        <p><?= $phone;?></p>
                    </div>
                </a>
                <div class="info-block">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="txt">
                        <div class="txt-title">Address</div>
                        <p><?= $address;?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
    include 'includes/footer.php'; 
?>