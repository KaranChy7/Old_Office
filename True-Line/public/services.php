<?php
$page_title   = 'Services | True-Line Installs — Metal Fabricators Melbourne';
$page_desc    = 'Custom metal fabrication and installation across Melbourne, VIC — finishes, wall cladding, patina, polishing, grilles, press brake, engraving, water-jet and laser cutting, machining, wrought iron and welding.';
$current_page = 'services';
require_once 'includes/head.php';
require_once 'includes/header.php';

$banner = [
    'title'    => 'Our<br>Services',
    'tag'      => 'Metalwork',
    'overline' => 'Make Your Creation<br>Look Better With Us',
    'image'    => 18,
];
require 'includes/partials/page-banner.php';
?>

<!-- ═══════════════════════════════════════
     ALL SERVICES
══════════════════════════════════════ -->
<section class="work work--white">
    <div class="container">

        <div class="work__header" data-reveal>
            <div class="capabilities__heading">
                <h2 class="capabilities__title">What We Do</h2>
                <div class="capabilities__heading-label">
                    <span>Services</span>
                    <span class="capabilities__heading-line"></span>
                </div>
            </div>
            <p class="work__lead">From raw material to the finished, installed piece — thirteen in-house services
                from our workshop at 6/43 Yazaki Way, Carrum Downs.</p>
        </div>

        <div class="work__grid">
            <?php $n = 0; foreach ($tl_services as $slug => $service): $n++; ?>
                <a href="<?= $slug ?>.php" class="work-card" data-reveal data-delay="<?= (($n - 1) % 3) * 100 ?>">
                    <div class="work-card__media">
                        <img src="<?= tl_img($service['images'][0]) ?>" alt="<?= tl_alt($service['images'][0]) ?>" class="work-card__img" loading="lazy">
                    </div>
                    <div class="work-card__caption">
                        <span class="work-card__num"><?= sprintf('%02d', $n) ?></span>
                        <strong class="work-card__title"><?= $service['name'] ?></strong>
                        <span class="work-card__sub"><?= $service['caption'][1] ?></span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?php
require_once 'includes/home/capabilities.php';
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
