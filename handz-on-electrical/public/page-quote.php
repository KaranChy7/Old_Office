<?php
    $page = 'page-quote';
    $title = 'Request a Free Quote';
    $description = 'Request a free, no-obligation quote for lawn mowing, gardening, landscaping, weed control or acreage maintenance. Add photos of the job.';
    include 'includes/header.php'; 
?>

<!--Breadcrumb-->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h1>Quote</h1>
            <ol class="breadcrumb-nav">
                <li>
                    <a href="./">Home </a>
                </li>
                <li class="active">Quote</li>
            </ol>
        </div>
    </div>
</div>
<!--Breadcrumb ends-->
<?php 
    include 'includes/quote.php'; 
    include 'includes/footer.php'; 
?>