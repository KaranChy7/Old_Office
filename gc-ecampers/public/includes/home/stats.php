<?php
// GC-E CAMPERS — STATS
$stats = [
  ['number' => '100%', 'label' => 'Gold Coast Built'],
  ['number' => '2',    'label' => 'Premium Vehicles'],
  ['number' => '5★',   'label' => 'Avg. Guest Rating'],
  ['number' => '∞',    'label' => 'Roads to Explore'],
];
?>

<section class="stats-section">
  <div class="container">
    <div class="stats-section__grid">
      <?php foreach ($stats as $s) : ?>
      <div class="stat-item" data-animate>
        <span class="stat-item__number"><?php echo $s['number']; ?></span>
        <span class="stat-item__label"><?php echo $s['label']; ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
