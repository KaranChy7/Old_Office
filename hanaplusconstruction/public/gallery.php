<?php 
$page = 'gallery';
include 'includes/header.php'; ?>

<nav class="breadcrumb">
    <div class="container">
        <h4>Our Gallery</h4>
        <ol class="breadcrumb-wrapper">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <p>Our Gallery</p>
            </li>
        </ol>
    </div>
</nav>
<!-- Breadcrumb ends from here -->
<section class="page-gallery section">
    <div class="container">
        <?php include 'includes/gallery.php'; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>