<?php
$pp_features = [
    ['title' => 'Careful Preparation',  'icon' => 'roller',   'color' => 'blue',
     'text' => 'We prepare every surface for a smooth, consistent finish.'],
    ['title' => 'Attention to Detail',  'icon' => 'shield',   'color' => 'green',
     'text' => 'We take care with every coat, edge and trim.'],
    ['title' => 'Respect for Your Property', 'icon' => 'sparkles', 'color' => 'gold',
     'text' => 'We protect surrounding areas and keep our workspace tidy.'],
    ['title' => 'Clear Pricing',        'icon' => 'dollar',   'color' => 'purple',
     'text' => 'Understand the scope and cost before work begins.'],
    ['title' => 'Clear Communication',  'icon' => 'calendar', 'color' => 'teal',
     'text' => 'We keep you informed from your first enquiry to completion.'],
];
?>
<!-- ═══════════════════════════════════════
     WHY CHOOSE US
══════════════════════════════════════ -->
<section class="pp-why" id="why-us">
    <div class="pp-why__media">
        <img src="images/colour-swatches.jpg" alt="Fan of blue and green paint colour swatches" loading="lazy" />
    </div>

    <div class="pp-container pp-why__inner">
        <div class="pp-why__content">
            <p class="pp-eyebrow pp-eyebrow--left">Why Choose Us</p>
            <h2 class="pp-title">The Standard You Deserve, Every Time.</h2>
            <p class="pp-why__intro">Choose Atlantic Painting for careful preparation, quality finishes
                and attention to detail. We provide clear pricing, reliable communication and respectful service.</p>

            <div class="pp-why__features">
                <?php foreach ($pp_features as $f): ?>
                    <div class="pp-feature">
                        <span class="pp-feature__icon pp-bg--<?= $f['color'] ?>"><?= pp_icon($f['icon']) ?></span>
                        <h3><?= $f['title'] ?></h3>
                        <p><?= $f['text'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
