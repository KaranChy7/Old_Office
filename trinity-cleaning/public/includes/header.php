<!doctype html>
<html lang="en">


<?php
$company = "QUICK BRICK PTY LTD";
$owner = "";
$phone = "0478 773 688";
$phone1 = " ";
$email = "info@quickbrick.com.au";
$address = "Goulburn Valley";
$abn = "13 146 839 518";
$map = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25696.70952766564!2d145.37828940909358!3d-36.38284693158602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad884065e55f835%3A0xb62bf72f8c621b19!2sGoulburn%20Valley!5e0!3m2!1sen!2snp!4v1789350307017!5m2!1sen!2snp";
$exp = "27";
$QBCC = " ";
$work_hrs = "8 am to 6 pm";
$work_day = "Mon to Fri";
$facebook = "https://www.facebook.com/ ";
$instagram = "https://www.instagram.com/";
$google = "https://www.google.com/";
$linkedin = "https://www.linkedin.com/";
$hipage = "https://hipages.com.au/connect/";
$youtube = "https://www.youtube.com/";
$formAPI = "A5IH4H9ibw8UxfKzhT06PIYonPjLUV";
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
    <header class="header <?= $page != 'home' ? 'main-header' : ''; ?> ">
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
                    <div class="wrap-navCollapse">
                        <div class="estimate-nav">
                            <a href="quote">Get an estimate</a>
                            <span>or</span>
                            <a href="tel:<?= $phone; ?>" class="phoneNO"><?= $phone; ?></a>
                        </div>
                        <ul class="navbar-nav">
                            <li class="nav-item <?= $page == 'home' ? 'active' : ''; ?>">
                                <a href="./" class="nav-link">home</a>
                            </li>

                            <li class="nav-item <?= $page == 'about' ? 'active' : ''; ?>">
                                <a href="about" class="nav-link">about us</a>

                            </li>
                            <!-- <li class="nav-item dropdown <?= $page == 'about' ? 'active' : ''; ?>">
                                <a href="about" class="nav-link">about us</a>
                                <i class="fa-solid fa-chevron-down"></i>
                                <ul class="dropdown-menu">
                                    <li class="menu-item">
                                        <a href="#" class="nav-link">bi fold windows</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#" class="nav-link">aluminium windows</a>
                                    </li>
                                    
                                </ul>
                            </li> -->
                            <li class="nav-item dropdown <?= $page == 'services' ? 'active' : ''; ?>">
                                <a href="services" class="nav-link">our services</a>
                                <!--<i class="fa-solid fa-chevron-down"></i>
                                <ul class="dropdown-menu">
                                    <li class="menu-item">
                                        <a href="#" class="nav-link">door supplies</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#" class="nav-link">aluminium doors</a>
                                    </li>                                    
                                </ul> -->
                            </li>
                            <li class="nav-item <?= $page == 'project' ? 'active' : ''; ?>">
                                <a href="project" class="nav-link"> gallery</a>

                            </li>
                            <!-- <li class="nav-item <?= $page == 'service-area' ? 'active' : ''; ?>">
                                <a href="#service-area" class="nav-link">service area</a>
                            </li> -->
                            <li class="nav-item <?= $page == 'contact' ? 'active' : ''; ?>">
                                <a href="contact_us" class="nav-link">contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Ends -->