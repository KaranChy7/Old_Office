<!doctype html>
<html lang="en">


<?php
$company    = "AC BUILT GROUP";
$owner      = "";
$phone      = "0447 137 382";
$email      = "choukeirali10@gmail.com";
$email1     = "info@acb.com.au";
$email2     = "info@acbuiltgroup.com.au"; 
$address    = "NSW ";
$abn        = "33 633 456 990";
$map        = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d400000!2d150.9!3d-33.85!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney%20NSW%2C%20Australia!5e0!3m2!1sen!2snp"; 
$exp        = "";
$work_hrs   = "9 AM - 5 PM ";
$work_hrs1  = "";
$work_day   = "Mon - Fri ";
$facebook   = "https://www.facebook.com/ ";
$instagram  = "https://www.instagram.com/ ";
$google     = "https://www.google.com/";
$linkedin   = "https://www.linkedin.com/";
$hipage     = "https://hipages.com.au/connect/";
$youtube    = "https://www.youtube.com/";
$thanks     = "";
?>

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title><?= $company; ?></title> -->

    <?php
        $current_page = basename($_SERVER['PHP_SELF'], ".php");

        // convert file name into readable title
        $page_title_auto = ucwords(str_replace(['-', '_'], ' ', $current_page));

        // special case for home page
        if ($current_page == "index") {
            $page_title_auto = "Home";
        }
    ?>

    <title><?= $page_title_auto . " | " . $company; ?></title>

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
    <header class="header <?= $page != 'home' ? 'main-header' : ''; ?>">
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
                    <svg viewBox="0 0 100 80" width="15" height="15" class="burger">
                        <rect width="100" height="10"></rect>
                        <rect y="30" width="100" height="10"></rect>
                        <rect y="60" width="100" height="10"></rect>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="15" height="15" class="cross">
                        <path fill="none" stroke="#000" stroke-width="2" d="M5,5 L19,19 M19,5 L5,19" />
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="social-icon-wrap">
                        <?php if ($facebook) { ?>
                        <a href="<?= $facebook; ?>" class="icon">
                            <i class="fa-brands fa-square-facebook"></i>
                        </a>
                        <?php } ?>
                        <?php if ($instagram) { ?>
                        <a href="<?= $instagram; ?>" class="icon">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <?php } ?>
                        <?php if ($google) { ?>
                        <a href="<?= $google; ?>" class="icon">
                            <i class="fa-brands fa-google"></i>
                        </a>
                        <?php } ?>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item <?= $page == 'home' ? 'active' : ''; ?>">
                            <a href="./" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item <?= $page == 'about_us' ? 'active' : ''; ?>">
                            <a href="about_us " class="nav-link">About us</a>
                        </li>
                        <li class="nav-item <?= $page == 'the-facts' ? 'active' : ''; ?>">
                            <a href="the-facts" class="nav-link">facts</a>
                        </li>
                        <li class="nav-item <?= $page == 'our_services' ? 'active' : ''; ?>">
                            <a href="our-services" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item <?= $page == 'our_project' ? 'active' : ''; ?>">
                            <a href="our_gallery" class="nav-link">projects</a>
                        </li>

                        <li class="nav-item <?= $page == 'contact_us' ? 'active' : ''; ?>">
                            <a href="contact_us" class="nav-link">contact us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Ends -->
    <?php } ?>