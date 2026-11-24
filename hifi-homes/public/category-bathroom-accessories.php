<?php
$page_title   = 'Bathroom Accessories | Hifi Homes';
$current_page = 'category';
$page_path    = 'category-bathroom-accessories.php';
require_once 'includes/head.php';
require_once 'includes/header.php';

$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.html'],
    ['label' => 'Bathroom Accessories'],
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
                            <span class="shop__filter-count">(132)</span>
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
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Basin Waste">
                            <span>Basin Waste</span>
                            <span class="shop__filter-count">(16)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Bath Mixer">
                            <span>Bath Mixer</span>
                            <span class="shop__filter-count">(10)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Bath Spout">
                            <span>Bath Spout</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Bathtub Flexible Hose">
                            <span>Bathtub Flexible Hose</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Bathtub Waste">
                            <span>Bathtub Waste</span>
                            <span class="shop__filter-count">(5)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Bidet">
                            <span>Bidet</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Flush Button">
                            <span>Flush Button</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Hand Shower">
                            <span>Hand Shower</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Heated Towel Rail">
                            <span>Heated Towel Rail</span>
                            <span class="shop__filter-count">(5)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Kitchen Sink Waste">
                            <span>Kitchen Sink Waste</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Shower Arm">
                            <span>Shower Arm</span>
                            <span class="shop__filter-count">(5)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Shower Mixer">
                            <span>Shower Mixer</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Toilet Paper Holder">
                            <span>Toilet Paper Holder</span>
                            <span class="shop__filter-count">(6)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Towel Bar">
                            <span>Towel Bar</span>
                            <span class="shop__filter-count">(16)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Towel Hook">
                            <span>Towel Hook</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Towel Rail">
                            <span>Towel Rail</span>
                            <span class="shop__filter-count">(6)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="product_type" value="Towel Ring">
                            <span>Towel Ring</span>
                            <span class="shop__filter-count">(2)</span>
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
                            <input type="checkbox" name="finish" value="Gold">
                            <span>Gold</span>
                            <span class="shop__filter-count">(7)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Chrome">
                            <span>Chrome</span>
                            <span class="shop__filter-count">(7)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Black">
                            <span>Black</span>
                            <span class="shop__filter-count">(7)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Gun Metal">
                            <span>Gun Metal</span>
                            <span class="shop__filter-count">(5)</span>
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
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Brushed Nickel">
                            <span>Brushed Nickel</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Grey">
                            <span>Grey</span>
                            <span class="shop__filter-count">(1)</span>
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
                            <input type="checkbox" name="type" value="Towel Hook">
                            <span>Towel Hook</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Heated Towel Rail">
                            <span>Heated Towel Rail</span>
                            <span class="shop__filter-count">(5)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Double Towel Bar">
                            <span>Double Towel Bar</span>
                            <span class="shop__filter-count">(7)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Single Towel Bar">
                            <span>Single Towel Bar</span>
                            <span class="shop__filter-count">(8)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Double Towel Rail">
                            <span>Double Towel Rail</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Towel Ring">
                            <span>Towel Ring</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Towel Bar">
                            <span>Towel Bar</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Single Towel Rail">
                            <span>Single Towel Rail</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Size &amp; Dimensions
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="size" value="30cm">
                            <span>30cm</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="size" value="60cm">
                            <span>60cm</span>
                            <span class="shop__filter-count">(10)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="size" value="80cm">
                            <span>80cm</span>
                            <span class="shop__filter-count">(8)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Number of Bars
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="bars" value="4-Bar">
                            <span>4-Bar</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="bars" value="6-Bar">
                            <span>6-Bar</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="bars" value="7-Bar">
                            <span>7-Bar</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="bars" value="8-Bar">
                            <span>8-Bar</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                    </div>
                </div>
