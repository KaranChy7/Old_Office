<?php
$page_title      = "Our Gallery — AP Heating & Cooling Systems";
$current_page    = 'gallery';
$hero_title      = 'Our <span>Work</span>';
$hero_subtitle   = 'Eight-plus years of heating and cooling installations, servicing and repairs. Every job done with the same thoroughness, honest quoting, and attention to detail.';
$hero_breadcrumb = 'Gallery';
require_once 'includes/header.php';
require_once 'includes/config.php';
?>

<?php include 'includes/page-hero.php'; ?>

<div class="gallery-filters">
    <div class="container">
        <div class="filter-tabs">
            <button class="filter-btn active" data-filter="all">All Work</button>
            <button class="filter-btn" data-filter="installation">Supply &amp; Installation</button>
            <button class="filter-btn" data-filter="servicing">Servicing &amp; Repairs</button>
            <button class="filter-btn" data-filter="cooling">Cooling</button>
            <button class="filter-btn" data-filter="heating">Heating</button>
            <button class="filter-btn" data-filter="residential">Residential</button>
            <button class="filter-btn" data-filter="commercial">Commercial &amp; Industrial</button>
        </div>
    </div>
</div>

<section class="gallery-section">
    <div class="container">
        <div class="gallery-masonry" id="galleryGrid">
            <?php
      $photos = [
        ['images/service1.jpg','Supply & Installation','Split System Installation','installation'],
        ['images/banner2.jpg','Commercial & Industrial','Industrial Rooftop Ductwork','commercial'],
        ['images/carpentry-tools-workbench.jpg','Servicing & Repairs','Pressure Gauge Diagnostics','servicing'],
        ['images/hvac-air-handler-ceiling.jpg','Servicing & Repairs','System Pressure Check','servicing'],
        ['images/joinery-handplane.jpg','Cooling','Ducted Reverse Cycle Installation','cooling'],
        ['images/ventilation-duct-monochrome.jpg','Servicing & Repairs','Maintenance & Filter Check','servicing'],
        ['images/technician-tool-belt-ladder.jpg','Servicing & Repairs','Refrigeration Gauge Set','servicing'],
        ['images/gauge-closeup-diagnostic.jpg','Servicing & Repairs','Diagnostic Tools','servicing'],
        ['images/service3.jpg','Cooling','Outdoor Split System Unit','cooling'],
        ['images/deck-furnished-backyard.jpg','Residential','Backyard Outdoor Unit','residential'],
        ['images/service4.jpg','Commercial & Industrial','Rooftop Ductwork Installation','commercial'],
        ['images/indoor-split-unit-wall-mounted.jpg','Residential','Ducted System Wall Fitting','residential'],
        ['images/roof-beams-ceiling-cavity.jpg','Heating','Ducted Heating Installation','heating'],
        ['images/outdoor-condenser-units-exterior.jpg','Residential','Residential Outdoor Unit','residential'],
        ['images/flexible-ducting-ceiling.jpg','Heating','Ducted Vent Fitting','heating'],
        ['images/building-under-construction.jpg','Commercial & Industrial','Commercial Rooftop Servicing','commercial'],
        ['images/industrial-hvac-units-rooftop.jpg','Commercial & Industrial','Industrial Ductwork & Structure','commercial'],
        ['images/commercial-ac-units-wall.jpg','Commercial & Industrial','Industrial Site Overview','commercial'],
        ['images/attic-ceiling-cavity-work.jpg','Supply & Installation','Ceiling Cavity Install','installation'],
        ['images/hvac-crew-rooftop-ductwork.jpg','Commercial & Industrial','Rooftop Servicing Crew at Work','commercial'],
      ];
      foreach ($photos as $i => [$img, $cat, $title, $filter]):
      ?>
            <div class="g-cell" data-category="<?= $filter; ?>" data-title="<?= $title; ?>" data-cat="<?= $cat; ?>">
                <img src="<?= $img; ?>" alt="<?= $title; ?>" loading="lazy" />
                <div class="g-cell-overlay"></div>
                <div class="g-cell-info">
                    <span><?= $cat; ?></span>
                    <h4><?= $title; ?></h4>
                </div>
                <div class="g-cell-zoom">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8" />
                        <line x1="21" y1="21" x2="16.65" y2="16.65" />
                    </svg>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox">
    <button class="lb-close" id="lbClose"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18" />
            <line x1="6" y1="6" x2="18" y2="18" />
        </svg></button>
    <button class="lb-prev" id="lbPrev"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <polyline points="15 18 9 12 15 6" />
        </svg></button>
    <button class="lb-next" id="lbNext"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <polyline points="9 18 15 12 9 6" />
        </svg></button>
    <div class="lb-img-wrap">
        <img id="lbImg" src="" alt="" />
        <div class="lb-caption"><span id="lbCat"></span><strong id="lbTitle"></strong></div>
    </div>
</div>

<!-- GALLERY STATS -->
<div class="gallery-stats">
    <div class="container">
        <div class="gs-inner">
            <div class="gs-item"><strong>8+</strong><span>Years Experience</span></div>
            <div class="gs-item"><strong>100km</strong><span>Service Radius</span></div>
            <div class="gs-item"><strong>24/7</strong><span>Phone Support</span></div>
            <div class="gs-item"><strong>100%</strong><span>Quality Guaranteed</span></div>
        </div>
    </div>
</div>

<?php include 'includes/callus.php'; ?>
<?php include 'includes/footer.php'; ?>
