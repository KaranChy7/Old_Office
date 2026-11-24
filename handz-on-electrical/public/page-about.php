<?php
    $page = 'page-about';
    $title = 'About Us - Local Lawn & Garden Care in Haigslea';
    $description = 'Meet Cameron Lostroh and Hortsol, a licensed and insured lawn, garden and property maintenance business based in Haigslea, Queensland.';
    include 'includes/header.php'; ?>

<!--Breadcrumb-->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h1>About Us</h1>
            <ol class="breadcrumb-nav">
                <li>
                    <a href="./">Home </a>
                </li>
                <li class="active">About Us</li>
            </ol>
        </div>
    </div>
</div>
<!--Breadcrumb ends-->

<div class="page-about">
    <?php 
    include 'includes/about-story.php'; 
    ?>
</div>

<?php include 'includes/footer.php'; ?>