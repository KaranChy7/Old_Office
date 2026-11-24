<!doctype html>
<html lang="en">


<?php
    $owner      = "";
    $co         = "Hortsol Pty Ltd";
    $address    = "Haigslea QLD 4306";
    $phone      = "0478 135 040"; 
    $email      = "admin@hortsol.com.au";
    $abn        = "61 699 817 420 ";
    $map        = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56592.23572902732!2d152.59146497412482!3d-27.562053223859692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b96b9fb8508762d%3A0x502a35af3de8ab0!2sHaigslea%20QLD%204306%2C%20Australia!5e0!3m2!1sen!2snp!4v1790134625662!5m2!1sen!2snp" ;
    $exp        = ""; 
    $work_hrs   = "5 AM to 7 PM";
    $work_day   = "7 days a Week";
    $facebook   = "https://www.facebook.com/Hortsol";
    $instagram  = "https://www.instagram.com/ ";
    $google     = "https://www.google.com/ ";
    $linkedin   = "https://www.linkedin.com";
    $youtube    = "https://www.youtube.com";    
    $hipage     = "https://hipages.com.au/connect/hortsolptyltd";
    $google_review = "";
    $formAPI    ='';
    $service_areas = [];  // approved suburbs, e.g. ["Haigslea", "Walloon"]. Shown on the About page when filled in.
    $site_url   = "";   // live website address, e.g. "https://www.example.com.au" (no trailing slash).
                        // Forms send visitors to $site_url/thanks after sending; leave empty to use FormSubmit's own page.
    
?>

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Each page sets $title and $description before including this header -->
    <title><?php echo isset($title) ? $title . ' | ' . $co : $co; ?></title>
    <?php if (isset($description)) { ?>
    <meta name="description" content="<?php echo $description; ?>">
    <?php } ?>
    <?php if (isset($noindex)) { ?>
    <meta name="robots" content="noindex">
    <?php } ?>

    <!-- LInks -->
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" />

    <!-- FontAwesome version 4.7 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Simple Line Icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" />

    <!-- Magnific Popup -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />

    <!-- Slick Slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />

    <!-- <link rel="stylesheet" href="css/slider.css"> -->

    <!-- Custom Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- Sweetalert -->
    <script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<!-- End of Head Section -->

<body>
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg" aria-label="Main navigation">
                <a class="navbar-brand" href="./">
                    <img src="images/logo-horizontal.png" alt="<?php echo $co;?> home" width="900" height="157">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <svg viewBox="0 0 100 80" width="22" height="20" class="burger" aria-hidden="true">
                        <rect width="100" height="10"></rect>
                        <rect y="30" width="100" height="10"></rect>
                        <rect y="60" width="100" height="10"></rect>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="cross"
                        aria-hidden="true">
                        <path fill="none" stroke="currentColor" stroke-width="2" d="M5,5 L19,19 M19,5 L5,19" />
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item <?php if($page== 'home'){echo 'active';} ?>">
                            <a href="./" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item <?php if($page== 'page-about'){echo 'active';} ?>">
                            <a href="page-about" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item <?php if($page== 'page-service'){echo 'active';} ?>">
                            <a href="page-service" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item <?php if($page== 'page-gallery'){echo 'active';} ?>">
                            <a href="page-gallery" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item <?php if($page== 'page-contact'){echo 'active';} ?>">
                            <a href="page-contact" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                    <div class="nav-actions">
                        <a href="tel:<?php echo $phone;?>" class="nav-phone">
                            <i class="fas fa-phone-alt" aria-hidden="true"></i> <?php echo $phone;?>
                        </a>
                        <a href="page-quote" class="nav-quote">Request a Quote</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Ends -->