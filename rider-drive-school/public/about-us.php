<?php
$page_title = "About Us — AP Heating & Cooling Systems";
$current_page = 'about';
$hero_title = 'About <span>AP</span><br />Heating &amp; Cooling';
$hero_subtitle = 'Eight-plus years of showing up, doing quality work, and earning the trust of homes and businesses across Salisbury South and Adelaide.';
$hero_breadcrumb = 'About Us';
require_once 'includes/header.php';
require_once 'includes/config.php';
?>

<?php include 'includes/page-hero.php'; ?>

<!-- OUR STORY -->
<section class="about-story">
    <div class="container">
        <div class="story-grid">
            <div class="story-img reveal-left">
                <div class="img-a"><img
                        src="images/man-kneeling-unfinished-building.jpg"
                        alt="Technician on a ladder installing ducted air conditioning" /></div>
                <div class="img-b"><img
                        src="images/carpentry-tools-workbench.jpg"
                        alt="Pressure gauges used for air conditioning diagnostics" /></div>
                <div class="story-badge"><strong>8+</strong><span>Years of Excellence</span></div>
            </div>
            <div class="story-text reveal-right">
                <div class="section-label">Our Story</div>
                <h2 class="section-title">Built From the <span>Ground Up</span></h2>
                <p>AP Heating &amp; Cooling Systems started the way most good things do — with hard work, a ute full
                    of tools, and a commitment to get it right. Over 8+ years in the trade, the goal has stayed
                    simple: build a business Salisbury South and Adelaide could genuinely rely on.</p>
                <p>Back then, it was one technician and a phone that rang more from word-of-mouth than anything
                    else. Eight years later, that phone still rings for the same reason.</p>
                <p>Today AP handles everything from a single split system repair to full industrial installation
                    contracts. Our values haven't shifted: show up on time, communicate honestly, and produce work
                    that holds up to inspection.</p>
                <blockquote>"We didn't grow by cutting corners. We grew by being the most thorough."</blockquote>
                <div class="story-btns">
                    <a href="get-free-quote.php" class="btn btn-primary"><span>Get Your Free Quote</span></a>
                    <a href="contact-us.php" class="btn btn-outline">Get in Touch</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STATS BAND -->
<div class="stats-band">
    <div class="container">
        <div class="stats-inner">
            <div class="stat-box"><strong>8+</strong><span>Years Experience</span></div>
            <div class="stat-box"><strong>100km</strong><span>Service Radius</span></div>
            <div class="stat-box"><strong>24/7</strong><span>Phone Support</span></div>
            <div class="stat-box"><strong>100%</strong><span>Quality Guaranteed</span></div>
        </div>
    </div>
</div>

<!-- MISSION & VALUES -->
<section class="mission">
    <div class="container">
        <div class="mission-header reveal">
            <div class="section-label centered">Our Values</div>
            <h2 class="section-title">What We <span>Stand For</span></h2>
        </div>
        <div class="values-grid">
            <?php
      $values = [
        ['Thoroughness', 'Every decision we make is guided by eight-plus years of dedicated, detail-focused trade craft.'],
        ['Reliability', 'We show up when we say we will, so you can plan your day or project around us.'],
        ['Clear Quotes', 'Every job follows a clear, upfront quote, not a rushed guess.'],
        ['Honest Communication', 'Clear, upfront pricing and honest updates so you always know what to expect.'],
        ['Fully Equipped', 'Our own tools and equipment, ready to go. Nothing for you to supply.'],
        ['Salisbury South Roots', 'Salisbury South is home. We serve this community and properties across Adelaide with every job we take on.'],
      ];
      foreach ($values as $i => [$title, $desc]):
        ?>
            <div class="value-card reveal" style="transition-delay:<?= ($i * 0.05 + 0.05) ?>s">
                <div class="value-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12" />
                    </svg>
                </div>
                <h3><?= $title; ?></h3>
                <p><?= $desc; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/sections/testimonials.php'; ?>
<?php include 'includes/callus.php'; ?>
<?php include 'includes/footer.php'; ?>
