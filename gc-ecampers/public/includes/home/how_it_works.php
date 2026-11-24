<?php
// GC-E CAMPERS — HOW IT WORKS
$steps = [
  ['num' => '01', 'title' => 'Choose',   'text' => 'Browse our fleet and select the perfect electric or hybrid camper for your adventure.'],
  ['num' => '02', 'title' => 'Book',     'text' => 'Reserve your dates online or via phone. Flexible cancellation policies available.'],
  ['num' => '03', 'title' => 'Pickup',   'text' => 'Collect from our Arundel workshop, fully briefed and road-ready to go.'],
  ['num' => '04', 'title' => 'Explore',  'text' => 'Hit the coast, hinterland, or highway. Charge points mapped along every route.'],
];
?>

<section class="how-section section" id="how">
    <div class="container">

        <div class="section-head section-head--tight">
            <div class="section-eyebrow section-eyebrow--center">How GCE Works</div>
            <h2 class="section-title">From idea to <span class="text-gold">adventure.</span></h2>
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