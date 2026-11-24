<?php
// "Our Company" style intro — clipped image with caption card + vertical-label heading.
// Expects $intro = [label, heading, paragraphs[], image, caption[title, sub], view_all_link, view_all_text?]
$intro += ['view_all_text' => 'View All'];
?>
<!-- ═══════════════════════════════════════
     INTRO
══════════════════════════════════════ -->
<section class="about">
    <div class="container">
        <div class="about__grid">

            <div class="about__visual" data-reveal="left">
                <img src="<?= tl_img($intro['image']) ?>" alt="<?= tl_alt($intro['image']) ?>" class="about__image" loading="lazy">

                <div class="about__caption">
                    <strong class="about__caption-title"><?= $intro['caption'][0] ?></strong>
                    <span class="about__caption-sub"><?= $intro['caption'][1] ?></span>
                </div>
            </div>

            <div class="about__content">
                <div class="about__heading" data-reveal="right">
                    <span class="about__heading-label"><?= $intro['label'] ?></span>
                    <h2 class="about__heading-title"><?= $intro['heading'] ?></h2>
                </div>

                <div class="about__body" data-reveal="right" data-delay="120">
                    <?php foreach ($intro['paragraphs'] as $p): ?>
                        <p><?= $p ?></p>
                    <?php endforeach; ?>
                </div>

                <div class="about__actions" data-reveal="right" data-delay="220">
                    <a href="quote.php" class="about__btn-outline">Get a Quote</a>
                </div>

                <a href="<?= $intro['view_all_link'] ?>" class="about__view-all" data-reveal="right" data-delay="280">
                    <span class="about__view-all-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <?= $intro['view_all_text'] ?>
                </a>
            </div>

        </div>
    </div>
</section>
