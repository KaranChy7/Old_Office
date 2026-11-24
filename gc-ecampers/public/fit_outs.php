<?php
$page = 'fitouts';
require_once 'includes/header.php';
?>

<section class="page-hero">
    <div class="page-hero__bg">
        <img src="images/image-1.jpg" alt="Custom camper fit-out interior" loading="eager">
    </div>
    <div class="container">
        <div class="page-hero__content">
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span class="breadcrumb__sep">/</span>
                <span class="breadcrumb__current">Fit-Outs</span>
            </div>
            <h2 class="page-hero__title">Custom <em>Fit-Outs</em></h2>
        </div>
    </div>
</section>

<?php
require_once 'includes/services/fitout_packages.php';
require_once 'includes/services/fitout_process.php'; 
require_once 'includes/home/cta_banner.php';
require_once 'includes/footer.php';
?>