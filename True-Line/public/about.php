<?php
$page_title   = 'About Us | True-Line Installs';
$page_desc    = 'Learn about True-Line Installs — custom metal fabrication and installation, built on precision. Based in Carrum Downs, VIC, serving Melbourne.';
$current_page = 'about';
require_once 'includes/head.php';
require_once 'includes/header.php';

$banner = [
    'title'    => 'About<br>True-Line',
    'tag'      => 'About',
    'overline' => 'Precision Metalwork<br>Built To Last',
    'image'    => 11,
];
require 'includes/partials/page-banner.php';
?>

<section class="about-story">
    <div class="container">
        <div class="about-story__layout">

            <div data-reveal="left">
                <span class="section-eyebrow">Who We Are</span>
                <p class="about-story__lead">Melbourne-based. Precision-driven. Work we stand behind.</p>
                <div class="about-story__text">
                    <p>True-Line Installs brings proper trade equipment and a sharp eye for detail to every custom
                        metal fabrication and installation job across Melbourne. From wrought iron gates to
                        architectural cladding, every project gets the same attention — showing up on time,
                        communicating clearly, and never cutting corners just to move on to the next one.</p>
                    <p>From full architectural fit-outs to one-off custom pieces, every job gets the same
                        trade-standard care — whether it's a single grille or a full building facade. We work across
                        Carrum Downs and greater Melbourne, serving Frankston, the Mornington Peninsula, Dandenong
                        and beyond.</p>
                </div>
                <div class="about-story__actions">
                    <a href="quote.php" class="about-story__btn-primary">Get a Free Quote</a>
                    <a href="tel:0478314984" class="about-story__btn-outline">Call Us Now</a>
                </div>
            </div>

            <div class="about-story__founder" data-reveal="right">
                <img src="images/16.jpg"
                    alt="Black aluminium slat gate and screen installed by True-Line Installs" class="about-story__founder-image" loading="lazy" />
                <div class="about-story__founder-body">
                    <div class="about-story__founder-name">The Team Behind True-Line Installs</div>
                    <div class="about-story__founder-role">Custom Metal Fabrication &amp; Installation</div>
                    <p class="about-story__founder-quote">"Do the work properly, respect the design, and stand
                        behind everything we install."</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="about-timeline">
    <div class="container">
        <div class="about-timeline__header">
            <span class="section-eyebrow section-eyebrow--center">Our Journey</span>
            <h2 class="section-title">From First Fabrication to a Trusted Name</h2>
        </div>

        <div class="about-timeline__line">

            <div class="about-timeline__item" data-reveal>
                <div class="about-timeline__dot"></div>
                <span class="about-timeline__tag">The Beginning</span>
                <h3 class="about-timeline__title">One Workshop, One Reputation</h3>
                <p class="about-timeline__desc">True-Line Installs starts taking on custom fabrication jobs around
                    Melbourne — building a reputation the only way that lasts: one project done properly at a
                    time.</p>
            </div>

            <div class="about-timeline__item" data-reveal data-delay="100">
                <div class="about-timeline__dot"></div>
                <span class="about-timeline__tag">Building The Trade</span>
                <h3 class="about-timeline__title">Investing In The Right Equipment</h3>
                <p class="about-timeline__desc">As demand grows, the workshop expands — press brake, laser cutting
                    and water-jet equipment brought in-house to handle bigger, more detailed work.</p>
            </div>

            <div class="about-timeline__item" data-reveal data-delay="200">
                <div class="about-timeline__dot"></div>
                <span class="about-timeline__tag">Going Professional</span>
                <h3 class="about-timeline__title">Fully Insured, Trade-Ready</h3>
                <p class="about-timeline__desc">True-Line Installs operates as a fully insured trade business,
                    putting hands-on fabrication experience on a proper professional footing.</p>
            </div>

            <div class="about-timeline__item" data-reveal data-delay="300">
                <div class="about-timeline__dot"></div>
                <span class="about-timeline__tag">Today</span>
                <h3 class="about-timeline__title">A Growing Portfolio</h3>
                <p class="about-timeline__desc">True-Line Installs now serves clients across Melbourne — same
                    precision, same standards, on every custom install, big or small.</p>
            </div>

        </div>
    </div>
</section>

<section class="about-values">
    <div class="container">
        <div class="about-values__header">
            <span class="section-eyebrow section-eyebrow--center">Our Values</span>
            <h2 class="section-title section-title--white">What We Stand By</h2>
        </div>

        <div class="about-values__row" data-reveal>
            <div class="about-values__num">01</div>
            <div class="about-values__row-title">Honesty &amp; Transparency</div>
            <div class="about-values__row-desc">Clear quotes, straight answers, no surprise invoices. If something
                changes, you hear about it before it shows up on the bill.</div>
        </div>

        <div class="about-values__row" data-reveal data-delay="100">
            <div class="about-values__num">02</div>
            <div class="about-values__row-title">Craftsmanship</div>
            <div class="about-values__row-desc">Every weld, cut and finish held to trade standard — not just a quick
                job. We don't call a piece finished until it's done properly.</div>
        </div>

        <div class="about-values__row" data-reveal data-delay="200">
            <div class="about-values__num">03</div>
            <div class="about-values__row-title">Reliability</div>
            <div class="about-values__row-desc">We show up when we say we will, and keep you updated if anything
                changes. No ghosting, no chasing.</div>
        </div>

        <div class="about-values__row" data-reveal data-delay="300">
            <div class="about-values__num">04</div>
            <div class="about-values__row-title">Respect</div>
            <div class="about-values__row-desc">Your site, your time and your budget treated the way we'd want our
                own treated — on every single install.</div>
        </div>
    </div>
</section>

<section class="call-us">
    <div class="container">
        <div class="call-us__inner" data-reveal>
            <p class="call-us__eyebrow">Get Started Today</p>
            <h2 class="call-us__title">Ready for a <span>Custom</span> Install?</h2>
            <p class="call-us__subtitle">Contact True-Line Installs for a free, no-obligation quote on your next
                fabrication project.</p>
            <div class="call-us__actions">
                <a href="quote.php" class="call-us__btn-primary">Request a Quote</a>
                <a href="tel:0478314984" class="call-us__btn-secondary">0478 314 984</a>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
<?php require_once 'includes/scripts.php'; ?>
