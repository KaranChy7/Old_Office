<section class="section gallery-section pt-10px">
    <?php if($page == 'home') { ?>
    <div class="container">
        <div class="section-title">
            <h4>Our Gallery</h4>
        </div>
    </div>
    <?php } ?>
    <div class="gallery">
        <?php
            // Number of images you want to generate
            $total_images = 9;  // Total images available
            $home_limit = 5;      // Show only 6 images on the homepage
            // Determine if we should show all images (Gallery) or limit them (Homepage)
            $page = basename($_SERVER['PHP_SELF']); // Get current filename
            $show_all = ($page == 'gallery.php'); // True if on gallery.php, false if on index.php
            // Set the number of images to display
            $num_images = $show_all ? $total_images : $home_limit;
            // Loop through and generate the image blocks
            for ($i = 1; $i <= $num_images; $i++) { ?>
        <!-- template -->

        <div class="image">
            <a href="images/gallery/gallery<?= $i; ?>.jpg" class="img-wrap">
                <div class="main-image">
                    <img src="images/gallery/gallery<?= $i; ?>.jpg" alt="Gallery <?= $i; ?>">
                </div>
            </a>
        </div>

        <?php }
            ?>



    </div>
</section>