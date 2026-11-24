<?php
// GC-E CAMPERS — WHAT'S INCLUDED IN HIRE
$included = [
  ['icon' => 'ri-map-2-line',       'title' => 'Route Guide',      'text' => 'Custom camping & charging map for your chosen route.'],
  ['icon' => 'ri-shield-check-line','title' => 'Full Insurance',    'text' => 'Comprehensive roadside and collision coverage included.'],
  ['icon' => 'ri-customer-service-2-line', 'title' => '24/7 Support', 'text' => 'We\'re always reachable throughout your trip.'],
  ['icon' => 'ri-plug-line',        'title' => 'Charging Kit',      'text' => 'Type 2 and CCS charging cables, PlugShare access.'],
];
?>

<section class="section section--dark">
  <div class="container">
    <div class="section-head">
      <div class="section-eyebrow section-eyebrow--center">All Hires Include</div>
      <h2 class="section-title">What's <span class="text-gold">Included</span></h2>
    </div>
    <div class="grid-4 stagger">
      <?php foreach ($included as $item) : ?>
      <div class="service-box service-box--center" data-animate>
        <div class="service-box__icon"><i class="<?php echo $item['icon']; ?>"></i></div>
        <div class="service-box__title"><?php echo $item['title']; ?></div>
        <p class="service-box__text"><?php echo $item['text']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
