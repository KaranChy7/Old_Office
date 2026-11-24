<?php
$page = 'quote';
include 'includes/header.php';
?>
<!-- Breadcrumb Section -->
<section class="breadcrumb">
    <div class="container">
        <div class="wrapper">
            <h3>Quote</h3>
            <ul class="breadcrumb-listing">
                <li>
                    <a href="./">home</a>
                </li>
                <li>
                    <p>Quote</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Breadcrumb Section -->
<div class="page-quote section">
    <div class="container">
        <form method="POST" class="form"
            action="https://api.surojd.com.np/api/email/submit/rtNFq9mpqPSWkMTPL6W2PFKDocvkXF"
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
                <input id="phone" type="text" class="form-input" placeholder="enter your contact no" name="Phone">
            </div>
            <div class="form-group half-width">
                <label for="email">email address</label>
                <input id="email" type="text" class="form-input" placeholder="enter your email address"
                    name="Email Address">
            </div>
            <div class="form-group">
                <label for="project_type">project type</label>
                <select name="Project Type" id="project_type" class="form-input">
                    <option value="" selected disabled>Select Any Services</option>

                    <option value="Commercial Building">Commercial Building</option>
                    <option value="Residential Building">Residential Building</option>
                    <option value="Structural Construction">Structural Construction</option>
                    <option value="Landscaping">Landscaping</option>
                    <option value="Swimming Pool Building">Swimming Pool Building</option>
                    <option value="Kitchen Renovations">Kitchen Renovations</option>
                    <option value="Bathroom Renovations">Bathroom Renovations</option>
                    <option value="Laundry Renovations">Laundry Renovations</option>
                    <option value="Prefabricated Metal-Framed Home Additions">Prefabricated Metal-Framed Home Additions
                    </option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">address</label>
                <input id="address" type="text" class="form-input" placeholder="enter your address" name="Address">
            </div>
            <div class="form-group">
                <label for="message">message</label>
                <input id="message" type="text" class="form-input" placeholder="enter your message" name="Your Message">
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