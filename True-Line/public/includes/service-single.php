<?php
// ═══════════════════════════════════════
//   SERVICE PAGE TEMPLATE
//   Root pages set $service_slug, then include this file.
// ═══════════════════════════════════════
require_once __DIR__ . '/services-data.php';

$slugs   = array_keys($tl_services);
$index   = array_search($service_slug, $slugs, true);
$service = $tl_services[$service_slug];
$total   = count($slugs);
$prev    = $slugs[($index - 1 + $total) % $total];
$next    = $slugs[($index + 1) % $total];
$plain   = strip_tags(html_entity_decode($service['name']));

$page_title   = $plain . ' Melbourne | True-Line Installs';
$page_desc    = strip_tags(html_entity_decode($service['summary'])) . ' Carrum Downs, VIC. Call 0478 314 984.';
$current_page = 'services';

require_once __DIR__ . '/head.php';
require_once __DIR__ . '/header.php';

$banner = [
    'title'    => $service['title'],
    'tag'      => 'Services',
    'overline' => $service['tagline'],
    'image'    => $service['images'][0],
];
// require __DIR__ . '/partials/page-banner.php';

$intro = [
    'label'         => 'Our',
    'heading'       => $service['short'] ?? $service['name'],
    'paragraphs'    => $service['intro'],
    'image'         => $service['images'][2],
    'caption'       => $service['caption'],
    'view_all_link' => 'services.php',
    'view_all_text' => 'All Services',
];
require __DIR__ . '/partials/intro.php';
?>

<!-- ═══════════════════════════════════════
     WHAT'S INCLUDED
══════════════════════════════════════ -->
<section class="services">
    <div class="services__slider" data-reveal>

        <div class="services__panel">
            <svg class="services__pattern" viewBox="0 0 400 400" fill="none" aria-hidden="true">
                <circle cx="330" cy="70" r="120" stroke="currentColor" stroke-width="1" />
                <circle cx="330" cy="70" r="80" stroke="currentColor" stroke-width="1" />
                <path d="M150 0 L150 400 M0 150 L400 150" stroke="currentColor" stroke-width="1" />
            </svg>

            <span class="section-eyebrow services__eyebrow">What's Included</span>

            <div class="services__text-track">
                <div class="services__slide-text active">
                    <span class="services__tag"><?= sprintf('%02d', $index + 1) ?> — <?= $service['name'] ?></span>
                    <h2 class="services__title"><?= $service['title'] ?></h2>
                    <p class="services__desc"><?= $service['summary'] ?></p>
                    <ul class="services__features">
                        <?php foreach ($service['features'] as $feature): ?>
                        <li><?= $feature ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- <div class="services__panel-footer">
                <a href="quote.php" class="services__more">Get a Quote</a>

                <div class="services__nav">
                    <a href="<?= $prev ?>.php" class="services__arrow" aria-label="Previous service: <?= htmlspecialchars(strip_tags(html_entity_decode($tl_services[$prev]['name']))) ?>">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M15 18l-6-6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <a href="<?= $next ?>.php" class="services__arrow" aria-label="Next service: <?= htmlspecialchars(strip_tags(html_entity_decode($tl_services[$next]['name']))) ?>">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 18l6-6-6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div> -->
        </div>

        <div class="services__media">
            <div class="services__media-track">
                <div class="services__slide-media active">
                    <img src="<?= tl_img($service['images'][1]) ?>" alt="<?= tl_alt($service['images'][1]) ?>"
                        class="services__slide-img" loading="lazy">
                </div>
            </div>
            <div class="services__media-overlay"></div>

            <div class="services__meta">
                <span class="services__count"><?= sprintf('%02d', $index + 1) ?> / <?= sprintf('%02d', $total) ?></span>
                <div class="services__ticks">
                    <?php for ($i = 0; $i < $total; $i++): ?>
                    <span class="services__tick<?= $i === $index ? ' active' : '' ?>"></span>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

    </div>
</section>

<?php
$caps = [
    'title'         => 'Applications',
    'label'         => 'Ideal For',
    'desc'          => 'Where our ' . strtolower($service['short'] ?? $service['name']) . ' work is used most. Tell us about your project and we\'ll recommend the right material, method and finish.',
    'items'         => $service['uses'],
    'view_all_link' => 'services.php',
    'view_all_text' => 'All Services',
];
require __DIR__ . '/partials/capabilities.php';

require_once __DIR__ . '/footer.php';
require_once __DIR__ . '/scripts.php';