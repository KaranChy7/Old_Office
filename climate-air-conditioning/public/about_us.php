<?php
    $page = 'about';  
    include 'includes/header.php'; 
?>
<!-- Breadcrumb Section -->
<section class="breadcrumb">
    <div class="container">
        <div class="wrapper">
            <h3>about</h3>
            <ul class="breadcrumb-listing">
                <li>
                    <a href="./">home</a>
                </li>
                <li>
                    <p>about</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Breadcrumb Section -->
<div class="page-about">
    <?php include 'includes/about.php'; ?>
    <?php include 'includes/why_choose_us.php'; ?>
    <?php include 'includes/testimonial.php'; ?>
    <?php include 'includes/call_us.php'; ?>


</div>

<?php include 'includes/footer.php'; ?>