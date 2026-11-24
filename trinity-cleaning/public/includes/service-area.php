<section class="service-area">
    <?php if ($page == 'home') { ?>
    <div class="service-area-image">
        <div class="figure">
            <img src="images/service-area-bg.jpg" alt="Service Area Background">
        </div>
        <div class="content">
            <!-- <h6>Construction specialists in Central Brisbane!</h6> -->
            <div class="social-wrap">
                <a href="<?= $google; ?>" class="social-link">
                    <img src="images/google.jpg" alt="">
                </a>
                <a href="<?= $facebook; ?>" class="social-link">
                    <img src="images/facebook.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="about section <?= $page != 'home' ? 'pb-0' : ''; ?> ">
        <div class="container">
            <div class="wrapper">
                <div class="about-content">
                    <div class="main-title">
                        <!-- <h6>Grayling Construction delivers flawless builds and exceptional results!</h6> -->
                        <h4>Proudly Servicing Kyabram<span> and Surrounding Areas.</span></h4>
                    </div>
                    <p> We proudly deliver our services across Kyabram VIC and surrounding areas within a 50km radius,
                        providing reliable and high-quality workmanship wherever you are located. Our team is flexible
                        and ready to travel, ensuring every project is completed with the same level of care,
                        consistency, and professionalism. No matter the size or location, we remain committed to
                        delivering strong, dependable results you can trust.
                    </p>

                    <ul class="point-wrap">
                        <li>Kyabram</li>
                        <li> Shepparton</li>
                        <li> Mooroopna</li>
                        <li> Echuca</li>
                        <li> Tatura</li>
                        <li> Rochester</li>
                        <li> Tongala</li>
                        <li> Stanhope</li>
                        <li> Rushworth</li>
                        <li> Girgarre</li>
                    </ul>
                </div>
                <div class="about-image">
                    <img src="images/map.png" alt="Map Image">
                </div>
            </div>
        </div>
    </div>
</section>