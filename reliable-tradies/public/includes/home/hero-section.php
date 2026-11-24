<!-- ===== HERO SLIDER ===== -->
<section class="hero-section hero-slider-section">

    <!-- Slide Track -->
    <div class="hero-slider" id="hero-slider">
        <?php foreach ($hero_slides as $i => $slide): ?>
            <div class="hero-slide <?= $i === 0 ? 'active' : '' ?>" data-index="<?= $i ?>">

                <!-- Background image -->
                <div class="slide-bg">
                    <img src="<?= $slide['image'] ?>" alt="<?= $slide['service'] ?> services — <?= $company_name ?>">
                    <div class="slide-overlay"></div>
                </div>

                <!-- Amber slash stays across slides -->
                <div class="hero-slash"></div>

                <!-- Slide content -->
                <div class="container">
                    <div class="hero-inner">

                        <!-- Left: Content -->
                        <div class="hero-content">
                            <div class="hero-eyebrow">
                                <i class="fa-solid <?= $slide['icon'] ?>"></i>
                                <?= $slide['eyebrow'] ?>
                            </div>

                            <h1>
                                <?= $slide['heading'] ?><br>
                                <em><?= $slide['heading_em'] ?></em>
                            </h1>

                            <p class="hero-desc"><?= $slide['desc'] ?></p>

                            <div class="hero-actions">
                                <a href="<?= $slide['link'] ?>" class="btn-primary">
                                    <i class="fa-solid <?= $slide['icon'] ?>"></i> <?= $slide['link_label'] ?>
                                </a>
                                <a href="quote" class="btn-outline">
                                    <i class="fa-solid fa-file-invoice"></i> Free Quote
                                </a>
                            </div>

                            <!-- Stats -->
                            <div class="hero-stats">
                                <div class="stat-item">
                                    <div class="num" data-counter="<?= $experience ?>">0</div>
                                    <div class="label">Years Experience</div>
                                </div>
                                <div class="stat-item">
                                    <div class="num" data-counter="4">0</div>
                                    <div class="label">Core Services</div>
                                </div>
                                <div class="stat-item">
                                    <div class="num" data-counter="100">0</div>
                                    <div class="label">KM Service Radius</div>
                                </div>
                                <div class="stat-item">
                                    <div class="num" data-counter="500">0</div>
                                    <div class="label">Projects Completed</div>
                                </div>
                            </div>
                        </div>

                        <!-- Right: Service badge panel -->
                        <div class="hero-image-panel">
                            <div class="img-frame">
                                <img src="<?= $slide['image'] ?>" alt="<?= $slide['service'] ?> — <?= $company_name ?>">
                            </div>
                            <div class="hero-badge">
                                <div class="badge-icon"><i class="fa-solid <?= $slide['icon'] ?>"></i></div>
                                <div class="badge-num"><?= $experience ?>+</div>
                                <div class="badge-text">Years of Reliable <?= $slide['service'] ?></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Slider Controls -->
    <div class="hero-slider-controls">

        <!-- Prev/Next arrows -->
        <button class="hero-arrow hero-prev" id="hero-prev" aria-label="Previous slide">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <button class="hero-arrow hero-next" id="hero-next" aria-label="Next slide">
            <i class="fa-solid fa-chevron-right"></i>
        </button>

        <!-- Dot navigation + service labels -->
        <div class="hero-dots" id="hero-dots">
            <?php foreach ($hero_slides as $i => $slide): ?>
                <button class="hero-dot <?= $i === 0 ? 'active' : '' ?>" data-slide="<?= $i ?>"
                    aria-label="Go to <?= $slide['service'] ?> slide">
                    <span class="dot-line"></span>
                    <span class="dot-label"><?= $slide['service'] ?></span>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Service thumbnails -->
        <div class="hero-thumbs" id="hero-thumbs">
            <?php foreach ($hero_slides as $i => $slide): ?>
                <button class="hero-thumb <?= $i === 0 ? 'active' : '' ?>" data-slide="<?= $i ?>"
                    aria-label="<?= $slide['service'] ?>">
                    <img src="<?= $slide['image'] ?>" alt="<?= $slide['service'] ?>">
                    <div class="thumb-overlay">
                        <i class="fa-solid <?= $slide['icon'] ?>"></i>
                        <span><?= $slide['service'] ?></span>
                    </div>
                </button>
            <?php endforeach; ?>
        </div>

    </div>

    <!-- Progress bar -->
    <div class="hero-progress">
        <div class="hero-progress-bar" id="hero-progress-bar"></div>
    </div>

    <div class="hero-scroll-cue">
        <span>Scroll</span>
        <div class="scroll-line"></div>
    </div>

</section>