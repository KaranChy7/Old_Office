<?php
$page_title   = 'Kitchen & Laundry | Hifi Homes';
$current_page = 'category';
$page_path    = 'category-kitchen-laundry.php';
require_once 'includes/head.php';
require_once 'includes/header.php';

$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.html'],
    ['label' => 'Kitchen & Laundry'],
];
require_once 'includes/breadcrumbs.php';
?>

<section class="shop">
    <div class="container">
        <div class="shop__layout">

            <button type="button" class="shop__filters-toggle" aria-expanded="false" aria-controls="shop-filters">
                Filters
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2.2">
                    <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            <aside class="shop__filters" id="shop-filters">
                <h2>Filters</h2>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Availability
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="availability" value="in-stock">
                            <span>In stock</span>
                            <span class="shop__filter-count">(210)</span>
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
                        Product Type
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Sink">
                            <span>Sink</span>
                            <span class="shop__filter-count">(85)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Waste">
                            <span>Waste</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Tap">
                            <span>Tap</span>
                            <span class="shop__filter-count">(16)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Bowl Type
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="bowl_type" value="Single Bowl">
                            <span>Single Bowl</span>
                            <span class="shop__filter-count">(68)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="bowl_type" value="Double Bowl">
                            <span>Double Bowl</span>
                            <span class="shop__filter-count">(56)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Style
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="style" value="Stainless Steel">
                            <span>Stainless Steel</span>
                            <span class="shop__filter-count">(136)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="style" value="Honeycomb Stainless Steel">
                            <span>Honeycomb Stainless Steel</span>
                            <span class="shop__filter-count">(34)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="style" value="Granite">
                            <span>Granite</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Drainer
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="drainer" value="Right Drainer">
                            <span>Right Drainer</span>
                            <span class="shop__filter-count">(43)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="drainer" value="Left Drainer">
                            <span>Left Drainer</span>
                            <span class="shop__filter-count">(22)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Spout Type
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="spout_type" value="Pull-Out">
                            <span>Pull-Out</span>
                            <span class="shop__filter-count">(16)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Finish
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.2">
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
                            <input type="checkbox" name="finish" value="Black">
                            <span>Black</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Gold">
                            <span>Gold</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                    </div>
                </div>
            </aside>

            <div class="shop__main">
                <h1 class="shop__title">Kitchen &amp; Laundry</h1>

                <div class="shop__toolbar">
                    <span class="shop__count" id="shop-count">Showing 1&ndash;105 of 105 products</span>

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

                <div class="shop__group" id="sinks">
                    <h2>Sinks</h2>
                    <div class="shop__grid" data-total="87">
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Honeycomb Stainless Steel">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0609.46.19.jpg"
                                    alt="3944-BL Honeycomb Stainless Steel Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>3944-BL Honeycomb Stainless Steel Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Honeycomb Stainless Steel">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0609.53.52.jpg"
                                    alt="4444-BL Honeycomb Stainless Steel Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>4444-BL Honeycomb Stainless Steel Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Honeycomb Stainless Steel">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0609.59.29.jpg"
                                    alt="5844-BL Honeycomb Stainless Steel Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>5844-BL Honeycomb Stainless Steel Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Honeycomb Stainless Steel">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0610.01.43.jpg"
                                    alt="3944-GL Honeycomb Stainless Steel Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>3944-GL Honeycomb Stainless Steel Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Honeycomb Stainless Steel">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0610.03.32.jpg"
                                    alt="4444-GL Honeycomb Stainless Steel Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>4444-GL Honeycomb Stainless Steel Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Honeycomb Stainless Steel">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0610.11.56.jpg"
                                    alt="5844-GL Honeycomb Stainless Steel Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>5844-GL Honeycomb Stainless Steel Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Honeycomb Stainless Steel">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0610.21.34.jpg"
                                    alt="7044-BL Honeycomb Stainless Steel Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>7044-BL Honeycomb Stainless Steel Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Honeycomb Stainless Steel" data-bowl_type="Double Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0610.36.58.jpg"
                                    alt="8044-BL Honeycomb Stainless Steel Double Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8044-BL Honeycomb Stainless Steel Double Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Honeycomb Stainless Steel" data-bowl_type="Double Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0610.39.12.jpg"
                                    alt="8744-BL Honeycomb Stainless Steel Double Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8744-BL Honeycomb Stainless Steel Double Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Honeycomb Stainless Steel">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0610.41.11.jpg"
                                    alt="7044-GL Honeycomb Stainless Steel Kitchen Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>7044-GL Honeycomb Stainless Steel Kitchen Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Honeycomb Stainless Steel" data-bowl_type="Double Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0610.43.37.jpg"
                                    alt="8044-GL Honeycomb Stainless Steel Double Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8044-GL Honeycomb Stainless Steel Double Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Honeycomb Stainless Steel" data-bowl_type="Double Bowl"
                            data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0610.45.29.jpg"
                                    alt="11644-GL Honeycomb Stainless Steel Double Bowl Sink with Right Drainer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>11644-GL Honeycomb Stainless Steel Double Bowl Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Honeycomb Stainless Steel" data-bowl_type="Double Bowl"
                            data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0610.53.38.jpg"
                                    alt="11644-BL Honeycomb Stainless Steel Double Bowl Sink with Right Drainer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>11644-BL Honeycomb Stainless Steel Double Bowl Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Honeycomb Stainless Steel" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0610.59.33.jpg"
                                    alt="12050BL-L Honeycomb Stainless Steel Sink with Right Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12050BL-L Honeycomb Stainless Steel Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Honeycomb Stainless Steel" data-drainer="Left Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0611.02.02.jpg"
                                    alt="12050BL-R Honeycomb Stainless Steel Sink with Left Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12050BL-R Honeycomb Stainless Steel Sink with Left Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Honeycomb Stainless Steel" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0611.07.31.jpg"
                                    alt="12050GL-L Honeycomb Stainless Steel Sink with Right Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12050GL-L Honeycomb Stainless Steel Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Honeycomb Stainless Steel" data-drainer="Left Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0611.12.33.jpg"
                                    alt="12050GL-R Honeycomb Stainless Steel Sink with Left Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12050GL-R Honeycomb Stainless Steel Sink with Left Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0611.23.15.jpg"
                                    alt="3044-GU Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>3044-GU Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0611.26.37.jpg"
                                    alt="3544-GU Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>3544-GU Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0611.28.48.jpg"
                                    alt="3944-GU Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>3944-GU Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0611.30.08.jpg"
                                    alt="4444-GU Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>4444-GU Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0611.31.54.jpg"
                                    alt="5144-GU Stainless Steel Kitchen Large Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>5144-GU Stainless Steel Kitchen Large Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0611.33.29.jpg"
                                    alt="5444-GU Stainless Steel Large Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>5444-GU Stainless Steel Large Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0611.38.51.jpg"
                                    alt="5844-GU Stainless Steel Large Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>5844-GU Stainless Steel Large Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0611.41.03.jpg"
                                    alt="7544-GU Stainless Steel Double Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>7544-GU Stainless Steel Double Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0612.55.15.jpg"
                                    alt="8744-GU Stainless Steel Large Single Bowl Sink with Right Drainer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8744-GU Stainless Steel Large Single Bowl Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0612.58.08.jpg"
                                    alt="7844-GU Stainless Steel Large Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>7844-GU Stainless Steel Large Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0613.01.12.jpg"
                                    alt="11644-GU Stainless Steel Double Bowl Sink with Right Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>11644-GU Stainless Steel Double Bowl Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0613.04.14.jpg"
                                    alt="12050-GU-L Stainless Steel Sink with Right Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12050-GU-L Stainless Steel Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-drainer="Left Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0613.06.59.jpg"
                                    alt="12050-GU-R Stainless Steel Sink with Left Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12050-GU-R Stainless Steel Sink with Left Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0613.28.46.jpg"
                                    alt="12050-GU-L Stainless Steel Double Bowl Sink with Right Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12050-GU-L Stainless Steel Double Bowl Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl" data-drainer="Left Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0613.31.48.jpg"
                                    alt="12050-GU-R Stainless Steel Double Bowl Sink with Left Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12050-GU-R Stainless Steel Double Bowl Sink with Left Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0613.37.29.jpg"
                                    alt="3044-MBL Stainless Steel Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>3044-MBL Stainless Steel Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0613.39.25.jpg"
                                    alt="3544-MBL Stainless Steel Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>3544-MBL Stainless Steel Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0613.40.45.jpg"
                                    alt="3944-MBL Stainless Steel Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>3944-MBL Stainless Steel Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0613.43.45.jpg"
                                    alt="4444-MBL Stainless Steel Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>4444-MBL Stainless Steel Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0613.45.11.jpg"
                                    alt="5144-MBL Stainless Steel Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>5144-MBL Stainless Steel Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0613.48.16.jpg"
                                    alt="5444-MBL Stainless Steel Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>5444-MBL Stainless Steel Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0613.50.35.jpg"
                                    alt="5844-MBL Stainless Steel Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>5844-MBL Stainless Steel Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0613.51.56.jpg"
                                    alt="7044-MBL Stainless Steel Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>7044-MBL Stainless Steel Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0613.54.51.jpg"
                                    alt="7844-MBL Stainless Steel Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>7844-MBL Stainless Steel Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0614.08.26.jpg"
                                    alt="7544-MBL Stainless Steel Double Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>7544-MBL Stainless Steel Double Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0614.13.42.jpg"
                                    alt="8044-MBL Stainless Steel Double Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8044-MBL Stainless Steel Double Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0614.14.56.jpg"
                                    alt="8744-MBL Stainless Steel Double Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8744-MBL Stainless Steel Double Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0614.19.25.jpg"
                                    alt="7544-MBL Stainless Steel Single Bowl Sink with Right Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>7544-MBL Stainless Steel Single Bowl Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0614.23.46.jpg"
                                    alt="11644-MBL Stainless Steel Double Bowl Sink with Right Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>11644-MBL Stainless Steel Double Bowl Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0614.25.13.jpg"
                                    alt="12050-MBL-L Stainless Steel Single Bowl Sink with Right Drainer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12050-MBL-L Stainless Steel Single Bowl Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl" data-drainer="Left Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0614.31.01.jpg"
                                    alt="12050-MBL-R Stainless Steel Single Bowl Sink with Left Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12050-MBL-R Stainless Steel Single Bowl Sink with Left Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0614.32.39.jpg"
                                    alt="12050-MBL-L Stainless Steel Double Bowl Sink with Right Drainer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12050-MBL-L Stainless Steel Double Bowl Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl" data-drainer="Left Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0614.36.28.jpg"
                                    alt="12050-MBL-R Stainless Steel Double Bowl Sink with Left Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12050-MBL-R Stainless Steel Double Bowl Sink with Left Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0614.47.46.jpg"
                                    alt="12550-MBL-L Stainless Steel Double Bowl Sink with Right Drainer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12550-MBL-L Stainless Steel Double Bowl Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl" data-drainer="Left Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0614.49.49.jpg"
                                    alt="12550-MBL-R Stainless Steel Double Bowl Sink with Left Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12550-MBL-R Stainless Steel Double Bowl Sink with Left Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0614.52.13.jpg"
                                    alt="3044-GL Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>3044-GL Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0614.55.54.jpg"
                                    alt="3544-GL Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>3544-GL Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0614.58.40.jpg"
                                    alt="3944-GL Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>3944-GL Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0615.00.08.jpg"
                                    alt="4444-GL Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>4444-GL Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0615.01.53.jpg"
                                    alt="5144-GL Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>5144-GL Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0615.03.45.jpg"
                                    alt="5444-GL Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>5444-GL Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0615.05.05.jpg"
                                    alt="5844-GL Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>5844-GL Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0615.08.10.jpg"
                                    alt="7044-GL Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>7044-GL Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0615.09.33.jpg"
                                    alt="7844-GL Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>7844-GL Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0615.11.33.jpg"
                                    alt="7544-GL Stainless Steel Double Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>7544-GL Stainless Steel Double Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0615.13.34.jpg"
                                    alt="8044-GL Stainless Steel Double Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8044-GL Stainless Steel Double Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0615.33.41.jpg"
                                    alt="8744-GL Stainless Steel Sink with Right Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8744-GL Stainless Steel Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0615.35.54.jpg"
                                    alt="11644-GL Double Bowl Stainless Steel Sink with Right Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>11644-GL Double Bowl Stainless Steel Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl" data-drainer="Left Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0810.41.36.jpg"
                                    alt="12050-GL-R Single Bowl Stainless Steel Sink with Left Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12050-GL-R Single Bowl Stainless Steel Sink with Left Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0810.45.54.jpg"
                                    alt="12050-GL-L Single Bowl Stainless Steel Sink with Right Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12050-GL-L Single Bowl Stainless Steel Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0810.49.52.jpg"
                                    alt="3044-BR Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>3044-BR Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0810.51.31.jpg"
                                    alt="3544-BR Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>3544-BR Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0810.53.11.jpg"
                                    alt="3944-BR Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>3944-BR Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0810.54.35.jpg"
                                    alt="4444-BR Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>4444-BR Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0810.56.20.jpg"
                                    alt="5144-BR Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>5144-BR Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0810.57.48.jpg"
                                    alt="5444-BR Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>5444-BR Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0810.59.36.jpg"
                                    alt="5844-BR Stainless Steel Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>5844-BR Stainless Steel Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0811.01.13.jpg"
                                    alt="7844-BR Stainless Steel Large Single Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>7844-BR Stainless Steel Large Single Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0811.10.38.jpg"
                                    alt="7544-BR Stainless Steel Single Bowl Sink with Right Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>7544-BR Stainless Steel Single Bowl Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0811.20.55.jpg"
                                    alt="7544-BR Stainless Steel Double Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>7544-BR Stainless Steel Double Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0811.23.25.jpg"
                                    alt="8044-BR Stainless Steel Double Bowl Sink" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8044-BR Stainless Steel Double Bowl Sink</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0811.26.52.jpg"
                                    alt="11644-BR Stainless Steel Double Bowl Sink with Right Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>11644-BR Stainless Steel Double Bowl Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0811.37.23.jpg"
                                    alt="12050-BR-L Stainless Steel Single Bowl Sink with Right Drainer, Left Bowl"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12050-BR-L Stainless Steel Single Bowl Sink with Right Drainer, Left Bowl</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Single Bowl" data-drainer="Left Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0811.45.27.jpg"
                                    alt="12050-BR-R Stainless Steel Single Bowl Sink with Left Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12050-BR-R Stainless Steel Single Bowl Sink with Left Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0811.47.00.jpg"
                                    alt="12050-BR-L Stainless Steel Double Bowl Sink with Right Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12050-BR-L Stainless Steel Double Bowl Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl" data-drainer="Left Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0811.49.19.jpg"
                                    alt="12050-BR-R Stainless Steel Double Bowl Sink with Left Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12050-BR-R Stainless Steel Double Bowl Sink with Left Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0812.49.35.jpg"
                                    alt="12550-BR-L Stainless Steel Double Bowl Sink with Right Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12550-BR-L Stainless Steel Double Bowl Sink with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-style="Stainless Steel" data-bowl_type="Double Bowl" data-drainer="Left Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/2026-01-0812.51.10.jpg"
                                    alt="12550-BR-R Stainless Steel Double Bowl Sink with Left Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>12550-BR-R Stainless Steel Double Bowl Sink with Left Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-bowl_type="Double Bowl" data-style="Granite" data-drainer="Right Drainer">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/Granite-Double-Bowls-Kitchen-Sinks-Right-Drainer.jpg"
                                    alt="Granite Double Bowls Kitchen Sinks with Right Drainer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Granite Double Bowls Kitchen Sinks with Right Drainer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Sink"
                            data-bowl_type="Double Bowl" data-style="Granite">
                            <div class="card-image">
                                <img src="images/kitchen/Sinks/Granite-Double-Bowls-Kitchen-Sinks.jpg"
                                    alt="Granite Double Bowls Kitchen Sinks" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Granite Double Bowls Kitchen Sinks</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                    </div>
                </div>

                <div class="shop__group" id="kitchen-laundry-taps">
                    <h2>Kitchen&amp;Laundry Taps</h2>
                    <div class="shop__grid" data-total="15">
                        <div class="product-card" data-availability="in-stock" data-product_type="Tap">
                            <div class="card-image">
                                <img src="images/kitchen/Kitchen%26Laundry%20Taps/82H09G.jpg" alt="82H09G Kitchen Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H09G Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Tap">
                            <div class="card-image">
                                <img src="images/kitchen/Kitchen%26Laundry%20Taps/82H33.jpg" alt="82H33 Kitchen Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H33 Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Tap">
                            <div class="card-image">
                                <img src="images/kitchen/Kitchen%26Laundry%20Taps/82H37-BN.jpg"
                                    alt="82H37 Kitchen Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H37 Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Tap"
                            data-spout_type="Pull-Out">
                            <div class="card-image">
                                <img src="images/kitchen/Kitchen%26Laundry%20Taps/82H55-BN.jpg"
                                    alt="82H55 Pull-Out Kitchen Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H55 Pull-Out Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Tap"
                            data-spout_type="Pull-Out">
                            <div class="card-image">
                                <img src="images/kitchen/Kitchen%26Laundry%20Taps/82H60-BN.jpg"
                                    alt="82H60 Pull-Out Kitchen Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H60 Pull-Out Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Tap">
                            <div class="card-image">
                                <img src="images/kitchen/Kitchen%26Laundry%20Taps/82H66-BN.jpg"
                                    alt="82H66 Kitchen Mixer Tap" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H66 Kitchen Mixer Tap</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Tap"
                            data-spout_type="Pull-Out">
                            <div class="card-image">
                                <img src="images/kitchen/Kitchen%26Laundry%20Taps/82H52-BN.jpg"
                                    alt="82H52 Pull-Out Kitchen Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H52 Pull-Out Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Tap"
                            data-spout_type="Pull-Out">
                            <div class="card-image">
                                <img src="images/kitchen/Kitchen%26Laundry%20Taps/82H55-BN_82H51.jpg"
                                    alt="82H55-D Pull-Out Kitchen Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H55-D Pull-Out Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Tap"
                            data-spout_type="Pull-Out">
                            <div class="card-image">
                                <img src="images/kitchen/Kitchen%26Laundry%20Taps/82H65.jpg"
                                    alt="82H65 Pull-Out Kitchen Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H65 Pull-Out Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Tap">
                            <div class="card-image">
                                <img src="images/kitchen/Kitchen%26Laundry%20Taps/82H33-CHR_81H09.jpg"
                                    alt="82H33-D Kitchen Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H33-D Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Tap"
                            data-spout_type="Pull-Out">
                            <div class="card-image">
                                <img src="images/kitchen/Kitchen%26Laundry%20Taps/82H51-BN.jpg"
                                    alt="82H51 Pull-Out Kitchen Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H51 Pull-Out Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Tap"
                            data-spout_type="Pull-Out">
                            <div class="card-image">
                                <img src="images/kitchen/Kitchen%26Laundry%20Taps/82H60-BN_82H51.jpg"
                                    alt="82H60-D Pull-Out Kitchen Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H60-D Pull-Out Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Tap">
                            <div class="card-image">
                                <img src="images/kitchen/Kitchen%26Laundry%20Taps/82H37-BN_82H51.jpg"
                                    alt="82H37-D Kitchen Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H37-D Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Tap"
                            data-spout_type="Pull-Out">
                            <div class="card-image">
                                <img src="images/kitchen/Kitchen%26Laundry%20Taps/82H66-BN-_82H51.jpg"
                                    alt="82H66-D Pull-Out Kitchen Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H66-D Pull-Out Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Tap">
                            <div class="card-image">
                                <img src="images/kitchen/Kitchen%26Laundry%20Taps/82H72-BN.jpg"
                                    alt="82H72 Kitchen Mixer Tap" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H72 Kitchen Mixer Tap</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                    </div>
                </div>

                <div class="shop__group" id="wastes">
                    <h2>Wastes</h2>
                    <div class="shop__grid" data-total="3">
                        <div class="product-card" data-availability="in-stock" data-product_type="Waste"
                            data-finish="Chrome">
                            <div class="card-image">
                                <img src="images/kitchen/Wastes/Kitchen-Sink-Waste-Chrome.jpg"
                                    alt="Kitchen Sink Waste Chrome" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Kitchen Sink Waste Chrome</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Waste"
                            data-finish="Black">
                            <div class="card-image">
                                <img src="images/kitchen/Wastes/Kitchen-Sink-Waste-black.jpg"
                                    alt="Kitchen Sink Waste Black" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Kitchen Sink Waste Black</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-product_type="Waste"
                            data-finish="Gold">
                            <div class="card-image">
                                <img src="images/kitchen/Wastes/Kitchen-Sink-Waste-gold.jpg"
                                    alt="Kitchen Sink Waste Gold" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Kitchen Sink Waste Gold</h3>
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