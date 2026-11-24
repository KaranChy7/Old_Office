<section class="section gallery">
    <div class="container">
        <?php if ($page == 'home') { ?>
        <div class="main-title">
            <h6>Our Portfolio</h6>
            <h4>Recent Work Showcase</h4>
        </div>
        <?php } ?>
        <div class="gallery-wrapper <?= $page == 'home' ? 'gallery-wrap' : 'main-wrapper'; ?> ">

            <?php
            // Number of images you want to generate
            $total_images = 14;  // Total images available
            $home_limit = 7;      // Show only 7 images on the homepage
            // Determine if we should show all images (Gallery) or limit them (Homepage)
            $page = basename($_SERVER['PHP_SELF']); // Get current filename
            $show_all = ($page == 'our_gallery.php'); // True if on gallery.php, false if on index.php
            // Set the number of images to display
            $num_images = $show_all ? $total_images : $home_limit;
            // Loop through and generate the image blocks
            for ($i = 1; $i <= $num_images; $i++) { ?>
            <!-- template -->

            <a href="images/gallery<?= $i; ?>.jpg" class="img-block">
                <img src="images/gallery<?= $i; ?>.jpg" alt="Gallery Image <?= $i; ?>">
                <div class="img-info">
                    <div class="imgtitle">
                        21 Degrees ACR
                    </div>
                </div>
            </a>
            <?php }
            ?>
        </div>
    </div>
</section>