<?php
// GC-E CAMPERS — ABOUT VALUES
$values = [
  ['icon' => 'ri-leaf-line',      'title' => 'Sustainable',  'text' => 'Electric and hybrid first. We believe adventure shouldn\'t cost the planet.'],
  ['icon' => 'ri-hammer-line',    'title' => 'Handcrafted',  'text' => 'Every fit-out is built by hand in our Arundel workshop by tradespeople who care.'],
  ['icon' => 'ri-star-line',      'title' => 'Premium',      'text' => 'From the joinery to the EV charging kit, we only use quality materials.'],
  ['icon' => 'ri-map-pin-2-line', 'title' => 'Local',        'text' => 'Gold Coast born and bred. We know every road, campsite, and charging stop worth knowing.'],
];
?>

<section class="section section--dark">
  <div class="container">
    <div class="section-head">
      <div class="section-eyebrow section-eyebrow--center">What Drives Us</div>
      <h2 class="section-title">Our <span class="text-gold">Values</span></h2>
    </div>
    <div class="grid-4 stagger">
      <?php foreach ($values as $v) : ?>
      <div class="service-box service-box--center" data-animate>
        <div class="service-box__icon service-box__icon--ring">
          <i class="<?php echo $v['icon']; ?>"></i>
        </div>
        <div class="service-box__title"><?php echo $v['title']; ?></div>
        <p class="service-box__text"><?php echo $v['text']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
