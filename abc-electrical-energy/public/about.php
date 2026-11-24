<?php
    $page = 'about';  
    include 'includes/header.php'; 
?>
<!-- Breadcrumb Section -->
<section class="breadcrumb">
    <div class="container">
        <div class="wrapper">
            <h3>about</h3>
            <ul class="breadcrumb-listing">
                <li>
                    <a href="./">home</a>
                </li>
                <li>
                    <p>about</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Breadcrumb Section -->
<div class="page-about">
    <?php include 'includes/about.php'; ?>
    <section class="call-us section">
        <div class="container">
            <div class="call-wrap">
                <h3>need assistance or have inquiries?</h3>
                <p>Call us today at <strong><?= $phone ?></strong>  to connect with our friendly and expert team. 
                    We’re here to assist with all your needs.
                </p>
                <a href="tel:<?= $phone ?>" class="btn btn-custom-large btn-secondary">contact us</a>
            </div>
        </div>
    </section>
    <?php include 'includes/why_choose_us.php'; ?> 
    <?php include 'includes/testimonial.php'; ?>
</div>

<?php include 'includes/footer.php'; ?>