</aside>

            <div class="shop__main">
                <h1 class="shop__title">Bathroom Accessories</h1>

                <div class="shop__toolbar">
                    <span class="shop__count" id="shop-count">Showing 1&ndash;132 of 132 products</span>

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

                <div class="shop__group" id="bathroom-accessories">
                    <div class="shop__grid" data-total="95">
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Shower Mixer">
                        <div class="card-image">
                            <img src="images/bathroom/V01-BN.jpg" alt="V01 Shower Mixer" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>V01 Shower Mixer</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Basin Waste"
                        data-finish="Gold">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_ceqiyrceqiyrceqi.jpg" alt="Pop-Up Basin Waste Gold" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Pop-Up Basin Waste Gold</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Toilet Paper Holder">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0911.38.04.jpg" alt="Y8002 Toilet Paper Holder" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Y8002 Toilet Paper Holder</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Basin Waste"
                        data-finish="Chrome">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_itehwhitehwhiteh.jpg" alt="Pop-Up Basin Waste Chrome" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Pop-Up Basin Waste Chrome</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Hook">
                        <div class="card-image">
                            <img src="images/bathroom/DSC_9786.jpg" alt="Y8001 Towel Hook" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Y8001 Towel Hook</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bathtub Flexible Hose">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_vumh4bvumh4bvumh.jpg" alt="Bathtub Flexible Hose" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Bathtub Flexible Hose</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bathtub Waste"
                        data-finish="Chrome">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_itehwhitehwhiteh.jpg" alt="Bathtub Pop-Up Waste Chrome" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Bathtub Pop-Up Waste Chrome</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Basin Waste"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_lr0m8lr0m8lr0m8l.jpg" alt="Pop-Up Basin Waste Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Pop-Up Basin Waste Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Toilet Paper Holder">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0911.55.30.jpg" alt="F9002 Toilet Paper Holder" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9002 Toilet Paper Holder</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Kitchen Sink Waste"
                        data-finish="Chrome">
                        <div class="card-image">
                            <img src="images/bathroom/unnamed.jpg" alt="Kitchen Sink Waste Chrome" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Kitchen Sink Waste Chrome</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bathtub Waste"
                        data-finish="Gold">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_meenhxmeenhxmeen.jpg" alt="Bathtub Pop-Up Waste Gold" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Bathtub Pop-Up Waste Gold</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Hook">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.54.40.jpg" alt="Y6001 Towel Hook" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Y6001 Towel Hook</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Heated Towel Rail">
                        <div class="card-image">
                            <img src="images/bathroom/unnamed_a696ae7c-ecb8-485c-835f-380136bf6d72.jpg" alt="7-Bar Heated Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>7-Bar Heated Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Kitchen Sink Waste"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_iqmlbuiqmlbuiqml.jpg" alt="Kitchen Sink Waste Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Kitchen Sink Waste Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bidet"
                        data-finish="Gold">
                        <div class="card-image">
                            <img src="images/bathroom/D0B2A185-6D39-462E-89B8-FA568C73C991.jpg" alt="Spray GUN Bidet Gold" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Spray GUN Bidet Gold</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bidet"
                        data-finish="Chrome">
                        <div class="card-image">
                            <img src="images/bathroom/chr.jpg" alt="Spray GUN Bidet Chrome" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Spray GUN Bidet Chrome</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Hook">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0910.31.08.jpg" alt="F6001 Towel Hook" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F6001 Towel Hook</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Bar">
                        <div class="card-image">
                            <img src="images/bathroom/DSC_9745.jpg" alt="Y8008-60cm Double Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Y8008-60cm Double Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Bar">
                        <div class="card-image">
                            <img src="images/bathroom/DSC_9741.jpg" alt="Y8007-60cm Single Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Y8007-60cm Single Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bath Spout">
                        <div class="card-image">
                            <img src="images/bathroom/SP11-BN.jpg" alt="SP11 Bath Swivel Spout" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SP11 Bath Swivel Spout</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bath Spout">
                        <div class="card-image">
                            <img src="images/bathroom/SP05-BN%20(1).jpg" alt="SP05 Bath Spout" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SP05 Bath Spout</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Kitchen Sink Waste"
                        data-finish="Gold">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_8yz9vs8yz9vs8yz9.jpg" alt="Kitchen Sink Waste Gold" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Kitchen Sink Waste Gold</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bidet"
                        data-finish="Gun Metal">
                        <div class="card-image">
                            <img src="images/bathroom/6C0D8210-DC1E-4824-9317-45D83A61395F.jpg" alt="Spray GUN Bidet Gun Metal" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Spray GUN Bidet Gun Metal</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bath Mixer"
                        data-finish="Chrome">
                        <div class="card-image">
                            <img src="images/bathroom/BF2072_1_1000x_7fe705ad-e9f9-48d2-a25c-959b48af0254.jpg" alt="86H88 Freestanding Bath Mixer Chrome" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H88 Freestanding Bath Mixer Chrome</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bathtub Waste"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_kncvh6kncvh6kncv.jpg" alt="Bathtub Pop-Up Waste Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Bathtub Pop-Up Waste Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Basin Waste"
                        data-finish="Matte White">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_bvc8wbbvc8wbbvc8.jpg" alt="Pop-Up Basin Waste Matte White" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Pop-Up Basin Waste Matte White</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Basin Waste"
                        data-finish="Glossy White">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_qb83byqb83byqb83.jpg" alt="Pop-Up Basin Waste Glossy White" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Pop-Up Basin Waste Glossy White</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Basin Waste"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_s742j9s742j9s742.jpg" alt="Pop-Up Basin Waste Brushed Nickel" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Pop-Up Basin Waste Brushed Nickel</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Toilet Paper Holder">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0911.47.31.jpg" alt="F6002 Toilet Paper Holder" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F6002 Toilet Paper Holder</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Bar">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0910.14.50.jpg" alt="F9008/9007-60cm Double Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9008/9007-60cm Double Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Bar">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.35.14.jpg" alt="F9008-80cm Double Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9008-80cm Double Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Bar">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.27.50.jpg" alt="F9007-80cm Single Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9007-80cm Single Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Rail">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.25.13.jpg" alt="F9008-60cm Double Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9008-60cm Double Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Bar">
                        <div class="card-image">
                            <img src="images/bathroom/DSC_9748.jpg" alt="F6008-60cm Double Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F6008-60cm Double Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Bar">
                        <div class="card-image">
                            <img src="images/bathroom/DSC_9750.jpg" alt="F6007-60cm Single Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F6007-60cm Single Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Ring">
                        <div class="card-image">
                            <img src="images/bathroom/DSC_9795.jpg" alt="F6003-1 Towel Ring" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F6003-1 Towel Ring</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Shower Mixer">
                        <div class="card-image">
                            <img src="images/bathroom/V15S-BN.jpg" alt="V15S Shower Mixer" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>V15S Shower Mixer</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Shower Arm">
                        <div class="card-image">
                            <img src="images/bathroom/SA03-BN.jpg" alt="SA03 Ceiling Shower Arm" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SA03 Ceiling Shower Arm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Heated Towel Rail">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_t48qzzt48qzzt48q.jpg" alt="6-Bar Heated Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>6-Bar Heated Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Heated Towel Rail">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_yh6oteyh6oteyh6o.jpg" alt="6-Bar Heated Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>6-Bar Heated Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Heated Towel Rail">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_5uzjue5uzjue5uzj.jpg" alt="4-Bar Heated Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>4-Bar Heated Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Heated Towel Rail">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_n8i68gn8i68gn8i6.jpg" alt="8-Bar Heated Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>8-Bar Heated Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Flush Button"
                        data-finish="Chrome">
                        <div class="card-image">
                            <img src="images/bathroom/5A85F93D-754E-4DB5-A2D2-3441A992A4FB.jpg" alt="Dual Toilet Flush Button (Chrome)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Dual Toilet Flush Button (Chrome)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Flush Button"
                        data-finish="Grey">
                        <div class="card-image">
                            <img src="images/bathroom/08B09618-8588-4E9B-9970-AB9B5EB43F2B.jpg" alt="Dual Flush Button | Grey" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Dual Flush Button | Grey</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Flush Button"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/bathroom/1D85CB46-3A20-47EE-8C1E-5CEF3D8F4A63.jpg" alt="Dual Flush Button | Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Dual Flush Button | Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Flush Button"
                        data-finish="Gold">
                        <div class="card-image">
                            <img src="images/bathroom/767A178D-4E21-46B7-B5AC-A8A807F862F3.jpg" alt="Dual Flush Button | Gold" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Dual Flush Button | Gold</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bidet"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/bathroom/mb.jpg" alt="Spray GUN Bidet Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Spray GUN Bidet Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bath Mixer"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/bathroom/bn.jpg" alt="86H89 Freestanding Bath Mixer Brushed Nickel" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H89 Freestanding Bath Mixer Brushed Nickel</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bath Mixer"
                        data-finish="Gold">
                        <div class="card-image">
                            <img src="images/bathroom/image_aad64a05-11fd-4b1d-a098-6ae2ef413eb7.jpg" alt="86H89 Freestanding Bath Mixer Gold" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H89 Freestanding Bath Mixer Gold</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bath Mixer"
                        data-finish="Gun Metal">
                        <div class="card-image">
                            <img src="images/bathroom/image_aad64a05-11fd-4b1d-a098-6ae2ef413eb7.jpg" alt="86H89 Freestanding Bath Mixer Gun Metal" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H89 Freestanding Bath Mixer Gun Metal</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bath Mixer"
                        data-finish="Chrome">
                        <div class="card-image">
                            <img src="images/bathroom/image_aad64a05-11fd-4b1d-a098-6ae2ef413eb7.jpg" alt="86H89 Freestanding Bath Mixer Chrome" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H89 Freestanding Bath Mixer Chrome</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bath Mixer"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/shower/Shower%20Sets/86h89-black.jpg" alt="86H89 Freestanding Bath Mixer Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H89 Freestanding Bath Mixer Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bath Mixer"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/bathroom/BF2072MB_1_1000x_ad64c8dd-7849-4270-b3c1-fec83f32dd52.jpg" alt="86H88 Freestanding Bath Mixer Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H88 Freestanding Bath Mixer Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bath Mixer"
                        data-finish="Gun Metal">
                        <div class="card-image">
                            <img src="images/bathroom/BF2072_1_1000x_7fe705ad-e9f9-48d2-a25c-959b48af0254.jpg" alt="86H88 Freestanding Bath Mixer Gun Metal" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H88 Freestanding Bath Mixer Gun Metal</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bath Mixer"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/bathroom/BF2072_1_1000x_7fe705ad-e9f9-48d2-a25c-959b48af0254.jpg" alt="86H88 Freestanding Bath Mixer Brushed Nickel" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H88 Freestanding Bath Mixer Brushed Nickel</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bath Mixer"
                        data-finish="Gold">
                        <div class="card-image">
                            <img src="images/bathroom/BF2072_1_1000x_7fe705ad-e9f9-48d2-a25c-959b48af0254.jpg" alt="86H88 Freestanding Bath Mixer Gold" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>86H88 Freestanding Bath Mixer Gold</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bathtub Waste"
                        data-finish="Gun Metal">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_wjr4uewjr4uewjr4.jpg" alt="Bathtub Pop-Up Waste Gun Metal" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Bathtub Pop-Up Waste Gun Metal</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bathtub Waste"
                        data-finish="Brushed Nickel">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_cygu4mcygu4mcygu.jpg" alt="Bathtub Pop-Up Waste Brushed Nickel" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Bathtub Pop-Up Waste Brushed Nickel</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Basin Waste"
                        data-finish="Matte White">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_l63bbpl63bbpl63b_20101bbd-c1dd-4dfd-9624-9e8ac115d90c.jpg" alt="Pop-Up Basin Waste Matte White P01" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Pop-Up Basin Waste Matte White P01</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Basin Waste">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_i292nti292nti292.jpg" alt="Pop-Up Basin Waste P07" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Pop-Up Basin Waste P07</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Basin Waste">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_y4n5nqy4n5nqy4n5.jpg" alt="Pop-Up Basin Waste P17" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Pop-Up Basin Waste P17</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Basin Waste">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_fp7m0ofp7m0ofp7m.jpg" alt="Pop-Up Basin Waste P05" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Pop-Up Basin Waste P05</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Basin Waste">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_tzya0btzya0btzya.jpg" alt="Pop-Up Basin Waste P12" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Pop-Up Basin Waste P12</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Basin Waste">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_q0og0fq0og0fq0og.jpg" alt="Pop-Up Basin Waste P08" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Pop-Up Basin Waste P08</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Basin Waste">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_a9k4e3a9k4e3a9k4.jpg" alt="Pop-Up Basin Waste P04" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Pop-Up Basin Waste P04</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Basin Waste">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_v3nmt2v3nmt2v3nm.jpg" alt="Pop-Up Basin Waste P14" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Pop-Up Basin Waste P14</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Basin Waste">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_7q3p8r7q3p8r7q3p.jpg" alt="Pop-Up Basin Waste P01" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Pop-Up Basin Waste P01</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Basin Waste"
                        data-finish="Gun Metal">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_ifgfm5ifgfm5ifgf.jpg" alt="Pop-Up Basin Waste Gun Metal" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Pop-Up Basin Waste Gun Metal</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Toilet Paper Holder">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0912.00.25.jpg" alt="F9002 Toilet Paper Holder" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9002 Toilet Paper Holder</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Toilet Paper Holder">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0912.02.46.jpg" alt="F9002 Toilet Paper Holder" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9002 Toilet Paper Holder</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Toilet Paper Holder">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0911.43.57.jpg" alt="F6003 Toilet Paper Holder" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F6003 Toilet Paper Holder</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Bar">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0910.33.44.jpg" alt="F9002 Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9002 Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Bar">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0910.18.13.jpg" alt="F9008/9007-80cm Double Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9008/9007-80cm Double Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Bar">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0910.09.15.jpg" alt="F9007-80cm Single Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9007-80cm Single Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Bar">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0910.06.48.jpg" alt="F9007-60cm Single Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9007-60cm Single Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Bar">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.57.14.jpg" alt="F9007-30cm Single Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9007-30cm Single Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Bar">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.48.32.jpg" alt="F9008-60cm Double Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9008-60cm Double Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Bar">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.42.10.jpg" alt="F9007-60cm Single Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9007-60cm Single Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Rail">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.31.06.jpg" alt="F9007-30cm Single Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9007-30cm Single Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Rail">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.51.05.jpg" alt="F9008-80cm Double Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9008-80cm Double Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Rail">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.39.04.jpg" alt="F9007-30cm Single Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9007-30cm Single Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Rail">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.45.35.jpg" alt="F9007-80cm Single Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9007-80cm Single Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Rail">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0815.48.21.jpg" alt="F9007-60cm Single Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9007-60cm Single Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Ring">
                        <div class="card-image">
                            <img src="images/bathroom/DSC_9756.jpg" alt="F6007 Towel Ring" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F6007 Towel Ring</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Bar">
                        <div class="card-image">
                            <img src="images/bathroom/DSC_9735.jpg" alt="Y8008-80cm Double Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Y8008-80cm Double Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Towel Bar">
                        <div class="card-image">
                            <img src="images/bathroom/DSC_9730%20(1).jpg" alt="Y8007-80cm Single Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Y8007-80cm Single Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Bath Spout">
                        <div class="card-image">
                            <img src="images/bathroom/SP07-BN.jpg" alt="SP07 Bath Spout" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SP07 Bath Spout</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Shower Arm">
                        <div class="card-image">
                            <img src="images/bathroom/SP04-BN.jpg" alt="SP04 Wall Shower Arm" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SP04 Wall Shower Arm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Shower Arm">
                        <div class="card-image">
                            <img src="images/bathroom/SA07-BN.jpg" alt="SA07 Shower Arm" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SA07 Shower Arm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Shower Arm">
                        <div class="card-image">
                            <img src="images/bathroom/SA04-BN.jpg" alt="SA04 Ceiling Shower Arm" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SA04 Ceiling Shower Arm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Shower Arm">
                        <div class="card-image">
                            <img src="images/bathroom/SA01-BN%20(1).jpg" alt="SA01 Shower Arm" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>SA01 Shower Arm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Hand Shower">
                        <div class="card-image">
                            <img src="images/bathroom/HS11-BN.jpg" alt="HS11 Hand Shower" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>HS11 Hand Shower</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Hand Shower">
                        <div class="card-image">
                            <img src="images/bathroom/HS05-BN.jpg" alt="HS05 Hand Shower" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>HS05 Hand Shower</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Hand Shower">
                        <div class="card-image">
                            <img src="images/bathroom/HS04-BN.jpg" alt="HS04 Hand Shower" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>HS04 Hand Shower</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-product_type="Hand Shower">
                        <div class="card-image">
                            <img src="images/bathroom/HS02-BN.jpg" alt="HS02 Hand Shower" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>HS02 Hand Shower</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    </div>
                </div>

                <div class="shop__group" id="towel-holders">
                    <h2>Towel Holders</h2>
                    <div class="shop__grid" data-total="32">
                    <div class="product-card" data-availability="in-stock"
                        data-type="Towel Hook">
                        <div class="card-image">
                            <img src="images/bathroom/DSC_9786.jpg" alt="Y8001 Towel Hook" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Y8001 Towel Hook</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Towel Hook">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.54.40.jpg" alt="Y6001 Towel Hook" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Y6001 Towel Hook</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Heated Towel Rail"
                        data-bars="7-Bar">
                        <div class="card-image">
                            <img src="images/bathroom/unnamed_a696ae7c-ecb8-485c-835f-380136bf6d72.jpg" alt="7-Bar Heated Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>7-Bar Heated Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Towel Hook">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0910.31.08.jpg" alt="F6001 Towel Hook" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F6001 Towel Hook</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Double Towel Bar"
                        data-size="60cm">
                        <div class="card-image">
                            <img src="images/bathroom/DSC_9745.jpg" alt="Y8008-60cm Double Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Y8008-60cm Double Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Single Towel Bar"
                        data-size="60cm">
                        <div class="card-image">
                            <img src="images/bathroom/DSC_9741.jpg" alt="Y8007-60cm Single Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Y8007-60cm Single Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Double Towel Bar"
                        data-size="60cm">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0910.14.50.jpg" alt="F9008/9007-60cm Double Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9008/9007-60cm Double Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Double Towel Bar"
                        data-size="80cm">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.35.14.jpg" alt="F9008-80cm Double Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9008-80cm Double Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Single Towel Bar"
                        data-size="80cm">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.27.50.jpg" alt="F9007-80cm Single Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9007-80cm Single Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Double Towel Rail"
                        data-size="60cm">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.25.13.jpg" alt="F9008-60cm Double Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9008-60cm Double Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Double Towel Bar"
                        data-size="60cm">
                        <div class="card-image">
                            <img src="images/bathroom/DSC_9748.jpg" alt="F6008-60cm Double Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F6008-60cm Double Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Single Towel Bar"
                        data-size="60cm">
                        <div class="card-image">
                            <img src="images/bathroom/DSC_9750.jpg" alt="F6007-60cm Single Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F6007-60cm Single Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Towel Ring">
                        <div class="card-image">
                            <img src="images/bathroom/DSC_9795.jpg" alt="F6003-1 Towel Ring" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F6003-1 Towel Ring</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Heated Towel Rail"
                        data-bars="6-Bar">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_t48qzzt48qzzt48q.jpg" alt="6-Bar Heated Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>6-Bar Heated Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Heated Towel Rail"
                        data-bars="6-Bar">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_yh6oteyh6oteyh6o.jpg" alt="6-Bar Heated Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>6-Bar Heated Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Heated Towel Rail"
                        data-bars="4-Bar">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_5uzjue5uzjue5uzj.jpg" alt="4-Bar Heated Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>4-Bar Heated Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Heated Towel Rail"
                        data-bars="8-Bar">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_n8i68gn8i68gn8i6.jpg" alt="8-Bar Heated Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>8-Bar Heated Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Towel Bar">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0910.33.44.jpg" alt="F9002 Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9002 Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Double Towel Bar"
                        data-size="80cm">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0910.18.13.jpg" alt="F9008/9007-80cm Double Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9008/9007-80cm Double Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Single Towel Bar"
                        data-size="80cm">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0910.09.15.jpg" alt="F9007-80cm Single Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9007-80cm Single Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Single Towel Bar"
                        data-size="60cm">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0910.06.48.jpg" alt="F9007-60cm Single Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9007-60cm Single Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Single Towel Bar"
                        data-size="30cm">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.57.14.jpg" alt="F9007-30cm Single Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9007-30cm Single Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Double Towel Bar"
                        data-size="60cm">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.48.32.jpg" alt="F9008-60cm Double Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9008-60cm Double Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Single Towel Bar"
                        data-size="60cm">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.42.10.jpg" alt="F9007-60cm Single Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9007-60cm Single Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Single Towel Rail"
                        data-size="30cm">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.31.06.jpg" alt="F9007-30cm Single Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9007-30cm Single Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Double Towel Rail"
                        data-size="80cm">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.51.05.jpg" alt="F9008-80cm Double Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9008-80cm Double Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Single Towel Rail"
                        data-size="30cm">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.39.04.jpg" alt="F9007-30cm Single Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9007-30cm Single Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Single Towel Rail"
                        data-size="80cm">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0909.45.35.jpg" alt="F9007-80cm Single Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9007-80cm Single Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Single Towel Rail"
                        data-size="60cm">
                        <div class="card-image">
                            <img src="images/bathroom/2025-10-0815.48.21.jpg" alt="F9007-60cm Single Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F9007-60cm Single Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Towel Ring">
                        <div class="card-image">
                            <img src="images/bathroom/DSC_9756.jpg" alt="F6007 Towel Ring" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>F6007 Towel Ring</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Double Towel Bar"
                        data-size="80cm">
                        <div class="card-image">
                            <img src="images/bathroom/DSC_9735.jpg" alt="Y8008-80cm Double Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Y8008-80cm Double Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Single Towel Bar"
                        data-size="80cm">
                        <div class="card-image">
                            <img src="images/bathroom/DSC_9730%20(1).jpg" alt="Y8007-80cm Single Towel Bar" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Y8007-80cm Single Towel Bar</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    </div>
                </div>

                <div class="shop__group" id="heating-towel-rail">
                    <h2>Heating Towel Rail</h2>
                    <div class="shop__grid" data-total="5">
                    <div class="product-card" data-availability="in-stock"
                        data-bars="7-Bar">
                        <div class="card-image">
                            <img src="images/bathroom/unnamed_a696ae7c-ecb8-485c-835f-380136bf6d72.jpg" alt="7-Bar Heated Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>7-Bar Heated Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-bars="6-Bar">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_t48qzzt48qzzt48q.jpg" alt="6-Bar Heated Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>6-Bar Heated Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-bars="6-Bar">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_yh6oteyh6oteyh6o.jpg" alt="6-Bar Heated Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>6-Bar Heated Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-bars="4-Bar">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_5uzjue5uzjue5uzj.jpg" alt="4-Bar Heated Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>4-Bar Heated Towel Rail</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-bars="8-Bar">
                        <div class="card-image">
                            <img src="images/bathroom/Gemini_Generated_Image_n8i68gn8i68gn8i6.jpg" alt="8-Bar Heated Towel Rail" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>8-Bar Heated Towel Rail</h3>
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
