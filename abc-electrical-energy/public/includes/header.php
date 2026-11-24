<!doctype html>
<html lang="en">


<?php

$company    = "Nasiri Building & Renovation Services";
$owner      = "";
$email      = "info@nasiribuilding.com.au";
$phone      = "0450 504 788";
$address    = "14 Milner Road, Guildford NSW 2161";
$abn        = "70 644 192 281";
$map        = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2894.8346025018036!2d150.98788347570797!3d-33.855825373231596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12bd18482f2021%3A0xc8c3cc8db5adbc19!2s14%20Milner%20Rd%2C%20Guildford%20NSW%202161%2C%20Australia!5e1!3m2!1sen!2snp!4v1759200642036!5m2!1sen!2snp";
$exp        = "23";
$license_no = " ";
$work_hrs   = "7 AM – 5 PM";
$work_day   = "Mon - Fri";
$facebook   = "https://www.facebook.com/";
$instagram  = "https://www.instagram.com/";
$hipage     = "https://hipages.com.au/connect/";
$google     = "https://google.com/";
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
    <?php if ($page != 'thanks') { ?>
    <header class="header fixed-header">
        <div class="container">
            <nav class="top-navbar">
                <a href="./" class="navbar-brand">
                    <div class="figure">
                        <img src="images/logo.png" alt="Logo Image">
                    </div>
                </a>
                <div class="nav-info">
                    <div class="nav-info-block">
                        <div class="nav-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="nav-content">
                            <h5>Address</h5>
                            <p><?= $address; ?></p>
                        </div>
                    </div>
                    <div class="nav-info-block">
                        <div class="nav-icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="nav-content">
                            <h5>Work Time</h5>
                            <p><?= $work_hrs; ?></p>
                        </div>
                    </div>
                    <a href="<?= $phone; ?>" class="nav-info-block">
                        <div class="nav-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="nav-content">
                            <h5>Call Us</h5>
                            <p><?= $phone; ?></p>

                        </div>
                    </a>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="./">
                    <img src="images/logo.png" alt="Logo Image">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">

                    <svg viewBox="0 0 100 80" width="22" height="20">
                        <rect width="100" height="10"></rect>
                        <rect y="30" width="100" height="10"></rect>
                        <rect y="60" width="100" height="10"></rect>
                    </svg>

                </button>
                <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item <?= $page == 'home' ? 'active' : ''; ?>">
                            <a href="./" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item <?= $page == 'about' ? 'active' : ''; ?>">
                            <a href="about" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item <?= $page == 'services' ? 'active' : ''; ?>">
                            <a href="services" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item <?= $page == 'project' ? 'active' : ''; ?>">
                            <a href="our_project" class="nav-link">Gallery</a>
                        </li>

                        <li class="nav-item <?= $page == 'contact' ? 'active' : ''; ?>">
                            <a href="contact_us" class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="quote" class="btn btn-custom-mid btn-primary">Request a Quote</a>
                        </li>
                    </ul>
                    <div class="nav-social">
                        <div class="nav-social-block">
                            <a href="<?= $facebook ?>" target="_blank" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                        <div class="nav-social-block">
                            <a href="<?= $google ?>" target="_blank" class="social-icon">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <?php } ?>
    <!-- Header Ends -->