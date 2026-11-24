<?php
    $page = 'our_project';  
    include 'includes/header.php'; 
?>
<!-- Breadcrumb Section -->
<section class="breadcrumb">
    <div class="container">
        <div class="wrapper">
            <h3>Our Projects</h3>
            <ul class="breadcrumb-listing">
                <li>
                    <a href="./">home</a>
                </li>
                <li>
                    <p>Our Projects</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Breadcrumb Section -->
<div class="page-project">
    <?php include ('includes/projects.php'); ?>
</div>

<?php include 'includes/footer.php'; ?>