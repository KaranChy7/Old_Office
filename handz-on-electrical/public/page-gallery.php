<?php
    $page = 'page-gallery';
    $title = 'Gallery - Lawn, Garden & Landscaping Work';
    $description = 'Photos of lawn, garden, landscaping and acreage work by Hortsol in Haigslea, Walloon and the surrounding region.';
    include 'includes/header.php'; 
?>


<!--Breadcrumb-->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h1>Gallery</h1>
            <ol class="breadcrumb-nav">
                <li>
                    <a href="./">Home </a>
                </li>
                <li class="active">Gallery</li>
            </ol>
        </div>
    </div>
</div>
<!--Breadcrumb ends-->
<div class="page-gallery">
    <div class="container">
        <?php include 'includes/gallery.php'; ?>
    </div>
</div>
<?php 
    include 'includes/footer.php'; 
?>