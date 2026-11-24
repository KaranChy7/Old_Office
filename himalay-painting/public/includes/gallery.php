<section class="section gallery">
    <div class="main-title">
        <h4>Recent <span>Works</span></h4>
    </div>
    <div class="gallery-slider">
        <?php
        // Number of images you want to generate
        $total_images = 10; // Total images available
        $home_limit = 8;    // Show only 6 images on the homepage
        // Determine if we should show all images (Gallery) or limit them (Homepage)
        $page = basename($_SERVER['PHP_SELF']); // Get current filename
        $show_all = ($page == 'gallery.php'); // True if on gallery.php, false if on index.php
        // Set the number of images to display
        $num_images = $show_all ? $total_images : $home_limit;
        // Loop through and generate the image blocks
        for ($i = 1; $i <= $num_images; $i++) { ?>
        <!-- template -->
        <a href="images/gallery_<?= $i; ?>.jpg" class="image">
            <img src="images/gallery_<?= $i; ?>.jpg" alt="Image <?= $i; ?>">
        </a>
        <?php }
        ?>
    </div>
</section>