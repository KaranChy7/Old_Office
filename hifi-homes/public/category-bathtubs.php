<?php
$page_title   = 'Bathtubs | Hifi Homes';
$current_page = 'category';
$page_path    = 'category-bathtubs.php';
require_once 'includes/head.php';
require_once 'includes/header.php';

$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.html'],
    ['label' => 'Bathtubs'],
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
                            <span class="shop__filter-count">(41)</span>
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
                        Bathtub Type
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="bathtub_type" value="Back-to-Wall">
                            <span>Back-to-Wall</span>
                            <span class="shop__filter-count">(5)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="bathtub_type" value="Freestanding">
                            <span>Freestanding</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Style
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="style" value="Fluted">
                            <span>Fluted</span>
                            <span class="shop__filter-count">(6)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="style" value="Spa">
                            <span>Spa</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="style" value="Massage">
                            <span>Massage</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Type
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Flexible Hose">
                            <span>Flexible Hose</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Pop-Up Waste">
                            <span>Pop-Up Waste</span>
                            <span class="shop__filter-count">(5)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Colour
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="colour" value="Chrome">
                            <span>Chrome</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="colour" value="Gold">
                            <span>Gold</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="colour" value="Black">
                            <span>Black</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="colour" value="Gun Metal">
                            <span>Gun Metal</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="colour" value="Brushed Nickel">
                            <span>Brushed Nickel</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Model
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="sku" value="86H88">
                            <span>86H88</span>
                            <span class="shop__filter-count">(5)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="sku" value="86H89">
                            <span>86H89</span>
                            <span class="shop__filter-count">(5)</span>
                        </label>
                    </div>
                </div>
            </aside>

            <div class="shop__main">
                <h1 class="shop__title">Bathtubs</h1>

                <div class="shop__toolbar">
                    <span class="shop__count" id="shop-count">Showing 1&ndash;31 of 31 products</span>

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

                <div class="shop__group" id="bathtubs">
                    <div class="shop__grid" data-total="19">
                    <div class="product-card" data-availability="in-stock">
                        <div class="card-image">
                            <img src="images/bathtubs/All%20Bathtubs/B-7126.jpg" alt="B-7126 Bathtub" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>B-7126 Bathtub</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock">
                        <div class="card-image">
                            <img src="images/bathtubs/All%20Bathtubs/B-7101.jpg" alt="B-7101 Bathtub" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>B-7101 Bathtub</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock">
                        <div class="card-image">
                            <img src="images/bathtubs/All%20Bathtubs/B-7109.jpg" alt="B-7109 Bathtub" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>B-7109 Bathtub</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-style="Fluted">
                        <div class="card-image">
                            <img src="images/bathtubs/All%20Bathtubs/B-7310.jpg" alt="B-7310 Fluted Design Bathtub" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>B-7310 Fluted Design Bathtub</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-style="Fluted">
                        <div class="card-image">
                            <img src="images/bathtubs/All%20Bathtubs/SY-996.jpg" alt="Lamont Fluted Bathtub (SY-996)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Lamont Fluted Bathtub (SY-996)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-style="Fluted">
                        <div class="card-image">
                            <img src="images/bathtubs/All%20Bathtubs/SY-991.jpg" alt="Henley Fluted Bathtub (SY-991)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Henley Fluted Bathtub (SY-991)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-bathtub_type="Back-to-Wall">
                        <div class="card-image">
                            <img src="images/bathtubs/All%20Bathtubs/SY-193-140.jpg" alt="Helix Back to Wall Bathtub (SY-193-140)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Helix Back to Wall Bathtub (SY-193-140)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-bathtub_type="Freestanding">
                        <div class="card-image">
                            <img src="images/bathtubs/All%20Bathtubs/Nevada-Freestanding.jpg" alt="Nevada Freestanding Bathtub" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Nevada Freestanding Bathtub</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-style="Fluted">
                        <div class="card-image">
                            <img src="images/bathtubs/All%20Bathtubs/SY-999-150.jpg" alt="Arcadia Bathtub – Fluted (SY999-150)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Arcadia Bathtub – Fluted (SY999-150)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock">
                        <div class="card-image">
                            <img src="images/bathtubs/All%20Bathtubs/B-7505.jpg" alt="B-7505 Bathtub" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>B-7505 Bathtub</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock">
                        <div class="card-image">
                            <img src="images/bathtubs/All%20Bathtubs/B-7131.jpg" alt="B-7131 Bathtub" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>B-7131 Bathtub</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock">
                        <div class="card-image">
                            <img src="images/bathtubs/All%20Bathtubs/B-7112.jpg" alt="B-7112 Bathtub" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>B-7112 Bathtub</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock">
                        <div class="card-image">
                            <img src="images/bathtubs/All%20Bathtubs/B-7123.jpg" alt="B-7123 Bathtub" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>B-7123 Bathtub</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock">
                        <div class="card-image">
                            <img src="images/bathtubs/All%20Bathtubs/B-7122.jpg" alt="B-7122 Bathtub" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>B-7122 Bathtub</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock">
                        <div class="card-image">
                            <img src="images/bathtubs/All%20Bathtubs/B-7135.jpg" alt="B-7135 Bathtub" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>B-7135 Bathtub</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock">
                        <div class="card-image">
                            <img src="images/bathtubs/All%20Bathtubs/B-7111.jpg" alt="B-7111 Bathtub" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>B-7111 Bathtub</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock">
                        <div class="card-image">
                            <img src="images/bathtubs/All%20Bathtubs/B-7132.jpg" alt="B-7132 Bathtub" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>B-7132 Bathtub</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-style="Fluted">
                        <div class="card-image">
                            <img src="images/bathtubs/All%20Bathtubs/B-7326.jpg" alt="B-7326 Fluted Design Bathtub" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>B-7326 Fluted Design Bathtub</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-style="Fluted">
                        <div class="card-image">
                            <img src="images/bathtubs/All%20Bathtubs/B-7332.jpg" alt="B-7332 Fluted Design Bathtub" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>B-7332 Fluted Design Bathtub</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    </div>
                </div>

                <div class="shop__group" id="spa-bathtub-massage-series">
                    <h2>Spa Bathtub (Massage Series)</h2>
                    <div class="shop__grid" data-total="3">
                    <div class="product-card" data-availability="in-stock"
                        data-bathtub_type="Back-to-Wall"
                        data-style="Spa">
                        <div class="card-image">
                            <img src="images/bathtubs/Spa%20Bathtub/7332.jpg" alt="7332 (SPA) Back-to-Wall Bathtub" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>7332 (SPA) Back-to-Wall Bathtub</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-bathtub_type="Back-to-Wall"
                        data-style="Massage">
                        <div class="card-image">
                            <img src="images/bathtubs/Spa%20Bathtub/7132.jpg" alt="7132 Massage Bathtub Back-To-Wall" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>7132 Massage Bathtub Back-To-Wall</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-style="Spa">
                        <div class="card-image">
                            <img src="images/bathtubs/Spa%20Bathtub/B-7101L.jpg" alt="B-7101L SPA Bathtub" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>B-7101L SPA Bathtub</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    </div>
                </div>

                <div class="shop__group" id="bathtub-accessories">
                    <h2>Bathtub Accessories</h2>
                    <div class="shop__grid" data-total="6">
                    <div class="product-card" data-availability="in-stock"
                        data-type="Flexible Hose">
                        <div class="card-image">
                            <img src="images/bathtubs/Bathtub%20Accessories/Bathtub-Flexible-Hos.jpg" alt="Bathtub Flexible Hose" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Bathtub Flexible Hose</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Pop-Up Waste"
                        data-colour="Chrome">
                        <div class="card-image">
                            <img src="images/bathtubs/Bathtub%20Accessories/Bathtub-pop-up-chrome.jpg" alt="Bathtub Pop-Up Waste Chrome" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Bathtub Pop-Up Waste Chrome</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Pop-Up Waste"
                        data-colour="Gold">
                        <div class="card-image">
                            <img src="images/bathtubs/Bathtub%20Accessories/Bathtub-pop-up-gold.jpg" alt="Bathtub Pop-Up Waste Gold" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Bathtub Pop-Up Waste Gold</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Pop-Up Waste"
                        data-colour="Black">
                        <div class="card-image">
                            <img src="images/bathtubs/Bathtub%20Accessories/Bathtub-pop-up-black.jpg" alt="Bathtub Pop-Up Waste Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Bathtub Pop-Up Waste Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Pop-Up Waste"
                        data-colour="Gun Metal">
                        <div class="card-image">
                            <img src="images/bathtubs/Bathtub%20Accessories/Bathtub-pop-up-gun-metal.jpg" alt="Bathtub Pop-Up Waste Gun Metal" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Bathtub Pop-Up Waste Gun Metal</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Pop-Up Waste"
                        data-colour="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/bathtubs/Bathtub%20Accessories/Bathtub-pop-up-nickel.jpg" alt="Bathtub Pop-Up Waste Brushed Nickel" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Bathtub Pop-Up Waste Brushed Nickel</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    </div>
                </div>

                <div class="shop__group" id="freestanding-bath-mixers">
                    <h2>Freestanding Bath Mixers</h2>
                    <div class="shop__grid" data-total="3">
                    <div class="product-card" data-availability="in-stock"
                        data-sku="86H88"
                        data-colour="Chrome">
                        <div class="card-image">
                            <img src="images/bathtubs/Bath%20Mixers/86H88.jpg" alt="86H88 Freestanding Bath Mixer Chrome" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H88 Freestanding Bath Mixer Chrome</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-sku="86H89"
                        data-colour="Chrome">
                        <div class="card-image">
                            <img src="images/bathtubs/Bath%20Mixers/86H89-chrome.jpg" alt="86H89 Freestanding Bath Mixer Chrome" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H89 Freestanding Bath Mixer Chrome</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-sku="86H89"
                        data-colour="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/bathtubs/Bath%20Mixers/86H89.jpg" alt="86H89 Freestanding Bath Mixer Brushed Nickel" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H89 Freestanding Bath Mixer Brushed Nickel</h3>
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
