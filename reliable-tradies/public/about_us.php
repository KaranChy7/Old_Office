<?php require_once 'includes/header.php'; ?>

<!-- Page Banner -->
<section class="page-banner">
    <div class="container">
        <h1 class="banner-title">About Us</h1>
        <ul class="breadcrumb">
            <li><a href="./">Home</a></li>
            <li class="separator">›</li>
            <li class="active">About Us</li>
        </ul>
    </div>
</section>

<!-- About Page Content -->
<div class="about-page">

    <!-- Story Section -->
    <section style="padding:90px 0; background:#F5F2EE;">
        <div class="container">
            <div class="aboout-wrapper">
                <div data-animate="left">
                    <div class="section-label">Our Story</div>
                    <h2 class="section-title"><?= $experience ?>+ Years of <em>Trusted Trade Craft</em></h2>
                    <p style="color:#5A5A5A; line-height:1.75; margin-bottom:18px;">
                        <?= $company_name ?> was founded on a straightforward belief: South Australians deserve
                        tradespeople who show up on time, do the job right, and treat every property with respect. That
                        principle has guided every project we've taken on since day one.
                    </p>
                    <p style="color:#5A5A5A; line-height:1.75; margin-bottom:18px;">
                        Based in Salisbury SA, we've spent over a decade building lasting relationships with homeowners,
                        property investors, and commercial clients across the greater Adelaide region. From a single
                        room repaint to a complete property renovation — we bring the same standard of excellence to
                        every job.
                    </p>
                    <p style="color:#5A5A5A; line-height:1.75;">
                        Our team of skilled trade specialists covers Painting, Tiling, Flooring, and Concrete — four
                        disciplines under one reliable roof. That means less coordination hassle for you, and a more
                        consistent finish across your entire project.
                    </p>
                </div>
                <div data-animate="right">
                    <img src="images/image-1.jpg" alt="<?= $company_name ?> at work"
                        style="width:100%; border-radius:10px; object-fit:cover; height:480px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Milestones -->
    <section class="milestones">
        <div class="container">
            <div class="section-label" style="color:#D4842A; justify-content:center; display:flex;">By the Numbers</div>
            <h2 class="section-title" style="color:#F5F2EE; text-align:center; margin-bottom:0;">
                The Work Speaks <em>for Itself</em>
            </h2>
            <div class="milestones-grid">
                <div class="milestone-item">
                    <div class="m-num" data-counter="<?php echo $experience; ?>">0</div>
                    <div class="m-label">Years Experience</div>
                </div>
                <div class="milestone-item">
                    <div class="m-num" data-counter="500">0</div>
                    <div class="m-label">Projects Completed</div>
                </div>
                <div class="milestone-item">
                    <div class="m-num" data-counter="4">0</div>
                    <div class="m-label">Core Services</div>
                </div>
                <div class="milestone-item">
                    <div class="m-num" data-counter="100">0</div>
                    <div class="m-label">KM Radius</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values -->
    <div class="values-section">
        <div class="container">
            <div style="text-align:center; max-width:580px; margin:0 auto;">
                <div class="section-label" style="justify-content:center;">Our Values</div>
                <h2 class="section-title">What We Stand <em>For</em></h2>
            </div>
            <div class="values-grid">
                <div class="value-card" data-animate>
                    <i class="fa-solid fa-handshake"></i>
                    <h4>Integrity</h4>
                    <p>We're honest about what's possible, what it costs, and how long it will take. No spin, no
                        surprises.</p>
                </div>
                <div class="value-card" data-animate>
                    <i class="fa-solid fa-star"></i>
                    <h4>Quality</h4>
                    <p>We don't sign off on work we're not proud of. Every job meets a premium standard — every time.
                    </p>
                </div>
                <div class="value-card" data-animate>
                    <i class="fa-solid fa-clock"></i>
                    <h4>Reliability</h4>
                    <p>We show up when we say, finish when we say, and deliver what we promised. Always.</p>
                </div>
            </div>
        </div>
    </div>

</div>

<?php require_once 'includes/home/call-us.php'; ?>
<?php require_once 'includes/footer.php'; ?>