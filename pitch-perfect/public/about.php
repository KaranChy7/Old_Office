<?php
$page = 'about';
include 'includes/header.php';
?>


<!-- breadcrumb starts -->
<div class="breadcrumb section">
    <div class="container">
        <h4 class="bread-title">About Us</h4>
    </div>
</div>
<!-- breadcrumb ends -->
<div class="page-aboutUs">

    <?php 
    include('includes/about.php');
    include('includes/special_features.php');
    include('includes/choose_us.php');
    include('includes/about-features.php');
    include('includes/testimonial.php');
    include('includes/call-us-action.php'); 
    ?>
</div>

<?php include 'includes/footer.php'; ?>