<?php
require_once 'includes/services-contain.php';

$service_groups = [];
foreach ($services as $slug => $svc) {
    $cat = $svc['category'];
    if (!isset($service_groups[$cat])) {
        $service_groups[$cat] = [
            'anchor' => $svc['category_anchor'],
            'items'  => [],
        ];
    }
    $service_groups[$cat]['items'][$slug] = $svc;
}
?>
<!-- ═══════════════════════════════════════
     SERVICES
══════════════════════════════════════ -->
<section class="page-services">
  <div class="page-services__container">

    <div class="page-services__header">
      <div class="page-services__badge" data-reveal>Our Services</div>
      <h1 data-reveal data-delay="100">Expert cleaning for every property.</h1>
      <p data-reveal data-delay="200">Residential, commercial and strata properties within an <?= $radius ?>
        radius of <?= $suburb ?>, <?= $state ?>. Pick a service below or request a quote.</p>
    </div>

    <!-- Category tab nav -->
    <nav class="page-services__tabs" aria-label="Service categories" data-reveal data-delay="250">
      <?php foreach ($service_groups as $catName => $group): ?>
        <a href="#<?= htmlspecialchars($group['anchor']) ?>" class="page-services__tab"><?= htmlspecialchars($catName) ?></a>
      <?php endforeach; ?>
    </nav>

    <?php foreach ($service_groups as $catName => $group): ?>
      <div class="page-services__group" id="<?= htmlspecialchars($group['anchor']) ?>">

        <div class="page-services__group-label" data-reveal>
          <span><?= htmlspecialchars($catName) ?></span>
        </div>

        <div class="page-services__grid">
          <?php $i = 0; foreach ($group['items'] as $slug => $svc): ?>
            <a href="<?= htmlspecialchars($slug) ?>.php" class="page-services__card"
              data-reveal data-delay="<?= ($i % 4) * 50 ?>">
              <div class="page-services__card-media">
                <img src="<?= htmlspecialchars($svc['hero_image']) ?>" alt="<?= htmlspecialchars($svc['hero_alt']) ?>"
                  class="page-services__card-image">
                <span class="page-services__card-tag"><?= htmlspecialchars($svc['tag']) ?></span>
              </div>
              <div class="page-services__card-body">
                <h3><?= htmlspecialchars($svc['title']) ?></h3>
                <p><?= htmlspecialchars($svc['tagline']) ?></p>
                <span class="page-services__card-link">
                  View details
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z" />
                  </svg>
                </span>
              </div>
            </a>
          <?php $i++; endforeach; ?>
        </div>

      </div>
    <?php endforeach; ?>

  </div>
</section>
