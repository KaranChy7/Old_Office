<?php
$page = 'quote';
include 'includes/header.php';
?>
<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="breadcrumb">
    <div class="container">
        <ol class="breadcrumb-wrapper">
            <div class="bread-row">
                <li class="bread-item"><a href="./" class="bread-link">Home</a></li>
                <li class="bread-item active">About Us</li>
            </div>
        </ol>
    </div>
</nav>
<!-- Breadcrumb -->


<div class="page-quote section">
    <div class="container">

        <div class="quote-wrapper">
            <form class="form" method="POST"
                action="https://api.surojd.com.np/api/email/submit/az45Strdw5HL2QyVli9XMLzhb9lFbU"
                enctype="multipart/form-data">

                <div class="form-group half-width">
                    <label for="first">Full name</label>
                    <input id="first" type="text" class="form-input" placeholder="enter your  name" name="Full Name">
                </div>

                <div class="form-group half-width">
                    <label for="phone">phone</label>
                    <input id="phone" type="tel" class="form-input" placeholder="enter your contact no" name="Phone">
                </div>
                <div class="form-group half-width">
                    <label for="email">email address</label>
                    <input id="email" type="email" class="form-input" placeholder="enter your email address"
                        name="Email Address">
                </div>
                <div class="form-group half-width">
                    <label for="address">address</label>
                    <input id="address" type="text" class="form-input" placeholder="enter your address" name="Address">
                </div>
                <div class="form-group">
                    <label for="project_type">project type</label>
                    <select name="Project Type" id="project_type" class="form-input">
                        <option disabled selected>Project Type</option>
                        <option value="interior painting">interior painting</option>
                        <option value="Exterior painting">Exterior painting</option>
                        <option value="Fence painting">Fence painting</option>
                        <option value="Floor painting">Floor painting</option>
                        <option value="Residential painting"> Residential painting</option>
                        <option value="Commercial painting">Commercial painting</option>
                        <option value="All Types of Painting Services">All Types of Painting Services</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">message</label>
                    <input id="message" type="text" class="form-input" placeholder="enter your message"
                        name="Your Message">
                </div>
                <div class="form-submit">
                    <button type="submit" class="btn btn-custom-large btn-secondary">submit</button>
                </div>

                <input name="to" type="hidden" value="<?= $email; ?>">
                <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
            </form>
            <!-- <div class="image">
                <img src="images/quote.png" alt="Support Call">
            </div> -->
        </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>