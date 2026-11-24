<?php require_once __DIR__ . '/gallery-data.php'; ?>
<section class="gallery gallery--page">
    <div class="gallery__container">

        <div class="gallery__header">
            <div class="section-badge" data-reveal><?= icon('sparkle') ?>Our work</div>
            <h2 class="gallery__title" data-reveal data-delay="100">Before &amp; after cleaning photos.</h2>
            <p class="gallery__subtitle" data-reveal data-delay="200">Real jobs from homes we have cleaned and
                organised across <?= e($service_area) ?>. Click any photo to see it larger.</p>

            <!-- Jump links to each group -->
            <div class="gallery__jump" data-reveal data-delay="300">
                <?php foreach ($gallery_groups as $g => $group): ?>
                <a href="#gallery-group-<?= $g + 1 ?>"><?= icon($group['icon']) ?><?= $group['title'] ?></a>
                <?php endforeach; ?>
            </div>
        </div>

        <?php foreach ($gallery_groups as $g => $group): ?>
        <div class="gallery__group" id="gallery-group-<?= $g + 1 ?>">
            <h3 class="gallery__group-title" data-reveal>
                <span class="gallery__group-icon"><?= icon($group['icon']) ?></span>
                <?= $group['title'] ?>
                <span class="gallery__group-count"><?= count($group['items']) ?> jobs</span>
            </h3>

            <div class="gallery__grid">
                <?php foreach ($group['items'] as $i => [$caption, $panels]): ?>
                <?php gallery_card($caption, $panels, ($i % 3) * 80); ?>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</section>
