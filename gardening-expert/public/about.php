<?php
$page = 'about';
include 'includes/header.php';
?>

<div class="breadcrumb-wrapper">
    <div class="container">
        <div class="bread-title">
            <h4>About Us</h4>
        </div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./" class="breadcrumb-link">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <div class="breadcrumb-link">About Us</div>
            </li>
        </ol>
    </div>
</div>

<div class="page-about">
    <?php include 'includes/about.php'; ?>
    <?php include 'includes/testimonial.php'; ?>
    <div class="section">
        <?php include 'includes/call-us.php'; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>