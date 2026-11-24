<?php 
    $page = 'gallery';
    include 'includes/header.php'; 
?>
<!--Breadcrumb-->
<div class="breadcrumb">
    <div class="container">
        <h6>Our Gallery</h6>
        <ol class="breadcrumb-wrapper">
            <li>
                <a href="./">Home </a>
            </li>
            <li class="active">Our Gallery</li>
        </ol>
    </div>
</div>
<!--Breadcrumb ends-->
<section class="page-gallery">
    <div class="container">
        <?php include 'includes/gallery.php'; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>