<section class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb-wrapper">
            <li class="bread-item">
                <a href="./" class="bread-link bread-nav">home</a>
            </li>
            <?php if ($page == 'about_us') { ?>

            <li class="bread-item">
                <div class="bread-link">about us</div>
            </li>

            <?php } elseif ($page == 'our_services') { ?>

            <li class="bread-item">
                <div class="bread-link">our services</div>
            </li>
            <?php } elseif ($page == 'our_project') { ?>

            <li class="bread-item">
                <div class="bread-link">our gallery</div>
            </li>

            <?php } elseif ($page == 'contact_us') { ?>

            <li class="bread-item">
                <div class="bread-link">contact us</div>
            </li>

            <?php } ?>
        </ul>
    </div>
</section>