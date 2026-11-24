<section class="section gallery">
    <div class="container">
        <?php if($page == 'home'){ ?>
        <div class="section-title">
            <h5>our gallery</h5>
            <p>A look at recent painting and decorating projects across Perth.</p>
        </div>
        <?php } ?>
        <div class="gallery-wrapper">
            <?php
            // Number of images you want to generate
            $total_images = 6;  // Total images available
            $home_limit = 5;      // Show only 6 images on the homepage
            // Determine if we should show all images (Gallery) or limit them (Homepage)
            $page = basename($_SERVER['PHP_SELF']); // Get current filename
            $show_all = ($page == 'our_gallery.php'); // True if on gallery.php, false if on index.php
            // Set the number of images to display
            $num_images = $show_all ? $total_images : $home_limit;
            // Loop through and generate the image blocks
            for ($i = 1; $i <= $num_images; $i++) { ?>
            <!-- template -->
            <a href="images/gallery_<?= $i; ?>.jpg" class="img-block">
                <img src="images/gallery_<?= $i; ?>.jpg" alt="Gallery Image <?= $i; ?>">
            </a>
            <?php }
            ?>
        </div>
    </div>
</section>