<section class="gallery section">
    <div class="container">
        <?php if($page == 'home'){ ?>
        <div class="header-title">
            <h4>Our Projects</h4>
        </div>
        <?php } ?>

        <div class="gallery-wrap">
            <?php
                // Number of images you want to generate
                $total_images = 12;  // Total images available
                $home_limit = 8;      // Show only 6 images on the homepage
                // Determine if we should show all images (Gallery) or limit them (Homepage)
                $page = basename($_SERVER['PHP_SELF']); // Get current filename
                $show_all = ($page == 'gallery.php'); // True if on gallery.php, false if on index.php
                // Set the number of images to display
                $num_images = $show_all ? $total_images : $home_limit;
                // Loop through and generate the image blocks
                for ($i = 1; $i <= $num_images; $i++) { ?>
            <!-- template -->
            <a href="images/gallery/gallery_<?= $i; ?>.jpg" class="gallery-item">
                <img src="images/gallery/gallery_<?= $i; ?>.jpg" alt="Gallery Image <?= $i; ?>">
                <div class="txt-slidein">
                    <div class="imgzoomin"><i class="fas fa-search"></i></div>
                    <h6> <?= $company ?></h6>
                </div>
            </a>

            <?php }
                ?>
        </div>
    </div>
</section>