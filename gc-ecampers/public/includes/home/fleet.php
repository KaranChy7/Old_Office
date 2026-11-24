<?php
// GC-E CAMPERS — FLEET SECTION
$vehicles = [
  [
    'badge' => 'Fully Electric',
    'type' => 'Premium Electric Camper',
    'name' => 'Volkswagen ID. Buzz Camper',
    'desc' => 'Our flagship camper with rooftop sleeping, integrated storage, fridge, lighting, power and a proper touring fit-out.',
    'price' => '420 /day',
    'image' => 'images/image-4.jpg',
    'link' => 'electric_camper_hire',
    'features' => ['Pop-top roof', 'Solar panels', 'Sleeps 2–4', 'App connected'],
  ],
  [
    'badge' => 'Hybrid',
    'type' => 'Compact Adventure Camper',
    'name' => 'Mini Countryman Camper',
    'desc' => 'A compact rooftop camper for couples and weekend escapes — easy to drive, easy to park and ready for the coast.',
    'price' => '350 /day',
    'image' => 'images/image-5.jpg',
    'link' => 'hybrid_camper_hire',
    'features' => ['Rooftop tent', 'Sleeps 2', 'Hybrid efficient', 'Easy to park'],
  ],
  [
    'badge' => 'Hybrid',
    'type' => 'GC-E Private Drive',
    'name' => 'Airport & Private Transfers',
    'desc' => 'The dedicated green-and-white ID. Buzz for Gold Coast and Brisbane Airport transfers, private days and events.',
    'price' => '185 /transfer',
    'image' => 'images/image-2.jpg',
    'link' => 'private_drive',
    'features' => ['Rooftop tent', 'Sleeps 2', 'Hybrid efficient', 'Easy to park'],
  ],
];
?>

<section class="fleet-section section" id="fleet">
    <div class="container">

        <div class="fleet-section__header">
            <div>
                <div class="section-eyebrow">Our Fleet</div>
                <h6 class="title">Choose Your Adventure</h6>
                <h2 class="section-title">Two campers.<br><span class="text-gold"> Two ways to
                        escape.</span></h2>
            </div>
            <a href="camper_hire.php" class="btn btn--outline">
                View All Vehicles <i class="ri-arrow-right-line"></i>
            </a>
        </div>

        <div class="fleet-section__grid">
            <?php foreach ($vehicles as $i => $v): ?>
            <div class="vehicle-card" data-animate="fade-<?php echo $i === 0 ? 'left' : 'right'; ?>">
                <div class="vehicle-card__image">
                    <img src="<?php echo $v['image']; ?>" alt="<?php echo $v['type'] . ' ' . $v['name']; ?>"
                        loading="lazy">
                    <!-- <span class="vehicle-card__badge"><?php echo $v['badge']; ?></span> -->
                </div>
                <div class="vehicle-card__body">
                    <div class="vehicle-card__type"><?php echo $v['type']; ?></div>
                    <div class="vehicle-card__name"><?php echo $v['name']; ?></div>
                    <p class="vehicle-card__desc"><?php echo $v['desc']; ?></p>
                    <!-- <div class="vehicle-card__features">
                        <?php foreach ($v['features'] as $f): ?>
                        <span class="feature-badge"><i class="ri-check-line"></i><?php echo $f; ?></span>
                        <?php endforeach; ?>
                    </div> -->
                    <div class="vehicle-card__footer">
                        <div class="vehicle-card__price">
                            $<?php echo $v['price']; ?><span></span>
                        </div>
                        <a href="<?php echo $v['link']; ?>" class="btn btn--gold btn--sm">
                            View &amp; Book
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>