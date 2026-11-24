<?php
$pp_steps = [
    ['title' => 'Get in Touch',         'icon' => 'chat',
     'text' => 'Call us or submit a quote request online. We&rsquo;ll respond promptly to discuss your project needs.'],
    ['title' => 'Free Quote',           'icon' => 'palette',
     'text' => 'We visit your site, assess the scope of work, and provide a clear, detailed quote &mdash; no hidden costs.'],
    ['title' => 'Work Begins',          'icon' => 'brush',
     'text' => 'Our skilled tradies arrive on time, fully equipped, and get to work with minimal disruption.'],
    ['title' => 'Handover &amp; Cleanup', 'icon' => 'home',
     'text' => 'We inspect the finished work together, clean up completely, and ensure you&rsquo;re fully satisfied.'],
];
?>
<!-- ═══════════════════════════════════════
     PROCESS
══════════════════════════════════════ -->
<section class="pp-process" id="process">
    <div class="pp-container">
        <div class="pp-section-head pp-section-head--sm">
            <p class="pp-eyebrow">How It Works</p>
            <h2 class="pp-title pp-title--sm">Our Simple, Stress-Free Process</h2>
        </div>

        <div class="pp-process__steps">
            <?php foreach ($pp_steps as $i => $step): ?>
                <?php if ($i > 0): ?>
                    <span class="pp-process__arrow"><?= pp_icon('chevron') ?></span>
                <?php endif; ?>
                <div class="pp-step">
                    <span class="pp-step__num"><?= $i + 1 ?></span>
                    <span class="pp-step__icon"><?= pp_icon($step['icon']) ?></span>
                    <div class="pp-step__body">
                        <h3><?= $step['title'] ?></h3>
                        <p><?= $step['text'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
