<section class="gallery section">
    <div class="container">
        <?php if ($page == 'home') { ?>
        <div class="main-title">
            <h6>our gallery</h6>
            <h3>Recent Projects</h3>
        </div>
        <?php } ?>
        <div class="gallery-wrapper">

            <?php
            // Number of images you want to generate
            $total_images = 9;  // Total images available
            $home_limit = 5;      // Show only 6 images on the homepage
            // Determine if we should show all images (Gallery) or limit them (Homepage)
            $page = basename($_SERVER['PHP_SELF']); // Get current filename
            $show_all = ($page == 'our_gallery.php'); // True if on gallery.php, false if on index.php
            // Set the number of images to display
            $num_images = $show_all ? $total_images : $home_limit;
            // Loop through and generate the image blocks
            for ($i = 1; $i <= $num_images; $i++) { ?>
            <!-- template -->
            <a href="images/gallery/gallery<?= $i; ?>.jpg" class="image-wrap">
                <img src="images/gallery/gallery<?= $i; ?>.jpg" alt="<?= $company; ?> metalwork project <?= $i; ?>">
            </a>

            <?php }
            ?>

        </div>
    </div>
</section>