<section class="our-project section">
    <div class="container">
        <?php if($page == 'home'){ ?>
        <div class="main-title">
            <h5> our Gallery </h5>
            <p>Explore our gallery to see our work in action with quality, care, and real results.</p>
        </div>
        <?php } ?>

        <div class="project-wrapper">

            <?php
            // Number of images you want to generate
            $total_images = 13;  // Total images available
            $home_limit = 5;      // Show only 6 images on the homepage
            // Determine if we should show all images (Gallery) or limit them (Homepage)
            $page = basename($_SERVER['PHP_SELF']); // Get current filename
            $show_all = ($page == 'our_project.php'); // True if on gallery.php, false if on index.php
            // Set the number of images to display
            $num_images = $show_all ? $total_images : $home_limit;
            // Loop through and generate the image blocks
            for ($i = 1; $i <= $num_images; $i++) { ?>
            <!-- template -->
            <a href="images/<?= $i; ?>.jpg" class="block-image">
                <img src="images/<?= $i; ?>.jpg" alt="Gallery Image <?= $i; ?>">
            </a>

            <?php }
            ?>


        </div>
    </div>
</section>