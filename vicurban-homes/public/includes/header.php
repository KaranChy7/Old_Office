<!doctype html>
<html lang="en">


<?php
    $company    = "KD Painters and Decorators Pty Ltd";
    $owner      = " ";
    $phone      = "0424 124 993";
    $email      = "kdnoor1229@icloud.com";
    $address    = "Ridgehaven SA 5097";
    $abn        = "29 678 893 868";
    $map        = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26202.945529397333!2d138.68547940461283!3d-34.82183411408684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab0b4af0debd6ef%3A0x5033654628ebe80!2sRidgehaven%20SA%205097%2C%20Australia!5e0!3m2!1sen!2sus!4v1776222290793!5m2!1sen!2sus" ;
    $exp        = "5+_Years";
    $working_hrs = "7 Am - 5 PM";
    $work_day   = "Mon - Sat";
    $facebook   = "https://www.facebook.com/";
    $instagram  = "https://www.instagram.com/";
    $hipage     = "https://hipages.com.au/connect/";
    $google     = "https://www.google.com/ ";
    $thanks     = "";
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
    <?php if($page != 'thanks') { ?>
    <header class="header stricky">
        <div class="navtop">
            <div class="container">
                <div class="header-wrapper">
                    <ul>
                        <li>
                            <a href="tel:<?= $phone ?>" class="item d-flex">
                                <i class="fa fa-phone"></i>
                                <h6><?= $phone ?></h6>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:<?= $email ?>" class="item d-flex">
                                <i class="fa fa-envelope"></i>
                                <h6><?= $email ?></h6>
                            </a>
                        </li>
                        <li>
                            <div class="item d-flex">
                                <i class="fa fa-clock-o"></i>
                                <h6><?= $working_hrs ?></h6>
                            </div>
                        </li>
                    </ul>
                    <ul class="icon">
                        <li>
                            <div class="social-icons">
                                <a href="<?=  $google ?>" target="_blank" class="item"><i class="fab fa-google"></i></a>
                                <a href="<?= $facebook ?>" target="_blank" class="item"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="<?= $instagram ?>" target="_blank" class="item"><i
                                        class="fab fa-instagram"></i></a>


                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
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
                        <li class="nav-item <?= $page == 'home' ? 'active' : ''; ?>">
                            <a href="./" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item <?= $page == 'about_us' ? 'active' : ''; ?>">
                            <a href="about_us" class="nav-link">About Us</a>
                        </li>

                        <li class="nav-item <?= $page == 'our_services' ? 'active' : ''; ?>">
                            <a href="our_services" class="nav-link">Services</a>
                        </li>

                        <li class="nav-item <?= $page == 'gallery' ? 'active' : ''; ?>">
                            <a href="gallery" class="nav-link">Gallery</a>
                        </li>

                        <li class="nav-item <?= $page == 'contact' ? 'active' : ''; ?>">
                            <a href="contact" class="nav-link contact">Contact Us</a>
                        </li>
                        <li class="nav-item <?= $page == 'quote' ? 'active' : ''; ?>">
                            <a href="quote" class=" btn btn-custom-large btn-secondary">Request a quote</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Ends -->
    <?php } ?>