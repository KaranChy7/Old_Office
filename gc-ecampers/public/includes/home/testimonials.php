<?php
// GC-E CAMPERS — TESTIMONIALS
$testimonials = [
  [
    'quote'  => 'Absolute dream machine. The ID. Buzz is a head-turner everywhere we went, and the solar setup meant we never had to worry about power.',
    'author' => 'Jamie & Sarah R.',
    'detail' => 'Noosa Road Trip',
  ],
  [
    'quote'  => 'The Mini Countryman camper is perfect for two. Compact, easy to drive, and the rooftop tent is surprisingly spacious.',
    'author' => 'Tom W.',
    'detail' => 'Byron Bay Getaway',
  ],
  [
    'quote'  => 'GC-E built our van fit-out exactly to spec. Premium timberwork, full solar, and everything hidden away cleanly. Couldn\'t be happier.',
    'author' => 'Marcus L.',
    'detail' => 'Custom Fit-Out Client',
  ],
];
?>

<section class="testimonials-section section" id="testimonials">
  <div class="container">

    <div class="section-head section-head--tight">
      <div class="section-eyebrow section-eyebrow--center">Guest Stories</div>
      <h2 class="section-title">What They <span class="text-gold">Say</span></h2>
    </div>

    <div class="testimonials-section__grid stagger">
      <?php foreach ($testimonials as $t) : ?>
      <div class="testimonial" data-animate>
        <div class="testimonial__quote"><?php echo $t['quote']; ?></div>
        <div class="testimonial__author"><?php echo $t['author']; ?></div>
        <div class="testimonial__detail"><?php echo $t['detail']; ?></div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
