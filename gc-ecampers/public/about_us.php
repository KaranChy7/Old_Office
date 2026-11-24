<?php
$page = 'about_us';
require_once 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="page-hero__bg">
        <img src="images/image-10.jpg" alt="GC-E Campers workshop Arundel" loading="eager">
    </div>
    <div class="container">
        <div class="page-hero__content">
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span class="breadcrumb__sep">/</span>
                <span class="breadcrumb__current">About</span>
            </div>
            <h2 class="page-hero__title">About <em>Us</em></h2>
        </div>
    </div>
</section>
<?php
require_once 'includes/about/story.php';
require_once 'includes/about/values.php';
require_once 'includes/about/workshop.php';

require_once 'includes/footer.php';
?>