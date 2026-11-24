<section class="gallery section bg-image">
    <div class="container">
        <?php if($page == 'home') { ?>
        <div class="title">
            <p>Past Works</p>
            <h5>Our Gallery</h5>
        </div>
        <?php } ?>
        <div class="image-gallery">

            <?php
            // Number of images you want to generate
            $total_images = 20;  // Total images available
            $home_limit = 8;      // Show only 6 images on the homepage
            // Determine if we should show all images (Gallery) or limit them (Homepage)
            $page = basename($_SERVER['PHP_SELF']); // Get current filename
            $show_all = ($page == 'gallery.php'); // True if on gallery.php, false if on index.php
            // Set the number of images to display
            $num_images = $show_all ? $total_images : $home_limit;
            // Loop through and generate the image blocks
            for ($i = 1; $i <= $num_images; $i++) { ?>

            <div class="photo">
                <a href="images/gallery<?= $i; ?>.jpg">
                    <img src="images/gallery<?= $i; ?>.jpg" alt="Gallery <?= $i; ?>">
                </a>

            </div>

            <?php }
            ?>
        </div>
    </div>
    </div>
</section>