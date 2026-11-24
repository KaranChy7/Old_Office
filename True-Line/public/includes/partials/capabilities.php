<?php
// "Capabilities" block — heading with vertical label + diamond icon items.
// Expects $caps = [title, label, desc, items[[label, icon, link?]], view_all_link, view_all_text?]
$caps += ['view_all_text' => 'View All'];
?>
<!-- ═══════════════════════════════════════
     CAPABILITIES
══════════════════════════════════════ -->
<section class="capabilities">
    <div class="container">
        <div class="capabilities__grid">

            <div class="capabilities__intro" data-reveal="left">
                <div class="capabilities__heading">
                    <h2 class="capabilities__title"><?= $caps['title'] ?></h2>
                    <div class="capabilities__heading-label">
                        <span><?= $caps['label'] ?></span>
                        <span class="capabilities__heading-line"></span>
                    </div>
                </div>

                <p class="capabilities__desc"><?= $caps['desc'] ?></p>

                <a href="<?= $caps['view_all_link'] ?>" class="capabilities__view-all">
                    <span class="capabilities__view-all-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <?= $caps['view_all_text'] ?>
                </a>
            </div>

            <div class="capabilities__list">
                <?php foreach ($caps['items'] as $i => $item):
                    $tag = !empty($item[2]) ? 'a' : 'div';
                    $href = empty($item[2]) ? '' : ' href="' . (str_contains($item[2], ':') ? $item[2] : $item[2] . '.php') . '"'
                        . (str_starts_with($item[2], 'http') ? ' target="_blank" rel="noopener"' : ''); ?>
                    <<?= $tag . $href ?> class="capabilities__item" data-reveal data-delay="<?= $i * 100 ?>">
                        <div class="capabilities__diamond"><?= tl_icon($item[1]) ?></div>
                        <span class="capabilities__label"><?= $item[0] ?></span>
                    </<?= $tag ?>>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>
