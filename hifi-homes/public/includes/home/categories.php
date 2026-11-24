<?php
 
$category_groups = [
    [
        'id'     => 'bathroom',
        'tone'   => '',
        'eyebrow'=> 'Bathroom Range',
        'title'  => 'Everything For Your Bathroom',
        'desc'   => 'A complete bathroom range, from the vanity to the tapware, chosen for fit, finish and everyday durability.',
        'items'  => [
            ['label' => 'Vanities',           'slug' => 'vanities',  'image' => 'images/vanities.jpg'],
            ['label' => 'Basins',             'slug' => 'basins',    'image' => 'images/basins.jpg'],
            ['label' => 'Bathtubs',           'slug' => 'bathtubs',  'image' => 'images/bathtubs.jpg'],
            ['label' => 'Toilets',            'slug' => 'toilets',   'image' => 'images/toilest.jpg'],
            ['label' => 'Showers',            'slug' => 'shower',    'image' => 'images/shower.jpg'],
            ['label' => 'Mirrors &amp; Cabinets', 'slug' => 'mirror', 'image' => 'images/mirror.jpg'],
        ],
    ],
    [
        'id'     => 'kitchen-laundry',
        'tone'   => 'category-section--tint',
        'eyebrow'=> 'Kitchen &amp; Laundry',
        'title'  => 'Built For Everyday Use',
        'desc'   => 'Hard-wearing sinks, tapware and tubs for the rooms that work the hardest in every home.',
        'items'  => [
            ['label' => 'Kitchen Sinks',        'slug' => 'kitchen-laundry', 'image' => 'images/sink.jpg'],
            ['label' => 'Kitchen Mixers &amp; Taps', 'slug' => 'kitchen-laundry', 'image' => 'images/taps.jpg'],
            ['label' => 'Kitchen Wastes',          'slug' => 'kitchen-laundry', 'image' => 'images/wastes.jpg'],
        ],
    ],
    [
        'id'     => 'accessories',
        'tone'   => '',
        'eyebrow'=> 'All Accessories',
        'title'  => 'The Finishing Details',
        'desc'   => 'Handles, rails, wastes and flooring — the small details that pull a finished room together.',
        'items'  => [
            ['label' => 'Toilet Paper Accessories', 'slug' => 'bathroom-accessories', 'image' => 'images/toilet-paper.jpg'],
            ['label' => 'Door Handles &amp; Locks', 'slug' => 'door-accessories', 'image' => 'images/door-handle.jpg'],
            ['label' => 'Towel Rails',           'slug' => 'bathroom-accessories', 'image' => 'images/towel.jpg'],
            ['label' => 'Basin &amp; Shower Wastes', 'slug' => 'bathroom-accessories', 'image' => 'images/basins-wastes.jpg'],
            ['label' => 'Shower Accessories',   'slug' => 'bathroom-accessories', 'image' => 'images/showers.jpg'],
            ['label' => 'DoorStops',             'slug' => 'door-accessories', 'anchor' => 'doorstops', 'image' => 'images/doorstops.jpg'],
        ],
    ],
];
?>
<?php foreach ($category_groups as $group): ?>
<!-- ═══════════════════════════════════════
     CATEGORY — <?= strip_tags($group['eyebrow']) ?>
══════════════════════════════════════ -->
<section class="category-section <?= $group['tone'] ?>" id="<?= $group['id'] ?>">
    <div class="container">
        <div class="category-section__header" data-reveal>
            <span class="section-eyebrow section-eyebrow--center"><?= $group['eyebrow'] ?></span>
            <h2 class="section-title"><?= $group['title'] ?></h2>
            <p class="section-lead category-section__lead"><?= $group['desc'] ?></p>
        </div>

        <div class="category-grid">
            <?php foreach ($group['items'] as $i => $item): ?>
            <a href="category-<?= htmlspecialchars($item['slug']) ?>.html<?= !empty($item['anchor']) ? '#' . htmlspecialchars($item['anchor']) : '' ?>"
                class="category-card" data-reveal
                data-delay="<?= ($i % 3) * 80 ?>">
                <span class="category-card__icon">
                    <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= strip_tags($item['label']) ?>"
                        loading="lazy">
                </span>
                <span class="category-card__label"><?= $item['label'] ?></span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endforeach; ?>