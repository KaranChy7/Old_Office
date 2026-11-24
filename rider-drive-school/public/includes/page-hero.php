<?php
// Requires: $hero_title (HTML), $hero_subtitle, $hero_breadcrumb
?>
<section class="page-hero">
    <div class="container page-hero-inner">
        <div class="page-hero-breadcrumb">
            <a href="index.php">Home</a>
            <span>›</span>
            <span><?= $hero_breadcrumb ?? ''; ?></span>
        </div>
        <h4><?= $hero_title ?? ''; ?></h4>
        <!-- <p><?= $hero_subtitle ?? ''; ?></p> -->
    </div>
</section>