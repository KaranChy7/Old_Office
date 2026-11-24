<section class="gallery <?= $page == 'home' ? '' : 'section'; ?> ">
    <div class="container">
        <?php if ($page == 'home') { ?>
            <div class="title">
                <h2>Showcasing <span>Our Work</span></h2>
                <p>Each image represents a story of dedication </p>
            </div>
        <?php } ?>
        <div class="gallery-wrapper">
            <a href="images/gallery/gallery1.jpg" class="picture">
                <div class="front">
                    <img src="images/gallery/gallery1.jpg" alt="">
                </div>
                <div class="back">
                    <p>Our Projects</p>
                    <i class="fas fa-eye"></i>
                </div>
            </a>
            <a href="images/gallery/gallery2.jpg" class="picture">
                <div class="front">
                    <img src="images/gallery/gallery2.jpg" alt="">
                </div>
                <div class="back">
                    <p>Our Projects</p>
                    <i class="fas fa-eye"></i>
                </div>
            </a>
            <a href="images/gallery/gallery3.jpg" class="picture">
                <div class="front">
                    <img src="images/gallery/gallery3.jpg" alt="">
                </div>
                <div class="back">
                    <p>Our Projects</p>
                    <i class="fas fa-eye"></i>
                </div>
            </a>
            <a href="images/gallery/gallery4.jpg" class="picture">
                <div class="front">
                    <img src="images/gallery/gallery4.jpg" alt="">
                </div>
                <div class="back">
                    <p>Our Projects</p>
                    <i class="fas fa-eye"></i>
                </div>
            </a>
            <a href="images/gallery/gallery5.jpg" class="picture">
                <div class="front">
                    <img src="images/gallery/gallery5.jpg" alt="">
                </div>
                <div class="back">
                    <p>Our Projects</p>
                    <i class="fas fa-eye"></i>
                </div>
            </a>
            <a href="images/gallery/gallery6.jpg" class="picture">
                <div class="front">
                    <img src="images/gallery/gallery6.jpg" alt="">
                </div>
                <div class="back">
                    <p>Our Projects</p>
                    <i class="fas fa-eye"></i>
                </div>
            </a>
            <?php if ($page != 'home') { ?>

                <a href="images/gallery/gallery7.jpg" class="picture">
                    <div class="front">
                        <img src="images/gallery/gallery7.jpg" alt="">
                    </div>
                    <div class="back">
                        <p>Our Projects</p>
                        <i class="fas fa-eye"></i>
                    </div>
                </a>
                <a href="images/gallery/gallery8.jpg" class="picture">
                    <div class="front">
                        <img src="images/gallery/gallery8.jpg" alt="">
                    </div>
                    <div class="back">
                        <p>Our Projects</p>
                        <i class="fas fa-eye"></i>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</section>