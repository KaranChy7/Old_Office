<section class="breadcrumb">
    <div class="container">
        <?php if($page == 'about_us'){ ?>
        <ul class="breadcrumb-wrapper">
            <li class="bread-item">
                <a href="./" class="bread-link bread-nav">home</a>
            </li>
            <li class="bread-item">
                <div class="bread-link">about us</div>
            </li>
        </ul>
        <?php } elseif($page == 'our_services') { ?>
        <ul class="breadcrumb-wrapper">
            <li class="bread-item">
                <a href="./" class="bread-link bread-nav">home</a>
            </li>
            <li class="bread-item">
                <div class="bread-link">our services</div>
            </li>
        </ul>
        <?php } elseif($page == 'our_gallery') { ?>
        <ul class="breadcrumb-wrapper">
            <li class="bread-item">
                <a href="./" class="bread-link bread-nav">home</a>
            </li>
            <li class="bread-item">
                <div class="bread-link">our gallery</div>
            </li>
        </ul>
        <?php } elseif($page == 'contact_us')  { ?>
        <ul class="breadcrumb-wrapper">
            <li class="bread-item">
                <a href="./" class="bread-link bread-nav">home</a>
            </li>
            <li class="bread-item">
                <div class="bread-link">contact us</div>
            </li>
        </ul>
        <?php } elseif($page == 'faq')  { ?>
        <ul class="breadcrumb-wrapper">
            <li class="bread-item">
                <a href="./" class="bread-link bread-nav">home</a>
            </li>
            <li class="bread-item">
                <div class="bread-link">faq</div>
            </li>
        </ul>
        <?php } elseif($page == 'quote')  { ?>
        <ul class="breadcrumb-wrapper">
            <li class="bread-item">
                <a href="./" class="bread-link bread-nav">home</a>
            </li>
            <li class="bread-item">
                <div class="bread-link">quote</div>
            </li>
        </ul>
        <?php } ?>

    </div>
</section>