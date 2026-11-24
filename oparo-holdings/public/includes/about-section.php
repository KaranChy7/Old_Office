<div class="gradient">
    <section class="about-section section">
        <div class="container">
            <div class="about-wrapper">
                <div class="about-content">
                    <h2>About Us</h2>
                    <!-- <h3>Welcome to <?= $company ?></h3> -->
                    <h6>Complete Site Solutions: <span> From initial ground break to final fence installation and fully
                            automated landscaping. </span>
                    </h6>
                    <p>At ATT Home Improvement, we are dedicated to delivering reliable and high-quality solutions that
                        enhance the comfort, functionality, and value of every property we work on. Our mission is to
                        provide practical and long-lasting home improvement services while maintaining a strong focus on
                        workmanship, consistency, and customer satisfaction.
                    </p>
                    <p>
                        Our vision is to be recognised as a trusted and dependable name in the industry, known for
                        delivering projects that stand the test of time. We aim to build lasting relationships with our
                        clients by consistently exceeding expectations and offering solutions that are both efficient
                        and tailored to individual needs.</p>
                </div>
                <div class="about-images">
                    <div class="first-img">
                        <img src="images/about_1.jpg" alt="About Image 1">
                        <div class="landscape-img">
                            <img src="images/about_3.jpg" alt="About Image 3">
                        </div>
                        <div class="lil-desc">
                            <h6>Over <span><?= $exp ?> years</span> of experience</h6>
                            <!-- <h6>Highly<span><?= $exp ?> Experience</span> </h6> -->
                        </div>
                    </div>
                    <div class="second-img">
                        <img src="images/about.jpeg" alt="About Image 2">
                    </div>
                </div>
                <?php if ($page == 'about') { ?>
                <div class="full-content">
                    <p>We operate with strong core values centred around integrity, attention to detail, and
                        professionalism. Every project is approached with care and precision, ensuring clear
                        communication, honest advice, and a commitment to delivering results that align with our
                        clients’ goals.
                    </p>
                    <p>
                        Our services cover a wide range of home improvement solutions, including fencing, retaining
                        walls, pergolas, verandas, renovations, handyman services, general repairs, concreting,
                        excavation, and building work. Whether it’s a small upgrade or a larger project, we ensure every
                        task is handled with the same level of dedication and expertise.
                    </p>
                    <p>
                        What sets us apart is our ability to deliver complete solutions with a practical and
                        results-driven approach. We focus on quality finishes, efficient project handling, and
                        dependable service, ensuring every client receives a smooth experience and outcomes they can
                        rely on for years to come.</p>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>