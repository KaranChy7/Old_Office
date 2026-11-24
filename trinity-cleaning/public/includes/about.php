<section class="about section <?= $page != 'home' ? 'pb-0' : ''; ?> ">
    <div class="container">
        <div class="wrapper">
            <div class="about-content">
                <div class="main-title">
                    <h4>About<span>Us </span></h4>
                    <h6>Strength and Quality in Every Brick!</h6>
                </div>
                <div class="about-image-mobile">
                    <img src="images/about1.jpg" alt="About Image">
                </div>
                <p> At QUICK BRICK PTY LTD, we have over 27 years of experience in the bricklaying and construction
                    industry, proudly serving the Goulburn Valley area and beyond. Our commitment to quality and
                    precision
                    has made us a trusted name in both commercial and residential bricklaying services. We specialize in
                    brick piering, paving, and landscaping, providing comprehensive solutions for every
                    project, big or small.
                </p>
                <?php if ($page == 'home') { ?>
                <ul class="point-wrap">
                    <li>Experienced & Skilled Team</li>
                    <li>Uncompromising Quality Standards</li>
                    <li>Clear & Transparent Pricing</li>
                    <li>Efficient & Clean Work Process</li>
                    <li>Dedicated to Client Satisfaction</li>
                    <li>Timely Project Completion</li>
                    <li>Reliable & Trustworthy Service</li>
                    <li>Locally Trusted Experts</li>
                </ul>
                <div class="button-wrap">
                    <a href="quote" class="btn btn-primary btn-custom-mid btn-wrap">
                        <span>get a free quote</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="tel:<?= $phone; ?>" class="call-me">
                        <div class="icon">
                            <img src="images/phone.png" alt="">
                        </div>
                        <div class="desc">
                            <h6>call us at</h6>
                            <p><?= $phone; ?></p>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="about-image">
                <div class="figure">
                    <img src="images/about1.jpg" alt="About Image">
                </div>
                <div class="figure">
                    <img src="images/gallery_16.jpg" alt="About Image">
                </div>
            </div>
            <?php if ($page != 'home') { ?>
            <div class="extra-content">
                <p> We pride ourselves on delivering reliable and efficient services, ensuring that every job is
                    completed to the highest standards. Our team of skilled professionals is dedicated to creating
                    long-lasting, durable structures that stand the test of time. Whether it's a new construction
                    project or a home renovation, we bring our expertise and attention to detail to every task.
                </p>
                <p>
                    Customer satisfaction is at the heart of everything we do. From the first consultation to the final
                    touches, we work closely with our clients to understand their needs and exceed their expectations.
                    Our transparent communication and competitive pricing make us the go-to choice for all your
                    bricklaying and construction needs.
                </p>
                <p>
                    At QUICK BRICK PTY LTD, we understand that every project is unique. That's why we offer personalized
                    solutions tailored to fit your specific requirements. With our extensive experience and a team
                    dedicated to excellence, we are here to help you bring your vision to life with precision and
                    professionalism.
                </p>
            </div>
            <?php } ?>
        </div>
    </div>
</section>