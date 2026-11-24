<section class="aboutus-section section">
    <div class="container">
        <div class="about-wrap">
            <div class="block">
                <div class="section-header">
                    <h6>Welcome to <?php echo $company; ?></h6>
                    <h4>About us</h4>
                </div>
                <div class="section-body">
                    <p>Saqib Transport Pty Ltd is a trusted name in the transport and removals industry, proudly serving Sydney and surrounding suburbs for over 10 years. We are committed to delivering reliable, safe, and professional services tailored to your needs, whether it’s a local move, commercial relocation, or courier delivery. Our experienced team takes great care to handle every job with efficiency and respect, ensuring your belongings and goods arrive safely, on time, every time.
                    </p>
                    <?php if($page == "about"){ ?>
                    <p> With a strong focus on customer satisfaction and competitive pricing, Saqib Transport offers a wide range of services, including truck and trailer hire, furniture removals, residential and commercial moves, and office relocations. Backed by a modern, well-maintained fleet and fully insured services, we guarantee peace of mind and a stress-free experience from start to finish.
                    </p>
                    <?php } ?>
                    <?php if($page == 'home') {?>
                    <h3> <span><?php echo $exp; ?></span> years of experience - call us now</h3>
                    <!-- <h3> <span>HIghly</span> experience - call us now</h3> -->
                    <div class="item d-flex">
                        <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                        <h4> <span><?php echo $work_hrs; ?></span> Available</h4>
                    </div>
                    <?php } ?>

                </div>
            </div>
            <?php if($page == 'home') { ?>
            <div class="block halfgrid">
                <div class="top-image">
                    <img src="images/about-1.jpg" alt="Top About Image">
                </div>
                <div class="middle-text">
                    <h6><?php echo $company; ?></h6>
                </div>
                <div class="bottom-image">
                    <img src="images/about-2.jpg" alt="Bottom About Image">
                </div>
            </div>
            <?php } else { ?>
            <div class="block image">
                <img src="images/about-3.jpg" alt="Image">
            </div>
            <?php } ?>
        </div>
    </div>
</section>