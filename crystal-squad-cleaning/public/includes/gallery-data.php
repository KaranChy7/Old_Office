<?php
// Real job photos from images/gallery/, grouped by area.
// Each item: caption, then [image number, label] panels.
$gallery_groups = [
    [
        'title' => 'Kitchens',
        'icon'  => 'spray',
        'items' => [
            ['Kitchen pantry &mdash; cleaned and organised', [[1, 'Before'], [2, 'After']]],
            ['Gas stovetop &mdash; cleaned', [[17, 'Before'], [18, 'After']]],
            ['Rangehood filter &mdash; cleaned', [[9, 'Before'], [10, 'After']]],
            ['Behind the fridge &mdash; cleaned', [[7, 'Before'], [8, 'After']]],
            ['Under-sink cupboard &mdash; cleaned', [[15, 'Before'], [16, 'After']]],
            ['Corner cupboard &mdash; cleaned', [[13, 'Before'], [14, 'After']]],
            ['Kitchen &mdash; cupboards and benches cleaned', [[25, 'Cupboards'], [26, 'Benchtops']]],
        ],
    ],
    [
        'title' => 'Bathrooms &amp; Living Areas',
        'icon'  => 'residence',
        'items' => [
            ['Shower floor &mdash; tiles and grout cleaned', [[5, 'Before'], [6, 'After']]],
            ['Living room &mdash; tidied and cleaned', [[11, 'Before'], [12, 'After']]],
        ],
    ],
    [
        'title' => 'Organising &amp; Decluttering',
        'icon'  => 'boxes',
        'items' => [
            ['Cleaning cupboard &mdash; sorted and organised', [[3, 'Before'], [4, 'After']]],
            ['Clothes &mdash; folded and put away', [[21, 'Before'], [22, 'After']]],
            ['Bedroom &mdash; decluttered and organised', [[19, 'Before'], [23, 'Before'], [24, 'After']]],
        ],
    ],
];

// Show one before/after card
function gallery_card($caption, $panels, $delay = 0)
{
    ?>
    <div class="gallery__item" data-reveal data-delay="<?= $delay ?>">
        <div class="ba-compare">
            <?php foreach ($panels as [$number, $label]): ?>
            <div class="ba-compare__panel<?= $label === 'After' ? ' ba-compare__panel--after' : '' ?>">
                <img src="images/gallery/gallery<?= $number ?>.jpg" alt="<?= e(html_entity_decode($caption)) ?> (<?= strtolower($label) ?>)" loading="lazy" />
                <span class="ba-compare__label"><?= $label ?></span>
            </div>
            <?php endforeach; ?>
        </div>
        <p class="gallery__item-caption"><?= $caption ?></p>
    </div>
    <?php
}
