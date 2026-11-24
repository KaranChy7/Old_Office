<!doctype html>
<html lang="en">


<?php
$company    = "IR Iron Door";
$owner      = "";
$phone      = "0432 557 086";
$email      = "info@irirondoor.com.au";
$address    = "31/283-293 Rex road campbellfield vic 3061 Australia";
$abn        = "31 575 903 689";
$map        = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3298.968430788873!2d144.9587642758774!3d-37.64657287201799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad64fd5887c18bf%3A0xd9a7caca63969b75!2sUnit%2031%2F283-293%20Rex%20Rd%2C%20Campbellfield%20VIC%203061%2C%20Australia!5e1!3m2!1sen!2snp!4v1791957757253!5m2!1sen!2snp";
$exp        = "";
$call_hrs   = " ";
$work_hrs   = "8am to 5pm";
$work_day   = "Mon - Fri";
$facebook   = "https://www.facebook.com/";
$instagram  = "https://www.instagram.com/";
$hipage     = "https://hipages.com.au/connect/";
$linkedin   = "https://www.linkedin.com/";
$google     = "https://www.google.com/";
$thanks     = "";
?>

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= isset($page_title) ? $page_title . ' | ' . $company : $company; ?></title>

    <!-- LInks -->
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" />
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
    <?php if ($page != 'thanks') { ?>
    <header class="header fixed-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="./">
                    <figure>
                        <img src="images/logo.png" alt="<?= $company; ?> logo">
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
                        <path fill="none" stroke="#080808" stroke-width="2" d="M5,5 L19,19 M19,5 L5,19" />
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item <?= $page == 'home' ? 'active' : ''; ?>">
                            <a href="./" class="nav-link">home</a>
                        </li>
                        <li class="nav-item <?= $page == 'about_us' ? 'active' : ''; ?>">
                            <a href="about_us" class="nav-link">about us</a>
                        </li>
                        <li class="nav-item dropdown <?= $page == 'our_services' ? 'active' : ''; ?>">
                            <a href="our_services" class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">our services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="our_services">All Services</a></li>
                                <li><a class="dropdown-item" href="doors">Doors</a></li>
                                <li><a class="dropdown-item" href="gates">Gates</a></li>
                                <li><a class="dropdown-item" href="fences">Fences</a></li>
                                <li><a class="dropdown-item" href="metal-doors">Metal Doors</a></li>
                                <li><a class="dropdown-item" href="commercial-metalworks">Commercial Metalwork</a></li>
                                <li><a class="dropdown-item" href="residential-metalworks">Residential Metalwork</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?= $page == 'our_gallery' ? 'active' : ''; ?>">
                            <a href="our_gallery" class="nav-link">our projects</a>
                        </li>
                        <li class="nav-item <?= $page == 'contact_us' ? 'active' : ''; ?>">
                            <a href="contact_us" class="nav-link">contact us</a>
                        </li>
                        <li>
                            <a href="request_a_quote" class="btn btn-primary btn-custom-medium">free quote</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Ends -->
    <?php } ?>