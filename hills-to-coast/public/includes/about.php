<section class="about section">
    <div class="container">
        <div class="wrapper">
            <div class="about-image">
                <video autoplay loop muted playsinline>
                    <source src="images/video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- <img src="images/about.jpg" alt="About  image"> -->
            </div>
            <div class="about-content">
                <div class="section-title">
                    <h5>our story</h5>
                    <p>"Qualified. Professional. Perth's Trusted Painter."</p>
                </div>
                <div class="desc">
                    <p>True Tee Finishes is a Perth-based painting and decorating business providing professional
                        painting services across residential, commercial and maintenance work. I am a qualified painter
                        and decorator with a Certificate III in Painting and Decorating and an EWP ticket.
                    </p>
                    <p>I focus heavily on preparation, quality finishes and leaving every job clean and
                        tidy. Travel for quotes can be arranged throughout the Perth metro area depending on location.
                    </p>

                    <?php if ($page == 'home') { ?>
                    <div class="button">
                        <a href="about_us" class="btn btn-primary btn-custom-mid">read more</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php if ($page != 'home') { ?>
            <div class="extra-content">
                <p>Every project is approached with care, clear communication and close attention to detail from start
                    to finish. I take the time to properly prepare each surface so the final result looks professional,
                    lasts longer and meets the expectations of each client.
                </p>
                <p>
                    Whether the job involves a fresh new look, ongoing maintenance or restoring an existing space, I aim
                    to provide dependable workmanship and a smooth experience throughout the project. My goal is to
                    complete every job neatly, efficiently and to a standard I can be proud of.</p>
            </div>
            <?php } ?>
        </div>
    </div>
</section>