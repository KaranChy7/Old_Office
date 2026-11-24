<?php
?>
<!-- ═══════════════════════════════════════
     PAGE BANNER
══════════════════════════════════════ -->
<section class="page-banner" style="background-image: url('<?= tl_img($banner['image']) ?>');" role="img"
    aria-label="<?= tl_alt($banner['image']) ?>">
    <div class="page-banner__overlay"></div>

    <div class="container page-banner__inner">
        <h2 class="page-banner__title" data-reveal><?= $banner['title'] ?></h2>


    </div>
</section>