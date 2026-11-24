<?php
$page = 'camper_hire';
require_once 'includes/header.php';
?>

<section class="page-hero">
    <div class="page-hero__bg">
        <img src="images/image-11.jpg" alt="GC-E Campers hire fleet" loading="eager">
    </div>
    <div class="container">
        <div class="page-hero__content">
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span class="breadcrumb__sep">/</span>
                <span class="breadcrumb__current">Camper Hire</span>
            </div>
            <h2 class="page-hero__title">Camper <em>Hire</em></h2>
        </div>
    </div>
</section>

<?php
require_once 'includes/services/hire_vehicles.php';
require_once 'includes/services/hire_includes.php';
require_once 'includes/home/how_it_works.php';
require_once 'includes/home/cta_banner.php';
require_once 'includes/footer.php';
?>