<?php 
    $page = 'quote';
    include 'includes/header.php'; 
?>
<!--Breadcrumb-->
<div class="breadcrumb">
    <div class="container">
        <h6>Request a Free Quote</h6>
        <ol class="breadcrumb-wrapper">
            <li>
                <a href="./">Home </a>
            </li>
            <li class="active">Request a Quote</li>
        </ol>
    </div>
</div>
<!--Breadcrumb ends-->
<div class="section">
    <?php include "includes/quote.php" ?>
</div>
<?php include "includes/testimonials.php" ?>

<?php include 'includes/footer.php'; ?>