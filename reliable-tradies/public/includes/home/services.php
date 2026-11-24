<!-- ===== HOME SERVICES ===== -->
<section class="home-services">
    <div class="container">
        <div class="section-header">
            <div class="section-head-left">
                <div class="section-label">What We Do</div>
                <h2 class="section-title">
                    Four Trades. <em>One Reliable Team.</em>
                </h2>
                <p class="section-desc">
                    From fresh paint to polished concrete — our trade specialists bring the same precision and care to
                    every single project.
                </p>
            </div>
            <a href="our_services" class="btn-primary">All Services</a>
        </div>

        <div class="services-grid">
            <?php foreach ($services as $i => $srv): ?>
            <div class="srv-card" data-animate style="transition-delay: <?= $i * 0.1 ?>s">
                <div class="srv-image">
                    <img src="<?= $srv['image'] ?>" alt="<?= $srv['name'] ?> services — <?= $company_name ?>">
                </div>
                <div class="srv-body">
                    <div class="srv-icon">
                        <i class="<?= $srv['icon'] ?>"></i>
                    </div>
                    <h3><?= $srv['name'] ?></h3>
                    <p><?= $srv['short'] ?></p>
                    <a href="our_services#<?= $srv['slug'] ?>" class="srv-link">
                        Learn More <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <i class="fa-solid fa-arrow-right srv-arrow"></i>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>