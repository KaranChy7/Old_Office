<?php
$page_title   = 'Toilets | Hifi Homes';
$current_page = 'category';
$page_path    = 'category-toilets.php';
require_once 'includes/head.php';
require_once 'includes/header.php';

$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.html'],
    ['label' => 'Toilets'],
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
                            <span class="shop__filter-count">(17)</span>
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
                        Toilet Type
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="toilet_type" value="Tornado Toilet">
                            <span>Tornado Toilet</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="toilet_type" value="Toilet Suite">
                            <span>Toilet Suite</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="toilet_type" value="Floor Pan Toilet">
                            <span>Floor Pan Toilet</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="toilet_type" value="In-Wall Pan Toilet">
                            <span>In-Wall Pan Toilet</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Finish
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Chrome">
                            <span>Chrome</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Gold">
                            <span>Gold</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Black">
                            <span>Black</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Gun Metal">
                            <span>Gun Metal</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Grey">
                            <span>Grey</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                    </div>
                </div>
            </aside>

            <div class="shop__main">
                <h1 class="shop__title">Toilets</h1>

                <div class="shop__toolbar">
                    <span class="shop__count" id="shop-count">Showing 1&ndash;17 of 17 products</span>

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

                <div class="shop__group" id="toilets">
                    <div class="shop__grid" data-total="9">
                    <div class="product-card" data-availability="in-stock"
                        data-toilet_type="Tornado Toilet">
                        <div class="card-image">
                            <img src="images/toilets/AllToilets/torina-rimless-tornado.jpg" alt="Torina Rimless Tornado Toilet" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Torina Rimless Tornado Toilet</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-toilet_type="Tornado Toilet">
                        <div class="card-image">
                            <img src="images/toilets/AllToilets/juve-rimless-tornade.jpg" alt="Juve Rimless Tornado Toilet" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Juve Rimless Tornado Toilet</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-toilet_type="Toilet Suite">
                        <div class="card-image">
                            <img src="images/toilets/AllToilets/torina-regualr-rimless.jpg" alt="Torina Regular Rimless Toilet Suite" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Torina Regular Rimless Toilet Suite</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-toilet_type="Floor Pan Toilet">
                        <div class="card-image">
                            <img src="images/toilets/AllToilets/juve-rimless.jpg" alt="Juve Rimless Floor Pan Toilet" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Juve Rimless Floor Pan Toilet</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-toilet_type="In-Wall Pan Toilet">
                        <div class="card-image">
                            <img src="images/toilets/AllToilets/torina-rimless.jpg" alt="Torina Rimless In-Wall Rimless Pan Toilet" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Torina Rimless In-Wall Rimless Pan Toilet</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-toilet_type="Tornado Toilet">
                        <div class="card-image">
                            <img src="images/toilets/AllToilets/bella-rimless.jpg" alt="Bella Rimless Tornado Toilet" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Bella Rimless Tornado Toilet</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-toilet_type="Toilet Suite">
                        <div class="card-image">
                            <img src="images/toilets/AllToilets/amore-rimless.jpg" alt="Amore Rimless Toilet Suite" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Amore Rimless Toilet Suite</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-toilet_type="Toilet Suite">
                        <div class="card-image">
                            <img src="images/toilets/AllToilets/valencia-slim-seat.jpg" alt="Valencia Slim Seat Toilet Suite" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Valencia Slim Seat Toilet Suite</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-toilet_type="Toilet Suite">
                        <div class="card-image">
                            <img src="images/toilets/AllToilets/Valencia-Torina.jpg" alt="Valencia/Torina Thicker Toilet Suite" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Valencia/Torina Thicker Toilet Suite</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    </div>
                </div>

                <div class="shop__group" id="toilet-accessories">
                    <h2>Toilet Accessories</h2>
                    <div class="shop__grid" data-total="4">
                    <div class="product-card" data-availability="in-stock"
                        data-finish="Chrome">
                        <div class="card-image">
                            <img src="images/toilets/Toilet%20Accessories/DualFlush-chrome.jpg" alt="Dual Toilet Flush Button (Chrome)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Dual Toilet Flush Button (Chrome)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-finish="Grey">
                        <div class="card-image">
                            <img src="images/toilets/Toilet%20Accessories/DualFlush-grey.jpg" alt="Dual Flush Button | Grey" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Dual Flush Button | Grey</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/toilets/Toilet%20Accessories/DualFlush-black.jpg" alt="Dual Flush Button | Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Dual Flush Button | Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-finish="Gold">
                        <div class="card-image">
                            <img src="images/toilets/Toilet%20Accessories/DualFlush-Gold.jpg" alt="Dual Flush Button | Gold" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Dual Flush Button | Gold</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    </div>
                </div>

                <div class="shop__group" id="toilets-bidet-gun">
                    <h2>Toilets Bidet Gun</h2>
                    <div class="shop__grid" data-total="4">
                    <div class="product-card" data-availability="in-stock"
                        data-finish="Gold">
                        <div class="card-image">
                            <img src="images/toilets/Toilets%20Bidet%20Gun/Spray-GUN-gold.jpg" alt="Spray GUN Bidet Gold" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Spray GUN Bidet Gold</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-finish="Chrome">
                        <div class="card-image">
                            <img src="images/toilets/Toilets%20Bidet%20Gun/Spray-GUN-chrome.jpg" alt="Spray GUN Bidet Chrome" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Spray GUN Bidet Chrome</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-finish="Gun Metal">
                        <div class="card-image">
                            <img src="images/toilets/Toilets%20Bidet%20Gun/Spray-GUN-metal.jpg" alt="Spray GUN Bidet Gun Metal" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Spray GUN Bidet Gun Metal</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/toilets/Toilets%20Bidet%20Gun/Spray-GUN-Black.jpg" alt="Spray GUN Bidet Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Spray GUN Bidet Black</h3>
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
