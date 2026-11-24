<?php
// GC-E CAMPERS — PRIVATE DRIVE
$drive = [
  'route' => 'Gold Coast Airport &harr; Surfers Paradise',
  'price' => '185',
  'meta'  => ['One way', 'Per vehicle', 'Private transfer'],
  'image' => 'images/image-2.jpg',
  'link'  => 'quote.php?service=private-drive',
];
?>

<section class="drive-section section" id="private-drive">
    <div class="container">

        <div class="drive-section__header">
            <div data-animate="fade-left">
                <div class="section-eyebrow">GCE Private Drive</div>
                <h2 class="section-title">Airport transfers in the <br><span class="text-gold">green-and-white ID.
                        Buzz.</span></h2>
            </div>
            <p class="drive-section__intro" data-animate="fade-right">
                Premium pre-booked transfers from Gold Coast and Brisbane airports, plus private day hire and events.
            </p>
        </div>

        <div class="drive-section__layout">
            <div class="drive-section__image" data-animate="fade-left">
                <img src="<?php echo $drive['image']; ?>" alt="GC-E Private Drive airport transfer vehicle"
                    loading="lazy">
            </div>

            <div class="drive-section__content" data-animate="fade-right">
                <div class="drive-section__route"><?php echo $drive['route']; ?></div>
                <div class="drive-section__price">$<?php echo $drive['price']; ?></div>
                <p class="drive-section__meta"><?php echo implode(' &bull; ', $drive['meta']); ?></p>
                <a href="<?php echo $drive['link']; ?>" class="btn btn--gold">Book / Enquire</a>
            </div>
        </div>

    </div>
</section>