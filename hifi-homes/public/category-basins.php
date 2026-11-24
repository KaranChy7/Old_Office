<?php
$page_title   = 'Basins | Hifi Homes';
$current_page = 'category';
$page_path    = 'category-basins.php';
require_once 'includes/head.php';
require_once 'includes/header.php';

$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.html'],
    ['label' => 'Basins'],
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
                            <span class="shop__filter-count">(72)</span>
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
                        Basin Type
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="basin_type" value="Under Counter">
                            <span>Under Counter</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="basin_type" value="Undermount">
                            <span>Undermount</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Pattern Code
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="pattern" value="P01">
                            <span>P01</span>
                            <span class="shop__filter-count">(5)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="pattern" value="P17">
                            <span>P17</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="pattern" value="P14">
                            <span>P14</span>
                            <span class="shop__filter-count">(6)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="pattern" value="P08">
                            <span>P08</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="pattern" value="P07">
                            <span>P07</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="pattern" value="P04">
                            <span>P04</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="pattern" value="P12">
                            <span>P12</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="pattern" value="P05">
                            <span>P05</span>
                            <span class="shop__filter-count">(3)</span>
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
                            <input type="checkbox" name="type" value="Basin Mixer">
                            <span>Basin Mixer</span>
                            <span class="shop__filter-count">(11)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Tall Basin Mixer">
                            <span>Tall Basin Mixer</span>
                            <span class="shop__filter-count">(6)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Kitchen Mixer Tap">
                            <span>Kitchen Mixer Tap</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Handle Type
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="handle_type" value="Wide Lever Handle">
                            <span>Wide Lever Handle</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="handle_type" value="Pin Handle">
                            <span>Pin Handle</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="handle_type" value="Square Lever Handle">
                            <span>Square Lever Handle</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Colour
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="colour" value="Gold">
                            <span>Gold</span>
                            <span class="shop__filter-count">(5)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="colour" value="Chrome">
                            <span>Chrome</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="colour" value="Brushed Nickel">
                            <span>Brushed Nickel</span>
                            <span class="shop__filter-count">(7)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Waste Type
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="waste_type" value="Pop-Up Waste">
                            <span>Pop-Up Waste</span>
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
                            <input type="checkbox" name="finish" value="Black">
                            <span>Black</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Brushed Nickel">
                            <span>Brushed Nickel</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Chrome">
                            <span>Chrome</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Gold">
                            <span>Gold</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Gun Metal">
                            <span>Gun Metal</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Matte White">
                            <span>Matte White</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Glossy White">
                            <span>Glossy White</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                    </div>
                </div>
            </aside>

            <div class="shop__main">
                <h1 class="shop__title">Basins</h1>

                <div class="shop__toolbar">
                    <span class="shop__count" id="shop-count">Showing 1&ndash;72 of 72 products</span>

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

                <div class="shop__group" id="basins">
                    <div class="shop__grid" data-total="36">
                        <div class="product-card" data-availability="in-stock">
                            <div class="card-image">
                                <img src="images/basins/all-basin/8215-Basin.jpg" alt="8215 Basin" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8215 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock">
                            <div class="card-image">
                                <img src="images/basins/all-basin/330-330-50-Basin.jpg" alt="330/330-50 Basin"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>330/330-50 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-basin_type="Under Counter">
                            <div class="card-image">
                                <img src="images/basins/all-basin/0418C-Under-Counter-Basin.jpg"
                                    alt="0418C Under Counter Basin" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>0418C Under Counter Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P01">
                            <div class="card-image">
                                <img src="images/basins/all-basin/82158217-P01-Basin.jpg" alt="8215/8217-P01 Basin"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8215/8217-P01 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock">
                            <div class="card-image">
                                <img src="images/basins/all-basin/299-basin.jpg" alt="299 Basin" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>299 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P01">
                            <div class="card-image">
                                <img src="images/basins/all-basin/Basin-3207-P01.jpg" alt="Basin 3207-P01"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Basin 3207-P01</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock">
                            <div class="card-image">
                                <img src="images/basins/all-basin/Basin-3612499-41.jpg" alt="Basin 3612/499-41"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Basin 3612/499-41</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock">
                            <div class="card-image">
                                <img src="images/basins/all-basin/basin-3612-499-41.jpg" alt="Basin 3612/499-41"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Basin 3612/499-41</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock">
                            <div class="card-image">
                                <img src="images/basins/all-basin/433-46-basin.jpg" alt="433-46 Basin" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>433-46 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock">
                            <div class="card-image">
                                <img src="images/basins/all-basin/3207-basin.jpg" alt="3207 Basin" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>3207 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P17">
                            <div class="card-image">
                                <img src="images/basins/all-basin/82158217-P17-Basin.jpg" alt="8215/8217-P17 Basin"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8215/8217-P17 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P14">
                            <div class="card-image">
                                <img src="images/basins/all-basin/82158217-P014-Basin.jpg" alt="8215/8217-P14 Basin"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8215/8217-P14 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P08">
                            <div class="card-image">
                                <img src="images/basins/all-basin/82158217-P08-Basin.jpg" alt="8215/8217-P08 Basin"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8215/8217-P08 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P07">
                            <div class="card-image">
                                <img src="images/basins/all-basin/82158217-P07-Basin.jpg" alt="8215/8217-P07 Basin"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8215/8217-P07 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P04">
                            <div class="card-image">
                                <img src="images/basins/all-basin/82158217-P04-Basin.jpg" alt="8215/8217-P04 Basin"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8215/8217-P04 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P12">
                            <div class="card-image">
                                <img src="images/basins/all-basin/82158217-P12-Basin.jpg" alt="8215/8217-P12 Basin"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8215/8217-P12 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P14">
                            <div class="card-image">
                                <img src="images/basins/all-basin/333-P14-Basin.jpg" alt="333 P14 Basin" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>333 P14 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock">
                            <div class="card-image">
                                <img src="images/basins/all-basin/333-Basin.jpg" alt="333 Basin" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>333 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P07">
                            <div class="card-image">
                                <img src="images/basins/all-basin/330330-50-P07-Basin.jpg" alt="330/330-50 P07 Basin"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>330/330-50 P07 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P14">
                            <div class="card-image">
                                <img src="images/basins/all-basin/Basin-3207-P014.jpg" alt="Basin 3207-P14"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Basin 3207-P14</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P12">
                            <div class="card-image">
                                <img src="images/basins/all-basin/Basin-3207-P012.jpg" alt="Basin 3207-P12"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Basin 3207-P12</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P08">
                            <div class="card-image">
                                <img src="images/basins/all-basin/Basin-3207-P08.jpg" alt="Basin 3207-P08"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Basin 3207-P08</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P07">
                            <div class="card-image">
                                <img src="images/basins/all-basin/Basin-3207-P07.jpg" alt="Basin 3207-P07"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Basin 3207-P07</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P05">
                            <div class="card-image">
                                <img src="images/basins/all-basin/Basin-3207-P05.jpg" alt="Basin 3207-P05"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Basin 3207-P05</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P04">
                            <div class="card-image">
                                <img src="images/basins/all-basin/Basin-3207-P04.jpg" alt="Basin 3207-P04"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Basin 3207-P04</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P04">
                            <div class="card-image">
                                <img src="images/basins/all-basin/3612499-41-P04-Basin.jpg" alt="3612/499-41 P04 Basin"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>3612/499-41 P04 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P14">
                            <div class="card-image">
                                <img src="images/basins/all-basin/3612499-41-P14-Basin.jpg" alt="3612/499-41 P14 Basin"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>3612/499-41 P14 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P14">
                            <div class="card-image">
                                <img src="images/basins/all-basin/488-37-P14-Basin.jpg" alt="488-37 P14 Basin"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>488-37 P14 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P17">
                            <div class="card-image">
                                <img src="images/basins/all-basin/488-37-P17-Basin.jpg" alt="488-37 P17 Basin"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>488-37 P17 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P01">
                            <div class="card-image">
                                <img src="images/basins/all-basin/499-40D36D-P01-Basin.jpg" alt="499-40D36D P01 Basin"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>499-40D36D P01 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P17">
                            <div class="card-image">
                                <img src="images/basins/all-basin/499-40D36D-P17-Basin.jpg" alt="499-40D36D P17 Basin"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>499-40D36D P17 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock">
                            <div class="card-image">
                                <img src="images/basins/all-basin/8205-Basin.jpg" alt="8205 Basin" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8205 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock">
                            <div class="card-image">
                                <img src="images/basins/all-basin/8217-Basin.jpg" alt="8217 Basin" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8217 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-pattern="P05">
                            <div class="card-image">
                                <img src="images/basins/all-basin/8217-P05-Basin.jpg" alt="8217-P05 Basin"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8217-P05 Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock">
                            <div class="card-image">
                                <img src="images/basins/all-basin/8240A-Basin.jpg" alt="8240A Basin" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>8240A Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-basin_type="Undermount">
                            <div class="card-image">
                                <img src="images/basins/all-basin/A10-Undermount-Basin.jpg" alt="A10 Undermount Basin"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>A10 Undermount Basin</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                    </div>
                </div>

                <div class="shop__group" id="basins-taps">
                    <h2>Basin Taps</h2>
                    <div class="shop__grid" data-total="20">
                        <div class="product-card" data-availability="in-stock" data-type="Basin Mixer"
                            data-handle_type="Wide Lever Handle" data-colour="Gold">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/81H09T-Basin-Mixer-Wide-Lever.jpg"
                                    alt="81H09T Basin Mixer Wide Lever Handle (Gold)" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H09T Basin Mixer Wide Lever Handle (Gold)</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-type="Basin Mixer"
                            data-colour="Chrome">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/81H10A-CHR-_168MM.jpg"
                                    alt="81H10A Basin Mixer 168mm (Chrome)" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H10A Basin Mixer 168mm (Chrome)</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-type="Basin Mixer"
                            data-colour="Brushed Nickel">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/81H10AS-BN-_148MM.jpg"
                                    alt="81H10AS Basin Mixer 148mm (Brushed Nickel)" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H10AS Basin Mixer 148mm (Brushed Nickel)</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-type="Basin Mixer"
                            data-handle_type="Pin Handle">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/81H14T-Basin-Mixer-Pin.jpg"
                                    alt="81H14T Basin Mixer Pin Handle" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H14T Basin Mixer Pin Handle</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-type="Basin Mixer"
                            data-colour="Brushed Nickel">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/81H53-BN-_135.jpg"
                                    alt="81H53 Basin Mixer 135mm (Brushed Nickel)" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H53 Basin Mixer 135mm (Brushed Nickel)</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-type="Tall Basin Mixer"
                            data-colour="Brushed Nickel">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/81H53T-BN-_135.jpg"
                                    alt="81H53T Tall Basin Mixer (Brushed Nickel)" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H53T Tall Basin Mixer (Brushed Nickel)</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-type="Tall Basin Mixer"
                            data-colour="Brushed Nickel">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/81H55T-BN.jpg"
                                    alt="81H55T Tall Basin Mixer (Brushed Nickel)" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H55T Tall Basin Mixer (Brushed Nickel)</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-type="Tall Basin Mixer"
                            data-colour="Brushed Nickel">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/81H57T-BN.jpg"
                                    alt="81H57T Tall Basin Mixer (Brushed Nickel)" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H57T Tall Basin Mixer (Brushed Nickel)</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-type="Basin Mixer"
                            data-handle_type="Wide Lever Handle">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/81H68T-Basin-Mixer-Wide-Lever.jpg"
                                    alt="81H68T Basin Mixer Wide Lever Handle" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H68T Basin Mixer Wide Lever Handle</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-type="Basin Mixer"
                            data-handle_type="Wide Lever Handle" data-colour="Gold">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/81H74T-Basin-Mixer-Wide-Lever.jpg"
                                    alt="81H74T Basin Mixer Wide Lever Handle (Gold)" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H74T Basin Mixer Wide Lever Handle (Gold)</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-type="Basin Mixer">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/81H78-Basinmixer.jpg" alt="81H78 Basin Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H78 Basin Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-type="Tall Basin Mixer">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/81H78T-Tall-Basin-Mixer.jpg"
                                    alt="81H78T Tall Basin Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H78T Tall Basin Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-type="Basin Mixer"
                            data-colour="Gold">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/81H79-Basin-Mixer.jpg" alt="81H79 Basin Mixer (Gold)"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H79 Basin Mixer (Gold)</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-type="Basin Mixer"
                            data-colour="Brushed Nickel">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/81H79-BN_81H09.jpg"
                                    alt="81H79 / 81H09 Basin Mixer (Brushed Nickel)" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H79 / 81H09 Basin Mixer (Brushed Nickel)</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-type="Tall Basin Mixer">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/81H79T-Tall-Basin-Mixer.jpg"
                                    alt="81H79T Tall Basin Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H79T Tall Basin Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-type="Basin Mixer"
                            data-colour="Gold">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/81H80-Basin-Mixer.jpg" alt="81H80 Basin Mixer (Gold)"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H80 Basin Mixer (Gold)</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-type="Tall Basin Mixer"
                            data-colour="Brushed Nickel">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/81H80T-BN.jpg"
                                    alt="81H80T Tall Basin Mixer (Brushed Nickel)" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H80T Tall Basin Mixer (Brushed Nickel)</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-type="Kitchen Mixer Tap">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/82H08-Kitchen-Mixer-Curved.jpg"
                                    alt="82H08 Kitchen Mixer Curved" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H08 Kitchen Mixer Curved</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-type="Kitchen Mixer Tap"
                            data-handle_type="Square Lever Handle">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/82H35-Kitchen-Mixer-Square-Lever.jpg"
                                    alt="82H35 Kitchen Mixer Square Lever" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H35 Kitchen Mixer Square Lever</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-type="Kitchen Mixer Tap"
                            data-colour="Gold">
                            <div class="card-image">
                                <img src="images/basins/basins-tap/82H68-Kitchen-Mixer-Tap.jpg"
                                    alt="82H68 Kitchen Mixer Tap (Gold)" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H68 Kitchen Mixer Tap (Gold)</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                    </div>
                </div>

                <div class="shop__group" id="basins-wastes">
                    <h2>Basin Wastes</h2>
                    <div class="shop__grid" data-total="16">
                        <div class="product-card" data-availability="in-stock" data-waste_type="Pop-Up Waste"
                            data-finish="Black">
                            <div class="card-image">
                                <img src="images/basins/basins-wastes/Pop-Up-Basin-Waste-black.jpg"
                                    alt="Pop-Up Basin Waste Black" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Pop-Up Basin Waste Black</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-waste_type="Pop-Up Waste"
                            data-finish="Brushed Nickel">
                            <div class="card-image">
                                <img src="images/basins/basins-wastes/Pop-Up-Basin-Waste-brushed.jpg"
                                    alt="Pop-Up Basin Waste Brushed Nickel" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Pop-Up Basin Waste Brushed Nickel</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-waste_type="Pop-Up Waste"
                            data-finish="Chrome">
                            <div class="card-image">
                                <img src="images/basins/basins-wastes/Pop-Up-Basin-Waste-chrome.jpg"
                                    alt="Pop-Up Basin Waste Chrome" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Pop-Up Basin Waste Chrome</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-waste_type="Pop-Up Waste"
                            data-finish="Gold">
                            <div class="card-image">
                                <img src="images/basins/basins-wastes/Pop-Up-Basin-Waste-Gold.jpg"
                                    alt="Pop-Up Basin Waste Gold" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Pop-Up Basin Waste Gold</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-waste_type="Pop-Up Waste"
                            data-finish="Gun Metal">
                            <div class="card-image">
                                <img src="images/basins/basins-wastes/Pop-Up-Basin-Waste-metal.jpg"
                                    alt="Pop-Up Basin Waste Gun Metal" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Pop-Up Basin Waste Gun Metal</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-waste_type="Pop-Up Waste"
                            data-finish="Matte White">
                            <div class="card-image">
                                <img src="images/basins/basins-wastes/Pop-Up-Basin-Waste-matte.jpg"
                                    alt="Pop-Up Basin Waste Matte White" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Pop-Up Basin Waste Matte White</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-waste_type="Pop-Up Waste"
                            data-finish="Glossy White">
                            <div class="card-image">
                                <img src="images/basins/basins-wastes/Pop-Up-Basin-Waste-white.jpg"
                                    alt="Pop-Up Basin Waste Glossy White" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Pop-Up Basin Waste Glossy White</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>


                        <div class="product-card" data-availability="in-stock" data-waste_type="Pop-Up Waste"
                            data-pattern="P04">
                            <div class="card-image">
                                <img src="images/basins/basins-wastes/Pop-Up-Basin-Waste-P04.jpg"
                                    alt="Pop-Up Basin Waste P04" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Pop-Up Basin Waste P04</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>


                        <div class="product-card" data-availability="in-stock" data-waste_type="Pop-Up Waste"
                            data-pattern="P08">
                            <div class="card-image">
                                <img src="images/basins/basins-wastes/Pop-Up-Basin-Waste-P08.jpg"
                                    alt="Pop-Up Basin Waste P08" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Pop-Up Basin Waste P08</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-waste_type="Pop-Up Waste"
                            data-pattern="P14">
                            <div class="card-image">
                                <img src="images/basins/basins-wastes/Pop-Up-Basin-Waste-P14.jpg"
                                    alt="Pop-Up Basin Waste P14" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Pop-Up Basin Waste P14</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-waste_type="Pop-Up Waste"
                            data-pattern="P12">
                            <div class="card-image">
                                <img src="images/basins/basins-wastes/Pop-Up-Basin-Waste-P12.jpg"
                                    alt="Pop-Up Basin Waste P12" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Pop-Up Basin Waste P12</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>

                        <div class="product-card" data-availability="in-stock" data-waste_type="Pop-Up Waste"
                            data-pattern="P17">
                            <div class="card-image">
                                <img src="images/basins/basins-wastes/Pop-Up-Basin-Waste-P17.jpg"
                                    alt="Pop-Up Basin Waste P17" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Pop-Up Basin Waste P17</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-waste_type="Pop-Up Waste"
                            data-pattern="P07">
                            <div class="card-image">
                                <img src="images/basins/basins-wastes/Pop-Up-Basin-Waste-P07.jpg"
                                    alt="Pop-Up Basin Waste P07" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Pop-Up Basin Waste P07</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-waste_type="Pop-Up Waste"
                            data-pattern="P05">
                            <div class="card-image">
                                <img src="images/basins/basins-wastes/Pop-Up-Basin-Waste-P05.jpg"
                                    alt="Pop-Up Basin Waste P05" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Pop-Up Basin Waste P05</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-waste_type="Pop-Up Waste"
                            data-finish="Matte White" data-pattern="P01">
                            <div class="card-image">
                                <img src="images/basins/basins-wastes/Pop-Up-Basin-Waste-Matte-White-P01.jpg"
                                    alt="Pop-Up Basin Waste Matte White P01" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>Pop-Up Basin Waste Matte White P01</h3>
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