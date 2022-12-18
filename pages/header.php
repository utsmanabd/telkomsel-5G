<?php include 'connect.php' ?>
<!DOCTYPE html>
<html>

<head>
    <title>Peta Jangkauan 5G Telkomsel</title>

    <style>
        #map {
            height: 650px;
            width: 100%;
        }

        /* Optional: Makes the sample page fill the window. */
    </style>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center ">
        <div class="container-fluid container-xxl d-flex align-items-center">

            <div id="logo" class="me-auto">
                <!-- Uncomment below if you prefer to use a text logo -->
                <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
                <a href="index.php" class="scrollto"><img src="assets/img/logo2.png" alt="" title=""></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Peta</a></li>
                    <li><a class="nav-link scrollto" href="#schedule">Lokasi</a></li>
                    <li class="dropdown"><a href="#"><span>Kategori</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="category-cluster.php">Cluster Residensial</a></li>
                            <li><a href="category-hotspot.php">5G Hotspot</a></li>
                            <li><a href="category-pendidikan.php">Pendidikan</a></li>
                            <li><a href="category-perkantoran.php">Perkantoran</a></li>
                            <li><a href="category-event.php">Event</a></li>
                            <li><a href="category-pemerintahan.php">Pemerintahan</a></li>
                            <li><a href="category-pariwisata.php">Pariwisata</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a class="buy-tickets scrollto glightbox bi bi-map-fill" href="maps.php"> Lihat Peta</a>

        </div>
    </header><!-- End Header -->