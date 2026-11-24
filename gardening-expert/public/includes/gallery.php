<div class="gallery section <?= $page == 'home' ? 'pt-20':''; ?> ">
    <div class="container">
        <?php if($page == 'home') { ?>
        <div class=" gallery-text">
            <div class="right-content">
                <div class="logo">
                    <img src="images/logo.png" alt="Logo Images">
                </div>
                <h6>Built to Last: Our Fencing Projects</h6>
            </div>
            <div class="gallery-desc">
                <p>Take a look at some of our completed fencing projects, from rural boundary and stock fencing to
                    Colorbond and commercial installations. Each job reflects our commitment to strong materials,
                    straight fence lines and workmanship that lasts.</p>
            </div>
        </div>
        <?php } ?>


        <div class="gallery-wrapper">
            <?php
            // Number of images you want to generate
            $total_images = 32;  // Total images available
            $home_limit = 8;      // Show only 6 images on the homepage
            // Determine if we should show all images (Gallery) or limit them (Homepage)
            $page = basename($_SERVER['PHP_SELF']); // Get current filename
            $show_all = ($page == 'gallery.php'); // True if on gallery.php, false if on index.php
            // Set the number of images to display
            $num_images = $show_all ? $total_images : $home_limit;
            // Loop through and generate the image blocks
            for ($i = 1; $i <= $num_images; $i++) { ?>

            <div class="item">

                <a href="images/<?= $i; ?>.jpg" class="images">
                    <img src="images/<?= $i; ?>.jpg" alt="Fencing Project">
                </a>
            </div>

            <?php }
            ?>
        </div>
    </div>
</div>