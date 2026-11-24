<?php
 
$features_items = [
    [
        'title' => 'Melbourne-Wide Delivery',
        'desc'  => 'Fast, reliable delivery to your door or job site, anywhere across Melbourne.',
        'icon'  => '<path d="M4 30V14a2 2 0 0 1 2-2h18v18H6a2 2 0 0 1-2-2Z"/><path d="M24 20h9l6 7v5a2 2 0 0 1-2 2h-2"/><path d="M24 12v20"/><circle cx="14" cy="34" r="3.4"/><circle cx="33" cy="34" r="3.4"/>',
    ],
    [
        'title' => 'Trusted by Builders',
        'desc'  => 'Relied on by trade professionals for consistent stock and quality control.',
        'icon'  => '<path d="M24 5 8 11v10c0 9.4 6.6 16.7 16 21 9.4-4.3 16-11.6 16-21V11L24 5Z"/><path d="M17 24l5 5 10-11"/>',
    ],
    [
        'title' => 'Extensive Style Range',
        'desc'  => 'From classic to contemporary — the right fit for every room and budget.',
        'icon'  => '<rect x="6" y="10" width="14" height="14" rx="1.5"/><rect x="24" y="10" width="18" height="14" rx="1.5"/><rect x="6" y="28" width="18" height="10" rx="1.5"/><rect x="28" y="28" width="14" height="10" rx="1.5"/>',
    ],
    [
        'title' => 'Trade &amp; Retail Pricing',
        'desc'  => 'Straightforward pricing for tradies and homeowners alike — no hidden costs.',
        'icon'  => '<path d="M27 6h11a2 2 0 0 1 2 2v11L21 38 4 21 23 6Z"/><circle cx="32.5" cy="15.5" r="2.8"/>',
    ],
];
?>
<!-- ═══════════════════════════════════════
     FEATURES
══════════════════════════════════════ -->
<section class="features">
    <div class="container">
        <div class="features__header" data-reveal>
            <span class="section-eyebrow section-eyebrow--center">Why Hifi Homes</span>
            <h2 class="section-title">Fixtures You Can Build On</h2>
        </div>

        <div class="features__grid">
            <?php foreach ($features_items as $i => $item): ?>
            <div class="features__card" data-reveal data-delay="<?= $i * 100 ?>">
                <div class="features__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none" stroke="currentColor"
                        stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <?= $item['icon'] ?>
                    </svg>
                </div>
                <h3 class="features__title"><?= $item['title'] ?></h3>
                <p class="features__desc"><?= $item['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>