<section class="about section">
    <div class="container">
        <div class="about-wrap">
            <div class="about-image overlap-image">
                <div class="first-img">
                    <img src="images/about1.jpg" alt="Modern black steel railing installed in Melbourne">
                </div>
                <!-- <div class="second-img">
                    <img src="images/about2.jpg" alt="About Image 2">
                </div> -->
            </div>
            <div class="about-text">
                <div class="main-title">
                    <h6>about us</h6>
                    <h3>Melbourne Metalwork Specialists</h3>
                </div>
                <div class="desc">
                    <p><?= $company; ?> is a Campbellfield metal fabrication business that makes and installs metal
                        doors, gates, fences and custom metalwork for homes and businesses. Every job is measured on
                        site, built to suit the opening and finished to handle Victorian weather.
                    </p>
                    <p>Our highly experienced team works with steel and wrought iron every day, so you get solid
                        construction, neat welds and hardware that operates smoothly for years.
                    </p>
                    <?php if ($page == 'about_us') { ?>

                    <p>We started <?= $company; ?> to give Melbourne property owners straight answers and a product
                        that is built properly. Whether it is one security door or a full run of commercial fencing,
                        every project gets the same care and attention to detail.
                    </p>
                    <?php } ?>

                </div>
                <?php if ($page == 'home') { ?>
                <div class="about-info">
                    <div class="block-info">
                        <p><span>100km </span> Service Radius</p>
                    </div>
                    <div class="block-info">
                        <p><span><?= $work_hrs ?></span>Working Hrs (<?= $work_day; ?>)</p>
                    </div>
                    <div class="button">
                        <a href="about_us" class="btn btn-primary btn-custom-mid">learn more</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php if ($page == 'about_us') { ?>
        <div class="reverse-wrap">
            <div class="about-image">
                <img src="images/about3.jpg" alt="Steel and wire balustrade Melbourne">
            </div>
            <div class="about-text">

                <p>
                    Homeowners come to us for wrought iron entry doors, security screen doors, driveway gates, front
                    fences, balustrades and handrails. Businesses rely on us for steel doors, perimeter fencing,
                    sliding site gates, security grilles and structural steelwork for factories, warehouses, shops
                    and industrial sites.
                </p>
                <p>
                    We work within 100km of Campbellfield, covering Craigieburn, Epping, Broadmeadows, Coburg,
                    Preston, Sunbury, Melton, Werribee, the Melbourne CBD, Dandenong, Frankston and Geelong. Our
                    team is available <?= $work_day; ?>, <?= $work_hrs; ?>, and closed on weekends. Call us to
                    talk about your project and book a free measure and quote.
                </p>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
