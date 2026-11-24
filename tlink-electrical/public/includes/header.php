<!doctype html>
<html lang="en">

<?php
$company = "J Gill Cleaning Services";
$phone = "0401 614 564";
$email = "info@jgillcleaning.com.au";
$address = "Perth WA 6000";
$abn = "65 863 411 587";
$exp = "10";
$map = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d865839.2722205648!2d115.3021106068582!3d-32.03719287199546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32966cdb47733d%3A0x304f0b535df55d0!2sPerth%20WA%2C%20Australia!5e0!3m2!1sen!2snp!4v1782108814370!5m2!1sen!2snp";
$work_hrs = "7am - 7pm";
$work_day = "Mon - Sun";
$facebook = "https://www.facebook.com/";
$instagram = "https://www.instagram.com/";
$hipage = "https://www.highpage.com/connect/";
$linkedin = "https://www.linkedin.com/";
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
    <!-- FontAwesome version 5.15.3 -->
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
        <div class="top-navbar">
            <div class="container">
                <div class="top-wrapper">
                    <a class="navbar-brand" href="./">
                        <figure>
                            <img src="images/logo.png" alt="Logo Image">
                        </figure>
                    </a>
                    <div class="co-info">
                        <a href="tel:<?= $phone; ?>" class="details">
                            <div class="icon">
                                <i class="fas fa-phone-volume bent"></i>
                            </div>
                            <div class="cont">
                                <p>Phone</p>
                                <h6><?= $phone; ?></h6>
                            </div>
                        </a>
                        <a href="mailto:<?= $email; ?>" class="details">
                            <div class="icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="cont">
                                <p>Email Address</p>
                                <h6><?= $email; ?></h6>
                            </div>
                        </a>
                        <div class="top-nav-button">
                            <a href="quote" class="btn btn-custom-large btn-secondary">Request a Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
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
                        <li class="nav-item  <?= $page == 'home' ? 'active' : '' ?>">
                            <a href="./" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item <?= $page == 'about' ? 'active' : '' ?> ">
                            <a href="about" class="nav-link">About Us</a>
                        </li>

                        <li class="nav-item <?= $page == 'service' ? 'active' : '' ?>">
                            <a href="service" class="nav-link">Services</a>
                        </li>

                        <li class="nav-item <?= $page == 'gallery' ? 'active' : '' ?>">
                            <a href="gallery" class="nav-link">Gallery</a>
                        </li>

                        <li class="nav-item <?= $page == 'contact' ? 'active' : '' ?>">
                            <a href="contact" class="nav-link">Contact Us</a>
                        </li>

                        <li class="nav-item nav-item-quote-btn">
                            <a href="quote" class="nav-link">Request a Quote</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav nav-icon">
                        <div class="item social-icons">
                            <a href="<?= $facebook ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="<?= $twitter ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="<?= $instagram ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header Ends -->