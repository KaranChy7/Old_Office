<!doctype html>
<html lang="en">


<?php
$company    = "True Tee Finishes";
$owner      = " ";
$phone      = "+61 401 801 433";
$email      = "info@trueteefinishes.com.au";
$address    = "Hilbert WA 6112, Perth, Western Australia";
$abn        = "69 644 200 765";
$map        = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54031.73720877251!2d115.9421029698466!3d-32.17771762319002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a3292196ea67fd5%3A0x504f0b535e16590!2sHilbert%20WA%206112%2C%20Australia!5e0!3m2!1sen!2snp!4v1789694243279!5m2!1sen!2snp";
$exp        = "";
$work_day   = "Mon - Fri";
$work_hrs   = "7 AM - 5 PM";
$facebook   = "https://www.facebook.com/ ";
$instagram  = "https://www.instagram.com/";
$hipage     = "https://hipages.com.au/connect/";
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
    <header class="header <?php if ($page != 'home') {
        echo 'main-header';
    } ?>">
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
                        <li class="nav-item <?php if ($page == 'home') {
                            echo 'active';
                        } ?>">
                            <a href="./" class="nav-link">home</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'about_us') {
                            echo 'active';
                        } ?>">
                            <a href="about_us" class="nav-link">about us</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'our_services') {
                            echo 'active';
                        } ?>">
                            <a href="our_services" class="nav-link">our services</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'our_gallery') {
                            echo 'active';
                        } ?>">
                            <a href="our_gallery" class="nav-link">our gallery</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'contact_us') {
                            echo 'active';
                        } ?>">
                            <a href="contact_us" class="nav-link">contact us</a>
                        </li>
                        <!-- <li class="nav-item <?php if ($page == 'quote') {
                            echo 'active';
                        } ?>">
                            <a href="quote" class="nav-link">free quote</a>
                        </li> -->
                        <div class="button">
                            <a href="quote" class="btn btn-primary btn-custom-mid"> Get a free quote</a>
                        </div>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Ends -->