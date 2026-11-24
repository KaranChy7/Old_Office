<?php
$page_title   = 'Floorings | Hifi Homes';
$current_page = 'category';
$page_path    = 'category-flooring.php';
require_once 'includes/head.php';
require_once 'includes/header.php';

$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.html'],
    ['label' => 'Floorings'],
];
require_once 'includes/breadcrumbs.php';
?>

<section class="shop">
    <div class="container">
        <div class="shop__layout">

            <button type="button" class="shop__filters-toggle" aria-expanded="false" aria-controls="shop-filters">
                Filters
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                    <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            <aside class="shop__filters" id="shop-filters">
                <h2>Filters</h2>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Availability
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="availability" value="in-stock">
                            <span>In stock</span>
                            <span class="shop__filter-count">(15)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="availability" value="out-of-stock">
                            <span>Out of stock</span>
                            <span class="shop__filter-count">(0)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Flooring Type
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Hybrid Flooring">
                            <span>Hybrid Flooring</span>
                            <span class="shop__filter-count">(15)</span>
                        </label>
                    </div>
                </div>
            </aside>

            <div class="shop__main">
                <h1 class="shop__title">Floorings</h1>

                <div class="shop__toolbar">
                    <span class="shop__count" id="shop-count">Showing 1&ndash;15 of 15 products</span>

                    <div class="shop__toolbar-right">
                        <span class="shop__sort">Sort by: <strong>Best Selling</strong></span>
                        <div class="shop__view-toggle">
                            <button type="button" class="shop__view-btn active" aria-label="Grid view">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <rect x="3" y="3" width="7" height="7" />
                                    <rect x="14" y="3" width="7" height="7" />
                                    <rect x="3" y="14" width="7" height="7" />
                                    <rect x="14" y="14" width="7" height="7" />
                                </svg>
                            </button>
                            <button type="button" class="shop__view-btn" aria-label="List view">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <rect x="3" y="4" width="18" height="3" />
                                    <rect x="3" y="10.5" width="18" height="3" />
                                    <rect x="3" y="17" width="18" height="3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="shop__group" id="flooring">
                    <div class="shop__grid" data-total="15">
                    <div class="product-card" data-availability="in-stock"
                        data-type="Hybrid Flooring">
                        <div class="card-image">
                            <img src="images/floor/AM01.jpg" alt="Hybrid Oak Grain 1500x228x9mm - Amazing Tiles 9mm Hybrid Flooring — Oak Grain (AM01)" loading="lazy">
                        </div>
                        <h4>Amazing Tiles 9mm Hybrid Flooring</h4>
                        <h3>Hybrid Oak Grain 1500x228x9mm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Hybrid Flooring">
                        <div class="card-image">
                            <img src="images/floor/AM02.jpg" alt="Hybrid Black Oak 1500x228x9mm - Amazing Tiles 9mm Hybrid Flooring — Black Oak (AM02)" loading="lazy">
                        </div>
                        <h4>Amazing Tiles 9mm Hybrid Flooring</h4>
                        <h3>Hybrid Black Oak 1500x228x9mm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Hybrid Flooring">
                        <div class="card-image">
                            <img src="images/floor/AM03.jpg" alt="Hybrid Golden Oak 1500x228x9mm - Amazing Tiles 9mm Hybrid Flooring — Golden Oak (AM03)" loading="lazy">
                        </div>
                        <h4>Amazing Tiles 9mm Hybrid Flooring</h4>
                        <h3>Hybrid Golden Oak 1500x228x9mm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Hybrid Flooring">
                        <div class="card-image">
                            <img src="images/floor/AM04.jpg" alt="Hybrid Natural Oak 1500x228x9mm - Amazing Tiles 9mm Hybrid Flooring — Natural Oak (AM04)" loading="lazy">
                        </div>
                        <h4>Amazing Tiles 9mm Hybrid Flooring</h4>
                        <h3>Hybrid Natural Oak 1500x228x9mm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Hybrid Flooring">
                        <div class="card-image">
                            <img src="images/floor/AM05.jpg" alt="Hybrid Coastal Oak 1500x228x9mm - Amazing Tiles 9mm Hybrid Flooring — Coastal Oak (AM05)" loading="lazy">
                        </div>
                        <h4>Amazing Tiles 9mm Hybrid Flooring</h4>
                        <h3>Hybrid Coastal Oak 1500x228x9mm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Hybrid Flooring">
                        <div class="card-image">
                            <img src="images/floor/AM06.jpg" alt="Hybrid Red Oak 1500x228x9mm - Amazing Tiles 9mm Hybrid Flooring — Red Oak (AM06)" loading="lazy">
                        </div>
                        <h4>Amazing Tiles 9mm Hybrid Flooring</h4>
                        <h3>Hybrid Red Oak 1500x228x9mm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Hybrid Flooring">
                        <div class="card-image">
                            <img src="images/floor/AM07.jpg" alt="Hybrid Oxford Grey 1500x228x9mm - Amazing Tiles 9mm Hybrid Flooring — Oxford Grey (AM07)" loading="lazy">
                        </div>
                        <h4>Amazing Tiles 9mm Hybrid Flooring</h4>
                        <h3>Hybrid Oxford Grey 1500x228x9mm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Hybrid Flooring">
                        <div class="card-image">
                            <img src="images/floor/AM08.jpg" alt="Hybrid Cornsilk 1500x228x9mm - Amazing Tiles 9mm Hybrid Flooring — Cornsilk (AM08)" loading="lazy">
                        </div>
                        <h4>Amazing Tiles 9mm Hybrid Flooring</h4>
                        <h3>Hybrid Cornsilk 1500x228x9mm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Hybrid Flooring">
                        <div class="card-image">
                            <img src="images/floor/AM09.jpg" alt="Hybrid Driftwood 1500x228x9mm - Amazing Tiles 9mm Hybrid Flooring — Driftwood (AM09)" loading="lazy">
                        </div>
                        <h4>Amazing Tiles 9mm Hybrid Flooring</h4>
                        <h3>Hybrid Driftwood 1500x228x9mm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Hybrid Flooring">
                        <div class="card-image">
                            <img src="images/floor/AM10.jpg" alt="Hybrid Red Grain 1500x228x9mm - Amazing Tiles 9mm Hybrid Flooring — Red Grain (AM10)" loading="lazy">
                        </div>
                        <h4>Amazing Tiles 9mm Hybrid Flooring</h4>
                        <h3>Hybrid Red Grain 1500x228x9mm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Hybrid Flooring">
                        <div class="card-image">
                            <img src="images/floor/AM11.jpg" alt="Hybrid Grey Oak 1500x228x9mm - Amazing Tiles 9mm Hybrid Flooring" loading="lazy">
                        </div>
                        <h4>Amazing Tiles 9mm Hybrid Flooring</h4>
                        <h3>Hybrid Grey Oak 1500x228x9mm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Hybrid Flooring">
                        <div class="card-image">
                            <img src="images/floor/AM12.jpg" alt="Hybrid Element Grey 1500x228x9mm - Amazing Tiles 9mm Hybrid Flooring — Element Grey (AM12)" loading="lazy">
                        </div>
                        <h4>Amazing Tiles 9mm Hybrid Flooring</h4>
                        <h3>Hybrid Element Grey 1500x228x9mm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Hybrid Flooring">
                        <div class="card-image">
                            <img src="images/floor/AM13.jpg" alt="Hybrid Toasted Almond 1500x228x9mm" loading="lazy">
                        </div>
                        <h4>Amazing Tiles 9mm Hybrid Flooring</h4>
                        <h3>Hybrid Toasted Almond 1500x228x9mm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Hybrid Flooring">
                        <div class="card-image">
                            <img src="images/floor/AM14.jpg" alt="Hybrid Natural Grey 1500x228x9mm - Amazing Tiles 9mm Hybrid Flooring — Natural Grey (AM14)" loading="lazy">
                        </div>
                        <h4>Amazing Tiles 9mm Hybrid Flooring</h4>
                        <h3>Hybrid Natural Grey 1500x228x9mm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Hybrid Flooring">
                        <div class="card-image">
                            <img src="images/floor/AM15.jpg" alt="Hybrid Tuscan Oak 1500x228x9mm - Amazing Tiles 9mm Hybrid Flooring" loading="lazy">
                        </div>
                        <h4>Amazing Tiles 9mm Hybrid Flooring</h4>
                        <h3>Hybrid Tuscan Oak 1500x228x9mm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php require_once 'includes/home/cta.php'; ?>
<?php require_once 'includes/footer.php'; ?>
<?php require_once 'includes/scripts.php'; ?>
