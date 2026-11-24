<?php
$page_title   = 'Mirror | Hifi Homes';
$current_page = 'category';
$page_path    = 'category-mirror.php';
require_once 'includes/head.php';
require_once 'includes/header.php';

$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.html'],
    ['label' => 'Mirror'],
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
                            <span class="shop__filter-count">(50)</span>
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
                        Shape
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
<?php foreach (['Arch' => 5, 'Organic' => 2, 'Pill' => 8, 'Rectangular' => 7, 'Round' => 3] as $value => $count): ?>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="shape" value="<?php echo $value; ?>">
                            <span><?php echo $value; ?></span>
                            <span class="shop__filter-count">(<?php echo $count; ?>)</span>
                        </label>
<?php endforeach; ?>
                    </div>
                </div>
                <div class="shop__filter-group open">
                    <button type="button" class="shop__filter-toggle" aria-expanded="true">
                        Frame
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="shop__filter-panel">
<?php foreach (['Frameless' => 10, 'Matt Black Framed' => 5, 'Brushed Gold Framed' => 4] as $value => $count): ?>
                        <label class="shop__filter-checkbox">
                            <input type="checkbox" name="frame" value="<?php echo $value; ?>">
                            <span><?php echo $value; ?></span>
                            <span class="shop__filter-count">(<?php echo $count; ?>)</span>
                        </label>
<?php endforeach; ?>
                    </div>
                </div>
</aside>

            <div class="shop__main">
                <h1 class="shop__title">Mirror</h1>

                <div class="shop__toolbar">
                    <span class="shop__count" id="shop-count">Showing 1&ndash;25 of 25 products</span>

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

