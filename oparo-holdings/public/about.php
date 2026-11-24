<?php
    $page = 'about'; 
    include 'includes/header.php'; ?>

<!-- Breadcrumb starting point -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h5>About Us</h5>
            <!-- <ul class="bread-row">
                <li class="bread-list"><a href="./" class="bread-link">Home</a></li>
                <li class="bread-list">About Us</li>
            </ul> -->
        </div>
        <div class="top-button">
            <a href="quote" class="btn btn-custom-medium btn-secondary">Get a Quote</a>
        </div>
    </div>
</div>
<!-- Breadcrumb ending point -->
<div class="page-about">
    <div class="background-image">
        <?php include ('includes/about-section.php'); ?>
    </div>
    <div class="experience">
        <div class="exp-wrap">
            <div class="image-block">
                <video autoplay loop muted playsinline>
                    <source src="images/video1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- <img src="images/about_4.jpg" alt="experience image"> -->
            </div>
            <div class="content-block">
                <h6>Why Choose Us</h6>
                <p>At ATT Home Improvement, we bring years of expertise to every project, offering a comprehensive range
                    of services for both homes and businesses. From general repairs to major home improvements, our
                    skilled, licensed professionals deliver high-quality results on time, using only premium materials.
                    We pride ourselves on transparent pricing with no hidden fees, ensuring that our clients know
                    exactly what to expect from start to finish.
                </p>
                <p> Here’s why we’re the right choice for your next project:</p>
                <ul>
                    <li>Years of Experience in Home Improvements</li>
                    <li>Diverse Services for Homes, Offices, and Commercial Spaces</li>
                    <li>Clear, Transparent Quotes with No Hidden Costs</li>
                    <li>Timely and Efficient Project Completion</li>
                    <li>Skilled, Licensed, and Trustworthy Professionals</li>
                    <li>Only Premium Materials for Long-Lasting Results</li>
                    <li>Commitment to Outstanding Craftsmanship</li>
                    <li>Proudly Serving VIC and Surrounding Areas</li>
                </ul>

            </div>
            <div class="desc">
                <p>Serving VIC and surrounding areas, we are committed to delivering reliable, local service with
                    attention to detail and precision. Whether it’s enhancing your home or improving functionality, we
                    approach every project with care, ensuring durable, long-lasting results that meet your needs and
                    exceed your expectations.</p>
            </div>
        </div>
    </div>
    <?php include ('includes/about-features.php'); ?>
    <?php include ('includes/call-us-section.php'); ?>
</div>

<?php include 'includes/footer.php'; ?>