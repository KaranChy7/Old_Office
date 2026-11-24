<section class="section gallery">
    <div class="main-title">
        <h4>Our<span> Gallery </span></h4>
        <h6>Recent Work Highlights</h6>
    </div>
    <div class="gallery-slider">
        <?php
             
            $total_images = 16;   
            $home_limit = 8;     
            $page = basename($_SERVER['PHP_SELF']); // Get current filename
            $show_all = ($page == 'project.php'); // True if on gallery.php, false if on index.php
            // Set the number of images to display
            $num_images = $show_all ? $total_images : $home_limit;
            // Loop through and generate the image blocks
            for ($i = 1; $i <= $num_images; $i++) { ?>
        <!-- template -->

        <div class="image">
            <img src="images/gallery_<?= $i; ?>.jpg" alt="Image <?= $i; ?>">
        </div>

        <?php }
            ?>
    </div>
</section>