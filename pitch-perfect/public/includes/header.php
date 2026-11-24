<!doctype html>
<html lang="en">


<?php
$company        = "DED Pro Tiling and Paving";
$owner          = "";
$phone          = "0432 238 284";
$email          = "info@dedprotiling.com.au";
$address        = "CLYDE NORTH VIC 3978";
$abn            = "12 550 653 410";
$map            = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100471.21668023156!2d145.2765553630831!3d-38.10005227854102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad61b27e16a6a6f%3A0x5045675218cfc20!2sClyde%20North%20VIC%203978%2C%20Australia!5e0!3m2!1sen!2snp!4v1734674108424!5m2!1sen!2snp";
$exp            = "10";
$working_hrs    = "8AM to 6PM  ";
$work_day       = "Mon  - Sat ";
$facebook       = "https://www.facebook.com/ ";
$instagram      = "https://www.instagram.com/";
$hipage         = "https://hipages.com.au/connect/";
$thanks         = "";
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" />
    <!-- FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" /> -->
    <!-- Magnific Popup -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
    <!-- Slick Slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <!-- Custom Style -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" />


</head>
<!-- End of Head Section -->

<body>
    <header class="header fixed-header">
        <div class="container">
            <div class="nav-top d-flex">
                <a class="navbar-brand" href="./">
                    <figure>
                        <img src="images/logo.png" alt="" class="">
                    </figure>
                </a>
                <div class="company-info d-flex">
                    <a href="tel:<?= $phone; ?>" class="info d-flex">
                        <i class="fas fa-phone-alt"></i>
                        <p><?= $phone; ?></p>
                    </a>
                    <a href="mailto:<?= $email; ?>" class="info d-flex">
                        <i class="fas fa-envelope"></i>
                        <p><?= $email; ?></p>
                    </a>
                    <div class="info d-flex">
                        <i class="fas fa-clock"></i>
                        <p><?= $working_hrs; ?></p>
                    </div>
                    <div class="info social-info">
                        <div class="social-icons d-flex">
                            <a href="" target="_blank" class="social-link"><i class="fab fa-facebook-f"></i> </a>
                            <a href="" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="./">
                    <figure>
                        <img src="images/logo.png" alt="" class="">
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
                        <li class="nav-item <?php if ($page == 'home') { echo 'active';} ?>">
                            <a href="./" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item <?php if ($page == 'about') { echo 'active';} ?>">
                            <a href="about" class="nav-link">About Us</a>
                        </li>

                        <li class="nav-item <?php if ($page == 'service') { echo 'active';} ?>">
                            <a href="services" class="nav-link">service</a>
                        </li>

                        <li class="nav-item <?php if ($page == 'gallery') { echo 'active';} ?>">
                            <a href="gallery" class="nav-link">Gallery</a>
                        </li>

                        <li class="nav-item <?php if ($page == 'contact') { echo 'active';} ?>">
                            <a href="contact" class="nav-link">Contact Us</a>
                        </li>

                        <li class="nav-item <?php if ($page == 'quote') { echo 'active';} ?>">
                            <a href="quote" class="nav-link">Get Free Quote</a>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </header>
    <!-- Header Ends -->