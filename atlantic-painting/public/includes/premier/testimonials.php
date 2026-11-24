<?php
// Client reviews (from atlanticpainting.com.au)
$pp_reviews = [
    ['name' => 'Marcus B.', 'initials' => 'MB', 'text' => 'Professional, punctual and incredibly tidy. Our new bathroom tiling looks absolutely stunning.'],
    ['name' => 'Tamara K.', 'initials' => 'TK', 'text' => 'The concrete driveway they completed looks fantastic. The edges are clean and the entire finish is excellent.'],
    ['name' => 'Jason R.',  'initials' => 'JR', 'text' => 'Had them repaint our entire exterior. The team was professional, punctual and the finished result was outstanding.'],
];

$pp_google = '<svg class="pp-google" viewBox="0 0 24 24" aria-hidden="true"><path fill="#4285F4" d="M22.5 12.3c0-.8-.1-1.5-.2-2.2H12v4.2h5.9a5 5 0 0 1-2.2 3.3v2.7h3.5c2.1-1.9 3.3-4.7 3.3-8z"/><path fill="#34A853" d="M12 23c3 0 5.5-1 7.2-2.7l-3.5-2.7c-1 .7-2.2 1.1-3.7 1.1-2.9 0-5.3-1.9-6.2-4.5H2.2v2.8A11 11 0 0 0 12 23z"/><path fill="#FBBC05" d="M5.8 14.2a6.6 6.6 0 0 1 0-4.3V7.1H2.2a11 11 0 0 0 0 9.9z"/><path fill="#EA4335" d="M12 5.4c1.6 0 3.1.6 4.2 1.7l3.1-3.1A11 11 0 0 0 2.2 7.1l3.6 2.8C6.7 7.3 9.1 5.4 12 5.4z"/></svg>';
$pp_stars  = str_repeat(pp_icon('star'), 5);
?>
<!-- ═══════════════════════════════════════
     TESTIMONIALS
══════════════════════════════════════ -->
<section class="pp-reviews" id="testimonials">
    <div class="pp-container">
        <div class="pp-reviews__head">
            <div>
                <p class="pp-eyebrow pp-eyebrow--left">Client Reviews</p>
                <h2 class="pp-title">What Our Clients Say About Us</h2>
                <p class="pp-reviews__intro">Real feedback from clients who trusted us with their homes and businesses.</p>
            </div>

            <div class="pp-reviews__score">
                <?= $pp_google ?>
                <div>
                    <div class="pp-reviews__rating">
                        <strong>4.9</strong>
                        <span class="pp-stars"><?= $pp_stars ?></span>
                    </div>
                    <small>Based on <?= count($pp_reviews) ?> genuine reviews</small>
                </div>
            </div>
        </div>

        <div class="pp-reviews__grid">
            <?php foreach ($pp_reviews as $r): ?>
                <figure class="pp-review">
                    <div class="pp-review__top">
                        <span class="pp-stars"><?= $pp_stars ?></span>
                        <?= $pp_google ?>
                    </div>
                    <blockquote>&ldquo;<?= $r['text'] ?>&rdquo;</blockquote>
                    <figcaption class="pp-review__author">
                        <span class="pp-review__avatar"><?= $r['initials'] ?></span>
                        <span>
                            <strong><?= $r['name'] ?></strong>
                            <small>NSW, Australia</small>
                        </span>
                    </figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>
