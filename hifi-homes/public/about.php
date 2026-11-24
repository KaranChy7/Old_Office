<?php
$page_title   = 'About Us | Hifi Homes';
$current_page = 'about';
$page_path    = 'about.php';
require_once 'includes/head.php';
require_once 'includes/header.php';

$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.html'],
    ['label' => 'About Us'],
];
require_once 'includes/breadcrumbs.php';
?>

<section class="page-hero page-hero--cream">
    <div class="container page-hero__container">
        <span class="section-eyebrow page-hero__eyebrow">About Hifi Homes</span>
        <h1 class="section-title section-title--white page-hero__title">Our Story</h1>
        <p class="section-lead section-lead--white">Bathroom, kitchen &amp; laundry fixtures, chosen with care.</p>
    </div>
</section>

<section class="about-story">
    <div class="container">
        <div class="about-story__layout">

            <div data-reveal="left">
                <span class="section-eyebrow">Who We Are</span>
                <p class="about-story__lead">Clyde North-based. Trade-trusted. Fixtures we stand behind.</p>
                <div class="about-story__text">
                    <p>Hifi Homes supplies bathroom, kitchen and laundry fixtures to builders, renovators and
                        homeowners across Melbourne. From vanities and basins to tapware, showers and hardware,
                        every order gets the same attention — accurate stock, honest advice, and pricing that
                        doesn't move once it's quoted.</p>
                    <p>Whether it's a single vanity for a renovation or the full fit-out for a new build, every
                        order is handled with the same trade-standard care — bathroom, kitchen, laundry or
                        accessories. We supply builders, renovators and homeowners across Clyde North and greater
                        Melbourne, including Casey, Cardinia and the South East.</p>
                </div>
                <div class="about-story__actions">
                    <a href="contact.html" class="about-story__btn-primary">Request Pricing</a>
                    <a href="tel:0485700141" class="about-story__btn-outline">Call Us Now</a>
                </div>
            </div>

            <div class="about-story__founder" data-reveal="right">
                <img src="https://images.unsplash.com/photo-1620626011761-996317b8d101?w=800&q=80"
                    alt="Freestanding bathtub and vessel basin from the Hifi Homes range" class="about-story__founder-image" loading="lazy" />
                <div class="about-story__founder-body">
                    <div class="about-story__founder-name">The Team Behind Hifi Homes</div>
                    <div class="about-story__founder-role">Bathroom, Kitchen &amp; Laundry Fixtures</div>
                    <p class="about-story__founder-quote">"Stock what people actually need, price it honestly, and
                        stand behind everything we supply."</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="about-timeline">
    <div class="container">
        <div class="about-timeline__header">
            <span class="section-eyebrow section-eyebrow--center">Our Journey</span>
            <h2 class="section-title">From First Order To A Trusted Supplier</h2>
        </div>

        <div class="about-timeline__line">

            <div class="about-timeline__item" data-reveal>
                <div class="about-timeline__dot"></div>
                <span class="about-timeline__tag">The Beginning</span>
                <h3 class="about-timeline__title">A Small Range, Done Properly</h3>
                <p class="about-timeline__desc">Hifi Homes starts out supplying bathroom basics to local renovators
                    — building a reputation the only way that lasts: accurate stock and straight answers, every
                    time.</p>
            </div>

            <div class="about-timeline__item" data-reveal data-delay="100">
                <div class="about-timeline__dot"></div>
                <span class="about-timeline__tag">Growing The Range</span>
                <h3 class="about-timeline__title">Kitchen &amp; Laundry Added</h3>
                <p class="about-timeline__desc">As demand grows, the range expands beyond the bathroom — kitchen
                    sinks, mixers and laundry tubs brought in-house to cover more of every project.</p>
            </div>

            <div class="about-timeline__item" data-reveal data-delay="200">
                <div class="about-timeline__dot"></div>
                <span class="about-timeline__tag">Going Professional</span>
                <h3 class="about-timeline__title">Trade Accounts, Trade Pricing</h3>
                <p class="about-timeline__desc">Hifi Homes formalises trade pricing and accounts, putting hands-on
                    product knowledge on a proper professional footing for builders and renovators.</p>
            </div>

            <div class="about-timeline__item" data-reveal data-delay="300">
                <div class="about-timeline__dot"></div>
                <span class="about-timeline__tag">Today</span>
                <h3 class="about-timeline__title">A Growing Catalogue</h3>
                <p class="about-timeline__desc">Hifi Homes now supplies clients across Melbourne — same range
                    discipline, same honest pricing, on every order, big or small.</p>
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
            <div class="about-values__row-desc">Clear pricing, straight answers, no surprise invoices. If something
                changes, you hear about it before it shows up on the bill.</div>
        </div>

        <div class="about-values__row" data-reveal data-delay="100">
            <div class="about-values__num">02</div>
            <div class="about-values__row-title">Quality Assurance</div>
            <div class="about-values__row-desc">Every fixture selected for fit, finish and durability — not just a
                quick sale. We don't stock a product we wouldn't put in our own home.</div>
        </div>

        <div class="about-values__row" data-reveal data-delay="200">
            <div class="about-values__num">03</div>
            <div class="about-values__row-title">Reliable Supply</div>
            <div class="about-values__row-desc">We hold the stock we say we hold, and keep you updated if anything
                changes. No ghosting, no chasing.</div>
        </div>

        <div class="about-values__row" data-reveal data-delay="300">
            <div class="about-values__num">04</div>
            <div class="about-values__row-title">Customer Care</div>
            <div class="about-values__row-desc">Your project, your time and your budget treated the way we'd want
                our own treated — on every single order.</div>
        </div>
    </div>
</section>

<section class="call-us">
    <div class="container">
        <div class="call-us__inner" data-reveal>
            <p class="call-us__eyebrow">Get Started Today</p>
            <h2 class="call-us__title">Ready To <span>Furnish</span> Your Project?</h2>
            <p class="call-us__subtitle">Contact Hifi Homes for pricing on your next bathroom, kitchen or laundry
                fixtures order.</p>
            <div class="call-us__actions">
                <a href="contact.html" class="call-us__btn-primary">Request Pricing</a>
                <a href="tel:0485700141" class="call-us__btn-secondary">0485 700 141</a>
            </div>
            <p class="call-us__abn">ABN 30 647 287 581</p>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
<?php require_once 'includes/scripts.php'; ?>
