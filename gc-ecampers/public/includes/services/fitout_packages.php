<?php
// GC-E CAMPERS — FITOUT PACKAGES
$packages = [
  [
    'tag' => 'Entry Level',
    'name' => 'Solar & Electrical',
    'image' => 'images/image-1.jpg',
    'items' => ['Lithium battery system', 'Solar panel installation', 'USB & 12V outlets', '240V inverter', 'Battery monitoring'],
  ],
  [
    'tag' => 'Popular',
    'name' => 'Weekend Warrior',
    'image' => 'images/image-5.jpg',
    'items' => ['Full solar & electrical', 'Slide-out kitchen', 'Roof rack & lighting', 'Storage cabinetry', 'Pop-top roof'],
  ],
  [
    'tag' => 'Full Build',
    'name' => 'Luxury Conversion',
    'image' => 'images/image-3.jpg',
    'items' => ['Complete van conversion', 'Premium timber joinery', 'Bed & lounge system', 'Full kitchen & sink', 'Solar, electrical & more'],
  ],
];
?>

<section class="section section--black" id="packages">
    <div class="container">
        <div class="section-head">
            <div class="section-eyebrow section-eyebrow--center">What We Build</div>
            <h2 class="section-title">Fit-Out <span class="text-gold">Packages</span></h2>
        </div>

        <div class="fitout-packages stagger">
            <?php foreach ($packages as $p): ?>
            <div class="fitout-card" data-animate>
                <div class="fitout-card__img">
                    <img src="<?php echo $p['image']; ?>" alt="<?php echo $p['name']; ?>" loading="lazy">
                </div>
                <div class="fitout-card__body">
                    <div class="fitout-card__tag"><?php echo $p['tag']; ?></div>
                    <div class="fitout-card__name"><?php echo $p['name']; ?></div>
                    <ul class="fitout-card__includes">
                        <?php foreach ($p['items'] as $item): ?>
                        <li><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="quote.php?type=fitout&package=<?php echo strtolower(str_replace(' ', '-', $p['name'])); ?>"
                        class="btn btn--gold btn--block">
                        Get a Quote
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <p class="fitout-note">
            All packages are fully customisable. Prices vary by vehicle and specifications — contact us for a tailored
            quote.
        </p>
    </div>
</section>