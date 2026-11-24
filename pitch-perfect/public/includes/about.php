<section class="about section">
    <div class="container">
        <div class="about-wrap">
            <div class="block">
                <img src="images/about.jpg" alt="About Image">
            </div>
            <div class="block content-block">
                <h4><span>Welcome to DED Pro Tiling and Paving!</span> Reliable Services for a Cleaner, Safer Space.
                </h4>
                <p> At DED Pro Tiling and Paving, we have over 10 years of experience in providing exceptional tiling
                    and paving services to both residential and commercial clients. Our goal is to deliver top-quality
                    workmanship that enhances the beauty and functionality of your spaces. Whether it’s a small
                    residential project or a large commercial installation, we ensure that every job is completed to the
                    highest standard.
                </p>

                <?php if ($page == 'home') { ?>
                <div class="button">
                    <a href="about" class="btn btn-custom-medium btn-secondary">Read More</a>
                </div>
                <?php } else { ?>
                <p>We understand that every project is unique, which is why we offer personalized solutions tailored to
                    your specific needs. From selecting the right materials to providing expert advice, we work closely
                    with our clients to bring their vision to life. Our team is passionate about delivering outstanding
                    results that reflect the individual style and requirements of each space.
                </p>
                <?php  } ?>
            </div>
            <?php if ($page != 'home') { ?>
            <div class="full-content">
                <p>Customer satisfaction is at the heart of everything we do. We take pride in our professionalism,
                    reliability, and attention to detail. Our team is committed to ensuring that every project is
                    completed on time, within budget, and with minimal disruption to your daily routine. We value open
                    communication and work hard to keep our clients informed throughout every step of the process.
                </p>
                <p>At DED Pro Tiling and Paving, we use only the best materials and the latest techniques to ensure
                    long-lasting results. Whether you’re renovating your kitchen, updating your bathroom, or
                    transforming your outdoor area, we have the skills and experience to handle any tiling or paving
                    project. We are proud of the reputation we’ve built in the industry and are committed to maintaining
                    it through our dedication to quality and excellence.
                </p>
                <p>With a focus on providing exceptional service and outstanding results, we aim to exceed your
                    expectations with every project. Our team’s dedication to perfection is what sets us apart, and we
                    look forward to continuing to help clients create beautiful, functional spaces for many years to
                    come.
                </p>
            </div>
            <?php } ?>
        </div>
    </div>
</section>