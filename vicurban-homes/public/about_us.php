<?php 
    $page = 'about_us';
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


<div class="page-about-us">
    <div class="bg-image-2">
        <?php include 'includes/about.php';?>
        <!-- <div class="section pt-0">
            <?php include 'includes/our-features.php';?>
        </div> -->
    </div>
    <?php include 'includes/call-us.php';?>
    <?php include 'includes/why-choose-us.php';?>

</div>

<?php include 'includes/footer.php'; ?>