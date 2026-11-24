<?php
// ═══════════════════════════════════════
//   PROJECTS PAGE TEMPLATE
//   Root pages set $project_key ('metal' | 'glass'), then include this file.
// ═══════════════════════════════════════
require_once __DIR__ . '/services-data.php';

$keys    = array_keys($tl_projects);
$index   = array_search($project_key, $keys, true);
$project = $tl_projects[$project_key];

$page_title   = $project['name'] . ' Projects | True-Line Installs Melbourne';
$page_desc    = strip_tags(html_entity_decode($project['intro'][0]));
$current_page = 'projects';

require_once __DIR__ . '/head.php';
require_once __DIR__ . '/header.php';

$banner = [
    'title'    => $project['title'],
    'tag'      => 'Projects',
    'overline' => $project['tagline'],
    'image'    => $project['images'][0],
];
require __DIR__ . '/partials/page-banner.php';

$intro = [
    'label'         => 'Our',
    'heading'       => $project['heading'],
    'paragraphs'    => $project['intro'],
    'image'         => $project['images'][2],
    'caption'       => $project['caption'],
    'view_all_link' => '#work',
    'view_all_text' => 'View Work',
];
require __DIR__ . '/partials/intro.php';
?>

<!-- ═══════════════════════════════════════
     WORK GRID
══════════════════════════════════════ -->
<section class="work" id="work">
    <div class="container">

        <div class="work__header" data-reveal>
            <div class="capabilities__heading">
                <h2 class="capabilities__title">What We Build</h2>
                <div class="capabilities__heading-label">
                    <span><?= $project['name'] ?></span>
                    <span class="capabilities__heading-line"></span>
                </div>
            </div>
        </div>

        <div class="work__grid">
            <?php foreach ($project['items'] as $i => [$title, $sub, $img, $link]): ?>
                <a href="<?= $link ? $link . '.php' : 'quote.php' ?>" class="work-card" data-reveal data-delay="<?= ($i % 3) * 100 ?>">
                    <div class="work-card__media">
                        <img src="<?= tl_img($img) ?>" alt="<?= tl_alt($img) ?>" class="work-card__img" loading="lazy">
                    </div>
                    <div class="work-card__caption">
                        <span class="work-card__num"><?= sprintf('%02d', $i + 1) ?></span>
                        <strong class="work-card__title"><?= $title ?></strong>
                        <span class="work-card__sub"><?= $sub ?></span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?php
$other = $tl_projects[$keys[($index + 1) % count($keys)]];
$caps = [
    'title'         => 'Services',
    'label'         => 'Related',
    'desc'          => 'The workshop services behind our ' . strtolower($project['name']) . ' projects — all carried out in-house in Carrum Downs, from first cut to final install.',
    'items'         => $project['uses'],
    'view_all_link' => $other['slug'] . '.php',
    'view_all_text' => $other['name'] . ' Projects',
];
require __DIR__ . '/partials/capabilities.php';

require_once __DIR__ . '/footer.php';
require_once __DIR__ . '/scripts.php';
