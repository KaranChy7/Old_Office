<?php
// Cleaning tips. Each card links to the matching service page.
$posts = [
    ['End of lease', 'end-of-lease-cleaning', 'Getting your rental ready for the final inspection',
        'Moving out of a rental in Sydney? Start with the kitchen and bathrooms, leave time for carpets and windows, and book your end of lease clean early.'],
    ['Office', 'office-cleaning', 'Why a clean office matters for your team',
        'Clean desks, kitchens and bathrooms make a workplace more pleasant. Cleaning outside business hours keeps it all running without disruption.'],
    ['Carpets', 'carpet-cleaning', 'Keeping carpets fresh between cleans',
        'Regular vacuuming, dealing with spills quickly and booking a carpet clean when it is needed all help your carpets last longer.'],
    ['Windows', 'window-cleaning', 'Getting clear, streak-free windows',
        'Clean glass, frames and sills together for the best result. Window cleaning pairs well with a house or end of lease clean.'],
];
?>
<section class="blog">
    <div class="blog__container">

        <div class="blog__header">
            <div class="section-badge" data-reveal><?= icon('book') ?>Blog</div>
            <h2 class="blog__title" data-reveal data-delay="100">Cleaning tips and advice.</h2>
            <p class="blog__subtitle" data-reveal data-delay="200">Simple advice for keeping homes and workplaces clean
                across <?= e($service_area) ?>.</p>
        </div>

        <div class="blog__grid">
            <?php foreach ($posts as $i => [$tag, $slug, $title, $excerpt]): ?>
            <article class="blog__card" data-reveal data-delay="<?= $i * 50 ?>">
                <div class="blog__card-meta">
                    <span class="blog__card-tag"><?= e($tag) ?></span>
                </div>
                <h2 class="blog__card-title"><?= e($title) ?></h2>
                <p class="blog__card-excerpt"><?= e($excerpt) ?></p>
                <a href="<?= $slug ?>.php" class="blog__card-link">
                    Read more
                    <?= icon('arrow') ?>
                </a>
            </article>
            <?php endforeach; ?>
        </div>

    </div>
</section>
