<section class="section gallery">
    <div class="main-title">
        <h4>our <span>gallery</span></h4>
    </div>
    <?php
    
    $page = basename($_SERVER['PHP_SELF']); // Get current filename
    $show_all = ($page == 'gallery.php');  
    $services = [
        'RoofRestoration'       => 'Roof Restoration',        
        'RebeddingRidgeRepair'  => 'Rebedding / Ridge Repair',
        'ColourbondRoofPlumming' => 'Colourbond Roof Plumming',
        'RoofRepairs'           => 'Roof Repairs',
        'GeneralMaintenance'    => 'General Maintenance',
    ];
    ?>
    <?php if ($show_all) { ?>
    <div class="filter">
        <button class="btn btn-primary btn-custom-mid active" data-filter="all">all</button>
        <?php foreach ($services as $key => $name) { ?>
        <button class="btn btn-primary-ghost btn-custom-mid" data-filter="<?= $key; ?>"><?= $name; ?></button>
        <?php } ?>
    </div>
    <?php } ?>
    <div class="gallery-slider">
        <?php
        // Collect images from each service folder: images/<key>/
        $images = [];
        foreach ($services as $key => $name) {
            $files = preg_grep('/\.(jpe?g|png|webp)$/i', glob("images/{$key}/*"));
            natcasesort($files);
            foreach (array_values($files) as $i => $file) {
                $images[] = ['src' => $file, 'cat' => $key, 'name' => $name, 'pos' => $i];
            }
        }

        // Homepage: show a mix of services, limited
        $home_limit = 8;
        if (!$show_all) {
            usort($images, fn($a, $b) => $a['pos'] <=> $b['pos']);
            $images = array_slice($images, 0, $home_limit);
        }

        foreach ($images as $img) { ?>
        <a href="<?= $img['src']; ?>" class="image" data-cat="<?= $img['cat']; ?>">
            <img src="<?= $img['src']; ?>" alt="<?= $img['name']; ?>" loading="lazy">
        </a>
        <?php } ?>
    </div>
</section>