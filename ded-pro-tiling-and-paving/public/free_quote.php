<?php
$page = 'free_quote';
include 'includes/header.php';
?>
<!-- Breadcrumb Section -->
<section class="breadcrumb">
    <div class="container">
        <div class="wrapper">
            <h3>Quote</h3>
        </div>
    </div>
</section>
<!-- Breadcrumb Section -->
<div class="page-quote section">
    <div class="container">
        <form class="form" method="POST"
            action="https://api.surojd.com.np/api/email/submit/lPH4hmHpUmQPjruG43Wgg5shf5gMMU"
            enctype="multipart/form-data">

            <div class="form-group half-width">
                <label for="first">first name</label>
                <input id="first" type="text" class="form-input" placeholder="enter your first name" name="First Name">
            </div>
            <div class="form-group half-width">
                <label for="last">last name</label>
                <input id="last" type="text" class="form-input" placeholder="enter your last name" name="Last Name">
            </div>
            <div class="form-group half-width">
                <label for="phone">phone</label>
                <input id="phone" type="tel" class="form-input" placeholder="enter your contact no" name="Phone">
            </div>
            <div class="form-group half-width">
                <label for="email">email address</label>
                <input id="email" type="email" class="form-input" placeholder="enter your email address" name="Email">
            </div>
            <?php if ($page != 'home') { ?>
                <div class="form-group">
                    <label for="selectService">select services</label>
                    <select name="Select Services" id="selectService" class="form-input">
                        <option value="" selected disabled>Select any 1 service</option>
                        <option value="Expert Tiling">Expert Tiling</option>
                        <option value="Bathroom Renovations">Bathroom Renovations</option>
                        <option value="Laundry Renovations">Laundry Renovations</option>
                        <option value="Kitchen Tiling">Kitchen Tiling</option>
                        <option value="Splashbacks">Splashbacks</option>
                        <option value="Waterproofing">Waterproofing</option>
                    </select>
                </div>
            <?php } ?>
            <div class="form-group">
                <label for="address">address</label>
                <input id="address" type="text" class="form-input" placeholder="enter your address" name="Address">
            </div>
            <div class="form-group">
                <label for="message">message</label>
                <textarea name="Your Message" class="form-input" placeholder="enter your message" id="message"
                    rows="4"></textarea>
            </div>
            <div class="form-submit">
                <button type="submit" class="btn btn-custom-large btn-secondary">submit</button>
            </div>

            <input name="to" type="hidden" value="<?= $email; ?>">
            <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">

        </form>
    </div>

</div>

<?php include 'includes/footer.php'; ?>