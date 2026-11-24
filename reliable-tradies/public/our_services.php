<?php require_once 'includes/header.php'; ?>

<!-- Page Banner -->
<section class="page-banner">
    <div class="container">
        <h1 class="banner-title">Our Services</h1>
        <ul class="breadcrumb">
            <li><a href="./">Home</a></li>
            <li class="separator">›</li>
            <li class="active">Our Services</li>
        </ul>
    </div>
</section>

<!-- Services Page -->
<div class="services-page">
    <div class="container">
        <div class="services-intro">
            <div class="section-label">What We Do</div>
            <h2 class="section-title">Four Trades, <em>One Reliable Team</em></h2>
            <p style="color:#5A5A5A; font-size:16px; line-height:1.75;">
                <?= $company_name ?> delivers four specialised trade services across Salisbury and greater South
                Australia. Each service is backed by <?= $experience ?>+ years of experience. Click any service to
                see the full range of sub-services we offer.
            </p>
        </div>

        <div class="srv-page-grid">
            <?php foreach ($services as $srv): ?>
            <div class="srv-page-card" id="<?= $srv['slug'] ?>" data-animate>
                <div class="srv-page-img">
                    <img src="<?= $srv['image'] ?>" alt="<?= $srv['name'] ?> services by <?= $company_name ?>">
                </div>
                <div class="srv-page-body">
                    <div class="tag"><?= $srv['name'] ?></div>
                    <h3><?= $srv['name'] ?></h3>
                    <p><?= $srv['desc'] ?></p>

                    <!-- Sub-service quick links -->
                    <div style="margin-bottom:22px;">
                        <?php foreach ($srv['sub_services'] as $sub):
                            $anchor = strtolower(str_replace([' ', '&', '/'], ['-', '', ''], $sub['title']));
                        ?>
                        <a href="<?= $srv['page'] ?>#<?= $anchor ?>"
                           style="display:inline-flex;align-items:center;gap:6px;font-family:'DM Sans',sans-serif;font-size:12px;font-weight:600;color:#D4842A;text-transform:uppercase;letter-spacing:1px;margin:4px 8px 4px 0;">
                            <i class="fa-solid fa-chevron-right" style="font-size:10px;"></i>
                            <?= $sub['title'] ?>
                        </a>
                        <?php endforeach; ?>
                    </div>

                    <div style="display:flex;gap:10px;flex-wrap:wrap;">
                        <a href="<?= $srv['page'] ?>" class="btn-primary">
                            <i class="<?= $srv['icon'] ?>"></i> View All <?= $srv['name'] ?> Services
                        </a>
                        <a href="quote?service=<?= $srv['slug'] ?>" class="btn-amber-outline">
                            Free Quote
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php require_once 'includes/home/why-choose-us.php'; ?>
<?php require_once 'includes/home/call-us.php'; ?>
<?php require_once 'includes/footer.php'; ?>
