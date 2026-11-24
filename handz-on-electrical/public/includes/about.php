<section class="section about-section">
    <div class="container">
        <div class="about-wrapper d-flex">
            <div class="block image-block">
                <div class="image">
                    <img src="images/about.jpg" alt="About Image">
                    <div class="text">
                        <p class="h2"><?= $exp ?></p>
                        <!-- <h5>Years of <span>Experience</span></h5> -->
                        <p class="h5">Highly Experienced</p>
                    </div>
                </div>
            </div>
            <div class="block content-block">
                <div class="section-heading">
                    <p class="h6">Welcome To <?= $co ?></p>
                    <h2 class="h3">People &bull; Properties &bull; Process</h2>
                </div>
                <div class="content">
                    <div class="desc">
                        <p> Hortsol Pty Ltd is a professional lawn, garden and property maintenance business based in
                            Haigslea, Queensland, led by Director Cameron Lostroh. I work with residential and acreage
                            property owners throughout the surrounding region, providing dependable outdoor maintenance
                            solutions tailored to the needs of each property.


                        </p>
                        <?php if($page == 'page-about'){?>
                        <p>Our key areas of expertise include regular lawn and acreage maintenance, garden care,
                            landscaping, weed management, lawn improvement, turf establishment and property clean-ups.
                            Whether maintaining an established property or improving an outdoor area that needs
                            attention, our focus is always on practical solutions, quality workmanship and long-term
                            results.
                        </p>
                        <?php } ?>
                    </div>
                    <?php if($page == 'home'){?>
                    <div class="button">
                        <div class="btn-effect large secondary">
                            <a href="page-about">Meet Hortsol</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php if($page == 'page-about'){?>
        <div class="wrapper">
            <div class="content">
                <p>At Hortsol, customers can expect clear communication, reliable service and a professional approach
                    from the initial enquiry through to completion. Every property is treated with care and attention,
                    with work planned and carried out in an organised manner to ensure consistent standards. </p>

                <p> Cameron holds an ACDC commercial operator licence and a ground spray licence, while Hortsol is fully
                    insured. These credentials support our commitment to safe, responsible and professional property
                    maintenance. </p>

                <p> Our approach is guided by our brand philosophy: People • Properties • Process. It reflects our
                    belief in capable people, well-maintained properties and structured systems that help us deliver
                    dependable service and consistent outcomes for our customers.
                </p>
            </div>
            <div class="image">
                <img src="images/about-2.jpg" alt="About Images 2">
            </div>
        </div>
        <?php } ?>
    </div>
</section>