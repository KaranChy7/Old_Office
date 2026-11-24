<?php
$page_title   = 'Vanities | Hifi Homes';
$current_page = 'category';
$page_path    = 'category-vanities.php';
require_once 'includes/head.php';
require_once 'includes/header.php';

$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.html'],
    ['label' => 'Vanities'],
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
                            <span class="shop__filter-count">(56)</span>
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
                        Mounting Type
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="mounting_type" value="Floor Standing">
                            <span>Floor Standing</span>
                            <span class="shop__filter-count">(6)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="mounting_type" value="Wall Hung">
                            <span>Wall Hung</span>
                            <span class="shop__filter-count">(12)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Configuration
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="configuration" value="Drawers Only">
                            <span>Drawers Only</span>
                            <span class="shop__filter-count">(7)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="configuration" value="Doors Only">
                            <span>Doors Only</span>
                            <span class="shop__filter-count">(5)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="configuration" value="Doors And Drawers">
                            <span>Doors And Drawers</span>
                            <span class="shop__filter-count">(8)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Material
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="material" value="Stone">
                            <span>Stone</span>
                            <span class="shop__filter-count">(8)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="material" value="Ceramic">
                            <span>Ceramic</span>
                            <span class="shop__filter-count">(3)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="material" value="Poly Marble">
                            <span>Poly Marble</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Basin
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="basin" value="With Undermount Basin">
                            <span>With Undermount Basin</span>
                            <span class="shop__filter-count">(4)</span>
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
                            <input type="checkbox" name="colour" value="Gloss White">
                            <span>Gloss White</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="colour" value="Matt Black">
                            <span>Matt Black</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="colour" value="Matt White">
                            <span>Matt White</span>
                            <span class="shop__filter-count">(1)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Lighting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="lighting" value="Standard">
                            <span>Standard</span>
                            <span class="shop__filter-count">(7)</span>
                        </label>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="lighting" value="LED">
                            <span>LED</span>
                            <span class="shop__filter-count">(17)</span>
                        </label>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Shape
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="shape" value="Rectangular">
                            <span>Rectangular</span>
                            <span class="shop__filter-count">(2)</span>
                        </label>
                    </div>
                </div>
            </aside>

            <div class="shop__main">
                <h1 class="shop__title">Vanities</h1>

                <div class="shop__toolbar">
                    <span class="shop__count" id="shop-count">Showing 1&ndash;56 of 56 products</span>

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

                <div class="shop__group" id="vanities">
                    <div class="shop__grid" data-total="21">
                    <div class="product-card" data-availability="in-stock"
                        data-mounting_type="Floor Standing"
                        data-configuration="Drawers Only">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/SK68.jpg" alt="Hudson Vanity (Floor Standing) - Drawers Only - SK68" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Hudson Vanity (Floor Standing) - Drawers Only - SK68</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-mounting_type="Wall Hung"
                        data-configuration="Drawers Only">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/CWH68.jpg" alt="Bristol Vanity (Wall Hung) - Drawers Only - CWH68" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Bristol Vanity (Wall Hung) - Drawers Only - CWH68</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-mounting_type="Wall Hung"
                        data-configuration="Doors Only">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/WH56.jpg" alt="Duplex (Wall Hung) Doors Only - WH56" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Duplex (Wall Hung) Doors Only - WH56</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-mounting_type="Floor Standing"
                        data-configuration="Doors And Drawers">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/WH56%2BSK56.jpg" alt="Duplex (Floor Standing) Doors And Drawers - WH56+SK56" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Duplex (Floor Standing) Doors And Drawers - WH56+SK56</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-mounting_type="Wall Hung">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/CWH66.jpg" alt="Plateau Vanity (Wall Hung) - CWH66" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Plateau Vanity (Wall Hung) - CWH66</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-mounting_type="Wall Hung"
                        data-configuration="Drawers Only">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/WH86.jpg" alt="Elena Vanity (Wall Hung) Drawers Only - WH86" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Elena Vanity (Wall Hung) Drawers Only - WH86</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-mounting_type="Wall Hung"
                        data-configuration="Drawers Only">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/SYWH04.jpg" alt="MINA Vanities (Wall Hung) Drawers Only - SYWH04" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>MINA Vanities (Wall Hung) Drawers Only - SYWH04</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-mounting_type="Floor Standing"
                        data-configuration="Doors Only">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/SK32-WH32-1.jpg" alt="Sierra Vanities (Floor Standing) Doors Only - SK32/WH32" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Sierra Vanities (Floor Standing) Doors Only - SK32/WH32</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-mounting_type="Floor Standing"
                        data-configuration="Doors And Drawers">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/SK76.jpg" alt="Quinn Vanity (Floor Standing) Doors And Drawers - SK76" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Quinn Vanity (Floor Standing) Doors And Drawers - SK76</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-mounting_type="Wall Hung"
                        data-configuration="Doors And Drawers">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/WH76.jpg" alt="Luna Vanities (Wall Hung) Doors And Drawers - WH76" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Luna Vanities (Wall Hung) Doors And Drawers - WH76</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-mounting_type="Wall Hung"
                        data-configuration="Doors And Drawers">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/SYWH05.jpg" alt="Royce Vanities (Wall Hung) Doors And Drawers - SYWH05" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Royce Vanities (Wall Hung) Doors And Drawers - SYWH05</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-mounting_type="Wall Hung"
                        data-configuration="Drawers Only">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/SYWH04-1200A1.jpg" alt="Mina Vanities (Wall Hung) Drawers Only - SYWH04" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Mina Vanities (Wall Hung) Drawers Only - SYWH04</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-mounting_type="Floor Standing"
                        data-configuration="Doors And Drawers">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/SK7.jpg" alt="Sammy Vanities (Floor Standing) Doors And Drawers - SK7" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Sammy Vanities (Floor Standing) Doors And Drawers - SK7</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-mounting_type="Wall Hung"
                        data-configuration="Doors And Drawers">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/WH8027.jpg" alt="Willow Vanities (Wall Hung) Doors And Drawers - WH8027" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Willow Vanities (Wall Hung) Doors And Drawers - WH8027</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-mounting_type="Floor Standing"
                        data-configuration="Drawers Only">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/core-vanities.jpg" alt="Core Vanities (Floor Standing) Drawers Only" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Core Vanities (Floor Standing) Drawers Only</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-mounting_type="Wall Hung"
                        data-configuration="Drawers Only">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/yoko-vanities.jpg" alt="Yoko Vanities (Wall Hung) Drawers Only" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Yoko Vanities (Wall Hung) Drawers Only</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-mounting_type="Wall Hung"
                        data-configuration="Doors And Drawers">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/SK32-WH32.jpg" alt="Sierra (Wall Hung Vanities) Doors And Drawers - SK32/WH32" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Sierra (Wall Hung Vanities) Doors And Drawers - SK32/WH32</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-configuration="Doors Only">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/BQ7.jpg" alt="Blair Vanities Doors Only - BQ7" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Blair Vanities Doors Only - BQ7</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-mounting_type="Wall Hung"
                        data-configuration="Doors Only">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/WH7.jpg" alt="Blair (Wall Hung) Doors Only - WH7" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Blair (Wall Hung) Doors Only - WH7</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-configuration="Doors Only">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/serin-vanities.jpg" alt="Serin Vanities - Doors Only" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Serin Vanities - Doors Only</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-configuration="Doors And Drawers">
                        <div class="card-image">
                            <img src="images/vanities/All%20vanities/corner-vanities.jpg" alt="Corner Vanities - Doors And Drawers" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Corner Vanities - Doors And Drawers</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    </div>
                </div>

                <div class="shop__group" id="vanity-top">
                    <h2>Vanity Top</h2>
                    <div class="shop__grid" data-total="12">
                    <div class="product-card" data-availability="in-stock"
                        data-material="Stone">
                        <div class="card-image">
                            <img src="images/vanities/vanity%20top/phoenix-stone.jpg" alt="Phoenix Stone" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Phoenix Stone</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-material="Stone">
                        <div class="card-image">
                            <img src="images/vanities/vanity%20top/ava-stone.jpg" alt="Ava Stone" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Ava Stone</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-material="Stone">
                        <div class="card-image">
                            <img src="images/vanities/vanity%20top/esme-stone.jpg" alt="Esme Stone" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Esme Stone</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-material="Stone">
                        <div class="card-image">
                            <img src="images/vanities/vanity%20top/sunny-stone.jpg" alt="Sunny Stone" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Sunny Stone</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-material="Stone"
                        data-basin="With Undermount Basin">
                        <div class="card-image">
                            <img src="images/vanities/vanity%20top/phoenix-undermount.jpg" alt="Phoenix Stone With Undermount Basin" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Phoenix Stone With Undermount Basin</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-material="Stone"
                        data-basin="With Undermount Basin">
                        <div class="card-image">
                            <img src="images/vanities/vanity%20top/sunny-undermount.jpg" alt="Sunny Stone With Undermount Basin" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Sunny Stone With Undermount Basin</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-material="Stone"
                        data-basin="With Undermount Basin">
                        <div class="card-image">
                            <img src="images/vanities/vanity%20top/ava-undermount.jpg" alt="Ava Stone With Undermount Basin" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Ava Stone With Undermount Basin</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-material="Ceramic"
                        data-colour="Gloss White">
                        <div class="card-image">
                            <img src="images/vanities/vanity%20top/ceramic-top.jpg" alt="Ceramic Top – Gloss White" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Ceramic Top – Gloss White</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-material="Ceramic"
                        data-colour="Matt Black">
                        <div class="card-image">
                            <img src="images/vanities/vanity%20top/ceramic-black.jpg" alt="Ceramic Top – Matt Black" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Ceramic Top – Matt Black</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-material="Ceramic"
                        data-colour="Matt White">
                        <div class="card-image">
                            <img src="images/vanities/vanity%20top/ceramic-top2.jpg" alt="Ceramic Top – Matt White" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Ceramic Top – Matt White</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-material="Poly Marble">
                        <div class="card-image">
                            <img src="images/vanities/vanity%20top/poly-marble.jpg" alt="Poly Marble" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Poly Marble</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-material="Stone"
                        data-basin="With Undermount Basin">
                        <div class="card-image">
                            <img src="images/vanities/vanity%20top/esme-undermount.jpg" alt="Esme Stone – With Undermount Basin" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Esme Stone – With Undermount Basin</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    </div>
                </div>

                <div class="shop__group" id="shaving-cabinet">
                    <h2>Shaving Cabinet</h2>
                    <div class="shop__grid" data-total="23">
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="Standard">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/burma-mirror.webp" alt="Burma Mirror - Corner Shaving Cabinet" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Burma Mirror - Corner Shaving Cabinet</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="Standard">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/cadel-mirror.webp" alt="Cadel Mirror" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Cadel Mirror</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="Standard">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/amber-mirror.webp" alt="Amber Mirror" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Amber Mirror</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="Standard">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/brighton-mirror.webp" alt="Brighton Mirror" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Brighton Mirror</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="Standard">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/eric-mirror.webp" alt="Eric Mirror" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Eric Mirror</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="Standard">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/krystal-mirror.webp" alt="Krystal Mirror" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Krystal Mirror</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="Standard">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/archive-mirror.webp" alt="Archive Mirror" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Archive Mirror</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="LED">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/amber.webp" alt="Amber LED Mirror Cabinet" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Amber LED Mirror Cabinet</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="LED">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/archive.webp" alt="Archive LED Mirror" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Archive LED Mirror</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="LED">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/brighton-led.webp" alt="Brighton LED Mirror" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Brighton LED Mirror</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="LED">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/eric-led.webp" alt="Eric LED Mirror" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Eric LED Mirror</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="LED">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/krystal-led.webp" alt="Krystal LED" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Krystal LED</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="LED">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/pearl.jpg" alt="Pearl LED" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Pearl LED</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="LED">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/lustra-led.webp" alt="Lustra LED Mirror" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Lustra LED Mirror</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="LED">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/vanta-led.webp" alt="Vanta LED Mirror" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Vanta LED Mirror</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="LED">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/lumi-led.webp" alt="Lumi LED Mirror" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Lumi LED Mirror</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="LED">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/opal-led.webp" alt="Opal LED Mirror" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Opal LED Mirror</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="LED">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/tasman-led.webp" alt="Tasman LED Mirror" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Tasman LED Mirror</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="LED">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/montego-led.webp" alt="Montego LED Mirror" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Montego LED Mirror</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="LED">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/farley-led.webp" alt="Farley LED Mirror" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Farley LED Mirror</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="LED">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/boston.webp" alt="Boston LED Mirror" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Boston LED Mirror</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="LED"
                        data-shape="Rectangular">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/frameless.webp" alt="Frameless Rectangular LED Backlit Mirror 80×55cm" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Frameless Rectangular LED Backlit Mirror 80×55cm</h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
                    <div class="product-card" data-availability="in-stock"
                        data-lighting="LED"
                        data-shape="Rectangular">
                        <div class="card-image">
                            <img src="images/vanities/Shaving%20Cabinet/frameless.webp" alt="Frameless Rectangular LED Backlit Mirror 145×70cm" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3>Frameless Rectangular LED Backlit Mirror 145×70cm</h3>
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
