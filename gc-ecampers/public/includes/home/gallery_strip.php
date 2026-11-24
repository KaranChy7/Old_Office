<?php
// GC-E CAMPERS — GALLERY STRIP
$images = [
  ['src' => 'images/image-1.jpg', 'alt' => 'VW ID. Buzz at the beach'],
  ['src' => 'images/image-10.jpg', 'alt' => 'Camper interior at sunset'],
  ['src' => 'images/image-11.jpg', 'alt' => 'Rooftop tent overlooking Gold Coast'],
  ['src' => 'images/image-12.jpg', 'alt' => 'Solar setup at campsite'],
];
?>

<div class="gallery-strip" aria-label="Photo gallery">
    <?php foreach ($images as $img): ?>
    <div class="gallery-strip__item">
        <img src="<?php echo $img['src']; ?>" alt="<?php echo $img['alt']; ?>" loading="lazy">
    </div>
    <?php endforeach; ?>
</div>