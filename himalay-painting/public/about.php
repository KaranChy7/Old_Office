<?php
$page = 'about';
include 'includes/header.php';
include 'includes/breadcrumb.php';
?>
<div class="page-about">

    <!-- Intro -->
    <section class="ab-intro">
        <div class="ab-intro-media" data-aos="fade-right">
            <img src="images/gallery_3.jpg" alt="Exterior cleaning team at work">
            <ul class="ab-checklist">
                <li><i class="fa-solid fa-check"></i>Owner-Operated Team</li>
                <li><i class="fa-solid fa-check"></i>On Time, Every Time</li>
                <li><i class="fa-solid fa-check"></i>Clear, Upfront Quotes</li>
                <li><i class="fa-solid fa-check"></i>Tidy Finish on Every Job</li>
            </ul>
        </div>
        <div class="ab-intro-content" data-aos="fade-left">
            <span class="ab-eyebrow">About Us</span>
            <h2>Hard Work, Honest Service, Real Results</h2>
            <p class="ab-lead">We are a small, owner-run team that cleans, clears and refreshes the outside of homes
                and businesses, with care for every surface we touch.</p>
            <p>Over the years we have built our name on showing up on time, listening to what clients need and taking
                pride in every finish. Many of our customers come back to us again and again, and that trust is
                something we never take for granted.</p>
            <p>Every job starts with a proper look at the property and an honest chat about what you want to achieve.
                We plan the work around your schedule, keep you updated along the way and only call it finished once
                you are happy with the result.</p>
        </div>
    </section>

    <!-- Values -->
    <section class="ab-values">
        <div class="container">
            <div class="ab-values-grid">
                <div class="ab-heading" data-aos="fade-right">
                    <span class="ab-eyebrow">What Drives Us</span>
                    <h2>The Principles Behind Every Job</h2>
                </div>
                <div class="ab-value-list">
                    <div class="ab-value" data-aos="fade-up">
                        <span class="ab-num">01</span>
                        <div class="ab-icon"><i class="fa-solid fa-bullseye"></i></div>
                        <div class="ab-value-text">
                            <h5>Our Mission</h5>
                            <p>To make looking after the outside of a property simple, affordable and stress-free for
                                every client we work with.</p>
                        </div>
                    </div>
                    <div class="ab-value" data-aos="fade-up" data-aos-delay="100">
                        <span class="ab-num">02</span>
                        <div class="ab-icon"><i class="fa-solid fa-handshake"></i></div>
                        <div class="ab-value-text">
                            <h5>Our Promise</h5>
                            <p>We turn up when booked, communicate clearly and stand behind our work. Your satisfaction
                                is how we measure a job well done.</p>
                        </div>
                    </div>
                    <div class="ab-value" data-aos="fade-up" data-aos-delay="200">
                        <span class="ab-num">03</span>
                        <div class="ab-icon"><i class="fa-solid fa-award"></i></div>
                        <div class="ab-value-text">
                            <h5>Our Standards</h5>
                            <p>Reliable equipment, proven methods and steady hands mean consistent results, whether it
                                is a small balcony or a large car park.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service area -->
    <section class="ab-area">
        <div class="ab-map">
            <iframe src="<?= $map; ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Map"></iframe>
        </div>
        <div class="container">
            <div class="ab-area-card" data-aos="fade-up">
                <span class="ab-eyebrow">Where We Work</span>
                <h2>Proudly Serving Our Community</h2>
                <p>Our base is in Narellan Vale, and we travel up to 100 km to look after properties right across
                    South West Sydney and beyond.</p>
                <ul class="ab-chips">
                    <li>Narellan Vale</li>
                    <li>Camden</li>
                    <li>Campbelltown</li>
                    <li>Oran Park</li>
                    <li>Liverpool</li>
                    <li>Penrith</li>
                    <li>Wollondilly</li>
                    <li>Southern Highlands</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="ab-cta">
        <div class="container">
            <div class="ab-cta-box" data-aos="fade-up">
                <h3>Let’s Get Your Property Looking Its Best</h3>
                <p>Tell us about the job and get a free, no-obligation quote.</p>
                <div class="ab-cta-buttons">
                    <a href="estimate" class="btn btn-custom-mid ab-btn-dark">request a quote</a>
                    <a href="contact_us" class="btn btn-custom-mid ab-btn-outline">contact us</a>
                </div>
            </div>
        </div>
    </section>

</div>
<?php include 'includes/footer.php'; ?>