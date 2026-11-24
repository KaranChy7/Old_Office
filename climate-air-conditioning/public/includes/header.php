<!doctype html>
<html lang="en">


<?php

    $owner      = "";
    $company    = "Mirtop Render Solution";
    $phone      = "0468 230 127";
    $email      = "amirdilsoz22@gmail.com";
    $address    = "BROWNS PLAINS QLD 4118";
    $abn        = "24 823 896 034";
    $map        = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28270.01293419255!2d153.03123588631!3d-27.663155477274966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b91468bcfd18531%3A0x502a35af3de8220!2sBrowns%20Plains%20QLD%204118%2C%20Australia!5e0!3m2!1sen!2snp!4v1781143313208!5m2!1sen!2snp";
    $exp        = " 8 + ";
    $work_hrs   = " 6:30 AM - 6 PM";
    $work_day   = "Mon - Sat";
    $facebook   = "https://www.facebook.com/";
    $instagram  = "https://www.instagram.com/";
    $google     = "https://www.google.com/";
    $hipage     = "https://hipages.com.au/connect/";
?>

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $company;?></title>

    <!-- LInks -->
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Magnific Popup -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
    <!-- Slick Slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <!-- Custom Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">


</head>
<!-- End of Head Section -->

<body>
    <header class="header fixed-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="./">
                    <figure>
                        <img src="images/logo.png" alt="Logo Image">
                    </figure>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation" id="burgerBtn">
                    <svg viewBox="0 0 100 80" width="22" height="20" class="burger">
                        <rect width="100" height="10"></rect>
                        <rect y="30" width="100" height="10"></rect>
                        <rect y="60" width="100" height="10"></rect>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="cross">
                        <path fill="none" stroke="#000" stroke-width="2" d="M5,5 L19,19 M19,5 L5,19" />
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item <?= $page == 'home' ? 'active':'' ?>">
                            <a href="./" class="nav-link">home</a>
                        </li>
                        <li class="nav-item <?= $page == 'about' ? 'active':'' ?>">
                            <a href="#about_us" class="nav-link">about us</a>
                        </li>
                        <li class="nav-item <?= $page == 'our_services' ? 'active':'' ?>">
                            <a href="#our_services" class="nav-link">our services</a>
                        </li>
                        <li class="nav-item <?= $page == 'our_project' ? 'active':'' ?>">
                            <a href="#our_project" class="nav-link">our projects</a>
                        </li>
                        <li class="nav-item <?= $page == 'contact' ? 'active':'' ?>">
                            <a href="#contact_us" class="nav-link">contact us</a>
                        </li>
                    </ul>
                    <div class="nav-cons">
                        <div class="social-icons">
                            <a href="<?= $google ?>" target=_blank class="icon-block">
                                <i class="fa-brands fa-google"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Ends -->