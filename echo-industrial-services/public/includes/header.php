<!doctype html>
<html lang="en">
    
<?php
    $company    = "Saqib Transport Pty Ltd";
    $owner      = " ";
    $phone      = "0481 181 422";
    $email      = "info@saqibtransprot.com.au";
    $address    = "MOUNT PRITCHARD NSW 2170";
    $abn        = "43 295 563 122";
    $map        = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20834.430266374566!2d150.88057175205884!3d-33.904263435602445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129436e4831a89%3A0x5017d681632c280!2sMount%20Pritchard%20NSW%202170%2C%20Australia!5e1!3m2!1sen!2snp!4v1751592689271!5m2!1sen!2snp";
    $exp        = "10";
    $work_hrs   = "7 AM - 5 PM";
    $work_day   = " ";
    $facebook   = "https://www.facebook.com/ ";
    $instagram  = "https://www.instagram.com/";
    $hipage     = "https://hipages.com.au/connect/";
    $whatsapp   = "https://whatsapp.com/";
?>

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $company;?></title>

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

    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="info d-flex">
                    <div class="block icons d-flex">
                        <a href="<?= $facebook ?>" target="_blank"><i class="fab fa-facebook-f"></i></a> /
                        <a href="<?= $instagram ?>" target="_blank"><i class="fab fa-instagram"></i></a> /
                        <a href="<?= $twitter ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="block details d-flex">
                        <div class="item phone d-flex">
                            <div class="icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="text"><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></div>
                        </div>
                        <div class="item mail d-flex">
                            <div class="icon"><i class="fas fa-envelope-open-text"></i></div>
                            <div class="text"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <nav class="navbar navbar-expand-lg ">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation" id="burgerBtn">
                        <svg viewBox="0 0 100 80" width="22" height="20" class="burger">
                            <rect width="100" height="10"></rect>
                            <rect y="30" width="100" height="10"></rect>
                            <rect y="60" width="100" height="10"></rect>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="cross">
                            <path fill="none" stroke="#000" stroke-width="2" d="M5,5 L19,19 M19,5 L5,19" />
                        </svg>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item <?= $page=='home' ? 'active' : '' ?>">
                                <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item <?= $page=='about' ? 'active' : '' ?>">
                                <a class="nav-link" href="about">About Us </a>
                            </li>
                            <li class="nav-item <?= $page=='services' ? 'active' : '' ?>">
                                <a class="nav-link" href="services">Services </a>
                            </li>
                            <li class="nav-item <?= $page=='gallery' ? 'active' : '' ?>">
                                <a class="nav-link" href="gallery">Gallery </a>
                            </li>
                            <li class="nav-item <?= $page=='contact' ? 'active' : '' ?>">
                                <a class="nav-link" href="contact">Contact Us </a>
                            </li>
                            <li class="nav-item <?= $page=='quote' ? 'active' : '' ?>">
                                <a class="nav-link" href="quote">Request a Quote </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Ends -->