<?php
// GC-E CAMPERS — ABOUT STORY
$story_stats = [
  ['num' => '100%', 'label' => 'Locally Built'],
  ['num' => '5★',   'label' => 'Guest Rated'],
  ['num' => '2',    'label' => 'Hire Vehicles'],
];
?>

<section class="section section--black">
    <div class="container">
        <div class="about-story__layout">

            <div class="about-story__img" data-animate="fade-left">
                <img src="images/image-6.jpg" alt="GC-E Campers founder at the workshop" loading="lazy">
                <div class="about-story__label">
                    <div class="about-story__label-tag">Est. Gold Coast</div>
                    <div class="about-story__label-title">Arundel Workshop</div>
                </div>
            </div>

            <div class="about-story__content" data-animate="fade-right">
                <div class="section-eyebrow">Our Story</div>
                <h2 class="section-title">Built on the<br><span class="text-gold">Gold Coast</span></h2>
                <div class="gold-divider"></div>
                <p class="body-text">
                    GC-E Campers was born from a simple idea: that road tripping should be as exciting as the
                    destination. We
                    started with a single van, a workshop in Arundel, and a passion for thoughtful design.
                </p>
                <p class="body-text">
                    Today we're the Gold Coast's only dedicated electric and hybrid camper hire, and a go-to workshop
                    for bespoke
                    custom fit-outs that transform everyday vans into adventure machines.
                </p>
                <p class="body-text">
                    Everything is hand-crafted locally. Every hire camper is maintained to the highest standard. And
                    every fit-out
                    is built like we're building it for ourselves.
                </p>

                <div class="about-story__stats">
                    <?php foreach ($story_stats as $s): ?>
                    <div>
                        <div class="about-story__stat-num"><?php echo $s['num']; ?></div>
                        <div class="about-story__stat-label"><?php echo $s['label']; ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>
