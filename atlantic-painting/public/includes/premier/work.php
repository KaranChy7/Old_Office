<?php
// Recent work gallery: completed projects (photos from atlanticpainting.com.au)
$pp_work = [
    ['img' => 'work-1.jpg', 'tag' => 'Exterior',   'title' => 'Two-Storey Rendered Home', 'alt' => 'Freshly painted two-storey rendered home with arched windows'],
    ['img' => 'work-2.jpg', 'tag' => 'Exterior',   'title' => 'Contemporary Home',        'alt' => 'Contemporary two-storey home with fresh white and charcoal paintwork'],
    ['img' => 'work-3.jpg', 'tag' => 'Exterior',   'title' => 'Weatherboard Studio',      'alt' => 'Black weatherboard studio with freshly painted white French doors'],
    ['img' => 'work-4.jpg', 'tag' => 'Residential', 'title' => 'Rendered Cottage',        'alt' => 'Rendered cottage with sandstone details after repainting'],
    ['img' => 'work-5.jpg', 'tag' => 'Exterior',   'title' => 'Render &amp; Trims',       'alt' => 'Modern home with freshly painted render and trims'],
    ['img' => 'work-6.jpg', 'tag' => 'Commercial', 'title' => 'Commercial Building',      'alt' => 'Two-storey commercial building with fresh exterior paint'],
];
?>
<!-- ═══════════════════════════════════════
     OUR WORK
══════════════════════════════════════ -->
<section class="pp-work" id="our-work">
    <div class="pp-container">
        <div class="pp-section-head">
            <p class="pp-eyebrow">Recent Work</p>
            <h2 class="pp-title">A Collection of Finished Projects.</h2>
        </div>

        <div class="pp-work__grid">
            <?php foreach ($pp_work as $i => $w): ?>
                <figure class="pp-work__item pp-work__item--<?= $i + 1 ?>">
                    <img src="images/<?= $w['img'] ?>" alt="<?= $w['alt'] ?>" loading="lazy" />
                    <figcaption>
                        <span><?= $w['tag'] ?></span>
                        <strong><?= $w['title'] ?></strong>
                    </figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>
