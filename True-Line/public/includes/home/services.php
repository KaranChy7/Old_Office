<?php
// ═══════════════════════════════════════
//   SERVICES — showcase slider
// ═══════════════════════════════════════
require_once __DIR__ . '/../services-data.php';

$services_slides = [];
foreach ($tl_services as $slug => $service) {
    $services_slides[] = [
        'tag'   => sprintf('%02d', count($services_slides) + 1) . ' — ' . $service['name'],
        'title' => $service['title'],
        'desc'  => $service['summary'],
        'image' => tl_img($service['images'][0]),
        'alt'   => $tl_images[$service['images'][0]],
        'link'  => $slug . '.php',
    ];
}
$services_total = count($services_slides);
?>
<!-- ═══════════════════════════════════════
     SERVICES
══════════════════════════════════════ -->
<section class="services" id="services">
    <div class="services__slider" id="services-slider" data-reveal>

        <div class="services__panel">
            <svg class="services__pattern" viewBox="0 0 400 400" fill="none" aria-hidden="true">
                <circle cx="330" cy="70" r="120" stroke="currentColor" stroke-width="1" />
                <circle cx="330" cy="70" r="80" stroke="currentColor" stroke-width="1" />
                <path d="M150 0 L150 400 M0 150 L400 150" stroke="currentColor" stroke-width="1" />
            </svg>

            <span class="section-eyebrow services__eyebrow">What We Do</span>

            <div class="services__text-track">
                <?php foreach ($services_slides as $i => $slide): ?>
                    <div class="services__slide-text<?= $i === 0 ? ' active' : '' ?>" data-index="<?= $i ?>" data-link="<?= htmlspecialchars($slide['link']) ?>">
                        <span class="services__tag"><?= $slide['tag'] ?></span>
                        <h2 class="services__title"><?= $slide['title'] ?></h2>
                        <p class="services__desc"><?= $slide['desc'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="services__panel-footer">
                <a href="<?= $services_slides[0]['link'] ?>" class="services__more" id="services-more">More</a>

                <div class="services__nav">
                    <button type="button" class="services__arrow services__arrow--prev" id="services-prev" aria-label="Previous service">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M15 18l-6-6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button type="button" class="services__arrow services__arrow--next" id="services-next" aria-label="Next service">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 18l6-6-6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="services__media">
            <div class="services__media-track">
                <?php foreach ($services_slides as $i => $slide): ?>
                    <div class="services__slide-media<?= $i === 0 ? ' active' : '' ?>" data-index="<?= $i ?>">
                        <img src="<?= $slide['image'] ?>" alt="<?= htmlspecialchars($slide['alt']) ?>" class="services__slide-img" loading="lazy">
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="services__media-overlay"></div>

            <div class="services__meta">
                <span class="services__count">
                    <span id="services-current">01</span> / <span id="services-total"><?= sprintf('%02d', $services_total) ?></span>
                </span>
                <div class="services__ticks" id="services-ticks">
                    <?php for ($i = 0; $i < $services_total; $i++): ?>
                        <span class="services__tick<?= $i === 0 ? ' active' : '' ?>"></span>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

    </div>
</section>
