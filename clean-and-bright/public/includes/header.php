<!doctype html>
<html lang="en">

<?php
$company = "21 Degrees Acr";
$owner = "Moisa Virag";
$phone = "0404 187 185";
$phone1 = " ";
// $email = "info@21degreesacr.com.au";
$email = " admin@21degreesacr.com.au";
$email1 = "21degreesacr@gmail.com";
$address = "Ellenbrook WA 6069";
$abn = "99 243 832 307";
$exp = "Highly Experienced";
$work_hrs = "";
$work_day = "";
$facebook = "https://www.facebook.com/";
$instagram = "https://www.instagram.com/";
$google = "https://www.google.com/";
$linkedin = "https://www.linkedin.com/";
$hipage = "https://hipages.com.au/connect/";
$youtube = "https://www.youtube.com/";
$thanks = "";
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
    <!-- Css Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Custom Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">


</head>
<!-- End of Head Section -->

<body>
    <?php if ($page != 'thanks') { ?>
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
                        <li class="nav-item <?= $page == 'home' ? 'active' : ''; ?>">
                            <a href="./" class="nav-link">home</a>
                        </li>
                        <li class="nav-item <?= $page == 'about_us' ? 'active' : ''; ?>">
                            <a href="about_us" class="nav-link">about </a>
                        </li>
                        <li class="nav-item dropdown <?= $page == 'our_services' ? 'active' : '' ?>">
                            <a href="our_services" class="nav-link dropdown-toggle"> Services</a>
                            <ul class="dropdown-menu">
                                <li><a href="our_services#Service1" class="dropdown-item">Domestic Air Conditioning</a>
                                </li>
                                <li><a href="our_services#Service2" class="dropdown-item">Commercial Air
                                        Conditioning</a></li>
                                <li><a href="our_services#Service3" class="dropdown-item">Ducted Air Conditioning</a>
                                </li>
                                <li><a href="our_services#Service4" class="dropdown-item">Cool Room &amp; Freezer
                                        Refrigeration</a></li>
                                <li><a href="our_services#Service5" class="dropdown-item">Evaporative Cooling</a></li>
                                <li><a href="our_services#Service6" class="dropdown-item">Gas Reclaim &amp;
                                        Decommissioning</a></li>
                            </ul>
                        </li>
                        <li class="nav-item <?= $page == 'our_gallery' ? 'active' : ''; ?>">
                            <a href="our_gallery" class="nav-link">Gallery</a>
                        </li>
                        <!-- <li class="nav-item <?= $page == 'faq' ? 'active' : ''; ?>">
                            <a href="faq" class="nav-link">FAQ</a>
                        </li> -->
                        <li class="nav-item <?= $page == 'contact_us' ? 'active' : ''; ?>">
                            <a href="contact_us" class="nav-link">contact</a>
                        </li>
                        <!-- <li class="nav-item button <?= $page == 'quote' ? 'active' : ''; ?>">
                            <a href="#quote" class="nav-link">free quote</a>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Ends -->
    <?php } ?>