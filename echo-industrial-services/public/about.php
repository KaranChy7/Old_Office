<?php 
    $page = 'about';
    include 'includes/header.php'; 
?>
<!--Breadcrumb-->
<div class="breadcrumb">
    <div class="container">
        <h6>About Us</h6>
        <ol class="breadcrumb-wrapper">
            <li>
                <a href="./">Home </a>
            </li>
            <li class="active">About Us</li>
        </ol>

    </div>
</div>
<!--Breadcrumb ends-->


<div class="page-about">
    <?php include "includes/about.php" ?>
    <?php include "includes/features.php" ?>
    <?php include "includes/experience.php" ?>
    <?php include "includes/testimonials.php" ?>
</div>

<?php include 'includes/footer.php'; ?>