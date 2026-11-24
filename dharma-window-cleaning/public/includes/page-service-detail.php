<?php
// Expects $service_slug to be set, and $services (from services-contain.php) already loaded.
$service = $services[$service_slug];
?>
<!-- ═══════════════════════════════════════
     SERVICE DETAIL — <?= htmlspecialchars(strtoupper($service['title'])) ?>
══════════════════════════════════════ -->
<section class="service-detail">

  <div class="service-detail__container">

    <!-- Header -->
    <div class="service-detail__header">
      <nav class="service-detail__breadcrumb" aria-label="Breadcrumb">
        <a href="index.php">Home</a>
        <span>/</span>
        <a href="services.php">Services</a>
        <span>/</span>
        <a href="services.php#<?= htmlspecialchars($service['category_anchor']) ?>"><?= htmlspecialchars($service['category']) ?></a>
        <span>/</span>
        <span aria-current="page"><?= htmlspecialchars($service['title']) ?></span>
      </nav>

      <span class="service-detail__tag"><?= htmlspecialchars($service['tag']) ?></span>
      <h1 data-reveal><?= htmlspecialchars($service['title']) ?></h1>
      <p data-reveal data-delay="100"><?= htmlspecialchars($service['tagline']) ?></p>
    </div>

    <div class="service-detail__body">

      <aside class="service-detail__sidebar" data-reveal="left">
        <h2>What's included</h2>
        <ul class="service-detail__features-list">
          <?php foreach ($service['features'] as $feature): ?>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
              </svg>
              <?= htmlspecialchars($feature) ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </aside>

      <div class="service-detail__intro" data-reveal="right" data-delay="100">
        <?php foreach ($service['intro'] as $paragraph): ?>
          <p><?= htmlspecialchars($paragraph) ?></p>
        <?php endforeach; ?>

        <img src="<?= htmlspecialchars($service['hero_image']) ?>"
          alt="<?= htmlspecialchars($service['hero_alt']) ?>" class="service-detail__intro-image">
      </div>

    </div>

    <!-- Other services -->
    <div class="service-detail__related" data-reveal>
      <h2>Other services</h2>
      <div class="service-detail__related-list">
        <?php foreach ($services as $slug => $other): if ($slug === $service_slug) continue; ?>
          <a href="<?= htmlspecialchars($slug) ?>.php" class="service-detail__related-row">
            <span class="service-detail__related-category"><?= htmlspecialchars($other['category']) ?></span>
            <span class="service-detail__related-name"><?= htmlspecialchars($other['title']) ?></span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z" />
            </svg>
          </a>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</section>
