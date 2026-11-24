<?php
// Single service page template. Expects $service_slug to be set by the page file.
require_once __DIR__ . '/services-data.php';

$svc = $pp_services_data[$service_slug];

$current_page = 'services';
$page_title   = $svc['title'] . ' Sydney | Atlantic Painting';

require __DIR__ . '/header.php';
?>

<!-- ═══════════════════════════════════════
     PAGE HERO
══════════════════════════════════════ -->
<section class="pp-page-hero">
    <div class="pp-container pp-page-hero__inner">
        <div class="pp-page-hero__content">
            <nav class="pp-breadcrumb" aria-label="Breadcrumb">
                <a href="index.php">Home</a>
                <?= pp_icon('chevron') ?>
                <a href="index.php#services">Services</a>
                <?= pp_icon('chevron') ?>
                <span aria-current="page"><?= $svc['title'] ?></span>
            </nav>

            <h1 class="pp-page-hero__title"><?= $svc['title'] ?></h1>
            <p class="pp-page-hero__tagline"><?= $svc['tagline'] ?></p>

            <div class="pp-page-hero__actions">
                <a href="<?= $pp_base ?>#contact" class="pp-btn pp-btn--yellow pp-btn--lg">Get a Free Quote <?= pp_icon('chevron') ?></a>
                <a href="tel:<?= $pp_company['phone_tel'] ?>" class="pp-btn pp-btn--outline pp-btn--lg"><?= pp_icon('phone') ?> <?= $pp_company['phone'] ?></a>
            </div>
        </div>

        <div class="pp-page-hero__media">
            <img src="images/<?= $svc['img'] ?>" alt="<?= $svc['alt'] ?>" />
            <span class="pp-page-hero__icon pp-bg--<?= $svc['color'] ?>"><?= pp_icon($svc['icon']) ?></span>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════
     SERVICE CONTENT
══════════════════════════════════════ -->
<section class="pp-service">
    <div class="pp-container pp-service__grid">

        <article class="pp-service__content">
            <div class="pp-block pp-block--intro">
                <?php foreach ($svc['intro'] as $p): ?>
                    <p><?= $p ?></p>
                <?php endforeach; ?>
            </div>

            <?php foreach ($svc['blocks'] as $block): ?>
                <div class="pp-block pp-block--<?= $block['type'] ?>">
                    <h2 class="pp-block__title"><?= $block['title'] ?></h2>

                    <?php foreach ($block['body'] ?? [] as $p): ?>
                        <p><?= $p ?></p>
                    <?php endforeach; ?>

                    <?php if ($block['type'] === 'cards'): ?>
                        <div class="pp-block__cards">
                            <?php foreach ($block['items'] as [$title, $text]): ?>
                                <div class="pp-mini-card">
                                    <span class="pp-mini-card__icon"><?= pp_icon('roller') ?></span>
                                    <h3><?= $title ?></h3>
                                    <p><?= $text ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    <?php elseif ($block['type'] === 'list'): ?>
                        <ul class="pp-checklist">
                            <?php foreach ($block['items'] as $item): ?>
                                <li><span class="pp-checklist__tick"><?= pp_icon('check') ?></span><?= $item ?></li>
                            <?php endforeach; ?>
                        </ul>

                    <?php elseif ($block['type'] === 'steps'): ?>
                        <ol class="pp-timeline">
                            <?php foreach ($block['items'] as $i => [$title, $text]): ?>
                                <li>
                                    <span class="pp-timeline__num"><?= $i + 1 ?></span>
                                    <div>
                                        <h3><?= $title ?></h3>
                                        <p><?= $text ?></p>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ol>

                    <?php elseif ($block['type'] === 'faq'): ?>
                        <div class="pp-faq">
                            <?php foreach ($block['items'] as $i => [$q, $a]): ?>
                                <details class="pp-faq__item"<?= $i === 0 ? ' open' : '' ?>>
                                    <summary><?= $q ?><?= pp_icon('chevron', 'pp-faq__chevron') ?></summary>
                                    <p><?= $a ?></p>
                                </details>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($block['note'])): ?>
                        <p class="pp-block__note"><?= $block['note'] ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </article>

        <!-- Sidebar -->
        <aside class="pp-sidebar">
            <div class="pp-sidebar__box">
                <h3 class="pp-sidebar__heading">Our Services</h3>
                <ul class="pp-sidebar__links">
                    <?php foreach ($pp_services_data as $slug => $s): ?>
                        <li>
                            <a href="<?= $slug ?>.php" class="<?= $slug === $service_slug ? 'is-active' : '' ?>"<?= $slug === $service_slug ? ' aria-current="page"' : '' ?>>
                                <span class="pp-sidebar__icon pp-bg--<?= $s['color'] ?>"><?= pp_icon($s['icon']) ?></span>
                                <?= $s['title'] ?>
                                <?= pp_icon('chevron', 'pp-sidebar__chevron') ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="pp-sidebar__quote">
                <p class="pp-sidebar__eyebrow">Free Consultation</p>
                <h3>Tell us about the space &mdash; we&rsquo;ll handle the rest.</h3>
                <ul class="pp-sidebar__perks">
                    <li><?= pp_icon('check') ?>Free in-home colour consultation</li>
                    <li><?= pp_icon('check') ?>Fixed-price written quote, no surprises</li>
                    <li><?= pp_icon('check') ?>Five-year workmanship warranty</li>
                </ul>
                <a href="tel:<?= $pp_company['phone_tel'] ?>" class="pp-sidebar__phone"><?= pp_icon('phone') ?><?= $pp_company['phone'] ?></a>
                <a href="<?= $pp_base ?>#contact" class="pp-btn pp-btn--yellow">Get a Free Quote <?= pp_icon('chevron') ?></a>
                <a href="mailto:<?= $pp_company['email'] ?>" class="pp-sidebar__email"><?= $pp_company['email'] ?></a>
            </div>
        </aside>

    </div>
</section>

<?php
require __DIR__ . '/fresh-coat.php';
require __DIR__ . '/cta.php';
require __DIR__ . '/footer.php';
