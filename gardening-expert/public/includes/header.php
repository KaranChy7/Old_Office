<?php

$company    = "Colls Rural Contractors";
$owner      = "Clay Peter Colls";
$phone      = "0477 607 186";
$telephone  = " ";
$email      = "admin@collsruralcontractors.com.au";
$address    = "Collinsville QLD 4804";
$abn        = " ";
$map        = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62418.28459315386!2d147.77930721729467!3d-20.557093229832613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6bd72539105ab5d9%3A0x400eef17f208200!2sCollinsville%20QLD%204804%2C%20Australia!5e1!3m2!1sen!2snp!4v1790829766320!5m2!1sen!2snp";
$exp        = "5";
$work_hrs   = "6 AM - 6 PM";
$work_day   = "7 days a week";
$hipage     = "";
$facebook   = "https://www.facebook.com/p/ ";
$insta      = "https://www.instagram.com/";
$google     = "https://www.google.com/";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $company; ?></title>

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
    <header class="header fixed-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="./">
                    <figure>
                        <img src="images/logo.png" alt="" class="">
                    </figure>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
                    <div class="navbar-top">

                    </div>
                    <div class="navbar-bottom">

                        <ul class="navbar-nav">
                            <li class="nav-item <?= $page == 'home' ? 'active' : ''; ?>">
                                <a href="./" class="nav-link">Home</a>
                            </li>

                            <li class="nav-item <?= $page == 'about' ? 'active' : ''; ?>">
                                <a href="about" class="nav-link">About Us</a>
                            </li>

                            <li class="nav-item <?= $page == 'service' ? 'active' : ''; ?>">
                                <a href="service" class="nav-link">Services</a>
                            </li>

                            <li class="nav-item <?= $page == 'gallery' ? 'active' : ''; ?>">
                                <a href="gallery" class="nav-link">Gallery</a>
                            </li>

                            <li class="nav-item <?= $page == 'contact' ? 'active' : ''; ?>">
                                <a href="contact" class="nav-link">Contact Us</a>
                            </li>
                            <li class="nav-item ">
                                <a href="quote" class="nav-link button">Request a Quote</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>