<?php
// One card per uploaded photo in images/mirror/ — [image file, name, shape, frame]
$mirror_groups = [
    'led-mirrors' => [
        'title'    => 'LED Mirrors',
        'products' => [
            ['02321201-2156-4E8D-A3A4-F1B4B395EFB2 (1).jpg', 'Frameless Rectangular LED Mirror – Frosted Edge', 'Rectangular', 'Frameless'],
            ['E8C1DC67-9832-4875-8425-B97EC354F793 (1).jpg', 'Frameless Rectangular LED Mirror – Lit Border', 'Rectangular', 'Frameless'],
            ['48417-_A-1024x744 (1).jpg', 'Brushed Gold Framed Rectangular LED Backlit Mirror', 'Rectangular', 'Brushed Gold Framed'],
            ['48481-_A-1024x744 (1).jpg', 'Brushed Gold Framed Rectangular LED Mirror with Magnifier', 'Rectangular', 'Brushed Gold Framed'],
            ['MED-MRSH-6090MB (1) (1).jpg', 'MED-MRSH-6090MB Matt Black Framed LED Mirror', 'Rectangular', 'Matt Black Framed'],
            ['4D4B7672-C24E-41AD-B8A9-B9E5E9D74205 (1).jpg', 'Brushed Gold Framed Arch LED Mirror', 'Arch', 'Brushed Gold Framed'],
            ['A134155B-859C-42D0-BAC0-D8F1413C7A51 (1).jpg', 'Matt Black Framed Arch LED Backlit Mirror', 'Arch', 'Matt Black Framed'],
            ['CFCF81B0-8D65-4A4E-BA96-0186D90AD3BE (1).jpg', 'Matt Black Framed Arch LED Front &amp; Backlit Mirror', 'Arch', 'Matt Black Framed'],
            ['LED-MASH-6161MB_5998da0d-6ab8-4fd2-b99c-8e3de3b29e74 (1).jpg', 'LED-MASH-6161MB Matt Black Framed Arch LED Mirror', 'Arch', 'Matt Black Framed'],
            ['052E4DBD-1D11-46A4-9D91-79EED0152D6E (1).jpg', 'Brushed Gold Framed Pill LED Backlit Mirror', 'Pill', 'Brushed Gold Framed'],
            ['FDBA80C0-0083-4B10-8DDD-75F6CD9408C3 (1).jpg', 'Matt Black Framed Pill LED Backlit Mirror', 'Pill', 'Matt Black Framed'],
            ['7C10AA69-1FB5-4C92-B070-D30BC4DD37BA (1).jpg', 'Frameless Pill LED Backlit Mirror', 'Pill', 'Frameless'],
            ['F4593341-49CB-4A28-A038-6E68FD4C7A5A (1).jpg', 'Frameless Pill LED Mirror – Frosted Edge', 'Pill', 'Frameless'],
            ['1fcbec5720d3c7258acb561eaecb1eb (1).jpg', 'Frameless Pill LED Mirror – Lit Edge', 'Pill', 'Frameless'],
            ['603260A7-D58C-4C2C-8295-AF880CE9C368 (1).jpg', 'Frameless Landscape Pill LED Backlit Mirror', 'Pill', 'Frameless'],
            ['48264-_A-1024x744 (1).jpg', 'Frameless Organic LED Backlit Mirror – Landscape', 'Organic', 'Frameless'],
            ['48279-_A-1024x744 (1).jpg', 'Frameless Organic LED Backlit Mirror – Portrait', 'Organic', 'Frameless'],
            ['985F057C-AC86-48CA-AD67-8F8D87584D14 (1).jpg', 'Frameless Round LED Backlit Mirror', 'Round', 'Frameless'],
            ['WeChat-Photo-Editor_20240715103723 (1).jpg', 'Frameless Round LED Mirror – Lit Edge', 'Round', 'Frameless'],
        ],
    ],
    'led-mirror-cabinets' => [
        'title'    => 'LED Mirror Cabinets',
        'products' => [
            ['WeChat-Image_20240708131218-1024x922 (1).jpg', 'Rectangular LED Mirror Shaving Cabinet', 'Rectangular', ''],
            ['WeChat-Image_20240708155336 (1).jpg', 'Double Door Rectangular LED Mirror Shaving Cabinet', 'Rectangular', ''],
            ['WeChat-Image_20240708155114-1024x932 (1).jpg', 'Pill LED Mirror Shaving Cabinet', 'Pill', ''],
            ['WeChat-Image_20240708163823-1024x924 (1).jpg', 'Double Door Pill LED Mirror Shaving Cabinet', 'Pill', ''],
            ['IMG_0197-_-1399x1536 (1) (1).jpg', 'Arch LED Mirror Shaving Cabinet', 'Arch', ''],
            ['IMG_0193-1024x983 (1) (1).jpg', 'Round LED Mirror Shaving Cabinet', 'Round', ''],
        ],
    ],
];
?>
<?php foreach ($mirror_groups as $slug => $group): ?>
                <div class="shop__group" id="<?php echo $slug; ?>">
                    <h2><?php echo $group['title']; ?></h2>
                    <div class="shop__grid" data-total="<?php echo count($group['products']); ?>">
<?php foreach ($group['products'] as [$image, $name, $shape, $frame]): ?>
                    <div class="product-card" data-availability="in-stock"
                        data-shape="<?php echo $shape; ?>"<?php if ($frame): ?> data-frame="<?php echo $frame; ?>"<?php endif; ?>>
                        <div class="card-image">
                            <img src="images/mirror/<?php echo rawurlencode($image); ?>" alt="<?php echo $name; ?>" loading="lazy">
                        </div>
                        <h4>Hifi Homes</h4>
                        <h3><?php echo $name; ?></h3>
                        <a href="contact.html" class="product-card__quote-btn">Get A Quote</a>
                    </div>
<?php endforeach; ?>
                    </div>
                </div>
<?php endforeach; ?>
            </div>

        </div>
    </div>
</section>

<?php require_once 'includes/home/cta.php'; ?>
<?php require_once 'includes/footer.php'; ?>
<?php require_once 'includes/scripts.php'; ?>
