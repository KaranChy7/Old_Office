<section class="about section">
    <div class="container">
        <div class="about-wrap">

            <div class="about-image overlap-image">
                <div class="first-img">
                    <!-- <video autoplay muted loop playsinline controls>
                        <source src=" images/video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video> -->
                    <img src="images/about1.jpg" alt="About Image 1">
                </div>
                <div class="second-img">
                    <!-- <video autoplay loop muted playsinline>
                        <source src="images/video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video> -->
                    <img src="images/about2.jpg" alt="About Image 2">
                </div>
            </div>
            <div class="about-text">
                <div class="title">
                    <p>About Us</p>
                    <h5><?= $company ?></h5>
                </div>
                <div class="desc">
                    <p>KD Painters and Decorators Pty LTD is a reliable painting company based in Ridgehaven SA,
                        delivering high-quality painting services for residential and commercial properties. We are
                        committed to providing clean, precise, and professional finishes that enhance the overall
                        appearance of every space. Our goal is to ensure each project reflects both durability and
                        visual appeal.
                    </p>
                    <p> With over 5 years of industry experience, we have developed strong skills and knowledge across a
                        wide range of painting applications. Our team understands the importance of proper techniques,
                        surface preparation, and product selection to achieve lasting results. Every job is approached
                        with attention to detail and a focus on delivering consistent quality.
                    </p>
                    <?php if($page == 'aboutus') { ?>
                    <p>WWe specialise in interior and exterior painting, along with fence and floor painting, offering
                        complete solutions for different types of properties. From small touch-ups to full repaints, we
                        handle each project with the same level of care and professionalism. Our services are tailored
                        to meet client needs while maintaining a high standard of workmanship.
                    </p>
                    <?php } ?>
                </div>
                <?php if($page == 'home') { ?>
                <div class="about-info">
                    <div class="block-info">
                        <!-- <p><span> Highly Experience</span> </p> -->
                        <p><span><?= $exp ?></span> years of experience</p>
                    </div>
                    <div class="block-info">
                        <p><span><?= $working_hrs ?></span>work days(<?= $work_day ?>)</p>
                    </div>
                    <div class="button">
                        <a href="about_us" class="btn btn-secondary btn-custom-mid">learn more</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php if($page == 'about_us') { ?>
        <div class="reverse-wrap">
            <div class="image-block">
                <img src="images/gallery1.jpg" alt="About Image 1">
            </div>
            <div class="content-block">
                <p> Our process is structured and efficient, starting with thorough preparation to ensure a smooth and
                    durable finish. We work carefully to protect surrounding areas, maintain cleanliness, and minimise
                    disruption during the project. Timely completion and clear communication are key parts of how we
                    deliver a reliable service experience.
                </p>

                <p> At KD Painters and Decorators Pty LTD, we value honesty, reliability, and customer satisfaction
                    above everything else. We take pride in delivering results that not only meet but exceed
                    expectations. Our aim is to build long-term relationships with our clients by consistently providing
                    dependable service and quality workmanship.
                </p>
            </div>
        </div>
        <?php } ?>
    </div>
</section>