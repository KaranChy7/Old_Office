<?php
$page_title   = 'Shower | Hifi Homes';
$current_page = 'category';
$page_path    = 'category-shower.php';
require_once 'includes/head.php';
require_once 'includes/header.php';

$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.html'],
    ['label' => 'Shower'],
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
                            <span class="shop__filter-count">(126)</span>
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
                        Type
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Shower Set">
                            <span>Shower Set</span>
                            <span class="shop__filter-count">(10)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Freestanding Bath Mixer">
                            <span>Freestanding Bath Mixer</span>
                            <span class="shop__filter-count">(10)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Basin Mixer">
                            <span>Basin Mixer</span>
                            <span class="shop__filter-count">(11)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Wall Mixer">
                            <span>Wall Mixer</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Spout">
                            <span>Spout</span>
                            <span class="shop__filter-count">(12)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Shower Arm">
                            <span>Shower Arm</span>
                            <span class="shop__filter-count">(5)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Shower Mixer">
                            <span>Shower Mixer</span>
                            <span class="shop__filter-count">(9)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Hand Shower">
                            <span>Hand Shower</span>
                            <span class="shop__filter-count">(4)</span>
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
                            <span class="shop__filter-count">(22)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Gold">
                            <span>Gold</span>
                            <span class="shop__filter-count">(12)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Black">
                            <span>Black</span>
                            <span class="shop__filter-count">(20)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Gun Metal">
                            <span>Gun Metal</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Brushed Nickel">
                            <span>Brushed Nickel</span>
                            <span class="shop__filter-count">(8)</span>
                        </label>
                    </div>
                </div>
            </aside>

            <div class="shop__main">
                <h1 class="shop__title">Shower</h1>

                <div class="shop__toolbar">
                    <span class="shop__count" id="shop-count">Showing 1&ndash;55 of 55 products</span>

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

                <div class="shop__group" id="shower-sets">
                    <h2>Shower Sets</h2>
                    <div class="shop__grid" data-total="12">
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Set">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Sets/86H50.jpg" alt="86H50 Shower Set" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H50 Shower Set</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Set">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Sets/86H51.jpg" alt="86H51 Shower Set" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H51 Shower Set</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Set">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Sets/86H54.jpg" alt="86H54 Shower Set" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H54 Shower Set</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Set">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Sets/86H56.jpg" alt="86H56 Shower Set" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H56 Shower Set</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Set">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Sets/86H61.jpg" alt="86H61 Shower Set" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H61 Shower Set</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Set">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Sets/86H66.jpg" alt="86H66 Shower Set" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H66 Shower Set</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Set">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Sets/86H92.jpg" alt="86H92 Shower Set" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H92 Shower Set</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Set">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Sets/86H94.jpg" alt="86H94 Shower Set" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H94 Shower Set</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Set">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Sets/86H95.jpg" alt="86H95 Shower Set" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H95 Shower Set</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Freestanding Bath Mixer"
                        data-finish="Gold">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Sets/86H88.jpg" alt="86H88 Freestanding Bath Mixer Gold" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H88 Freestanding Bath Mixer Gold</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Freestanding Bath Mixer"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Sets/86H89.jpg" alt="86H89 Freestanding Bath Mixer Brushed Nickel" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H89 Freestanding Bath Mixer Brushed Nickel</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Freestanding Bath Mixer"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Sets/86h89-black.jpg" alt="86H89 Freestanding Bath Mixer Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H89 Freestanding Bath Mixer Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    </div>
                </div>

                <div class="shop__group" id="shower-mixers">
                    <h2>Shower Mixers</h2>
                    <div class="shop__grid" data-total="5">
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Mixer"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Mixers/V01-BN.jpg" alt="V01 Shower Mixer" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>V01 Shower Mixer</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Mixer"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Mixers/V15S-BN.jpg" alt="V15S Shower Mixer" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>V15S Shower Mixer</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Mixer"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Mixers/86H83-BN.jpg" alt="86H83 Wall Shower Mixer Tap" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H83 Wall Shower Mixer Tap</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Mixer"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Mixers/86H84-BN.jpg" alt="86H84 Wall Shower Mixer" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H84 Wall Shower Mixer</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Mixer"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Mixers/86H06-BN.jpg" alt="86H06 Shower Mixer Tap" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H06 Shower Mixer Tap</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    </div>
                </div>

                <div class="shop__group" id="showers-accessories">
                    <h2>Showers Accessories</h2>
                    <div class="shop__grid" data-total="38">
                    <div class="product-card" data-availability="in-stock"
                        data-type="Basin Mixer"
                        data-finish="Gold">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/86H81.jpg" alt="Wall Plate Basin Mixer Set 86H81 Gold" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Wall Plate Basin Mixer Set 86H81 Gold</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Wall Mixer"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/86H83.jpg" alt="86H83 Wall Mounted Mixer BN" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H83 Wall Mounted Mixer BN</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Basin Mixer"
                        data-finish="Chrome">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/wall-mounted-basin-chrome.jpg" alt="Wall Mounted Basin Mixer Chrome" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Wall Mounted Basin Mixer Chrome</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Basin Mixer"
                        data-finish="Chrome">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/wall-mounted-basin-tap.jpg" alt="Wall Mounted Basin Mixer Tap Chrome" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Wall Mounted Basin Mixer Tap Chrome</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Basin Mixer"
                        data-finish="Chrome">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/oval-wall-plate-chrome.jpg" alt="Oval Wall Mounted Basin Mixer Tap Chrome" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Oval Wall Mounted Basin Mixer Tap Chrome</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Basin Mixer"
                        data-finish="Chrome">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/86H80.jpg" alt="86H80 Round Wall Mounted Basin Mixer Tap Chrome" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H80 Round Wall Mounted Basin Mixer Tap Chrome</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Basin Mixer"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/square-wall-plate-black.jpg" alt="Square Wall Plate Basin Mixer Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Square Wall Plate Basin Mixer Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Basin Mixer"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/oval-wall-plate-balck.jpg" alt="Oval Wall Plate Basin Mixer Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Oval Wall Plate Basin Mixer Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Basin Mixer"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/86H34.jpg" alt="86H34 Wall Mounted Basin Mixer Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H34 Wall Mounted Basin Mixer Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Basin Mixer"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/86H80-black.jpg" alt="86H80 Round Wall Mounted Basin Mixer Set Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H80 Round Wall Mounted Basin Mixer Set Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Spout"
                        data-finish="Chrome">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/wall-mounted-basin-spout-chrome.jpg" alt="Wall Mounted Basin Spout Chrome" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Wall Mounted Basin Spout Chrome</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Spout"
                        data-finish="Chrome">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/wall-mounted-basin-spout.jpg" alt="Curved Wall Mounted Basin Spout Chrome" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Curved Wall Mounted Basin Spout Chrome</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Spout"
                        data-finish="Chrome">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/SP04.jpg" alt="SP04 Rounded Wall Mounted Basin Spout Chrome" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SP04 Rounded Wall Mounted Basin Spout Chrome</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Spout"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/SP04-BN.jpg" alt="SP04 Wall Mounted Spout BN" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SP04 Wall Mounted Spout BN</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Spout">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/SP05-06.jpg" alt="SP05/06 Wall Mounted Spout" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SP05/06 Wall Mounted Spout</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Spout"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/SP05-BN.jpg" alt="SP05 Bath Spout BN" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SP05 Bath Spout BN</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Spout"
                        data-finish="Gun Metal">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/SP06.jpg" alt="SP06 Wall Mounted Spout GM" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SP06 Wall Mounted Spout GM</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Spout"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/SP07-BN.jpg" alt="SP07 Bath Spout BN" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SP07 Bath Spout BN</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Spout"
                        data-finish="Gold">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/SP11.jpg" alt="SP11 Wall Mounted Bath Spout Gold" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SP11 Wall Mounted Bath Spout Gold</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Spout"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/SP11-BN.jpg" alt="SP11 Bath Swivel Spout BN" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SP11 Bath Swivel Spout BN</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Arm"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/SA01-BN.jpg" alt="SA01 Shower Arm" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SA01 Shower Arm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Arm"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/SA03-BN.jpg" alt="SA03 Ceiling Shower Arm" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SA03 Ceiling Shower Arm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Arm"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/SA04-BN.jpg" alt="SA04 Ceiling Shower Arm" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SA04 Ceiling Shower Arm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Arm"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/SA07-BN.jpg" alt="SA07 Shower Arm" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SA07 Shower Arm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Mixer"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/V01.jpg" alt="V01 Square Wall Mounted Shower Mixer Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>V01 Square Wall Mounted Shower Mixer Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Mixer"
                        data-finish="Chrome">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/V01-chrome.jpg" alt="V01 Wall Mounted Shower Mixer Chrome" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>V01 Wall Mounted Shower Mixer Chrome</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Mixer"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/V03-square-wall-mixer-black.jpg" alt="V03 Square Wall Mounted Shower Mixer Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>V03 Square Wall Mounted Shower Mixer Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Mixer">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/V03-square-wall-mixer.jpg" alt="V03 Square Wall Mounted Shower Mixer" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>V03 Square Wall Mounted Shower Mixer</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Mixer"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/V05.jpg" alt="V05 Round Wall Mounted Shower Mixer Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>V05 Round Wall Mounted Shower Mixer Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Mixer"
                        data-finish="Chrome">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/V06-chrome.jpg" alt="V06 Round Wall Mounted Shower Mixer Chrome" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>V06 Round Wall Mounted Shower Mixer Chrome</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Mixer"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/V06-black.jpg" alt="V06 Round Wall Mounted Shower Mixer Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>V06 Round Wall Mounted Shower Mixer Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Shower Mixer"
                        data-finish="Gold">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/V06-gold.jpg" alt="V06 Wall Mounted Shower Mixer Gold" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>V06 Wall Mounted Shower Mixer Gold</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Wall Mixer"
                        data-finish="Gold">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/V09.jpg" alt="V09 Dual Handle Wall Mixer" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>V09 Dual Handle Wall Mixer</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Wall Mixer"
                        data-finish="Chrome">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/V10.jpg" alt="V10 Dual Handle Wall Mixer" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>V10 Dual Handle Wall Mixer</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Hand Shower"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/HS02-BN.jpg" alt="HS02 Hand Shower" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>HS02 Hand Shower</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Hand Shower"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/HS04-BN.jpg" alt="HS04 Hand Shower" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>HS04 Hand Shower</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Hand Shower"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/HS05-BN.jpg" alt="HS05 Hand Shower" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>HS05 Hand Shower</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Hand Shower"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Accessories/HS11-BN.jpg" alt="HS11 Hand Shower" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>HS11 Hand Shower</h3>
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
