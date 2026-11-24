<section id="categories" class="section">
    <div class="container">
        <div class="section-heading">
            <div>
                <p class="eyebrow">Browse the nursery</p>
                <h2>Featured Categories</h2>
            </div><a href="<?= e(url('shop')) ?>">View all products →</a>
        </div>
        <div class="category-grid">
            <?php foreach ($categoryCards as $category): ?><a class="category-card reveal"
                href="<?= e(url('shop', ['category' => category_slug($category)])) ?>"><img
                    src="<?= e(image_path('category-' . category_slug($category))) ?>" alt="<?= e($category) ?>">
                <div>
                    <h3><?= e($category) ?></h3>
                    <p>Explore quality options selected for Australian growing conditions.</p><span>Shop category
                        →</span>
                </div>
            </a><?php endforeach; ?>
        </div>
    </div>
</section>