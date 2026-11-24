<?php
// GC-E CAMPERS — GALLERY GRID
$categories = ['All', 'Hire Fleet', 'Fit-Outs', 'On the Road'];

$images = [
  ['src' => 'images/image-1.jpg', 'alt' => 'VW ID. Buzz at the Gold Coast beach', 'cat' => 'Hire Fleet'],
  ['src' => 'images/image-10.jpg', 'alt' => 'Mini Countryman rooftop tent at sunset', 'cat' => 'Hire Fleet'],
  ['src' => 'images/image-11.jpg', 'alt' => 'Custom timber interior fit-out', 'cat' => 'Fit-Outs'],
  ['src' => 'images/image-8.jpg', 'alt' => 'Solar panel setup on van roof', 'cat' => 'Fit-Outs'],
  ['src' => 'images/image-5.jpg', 'alt' => 'Camper parked at Noosa headland', 'cat' => 'On the Road'],
  ['src' => 'images/image-6.jpg', 'alt' => 'Interior kitchenette with timber joinery', 'cat' => 'Fit-Outs'],
  ['src' => 'images/image-7.jpg', 'alt' => 'VW Buzz driving Byron Bay hinterland', 'cat' => 'On the Road'],
  ['src' => 'images/image-8.jpg', 'alt' => 'Pop-top roof open at campsite', 'cat' => 'Hire Fleet'],
  ['src' => 'images/image-9.jpg', 'alt' => 'Custom electrical system build', 'cat' => 'Fit-Outs'],
  ['src' => 'images/image-10.jpg', 'alt' => 'Camping at Kingscliff Beach', 'cat' => 'On the Road'],
  ['src' => 'images/image-11.jpg', 'alt' => 'Mini Camper at Sunshine Coast', 'cat' => 'Hire Fleet'],
  ['src' => 'images/image-12.jpg', 'alt' => 'Workshop build in progress at Arundel', 'cat' => 'Fit-Outs'],
];
?>

<section class="section section--black" id="gallery">
    <div class="container">

        <!-- Filter tabs -->
        <div class="gallery-filters">
            <?php foreach ($categories as $i => $cat): ?>
            <button class="gallery-filter-btn <?php echo $i === 0 ? 'is-active' : ''; ?>"
                data-filter="<?php echo $cat === 'All' ? 'all' : strtolower(str_replace(' ', '-', $cat)); ?>">
                <?php echo $cat; ?>
            </button>
            <?php endforeach; ?>
        </div>

        <!-- Grid -->
        <div class="gallery-main-grid stagger">
            <?php foreach ($images as $img): ?>
            <div class="gallery-item" data-category="<?php echo strtolower(str_replace(' ', '-', $img['cat'])); ?>"
                data-animate
                onclick="openLightbox('<?php echo $img['src']; ?>', '<?php echo addslashes($img['alt']); ?>')">
                <img src="<?php echo $img['src']; ?>" alt="<?php echo $img['alt']; ?>" loading="lazy">
                <div class="gallery-hover">
                    <i class="ri-zoom-in-line"></i>
                </div>
                <div class="gallery-item__tag"><?php echo $img['cat']; ?></div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Lightbox -->
<div id="lightbox" class="lightbox" onclick="closeLightbox()">
    <button class="lightbox__close" onclick="closeLightbox()" aria-label="Close">
        <i class="ri-close-line"></i>
    </button>
    <img id="lightboxImg" class="lightbox__img" src="" alt="" onclick="event.stopPropagation()">
    <p id="lightboxCaption" class="lightbox__caption"></p>
</div>

<script>
function openLightbox(src, alt) {
    const lb = document.getElementById('lightbox');
    document.getElementById('lightboxImg').src = src;
    document.getElementById('lightboxImg').alt = alt;
    document.getElementById('lightboxCaption').textContent = alt;
    lb.classList.add('is-open');
    document.body.classList.add('no-scroll');
}

function closeLightbox() {
    document.getElementById('lightbox').classList.remove('is-open');
    document.body.classList.remove('no-scroll');
}
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeLightbox();
});

// Filter functionality
document.querySelectorAll('.gallery-filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.gallery-filter-btn').forEach(b => b.classList.remove('is-active'));
        btn.classList.add('is-active');
        const filter = btn.dataset.filter;
        document.querySelectorAll('.gallery-item').forEach(item => {
            const show = filter === 'all' || item.dataset.category === filter;
            item.classList.toggle('is-hidden', !show);
        });
    });
});
</script>