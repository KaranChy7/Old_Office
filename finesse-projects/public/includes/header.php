<!doctype html>
<html lang="en">


<?php
$company    = "Parkinson Roofing";
$owner      = "";
$phone      = "0483 342 056";
$email      = "admin@parkinsonroofing.com.au";
$address    = "CAMPBELLTOWN NSW 2560";
$abn        = "52 405 591 169";
$map        = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52883.21931992025!2d150.7636339403441!3d-34.06435602672921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ee5195038d7f%3A0x5017d681632af40!2sCampbelltown%20NSW%202560%2C%20Australia!5e0!3m2!1sen!2snp!4v1747897037221!5m2!1sen!2snp" ;
$exp        = "12";
$work_hrs   = "24 Hours";
$work_day   = "Mon to Sat";
$facebook   = "https://www.facebook.com/ ";
$instagram  = "https://www.instagram.com/";
$google     = "https://www.google.com/";
$linkedin   = "https://www.linkedin.com/";
$hipage     = "https://hipages.com.au/connect/";
$youtube    = "https://www.youtube.com/";
$thanks     = "";
?>

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $company; ?></title>

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
    <header class="header <?= $page != 'home' ? 'main-header' : ''; ?> ">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="./">
                    <figure>
                        <img src="images/logo.png" alt="Logo">
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
                        <li class="nav-item <?= $page == 'home' ? 'active' : ''; ?>">
                            <a href="./" class="nav-link">home</a>
                        </li>
                        <li class="nav-item dropdown <?= $page == 'about' ? 'active' : ''; ?>">
                            <a href="about" class="nav-link">about us</a>
                        </li>

                        <li class="nav-item dropdown <?= $page == 'services' ? 'active' : ''; ?>">
                            <a href="services" class="nav-link">services</a>
                        </li>

                        <li class="nav-item <?= $page == 'gallery' ? 'active' : ''; ?>">
                            <a href="gallery" class="nav-link">gallery</a>
                        </li>

                        <li class="nav-item <?= $page == 'careers' ? 'active' : ''; ?>">
                            <a href="careers" class="nav-link">careers</a>
                        </li>

                        <li class="nav-item <?= $page == 'contact' ? 'active' : ''; ?>">
                            <a href="contact_us" class="nav-link">contact</a>
                        </li>

                        <li class="nav-item <?= $page == 'estimate' ? 'active' : ''; ?>">
                            <a href="estimate" class="nav-link btn btn-custom-mid btn-primary">get a free estimate</a>
                        </li>

                        <li class="nav-item">
                            <a href="tel:<?= $phone; ?>"
                                class="nav-link btn btn-custom-mid btn-primary-ghost"><?= $phone; ?></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Ends -->