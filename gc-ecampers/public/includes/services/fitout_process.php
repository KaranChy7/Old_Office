<?php
// GC-E CAMPERS — FITOUT PROCESS
$steps = [
  ['num' => '01', 'title' => 'Consultation', 'text' => 'Discuss your vision, vehicle, and budget with our team at the Arundel workshop.'],
  ['num' => '02', 'title' => 'Design',        'text' => 'We create a tailored 3D concept of your dream build before a single screw is turned.'],
  ['num' => '03', 'title' => 'Build',          'text' => 'Our skilled tradespeople bring the design to life using only premium materials.'],
  ['num' => '04', 'title' => 'Delivery',       'text' => 'We hand over your finished camper fully briefed, tested, and ready for the road.'],
];
?>

<section class="section section--dark" id="process">
  <div class="container">
    <div class="section-head">
      <div class="section-eyebrow section-eyebrow--center">The Build Process</div>
      <h2 class="section-title">How We <span class="text-gold">Build</span></h2>
    </div>
    <div class="how-section__steps stagger">
      <?php foreach ($steps as $step) : ?>
      <div class="step-item" data-animate>
        <div class="step-item__num"><?php echo $step['num']; ?></div>
        <div class="step-item__title"><?php echo $step['title']; ?></div>
        <p class="step-item__text"><?php echo $step['text']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
