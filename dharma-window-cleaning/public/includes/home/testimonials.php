<?php require_once __DIR__ . '/../reviews-data.php'; ?>
<!-- ═══════════════════════════════════════
     GOOGLE REVIEWS (home — featured only)
══════════════════════════════════════ -->
<section class="testimonials" id="reviews">
    <div class="testimonials__container">

        <div class="testimonials__head" data-reveal>
            <div>
                <div class="testimonials__badge">Google reviews</div>
                <h2>What our customers say.</h2>
            </div>
            <a href="<?= $google_reviews_url ?>" class="testimonials__summary" target="_blank" rel="noopener">
                <span class="testimonials__score"><?= $google_rating ?></span>
                <span class="testimonials__summary-text">
                    <span class="testimonials__stars" aria-hidden="true">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <?php endfor; ?>
                    </span>
                    <span>Rated <?= $google_rating ?> on Google</span>
                </span>
            </a>
        </div>

        <div class="testimonials__grid" data-reveal data-delay="150">
            <?php foreach ($reviews as $review): if (empty($review['featured'])) continue; ?>
            <?php include __DIR__ . '/../review-card.php'; ?>
            <?php endforeach; ?>
        </div>

        <div class="testimonials__cta">
            <a href="reviews.php" class="testimonials__cta-btn testimonials__cta-btn--dark">See all reviews</a>
            <a href="<?= $google_reviews_url ?>" class="testimonials__cta-btn" target="_blank" rel="noopener">Read them
                on Google</a>
        </div>

    </div>
</section>