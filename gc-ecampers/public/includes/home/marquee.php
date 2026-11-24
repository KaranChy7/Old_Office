<?php // GC-E CAMPERS — MARQUEE STRIP ?>

<div class="marquee-strip" aria-hidden="true">
  <div class="marquee-strip__track">
    <?php
    $items = [
      'Electric &amp; Hybrid Hire',
      'Custom Fit-Outs',
      'Gold Coast Based',
      'Solar &amp; Electrical',
      'Pop-Top Roofs',
      'Coastal Escapes',
      'South East QLD',
      'Northern NSW',
      'Arundel Workshop',
      'Electric &amp; Hybrid Hire',
      'Custom Fit-Outs',
      'Gold Coast Based',
      'Solar &amp; Electrical',
      'Pop-Top Roofs',
      'Coastal Escapes',
      'South East QLD',
      'Northern NSW',
      'Arundel Workshop',
    ];
    foreach ($items as $item) :
    ?>
      <span class="marquee-strip__item"><?php echo $item; ?></span>
    <?php endforeach; ?>
  </div>
</div>
