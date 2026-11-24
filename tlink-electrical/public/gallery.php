<?php 
    $page = 'gallery';
    include 'includes/header.php'; 
?>

<div class="breadcrumb section">
    <div class="wrapper">
        <ul class="bread-wrap">
            <li class="bread-item"><a href="" class="bread-link">Home</a></li>
            <!-- <li class="bread-item">Service</li> -->
            <li class="bread-item">Our Gallery</li>
        </ul>
        <h4 class="bread-title">Our Gallery</h4>
    </div>
</div>
<!-- breadcrumb ending -->

<div class="page-gallery">
    <?php include('includes/gallery.php') ?>
</div>

<?php include 'includes/footer.php'; ?>