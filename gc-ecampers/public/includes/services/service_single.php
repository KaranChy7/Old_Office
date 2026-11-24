<?php
 
require_once __DIR__ . '/services_data.php';

$svc        = $service_pages[$page];
$page_title = htmlspecialchars($svc['nav']);
$page_desc  = $svc['meta'];
$group_link = $svc['group'] === 'Build' ? ['fit_outs', 'Fit-Outs'] : ['camper_hire', 'Hire'];

require_once __DIR__ . '/../header.php';
?>

<section class="page-hero">
    <div class="page-hero__bg">
        <img src="<?php echo $svc['hero_img']; ?>" alt="<?php echo $page_title; ?> — GC-E Campers" loading="eager">
    </div>
    <div class="container">
        <div class="page-hero__content">
            <div class="breadcrumb">
                <a href="./">Home</a>
                <span class="breadcrumb__sep">/</span>
                <a href="<?php echo $group_link[0]; ?>"><?php echo $group_link[1]; ?></a>
                <span class="breadcrumb__sep">/</span>
                <span class="breadcrumb__current"><?php echo $page_title; ?></span>
            </div>
            <h2 class="page-hero__title"><?php echo $svc['title']; ?></h2>
        </div>
    </div>
</section>

<!-- Intro -->
<section class="section section--black">
    <div class="container">
        <div class="about-story__layout">

            <div class="about-story__img" data-animate="fade-left">
                <img src="<?php echo $svc['image']; ?>" alt="<?php echo $page_title; ?> by GC-E Campers" loading="lazy">
                <div class="about-story__label">
                    <div class="about-story__label-tag"><?php echo $svc['label'][0]; ?></div>
                    <div class="about-story__label-title"><?php echo $svc['label'][1]; ?></div>
                </div>
            </div>

            <div class="about-story__content" data-animate="fade-right">
                <div class="section-eyebrow"><?php echo $svc['eyebrow']; ?></div>
                <h2 class="section-title"><?php echo $svc['heading']; ?></h2>
                <div class="gold-divider"></div>
                <?php foreach ($svc['intro'] as $para): ?>
                <p class="body-text"><?php echo $para; ?></p>
                <?php endforeach; ?>

                <div class="about-story__stats">
                    <?php foreach ($svc['stats'] as $s): ?>
                    <div>
                        <div class="about-story__stat-num"><?php echo $s['num']; ?></div>
                        <div class="about-story__stat-label"><?php echo $s['label']; ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="btn-group service-single__actions">
                    <a href="<?php echo $svc['cta']['link']; ?>" class="btn btn--gold">
                        <i class="ri-calendar-check-line"></i> <?php echo $svc['cta']['text']; ?>
                    </a>
                    <a href="contact_us" class="btn btn--outline">Ask a Question</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Features -->
<section class="section section--dark">
    <div class="container">
        <div class="section-head">
            <div class="section-eyebrow section-eyebrow--center"><?php echo $page_title; ?></div>
            <h2 class="section-title"><?php echo $svc['features_title']; ?></h2>
        </div>
        <div class="grid-3 stagger">
            <?php foreach ($svc['features'] as $f): ?>
            <div class="service-box" data-animate>
                <div class="service-box__icon service-box__icon--ring"><i class="<?php echo $f['icon']; ?>"></i></div>
                <div class="service-box__title"><?php echo $f['title']; ?></div>
                <p class="service-box__text"><?php echo $f['text']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Inclusions -->
<section class="section section--black">
    <div class="container">
        <div class="vehicle-detail__layout">

            <div class="vehicle-detail__gallery" data-animate="fade-left">
                <div class="vehicle-detail__main-img">
                    <img src="<?php echo $svc['includes_img']; ?>" alt="<?php echo $page_title; ?> inclusions"
                        loading="lazy">
                </div>
            </div>

            <div data-animate="fade-right">
                <div class="section-eyebrow">The Details</div>
                <h2 class="section-title"><?php echo $svc['includes_title']; ?></h2>
                <div class="gold-divider"></div>
                <div class="vehicle-detail__features">
                    <?php foreach ($svc['includes'] as $item): ?>
                    <div class="vehicle-detail__feature">
                        <i class="ri-check-line"></i>
                        <span><?php echo $item; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="btn-group vehicle-detail__actions">
                    <a href="<?php echo $svc['cta']['link']; ?>"
                        class="btn btn--gold"><?php echo $svc['cta']['text']; ?></a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Process -->
<section class="how-section section">
    <div class="container">
        <div class="section-head section-head--tight">
            <div class="section-eyebrow section-eyebrow--center">The Process</div>
            <h2 class="section-title"><?php echo $svc['steps_title']; ?></h2>
        </div>
        <div class="how-section__steps stagger">
            <?php foreach ($svc['steps'] as $step): ?>
            <div class="step-item" data-animate>
                <div class="step-item__num"><?php echo $step['num']; ?></div>
                <div class="step-item__title"><?php echo $step['title']; ?></div>
                <p class="step-item__text"><?php echo $step['text']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section section--black">
    <div class="container">
        <div class="section-head">
            <div class="section-eyebrow section-eyebrow--center">Good to Know</div>
            <h2 class="section-title">Common <span class="text-gold">Questions</span></h2>
        </div>
        <div class="service-faq">
            <?php foreach ($svc['faqs'] as $i => $faq): ?>
            <details class="service-faq__item" <?php echo $i === 0 ? 'open' : ''; ?>>
                <summary class="service-faq__q"><?php echo $faq['q']; ?><i class="ri-add-line"></i></summary>
                <p class="service-faq__a"><?php echo $faq['a']; ?></p>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Other services -->
<section class="section section--dark">
    <div class="container">
        <div class="section-head">
            <div class="section-eyebrow section-eyebrow--center">Explore More</div>
            <h2 class="section-title">Other <span class="text-gold">Services</span></h2>
        </div>
        <div class="service-links stagger">
            <?php foreach ($service_pages as $slug => $other): ?>
            <?php if ($slug === $page) continue; ?>
            <a href="<?php echo $slug; ?>" class="service-links__card" data-animate>
                <i class="<?php echo $other['icon']; ?> service-links__icon"></i>
                <span class="service-links__name"><?php echo htmlspecialchars($other['nav']); ?></span>
                <span class="service-links__text"><?php echo $other['summary']; ?></span>
                <span class="service-links__more">Learn more <i class="ri-arrow-right-line"></i></span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../home/cta_banner.php';
require_once __DIR__ . '/../footer.php';
?>