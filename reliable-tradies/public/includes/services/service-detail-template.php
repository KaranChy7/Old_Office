<?php
/**
 * service-detail-template.php
 * Reusable template for individual service pages.
 * Expects $service_data array to be set before including.
 * $service_data = one entry from $services[]
 */

$srv = $service_data; // alias
?>

<!-- ===== SERVICE HERO ===== -->
<section class="service-hero">
    <div class="srv-hero-bg">
        <img src="<?= $srv['hero_image'] ?>" alt="<?= $srv['name'] ?> services — <?= $company_name ?>">
    </div>

    <div class="container">
        <div class="srv-hero-label">
            <i class="<?= $srv['icon'] ?>"></i> <?= $srv['name'] ?> Services
        </div>
        <h1>
            Expert <?= $srv['name'] ?><br>
            <em>Done Right, Every Time.</em>
        </h1>
        <p class="srv-hero-desc"><?= $srv['desc'] ?></p>
        <div class="srv-hero-actions">
            <a href="quote?service=<?= $srv['slug'] ?>" class="btn-primary">
                <i class="fa-solid fa-file-invoice"></i> Get a Free <?= $srv['name'] ?> Quote
            </a>
            <a href="<?= $phone_link ?>" class="btn-outline">
                <i class="fa-solid fa-phone"></i> <?= $phone ?>
            </a>
        </div>
    </div>
</section>

<!-- ===== SUB-SERVICE NAVIGATION STRIP ===== -->
<div class="srv-sub-strip">
    <div class="container">
        <div class="sub-strip-inner">
            <?php foreach ($srv['sub_services'] as $i => $sub):
                $anchor = strtolower(str_replace([' ', '&', '/'], ['-', '', ''], $sub['title']));
            ?>
            <a href="#<?= $anchor ?>" class="sub-strip-item" data-smooth>
                <i class="fa-solid fa-chevron-right"></i>
                <span><?= $sub['title'] ?></span>
            </a>
            <?php endforeach; ?>
            <a href="quote?service=<?= $srv['slug'] ?>" class="sub-strip-item" style="background:rgba(212,132,42,0.12);">
                <i class="fa-solid fa-file-invoice" style="color:#D4842A;"></i>
                <span style="color:#D4842A;">Free Quote</span>
            </a>
        </div>
    </div>
</div>

<!-- ===== INTRO STATS ===== -->
<div class="srv-page-intro">
    <div class="container">
        <div style="text-align:center; max-width:580px; margin:0 auto;">
            <div class="section-label" style="justify-content:center; color:#D4842A;">Why Choose Us for <?= $srv['name'] ?></div>
            <h2 class="section-title" style="color:#F5F2EE;">
                <?= $experience ?>+ Years of <em><?= $srv['name'] ?> Excellence</em>
            </h2>
        </div>
        <div class="intro-grid">
            <div class="intro-stat">
                <i class="fa-solid fa-certificate"></i>
                <div class="stat-val"><?= $experience ?>+</div>
                <div class="stat-lbl">Years Experience</div>
            </div>
            <div class="intro-stat">
                <i class="fa-solid fa-shield-halved"></i>
                <div class="stat-val">Fully</div>
                <div class="stat-lbl">Licensed & Insured</div>
            </div>
            <div class="intro-stat">
                <i class="fa-solid fa-location-crosshairs"></i>
                <div class="stat-val">100km</div>
                <div class="stat-lbl">Service Radius</div>
            </div>
            <div class="intro-stat">
                <i class="fa-solid fa-star"></i>
                <div class="stat-val">100%</div>
                <div class="stat-lbl">Satisfaction Focus</div>
            </div>
        </div>
    </div>
</div>

<!-- ===== SUB-SERVICE SECTIONS ===== -->
<?php foreach ($srv['sub_services'] as $i => $sub):
    $anchor = strtolower(str_replace([' ', '&', '/'], ['-', '', ''], $sub['title']));
    $isEven = ($i % 2 !== 0);
?>
<section class="sub-service-section" id="<?= $anchor ?>">
    <span class="sub-anchor" id="anchor-<?= $anchor ?>"></span>
    <div class="container">
        <div class="sub-inner">

            <!-- Image -->
            <div class="sub-image" data-animate="<?= $isEven ? 'right' : 'left' ?>">
                <img src="<?= $sub['image'] ?>" alt="<?= $sub['title'] ?> — <?= $company_name ?>">
            </div>

            <!-- Content -->
            <div class="sub-content" data-animate="<?= $isEven ? 'left' : 'right' ?>">
                <div class="sub-num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></div>
                <div class="section-label"><?= $srv['name'] ?></div>
                <h2><?= $sub['title'] ?></h2>
                <p><?= $sub['desc'] ?></p>

                <ul class="sub-list">
                    <?php foreach ($sub['list'] as $item): ?>
                    <li>
                        <i class="fa-solid fa-check"></i>
                        <?= $item ?>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <a href="quote?service=<?= $srv['slug'] ?>&type=<?= urlencode($sub['title']) ?>" class="btn-primary">
                    <i class="fa-solid fa-file-invoice"></i> Quote for <?= $sub['title'] ?>
                </a>
            </div>

        </div>
    </div>
</section>
<?php endforeach; ?>
