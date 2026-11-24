<?php
$page_title   = 'Door Accessories | Hifi Homes';
$current_page = 'category';
$page_path    = 'category-door-accessories.php';
require_once 'includes/head.php';
require_once 'includes/header.php';

$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.html'],
    ['label' => 'Door Accessories'],
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
                            <span class="shop__filter-count">(30)</span>
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
                        Function
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="function" value="Entrance">
                            <span>Entrance</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="function" value="Passage">
                            <span>Passage</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="function" value="Privacy">
                            <span>Privacy</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="function" value="Dummy">
                            <span>Dummy</span>
                            <span class="shop__filter-count">(3)</span>
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
                            <span class="shop__filter-count">(6)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Black">
                            <span>Black</span>
                            <span class="shop__filter-count">(6)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Gun Metal">
                            <span>Gun Metal</span>
                            <span class="shop__filter-count">(6)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="finish" value="Stainless Steel">
                            <span>Stainless Steel</span>
                            <span class="shop__filter-count">(6)</span>
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
                            <input type="checkbox" name="type" value="Interior Door Hinge">
                            <span>Interior Door Hinge</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Heavy Duty Exterior Door Hinge">
                            <span>Heavy Duty Exterior Door Hinge</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Oval Flush Pull Handle">
                            <span>Oval Flush Pull Handle</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Square Sliding Door Privacy Lock">
                            <span>Square Sliding Door Privacy Lock</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Rectangular Pull Handle">
                            <span>Rectangular Pull Handle</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Rectangular Flush Pull Handle">
                            <span>Rectangular Flush Pull Handle</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Round Sliding Door Privacy Lock">
                            <span>Round Sliding Door Privacy Lock</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Long Round Door Pull Handle">
                            <span>Long Round Door Pull Handle</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Round Door Pull Handle">
                            <span>Round Door Pull Handle</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="type" value="Square Door Pull Handle">
                            <span>Square Door Pull Handle</span>
                            <span class="shop__filter-count">(4)</span>
                        </label>
                    </div>
                </div>
            </aside>

            <div class="shop__main">
                <h1 class="shop__title">Door Accessories</h1>

                <div class="shop__toolbar">
                    <span class="shop__count" id="shop-count">Showing 1&ndash;30 of 30 products</span>

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


                <div class="shop__group" id="door-handle-lock">
                    <h2>Door Handle Lock</h2>
                    <div class="shop__grid" data-total="11">
                    <div class="product-card" data-availability="in-stock"
                        data-function="Entrance">
                        <div class="card-image">
                            <img src="images/door/2026-01-1411.05.40.jpg" alt="Square Entrance Door Handle (BDL1002-ET)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Square Entrance Door Handle (BDL1002-ET)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-function="Passage">
                        <div class="card-image">
                            <img src="images/door/2026-01-1411.08.25.jpg" alt="Square Passage Door Handle (BDL1002-PS)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Square Passage Door Handle (BDL1002-PS)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-function="Privacy">
                        <div class="card-image">
                            <img src="images/door/2026-01-1411.32.08.jpg" alt="Round Privacy Door Handle (CB1040-BK)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Round Privacy Door Handle (CB1040-BK)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-function="Entrance">
                        <div class="card-image">
                            <img src="images/door/2026-01-1411.25.51.jpg" alt="Round Entrance Door Handle (CB1040-ET)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Round Entrance Door Handle (CB1040-ET)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-function="Privacy">
                        <div class="card-image">
                            <img src="images/door/2026-01-1411.01.20.jpg" alt="Square Privacy Door Handle (BDL1002-BK)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Square Privacy Door Handle (BDL1002-BK)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-function="Entrance">
                        <div class="card-image">
                            <img src="images/door/2026-01-1411.44.51.jpg" alt="Textured Entrance Door Handle (BDL1138-ET)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Textured Entrance Door Handle (BDL1138-ET)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-function="Passage">
                        <div class="card-image">
                            <img src="images/door/2026-01-1411.41.42.jpg" alt="Round Passage Door Handle (CB1040-PS)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Round Passage Door Handle (CB1040-PS)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-function="Dummy">
                        <div class="card-image">
                            <img src="images/door/2026-01-1412.49.37.jpg" alt="Round Dummy Door Handle (CB1040-DUM)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Round Dummy Door Handle (CB1040-DUM)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-function="Dummy">
                        <div class="card-image">
                            <img src="images/door/2026-01-1412.47.37.jpg" alt="Textured Dummy Door Handle (BDL1140)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Textured Dummy Door Handle (BDL1140)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-function="Privacy">
                        <div class="card-image">
                            <img src="images/door/2026-01-1412.45.28.jpg" alt="Textured Privacy Door Handle (BDL1139)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Textured Privacy Door Handle (BDL1139)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock">
                        <div class="card-image">
                            <img src="images/door/2026-01-2814.37.57.jpg" alt="Round Lock with Key (BDL1051) + Round Door Pull Handle (DP1020)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Round Lock with Key (BDL1051) + Round Door Pull Handle (DP1020)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    </div>
                </div>

                <div class="shop__group" id="doorstops">
                    <h2>Doorstops</h2>
                    <div class="shop__grid" data-total="5">
                    <div class="product-card" data-availability="in-stock"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/door/Square-Matte-Black-Door-Stop-by-Meir-Austraia-2_900x_53b1dbc4-0f31-4676-b461-2b5847790c07.jpg" alt="Square Door Stopper Black (DS1109)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Square Door Stopper Black (DS1109)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-finish="Gold">
                        <div class="card-image">
                            <img src="images/door/Gemini_Generated_Image_f24eegf24eegf24e_fa2bbe91-844f-4a01-802b-45bad0318534.jpg" alt="Door Stopper Gold (DS1008)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Door Stopper Gold (DS1008)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-finish="Gun Metal">
                        <div class="card-image">
                            <img src="images/door/26C56DA4-A25B-4FA5-8299-B8A277632ABE.jpg" alt="Square Door Stopper Gun Metal (DS1109)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Square Door Stopper Gun Metal (DS1109)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-finish="Stainless Steel">
                        <div class="card-image">
                            <img src="images/door/Gemini_Generated_Image_k4e150k4e150k4e1.jpg" alt="Square Door Stopper Stainless Steel (DS1109)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Square Door Stopper Stainless Steel (DS1109)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-finish="Gun Metal">
                        <div class="card-image">
                            <img src="images/door/Gemini_Generated_Image_rd77nnrd77nnrd77.jpg" alt="Cylindrical Door Stopper Gun Metal (DS1008)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Cylindrical Door Stopper Gun Metal (DS1008)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    </div>
                </div>

                <div class="shop__group" id="door-hinge">
                    <h2>Door Hinge</h2>
                    <div class="shop__grid" data-total="3">
                    <div class="product-card" data-availability="in-stock"
                        data-type="Interior Door Hinge">
                        <div class="card-image">
                            <img src="images/door/2026-01-1414.18.19.jpg" alt="Interior Door Hinge (DH1005-100MB)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Interior Door Hinge (DH1005-100MB)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Heavy Duty Exterior Door Hinge">
                        <div class="card-image">
                            <img src="images/door/2026-01-1414.08.25.jpg" alt="Heavy Duty Exterior Door Hinge (DH1001-100-3MB)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Heavy Duty Exterior Door Hinge (DH1001-100-3MB)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Interior Door Hinge">
                        <div class="card-image">
                            <img src="images/door/2026-01-1414.19.05.jpg" alt="Interior Door Hinge (DH1005-100SS)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Interior Door Hinge (DH1005-100SS)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    </div>
                </div>

                <div class="shop__group" id="door-pull-handle">
                    <h2>Door Pull Handle</h2>
                    <div class="shop__grid" data-total="2">
                    <div class="product-card" data-availability="in-stock"
                        data-type="Long Round Door Pull Handle">
                        <div class="card-image">
                            <img src="images/door/2026-01-1415.06.08.jpg" alt="Long Round Door Pull Handle (DP1020-SSS)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Long Round Door Pull Handle (DP1020-SSS)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Square Door Pull Handle">
                        <div class="card-image">
                            <img src="images/door/2026-01-1414.51.00.jpg" alt="Square Door Pull Handle (DL102-SSS)" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Square Door Pull Handle (DL102-SSS)</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    </div>
                </div>

                <div class="shop__group" id="sliding-door-lock-handle">
                    <h2>Sliding Door Lock + Handle</h2>
                    <div class="shop__grid" data-total="9">
                    <div class="product-card" data-availability="in-stock"
                        data-type="Oval Flush Pull Handle"
                        data-finish="Gun Metal">
                        <div class="card-image">
                            <img src="images/door/2026-01-1415.37.19.jpg" alt="Oval Flush Pull Handle (FH131-12040) Gun Metal" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Oval Flush Pull Handle (FH131-12040) Gun Metal</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Square Sliding Door Privacy Lock"
                        data-finish="Stainless Steel">
                        <div class="card-image">
                            <img src="images/door/SL-S-SN.jpg" alt="Square Sliding Door Privacy Lock (SL-S) Stainless Steel" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Square Sliding Door Privacy Lock (SL-S) Stainless Steel</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Rectangular Pull Handle"
                        data-finish="Gold">
                        <div class="card-image">
                            <img src="images/door/2026-01-1415.16.11.jpg" alt="Rectangular Pull Handle (FH130-12040) Gold" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Rectangular Pull Handle (FH130-12040) Gold</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Rectangular Pull Handle"
                        data-finish="Gun Metal">
                        <div class="card-image">
                            <img src="images/door/2026-01-1415.26.38.jpg" alt="Rectangular Pull Handle (FH130-12040) Gun Metal" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Rectangular Pull Handle (FH130-12040) Gun Metal</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Oval Flush Pull Handle"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/door/2026-01-1415.38.27.jpg" alt="Oval Flush Pull Handle (FH131-12040) Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Oval Flush Pull Handle (FH131-12040) Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Oval Flush Pull Handle"
                        data-finish="Stainless Steel">
                        <div class="card-image">
                            <img src="images/door/2026-01-1415.39.18.jpg" alt="Oval Flush Pull Handle (FH131-12040) Stainless Steel" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Oval Flush Pull Handle (FH131-12040) Stainless Steel</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Square Sliding Door Privacy Lock"
                        data-finish="Black">
                        <div class="card-image">
                            <img src="images/door/SL-S-MB.jpg" alt="Square Sliding Door Privacy Lock (SL-S) Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Square Sliding Door Privacy Lock (SL-S) Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Square Sliding Door Privacy Lock"
                        data-finish="Gun Metal">
                        <div class="card-image">
                            <img src="images/door/SL-S-GM_5dec9ea4-435d-47e5-bcac-8a26467bfe48.jpg" alt="Square Sliding Door Privacy Lock (SL-S) Gun Metal" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Square Sliding Door Privacy Lock (SL-S) Gun Metal</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-type="Square Sliding Door Privacy Lock"
                        data-finish="Gold">
                        <div class="card-image">
                            <img src="images/door/SL-S-SG.jpg" alt="Square Sliding Door Privacy Lock (SL-S) Gold" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Square Sliding Door Privacy Lock (SL-S) Gold</h3>
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
