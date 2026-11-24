<section class="breadcrumb">
    <div class="container">
        <?php if ($page == 'about') { ?>
            <ul class="breadcrumb-wrapper">
                <li class="bread-item">
                    <a href="./" class="bread-link bread-nav">home</a>
                </li>
                <li class="bread-item">
                    <div class="bread-link">about us</div>
                </li>
            </ul>
        <?php } elseif ($page == 'services') { ?>
            <ul class="breadcrumb-wrapper">
                <li class="bread-item">
                    <a href="./" class="bread-link bread-nav">home</a>
                </li>
                <li class="bread-item">
                    <div class="bread-link">our services</div>
                </li>
            </ul>
        <?php } elseif ($page == 'gallery') { ?>
            <ul class="breadcrumb-wrapper">
                <li class="bread-item">
                    <a href="./" class="bread-link bread-nav">home</a>
                </li>
                <li class="bread-item">
                    <div class="bread-link">our gallery</div>
                </li>
            </ul>
        <?php } elseif ($page == 'contact_us') { ?>
            <ul class="breadcrumb-wrapper">
                <li class="bread-item">
                    <a href="./" class="bread-link bread-nav">home</a>
                </li>
                <li class="bread-item">
                    <div class="bread-link">contact us</div>
                </li>
            </ul>
        <?php } elseif ($page == 'estimate') { ?>
            <ul class="breadcrumb-wrapper">
                <li class="bread-item">
                    <a href="./" class="bread-link bread-nav">home</a>
                </li>
                <li class="bread-item">
                    <div class="bread-link">estimate</div>
                </li>
            </ul>
        <?php } elseif ($page == 'careers') { ?>
            <ul class="breadcrumb-wrapper">
                <li class="bread-item">
                    <a href="./" class="bread-link bread-nav">home</a>
                </li>
                <li class="bread-item">
                    <div class="bread-link">careers</div>
                </li>
            </ul>
        <?php } ?>

    </div>
</section>