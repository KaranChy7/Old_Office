<?php 
    $page = 'gallery';
    include 'includes/header.php'; 
?>
<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="breadcrumb">
    <div class="container">
        <ol class="breadcrumb-wrapper">
            <div class="bread-row">
                <li class="bread-item"><a href="./" class="bread-link">Home</a></li>
                <li class="bread-item active">Gallery</li>
            </div>
        </ol>
    </div>
</nav>
<!-- Breadcrumb -->

<?php include 'includes/gallery.php';?>

<?php include 'includes/footer.php'; ?>