<?php
    $page = 'gallery'; 
    include 'includes/header.php'; ?>

<!-- Breadcrumb starting point -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h5>Our Gallery</h5>
            <!-- <ul class="bread-row">
                <li class="bread-list"><a href="./" class="bread-link">Home</a></li>
                <li class="bread-list">Our Gallery</li>
            </ul> -->
        </div>
        <div class="top-button">
            <a href="quote" class="btn btn-custom-medium btn-secondary">Get a Quote</a>
        </div>
    </div>
</div>
<!-- Breadcrumb ending point -->
<div class="page-gallery section pb-0">
    <?php include('includes/gallery.php') ?>
</div>

<?php include 'includes/footer.php'; ?>