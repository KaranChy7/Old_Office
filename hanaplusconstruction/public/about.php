<?php
$page = 'about';
include 'includes/header.php'; ?>

<nav class="breadcrumb">
    <div class="container">
        <h4>About Us</h4>
        <ol class="breadcrumb-wrapper">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <p>About Us</p>
            </li>
        </ol>
    </div>
</nav>
<!-- Breadcrumb ends from here -->
<section class="page-about section">
    <?php
    include 'includes/about.php';
    include 'includes/why.php';
    include 'includes/about-features.php';
    ?>


</section>
<?php include 'includes/testimonials.php'; ?>

<?php include 'includes/footer.php'; ?>