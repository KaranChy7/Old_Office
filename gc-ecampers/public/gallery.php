<?php
$page = 'gallery';
require_once 'includes/header.php';
?>

<section class="page-hero">
    <div class="page-hero__bg">
        <img src="images/image-13.jpg" alt="GC-E Campers gallery" loading="eager">
    </div>
    <div class="container">
        <div class="page-hero__content">
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span class="breadcrumb__sep">/</span>
                <span class="breadcrumb__current">Gallery</span>
            </div>
            <h2 class="page-hero__title">Our <em>Gallery</em></h2>
        </div>
    </div>
</section>

<?php require_once 'includes/gallery/gallery_grid.php'; ?>

<?php require_once 'includes/footer.php'; ?>