<?php include __DIR__ . '/gallery_projects.php'; ?>

<section class="gallery-section section">
    <?php if($page == 'home'){ ?>
    <div class="section-title">
        <div class="mt-separator-outer separator-center">
            <div class="mt-separator">
                <h2 class="text-uppercase sep-line-one "><span>Our</span> Gallery</h2>
            </div>
        </div>
    </div>
    <?php  } ?>

    <div class="container">
        <div class="gallery-wrapper">
            <?php
            $count = 0;
            foreach ($gallery_projects as $project) {
                // home page shows the first 6 only
                if ($page == 'home' && $count == 6) {
                    break;
                }
                $count++;

                $title = isset($project['title']) ? $project['title'] : 'Gallery photo';
            ?>
            <figure class="project-card">
                <div class="project-photos">
                    <?php if (isset($project['before'])) { ?>
                    <a href="images/gallery/<?= $project['before'] ?>-large.jpg" title="Before: <?= $title ?>">
                        <img src="images/gallery/<?= $project['before'] ?>-small.jpg" alt="Before: <?= $title ?>"
                            loading="lazy">
                        <span class="label">Before</span>
                    </a>
                    <?php } ?>

                    <a href="images/gallery/<?= $project['after'] ?>-large.jpg" title="<?= $title ?>">
                        <img src="images/gallery/<?= $project['after'] ?>-small.jpg" alt="<?= $title ?>"
                            loading="lazy">
                        <?php if (isset($project['before'])) { ?>
                        <span class="label after">After</span>
                        <?php } ?>
                    </a>
                </div>

                <?php if (isset($project['title'])) { ?>
                <figcaption>
                    <span class="service"><?= $project['service'] ?></span>
                    <span class="title"><?= $project['title'] ?></span>
                    <?php if (isset($project['location'])) { ?>
                    <span class="location"><i class="fas fa-map-marker-alt"></i> <?= $project['location'] ?></span>
                    <?php } ?>
                </figcaption>
                <?php } ?>
            </figure>
            <?php } ?>
        </div>
    </div>
</section>
