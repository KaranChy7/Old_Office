<?php
// Inner page banner. Set $hero_title, $hero_icon and $hero_image before including.
?>
<section class="page-hero" style="background-image: url('images/<?= e($hero_image) ?>');">
    <div class="page-hero__container">
        <span class="page-hero__icon" data-reveal><?= icon($hero_icon) ?></span>
        <h1 class="page-hero__title" data-reveal data-delay="100"><?= e($hero_title) ?></h1>
        <nav class="page-hero__crumbs" aria-label="Breadcrumb" data-reveal data-delay="200">
            <a href="index.php"><?= icon('home') ?>Home</a>
            <?= icon('arrow') ?>
            <span><?= e($hero_title) ?></span>
        </nav>
    </div>
</section>
