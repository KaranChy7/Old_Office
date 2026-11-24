<!doctype html>
<html lang="en">


<?php
$owner = "";
$company = "Lone Wolf Contracting Pty Ltd";
$phone = "0423 009 195";
$phone1 = " ";
$email = "lonewolfcontracting@myyahoo.com";
$address = "15 Hacking Drive, Narellan Vale, NSW 2567, Australia";
$abn = "65 701 619 249";
$map = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.8414189716336!2d150.7329882757166!3d-34.05659217315536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12f04db167a8d7%3A0x324b9a66d0f91f4f!2s15%20Hacking%20Dr%2C%20Narellan%20Vale%20NSW%202567%2C%20Australia!5e1!3m2!1sen!2snp!4v1791943076514!5m2!1sen!2snp";
$exp = "5";
$qbcc = "";
$work_hrs = "5 AM to 8 PM";
$work_day = "Mon to Sun";
$call_hrs = "6 AM to 6 PM";
$facebook = "https://www.facebook.com/";
$instagram = "https://www.instagram.com/";
$google = "https://www.google.com/";
$hipage = "https://hipages.com.au/connect/";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <!-- Magnific Popup -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <!-- Slick Slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <!-- Scroll Animation Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <!-- Performance Optimization -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <!-- Custom Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">


</head>
<!-- End of Head Section -->

<body>
    <header class="header <?= $page != 'home' ? 'main-header' : ''; ?> ">
        <div class="container">
            <div class="top-nav">
                <a class="navbar-brand" href="./">
                    <figure>
                        <img src="images/logo.png" alt="Logo">
                    </figure>
                </a>
                <div class="button">
                    <a href="estimate" class="btn btn-primary btn-custom-mid">
                        <i class="fa-solid fa-calendar-days"></i>
                        <span>get a free quote</span>
                    </a>
                </div>
            </div>
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

                        <li class="nav-item  <?= $page == 'services' ? 'active' : ''; ?>">
                            <a href="services" class="nav-link">services</a>
                        </li>

                        <li class="nav-item <?= $page == 'gallery' ? 'active' : ''; ?>">
                            <a href="gallery" class="nav-link">gallery</a>
                        </li>

                        <li class="nav-item <?= $page == 'contact' ? 'active' : ''; ?>">
                            <a href="contact_us" class="nav-link">contact</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Ends -->