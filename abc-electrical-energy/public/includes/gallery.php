<section class="section section-gallery">

    <div class="container">
        <?php if ($page == 'home') { ?>
        <div class="section-title">
            <h4>our gallery</h4>
            <h6>Our Work in Pictures</h6>
        </div>
        <?php } ?>
        <div class="gallery-wrapper">
            <?php
            // Number of images you want to generate
            $total_images = 12;  // Total images available
            $home_limit = 8;      // Show only 6 images on the homepage
            // Determine if we should show all images (Gallery) or limit them (Homepage)
            $page = basename($_SERVER['PHP_SELF']); // Get current filename
            $show_all = ($page == 'our_project.php'); // True if on gallery.php, false if on index.php
            // Set the number of images to display
            $num_images = $show_all ? $total_images : $home_limit;
            // Loop through and generate the image blocks
            for ($i = 1; $i <= $num_images; $i++) { ?>

            <div class="item">
                <a href="images/gallery/gallery_<?= $i; ?>.jpg">
                    <img src="images/gallery/gallery_<?= $i; ?>.jpg" alt="Gallery <?= $i; ?>">
                </a>
            </div>

            <?php }
            ?>
        </div>
        <?php if ($page == 'home') { ?>
        <div class="main-button">
            <a href="our_project" class="btn btn-custom-large btn-primary">See All Images</a>
        </div>
        <?php } ?>
    </div>
</section>