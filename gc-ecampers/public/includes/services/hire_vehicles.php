<?php
// GC-E CAMPERS — HIRE VEHICLES DETAIL
$vehicles = [
  [
    'id' => 'buzz',
    'badge' => 'Fully Electric',
    'type' => 'VW ID. Buzz',
    'tagline' => 'The Future of Camping',
    'desc' => 'The Volkswagen ID. Buzz is the modern icon of van life — fully electric, premium in every detail, and built for serious adventure. With a pop-top roof and full solar setup, it\'s the complete package.',
    'price' => '349',
    'sleeps' => '2–4',
    'range' => '420km',
    'image' => 'images/image-12.jpg',
    'features' => [
      'Pop-top roof with full bed',
      'Solar panels & battery storage',
      'Full kitchen & storage',
      'Bluetooth & app connected',
      'Sleeps 2–4 people',
      'Up to 420km range',
    ],
  ],
  [
    'id' => 'mini',
    'badge' => 'Hybrid',
    'type' => 'Mini Countryman',
    'tagline' => 'Adventure in Compact Form',
    'desc' => 'The Mini Countryman Adventure Camper is your compact coastal escape. With a roof-top tent, easy setup, and hybrid efficiency, it\'s perfect for couples and weekenders.',
    'price' => '199',
    'sleeps' => '2',
    'range' => '600km+',
    'image' => 'images/image-11.jpg',
    'features' => [
      'Roof-top tent (sleeps 2)',
      'Fast & easy setup',
      'Hybrid efficient fuel',
      'Great on fuel',
      'Easy to drive & park',
      'Fast & easy utops',
    ],
  ],
];
?>

<section class="section section--black" id="vehicles">
    <div class="container">

        <div class="section-head">
            <div class="section-eyebrow section-eyebrow--center">Our Fleet</div>
            <h2 class="section-title">Available <span class="text-gold">Vehicles</span></h2>
        </div>

        <?php foreach ($vehicles as $i => $v): ?>
        <div class="vehicle-detail" id="<?php echo $v['id']; ?>">
            <div class="vehicle-detail__layout">

                <div class="vehicle-detail__gallery" data-animate="fade-left">
                    <div class="vehicle-detail__main-img">
                        <img src="<?php echo $v['image']; ?>" alt="<?php echo $v['type']; ?>" loading="lazy">
                    </div>
                </div>

                <div data-animate="fade-right">
                    <span class="vehicle-detail__badge">
                        <?php echo $v['badge']; ?>
                    </span>
                    <h2 class="vehicle-detail__title">
                        <?php echo $v['type']; ?>
                    </h2>
                    <p class="vehicle-detail__tagline">
                        <?php echo $v['tagline']; ?>
                    </p>
                    <p class="body-text vehicle-detail__desc"><?php echo $v['desc']; ?></p>

                    <!-- Quick stats -->
                    <div class="vehicle-detail__stats">
                        <div class="vehicle-detail__stat">
                            <div class="vehicle-detail__stat-num">
                                <?php echo $v['sleeps']; ?>
                            </div>
                            <div class="vehicle-detail__stat-label">
                                Sleeps</div>
                        </div>
                        <div class="vehicle-detail__stat">
                            <div class="vehicle-detail__stat-num">
                                <?php echo $v['range']; ?>
                            </div>
                            <div class="vehicle-detail__stat-label">
                                Range</div>
                        </div>
                        <div class="vehicle-detail__stat">
                            <div class="vehicle-detail__stat-num">
                                $<?php echo $v['price']; ?></div>
                            <div class="vehicle-detail__stat-label">
                                Per Day</div>
                        </div>
                    </div>

                    <div class="vehicle-detail__features">
                        <?php foreach ($v['features'] as $f): ?>
                        <div class="vehicle-detail__feature">
                            <i class="ri-check-line"></i>
                            <span><?php echo $f; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="btn-group vehicle-detail__actions">
                        <a href="quote.php?vehicle=<?php echo $v['id']; ?>" class="btn btn--gold">
                            <i class="ri-calendar-check-line"></i> Reserve This Camper
                        </a>
                        <a href="contact_us.php" class="btn btn--outline">Ask a Question</a>
                    </div>
                </div>

            </div>
        </div>
        <?php endforeach; ?>

    </div>
</section>