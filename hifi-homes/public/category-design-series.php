<?php
$page_title   = 'Design Series | Hifi Homes';
$current_page = 'category';
$page_path    = 'category-design-series.php';
require_once 'includes/head.php';
require_once 'includes/header.php';

$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.html'],
    ['label' => 'Design Series'],
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
                            <span class="shop__filter-count">(95)</span>
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
                        Colour
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="colour" value="Chrome">
                            <span>Chrome</span>
                            <span class="shop__filter-count">(7)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="colour" value="Gold">
                            <span>Gold</span>
                            <span class="shop__filter-count">(6)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="colour" value="Brushed Nickel">
                            <span>Brushed Nickel</span>
                            <span class="shop__filter-count">(7)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="colour" value="Gun Metal">
                            <span>Gun Metal</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="colour" value="Black">
                            <span>Black</span>
                            <span class="shop__filter-count">(6)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="colour" value="Gunmetal">
                            <span>Gunmetal</span>
                            <span class="shop__filter-count">(5)</span>
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
                            <span class="shop__filter-count">(10)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="spout_type" value="Fixed">
                            <span>Fixed</span>
                            <span class="shop__filter-count">(19)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="spout_type" value="Pull-Down (Flexible Hose)">
                            <span>Pull-Down (Flexible Hose)</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Head Shape
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="head_shape" value="Circle">
                            <span>Circle</span>
                            <span class="shop__filter-count">(9)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="head_shape" value="Square">
                            <span>Square</span>
                            <span class="shop__filter-count">(7)</span>
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
                            <input type="checkbox" name="handle_type" value="Pin Handle">
                            <span>Pin Handle</span>
                            <span class="shop__filter-count">(25)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="handle_type" value="Lever Handle">
                            <span>Lever Handle</span>
                            <span class="shop__filter-count">(19)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Size &amp; Dimensions
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="size" value="250mm">
                            <span>250mm</span>
                            <span class="shop__filter-count">(5)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="size" value="300mm">
                            <span>300mm</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                    </div>
                </div>
            </aside>

            <div class="shop__main">
                <h1 class="shop__title">Design Series</h1>

                <div class="shop__toolbar">
                    <span class="shop__count" id="shop-count">Showing 1&ndash;95 of 95 products</span>

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



                <div class="shop__group" id="opals">
                    <h2>Opals</h2>
                    <div class="shop__grid" data-total="23">
                        <div class="product-card" data-availability="in-stock" data-spout_type="Pull-Out">
                            <div class="card-image">
                                <img src="images/design/opals/82h60-pull-out-kitchen-mixer.jpg"
                                    alt="82H60 Pull-Out Kitchen Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H60 Pull-Out Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Pull-Out">
                            <div class="card-image">
                                <img src="images/design/opals/82h55-pull-out-kitchen-mixer.jpg"
                                    alt="82H55 Pull-Out Kitchen Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H55 Pull-Out Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Fixed">
                            <div class="card-image">
                                <img src="images/design/opals/82H09G.jpg" alt="82H09G Kitchen Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H09G Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Fixed">
                            <div class="card-image">
                                <img src="images/design/opals/82H37-BN.jpg" alt="82H37 Kitchen Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H37 Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Fixed">
                            <div class="card-image">
                                <img src="images/design/opals/82H33.jpg" alt="82H33 Kitchen Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H33 Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Pull-Out">
                            <div class="card-image">
                                <img src="images/design/opals/82H55-BN_82H51.jpg" alt="82H55-D Pull-Out Kitchen Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H55-D Pull-Out Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-head_shape="Circle">
                            <div class="card-image">
                                <img src="images/design/opals/86H51-BN-250.jpg" alt="86H51 Shower Set" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>86H51 Shower Set</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Pull-Out">
                            <div class="card-image">
                                <img src="images/design/opals/82H60-BN_82H51.jpg" alt="82H60-D Pull-Out Kitchen Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H60-D Pull-Out Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Fixed">
                            <div class="card-image">
                                <img src="images/design/opals/82H33-CHR_81H09.jpg" alt="82H33-D Kitchen Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H33-D Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-handle_type="Pin Handle">
                            <div class="card-image">
                                <img src="images/design/opals/81H78T.jpg" alt="81H78T Tall Basin Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H78T Tall Basin Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-colour="Chrome"
                            data-handle_type="Lever Handle">
                            <div class="card-image">
                                <img src="images/design/opals/BF2072_1.jpg" alt="86H88 Freestanding Bath Mixer Chrome"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>86H88 Freestanding Bath Mixer Chrome</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-head_shape="Circle"
                            data-size="250mm">
                            <div class="card-image">
                                <img src="images/design/opals/SP04-BN.jpg" alt="SP04 Wall Shower Arm" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>SP04 Wall Shower Arm</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-head_shape="Circle">
                            <div class="card-image">
                                <img src="images/design/opals/HS05-BN.jpg" alt="HS05 Hand Shower" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>HS05 Hand Shower</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-head_shape="Circle"
                            data-size="250mm">
                            <div class="card-image">
                                <img src="images/design/opals/SA04-BN.jpg" alt="SA04 Ceiling Shower Arm" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>SA04 Ceiling Shower Arm</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-size="300mm">
                            <div class="card-image">
                                <img src="images/design/opals/SP07-BN.jpg" alt="SP07 Bath Spout" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>SP07 Bath Spout</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Fixed">
                            <div class="card-image">
                                <img src="images/design/opals/82H72-BN.jpg" alt="82H72 Kitchen Mixer Tap"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H72 Kitchen Mixer Tap</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Fixed">
                            <div class="card-image">
                                <img src="images/design/opals/82H37-BN_82H51.jpg" alt="82H37-D Kitchen Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H37-D Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-handle_type="Pin Handle">
                            <div class="card-image">
                                <img src="images/design/opals/81H78.jpg" alt="81H78 Basin Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H78 Basin Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-handle_type="Pin Handle">
                            <div class="card-image">
                                <img src="images/design/opals/81H10A.jpg" alt="81H10A Tall Basin Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H10A Tall Basin Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-handle_type="Pin Handle">
                            <div class="card-image">
                                <img src="images/design/opals/81H10AS.jpg" alt="81H10AS Basin Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H10AS Basin Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-colour="Gold"
                            data-handle_type="Lever Handle">
                            <div class="card-image">
                                <img src="images/design/opals/BF2072BG_1.jpg" alt="86H88 Freestanding Bath Mixer Gold"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>86H88 Freestanding Bath Mixer Gold</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>

                    </div>
                </div>

                <div class="shop__group" id="celina">
                    <h2>Celina</h2>
                    <div class="shop__grid" data-total="19">
                        <div class="product-card" data-availability="in-stock" data-head_shape="Circle"
                            data-handle_type="Pin Handle">
                            <div class="card-image">
                                <img src="images/design/celina/V01-BN.jpg" alt="V01 Shower Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>V01 Shower Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-handle_type="Pin Handle">
                            <div class="card-image">
                                <img src="images/design/celina/81H57T-BN.jpg" alt="81H57T Tall Basin Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H57T Tall Basin Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-head_shape="Square">
                            <div class="card-image">
                                <img src="images/design/celina/86H54-BN-250.jpg" alt="86H54 Shower Set" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>86H54 Shower Set</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-head_shape="Square">
                            <div class="card-image">
                                <img src="images/design/celina/86H61-BN-250.jpg" alt="86H61 Shower Set" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>86H61 Shower Set</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-head_shape="Square">
                            <div class="card-image">
                                <img src="images/design/celina/86H50-BN-250.jpg" alt="86H50 Shower Set" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>86H50 Shower Set</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-size="250mm">
                            <div class="card-image">
                                <img src="images/design/celina/SP05-BN.jpg" alt="SP05 Bath Spout" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>SP05 Bath Spout</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-head_shape="Circle"
                            data-size="250mm">
                            <div class="card-image">
                                <img src="images/design/celina/SA03-BN.jpg" alt="SA03 Ceiling Shower Arm"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>SA03 Ceiling Shower Arm</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-handle_type="Pin Handle">
                            <div class="card-image">
                                <img src="images/design/celina/81H55T-BN.jpg" alt="81H55T Tall Basin Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H55T Tall Basin Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-handle_type="Pin Handle">
                            <div class="card-image">
                                <img src="images/design/celina/81H53-BN-_135.jpg" alt="81H53 Basin Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H53 Basin Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-head_shape="Circle">
                            <div class="card-image">
                                <img src="images/design/celina/HS04-BN.jpg" alt="HS04 Hand Shower" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>HS04 Hand Shower</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-head_shape="Square"
                            data-size="300mm">
                            <div class="card-image">
                                <img src="images/design/celina/SA01-BN.jpg" alt="SA01 Shower Arm" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>SA01 Shower Arm</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-head_shape="Circle"
                            data-size="250mm">
                            <div class="card-image">
                                <img src="images/design/celina/SA07-BN.jpg" alt="SA07 Shower Arm" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>SA07 Shower Arm</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-head_shape="Square"
                            data-handle_type="Lever Handle">
                            <div class="card-image">
                                <img src="images/design/celina/86H06-BN.jpg" alt="86H06 Shower Mixer Tap"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>86H06 Shower Mixer Tap</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-handle_type="Lever Handle">
                            <div class="card-image">
                                <img src="images/design/celina/81H53T-BN-_135.jpg" alt="81H53T Tall Basin Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H53T Tall Basin Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-colour="Black"
                            data-handle_type="Pin Handle">
                            <div class="card-image">
                                <img src="images/design/celina/86H89-Freestanding.jpg"
                                    alt="86H89 Freestanding Bath Mixer Black" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>86H89 Freestanding Bath Mixer Black</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>

                    </div>
                </div>

                <div class="shop__group" id="biancas">
                    <h2>Biancas</h2>
                    <div class="shop__grid" data-total="33">
                        <div class="product-card" data-availability="in-stock" data-spout_type="Pull-Out">
                            <div class="card-image">
                                <img src="images/design/biancas/82H60-BN.jpg" alt="82H60 Pull-Out Kitchen Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H60 Pull-Out Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Pull-Out">
                            <div class="card-image">
                                <img src="images/design/biancas/82H55-BN.jpg" alt="82H55 Pull-Out Kitchen Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H55 Pull-Out Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Fixed">
                            <div class="card-image">
                                <img src="images/design/biancas/82H37-BN.jpg" alt="82H37 Kitchen Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H37 Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Fixed">
                            <div class="card-image">
                                <img src="images/design/biancas/82H33%20Kitchen%20Mixer.jpg" alt="82H33 Kitchen Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H33 Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Fixed">
                            <div class="card-image">
                                <img src="images/design/biancas/82H09G%20Kitchen%20Mixer.jpg" alt="82H09G Kitchen Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H09G Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Fixed">
                            <div class="card-image">
                                <img src="images/design/biancas/82H66-BN.jpg" alt="82H66 Kitchen Mixer Tap"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H66 Kitchen Mixer Tap</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock"
                            data-spout_type="Pull-Down (Flexible Hose)">
                            <div class="card-image">
                                <img src="images/design/biancas/82H52-BN.jpg" alt="82H52 Pull-Out Kitchen Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H52 Pull-Out Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Pull-Out">
                            <div class="card-image">
                                <img src="images/design/biancas/82H55-BN_82H51.jpg" alt="82H55-D Pull-Out Kitchen Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H55-D Pull-Out Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-head_shape="Square"
                            data-handle_type="Lever Handle">
                            <div class="card-image">
                                <img src="images/design/biancas/86H83-BN.jpg" alt="86H83 Wall Shower Mixer Tap"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>86H83 Wall Shower Mixer Tap</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-handle_type="Pin Handle">
                            <div class="card-image">
                                <img src="images/design/biancas/81H79-BN_81H09.jpg" alt="81H79 Basin Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H79 Basin Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-handle_type="Pin Handle">
                            <div class="card-image">
                                <img src="images/design/biancas/81H79T%20Tall%20Basin%20Mixer.jpg"
                                    alt="81H79T Tall Basin Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H79T Tall Basin Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Pull-Out">
                            <div class="card-image">
                                <img src="images/design/biancas/82H60-BN_82H51.jpg" alt="82H60-D Pull-Out Kitchen Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H60-D Pull-Out Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Fixed">
                            <div class="card-image">
                                <img src="images/design/biancas/82H33-CHR_81H09.jpg" alt="82H33-D Kitchen Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H33-D Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>

                        <div class="product-card" data-availability="in-stock" data-head_shape="Square">
                            <div class="card-image">
                                <img src="images/design/biancas/86H92-BN-250.jpg" alt="86H92 Shower Set" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>86H92 Shower Set</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-head_shape="Circle">
                            <div class="card-image">
                                <img src="images/design/biancas/86H94-BN.jpg" alt="86H94 Shower Set" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>86H94 Shower Set</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Fixed">
                            <div class="card-image">
                                <img src="images/design/biancas/82H37-BN_82H51.jpg" alt="82H37-D Kitchen Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H37-D Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Pull-Out">
                            <div class="card-image">
                                <img src="images/design/biancas/82H66-BN-_82H51.jpg"
                                    alt="82H66-D Pull-Out Kitchen Mixer" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H66-D Pull-Out Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Fixed">
                            <div class="card-image">
                                <img src="images/design/biancas/82H68%20Kitchen%20Mixer%20Tap.jpg"
                                    alt="82H68 Kitchen Mixer Tap" loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H68 Kitchen Mixer Tap</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                    </div>
                </div>

                <div class="shop__group" id="xplus">
                    <h2>Xplus</h2>
                    <div class="shop__grid" data-total="14">
                        <div class="product-card" data-availability="in-stock" data-handle_type="Lever Handle">
                            <div class="card-image">
                                <img src="images/design/xplus/81H80T-SB.jpg" alt="81H80T Tall Basin Mixers"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H80T Tall Basin Mixers</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-spout_type="Fixed">
                            <div class="card-image">
                                <img src="images/design/xplus/82H66-BN.jpg" alt="82H66 Kitchen Mixer Tap"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H66 Kitchen Mixer Tap</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>



                        <div class="product-card" data-availability="in-stock" data-spout_type="Pull-Out">
                            <div class="card-image">
                                <img src="images/design/xplus/82H66-BN-_82H51.jpg" alt="82H66-D Pull-Out Kitchen Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>82H66-D Pull-Out Kitchen Mixer</h3>
                            <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                        </div>
                        <div class="product-card" data-availability="in-stock" data-handle_type="Lever Handle">
                            <div class="card-image">
                                <img src="images/design/xplus/81H80-Basin-Mixer.jpg" alt="81H80 Basin Mixer"
                                    loading="lazy">
                            </div>
                            <h4>Hifi Homes</h4>
                            <h3>81H80 Basin Mixer</h3>
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