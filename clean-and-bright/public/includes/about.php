<section class="about section">
    <div class="container">
        <div class="wrapper">
            <div class="about-image">
                <img src="images/abt-header.png" alt="Icon Image" class="background-attachment">
                <div class="figure">
                    <img src="images/about.jpg" alt="About Image">
                </div>
            </div>
            <div class="about-content">
                <div class="main-title">
                    <h6>about us</h6>
                    <h5>Your Comfort Is Our Priority</h5>
                </div>
                <div class="desc">
                    <p>21 Degrees ACR is a business with highly experienced technicians operating in Perth WA.
                        We've built our reputation on quality workmanship, honest service, and getting
                        the job done right the first time, for homeowners and businesses throughout the local area.</p>
                    <p>From domestic split systems to commercial and ducted air conditioning, cool rooms, freezer rooms
                        and refrigeration, we bring the same attention to detail to every job. No shortcuts, no rushed
                        work—just reliable, professional service you can depend on.</p>
                    <?php if ($page == 'home') { ?>
                    <a href="about_us" class="btn btn-primary btn-custom-large btn-wrap">
                        <span>learn more </span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <?php } ?>
                </div>
            </div>
            <?php if ($page != 'home') { ?>
            <div class="extra-content">
                <p>Every property has different heating, cooling and refrigeration needs, and we approach each job with
                    the skill and adaptability to match. Whether it's installing a domestic split system, servicing a
                    commercial unit, maintaining a cool room, or safely decommissioning old equipment, our range of
                    services means you can rely on one experienced team for the job.</p>
                <p>We believe a great experience matters just as much as a great result. That's why we prioritise clear
                    communication, punctual service, and tidy, respectful work on every site we visit. Our clients
                    appreciate our professionalism as much as our workmanship, making the whole process smooth and
                    stress-free.</p>
                <p>As a locally operated business servicing Ellenbrook and the surrounding area, we're proud to support
                    our community and maintain a standard of service that keeps clients coming back. At 21 Degrees ACR,
                    we deliver more than an installation or repair—we deliver comfort, reliability, and results that
                    last.</p>
            </div>
            <?php } ?>
        </div>
    </div>
</section>