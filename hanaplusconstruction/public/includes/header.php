<?php
$company        = "Native Green Lawn And Garden Services";
$owner          = "";
$phone          = "0431 137 252";
$email          = "admin@nativegreenlawnandgardenservices.com.au";
// $email1         = "admin@shineflowservices.com.au";
$address        = "KELLYVILLE NSW 2155";
$abn            = "38 903 099 220";
$map            = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55385.22021231726!2d150.91609373641447!3d-33.70986731139352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129f063da3d783%3A0x5017d681632bc00!2sKellyville%20NSW%202155%2C%20Australia!5e1!3m2!1sen!2snp!4v1793260265096!5m2!1sen!2snp";
$exp            = "12";
$work_hrs       = "10 am to 5pm";
$work_day       = "Mon to Sat";
$facebook       = "https://www.facebook.com/";
$instagram      = "https://www.instagram.com/";
$google         = "https://www.google.com/";
$linkedin       = "https://www.linkedin.com/";
$twitter        = "https://www.twitter.com/";
$pinterest      = "https://www.pinterest.com/";
$hipage         = "https://hipages.com.au/connect/";
$googlereview   = "https://www.google.com/";

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php echo $company; ?>
    </title>

    <!-- LInks -->
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <!-- Simple Line Icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" />

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
    <header>
        <div class="top-header">
            <div class="container">
                <div class="wrap d-flex">
                    <p>Want a Quotation?</p>
                    <a href="#quote" class="btn-request"><span></span>Request a Quote</a>
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
                        <li class="nav-item <?php if ($page == 'home') { echo 'active';} ?>">
                            <a href="./" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'about') {echo 'active';} ?>">
                            <a href="#about" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'services') {echo 'active';} ?>">
                            <a href="#services" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'gallery') {echo 'active';} ?>">
                            <a href="#gallery" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'contact') {echo 'active';} ?>">
                            <a href="#contact" class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'quote') {echo 'active';} ?>">
                            <a href="#quote" class="nav-link">Request a Quote</a>
                        </li>
                    </ul>
                    <div class="button">
                        <a href="tel:<?php echo $phone; ?>" class="nav-link"><i class="fa fa-phone"></i>
                            <?php echo $phone; ?>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Ends -->
    <?php } ?>