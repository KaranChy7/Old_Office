<!doctype html>
<html lang="en">


<?php
    $owner      = " ";
    $company    = "ATT Home Improvement";
    $phone      = "0434 450 520";
    $email      = "admin@atthomeimprovement.com.au";
    $abn        = "60 950 474 258";
    $bdl        = "BDL: 210271";
    $address    = "CROYDON PARK SA 5008";
    $map        = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13092.104796882353!2d138.55629245988774!3d-34.8806884156967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab0c89987462691%3A0x5033654628ead10!2sCroydon%20Park%20SA%205008%2C%20Australia!5e0!3m2!1sen!2snp!4v1777954291496!5m2!1sen!2snp";
    $exp        = "30";
    $work_hrs   = "8 AM - 4 PM";
    $work_day   = "";
    $facebook   = "https://www.facebook.com/";
    $instagram  = "https://www.instagram.com/";
    $google     = "https://www.google.com/";
    $linkedin   = "https://www.linkedin.com/";
    $thanks     = " ";
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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome version 5.15 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Simple Line Icons -->
    <!-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" /> -->

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
    <?php if($page != 'thanks'){ ?>
    <header class="header fixed-header">
        <div class="container">
            <nav class="top-navbar">
                <a href="./" class="navbar-brand">
                    <div class="figure">
                        <img src="images/logo.png" alt="White Logo Image">
                    </div>
                </a>
                <div class="nav-info">
                    <div class="nav-info-block">
                        <div class="nav-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="nav-content">
                            <h5>Address</h5>
                            <p><?= $address;?></p>
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
                    <a href="<?= $phone;?>" class="nav-info-block">
                        <div class="nav-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="nav-content">
                            <h5>Call Us</h5>
                            <p><?= $phone;?></p>
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
                        <li class="nav-item <?php if($page== 'home'){echo 'active';} ?>">
                            <a href="./" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item <?php if($page== 'about'){echo 'active';} ?>">
                            <a href="about" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item <?php if($page== 'services'){echo 'active';} ?>">
                            <a href="services" class="nav-link">Services</a>
                        </li>
                        <!-- <li class="nav-item dropdown <?= $page == 'services' ? 'active' : '' ?>">
                            <a href="#services" class="nav-link dropdown-toggle">Services</a>
                            <ul class="dropdown-menu">
                                <li><a href="services#service1" class="dropdown-item">Balcony Waterproofing</a></li>
                                <li><a href="services#service2" class="dropdown-item">Bathroom Waterproofing</a></li>
                                
                            </ul>
                        </li> -->
                        <li class="nav-item <?php if($page== 'gallery'){echo 'active';} ?>">
                            <a href="gallery" class="nav-link">Gallery</a>
                        </li>

                        <li class="nav-item <?php if($page== 'contact'){echo 'active';} ?>">
                            <a href="contact" class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="quote" class="btn btn-custom-medium btn-secondary">Get a Quote</a>
                        </li>
                    </ul>
                    <div class="nav-social">
                        <?php if($facebook) { ?>
                        <div class="nav-social-block">
                            <a href="<?= $facebook ?>" target="_blank" class="social-icon"><i
                                    class="fab fa-facebook-f"></i></a>
                        </div>
                        <?php } ?>
                        <?php if($google) { ?>
                        <div class="nav-social-block">
                            <a href="<?= $google ?>" target="_blank" class="social-icon"><i
                                    class="fab fa-google"></i></a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Ends -->
    <?php } ?>