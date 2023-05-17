<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Store</title>
    <!-- link css -->
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- isotope -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <?php
    require ("functions.php");
    ?>

</head>

<body>
    <!-- start header -->
    <header id="header">

        <div class="strip px-4 py-1 d-flex justify-content-between">
            <p class="font-text font-size-12 text-black-50 p1">Hà Nội: 347 Đội Cấn | 244A Lạc Long Quân</p>
            <div>
                <?php if(!isset($_SESSION["login"])){?>
                    <a href="login.php" class="font-text font-size-14 p1 px-5 remove-underline">Đăng nhập</a>
                    <?php } ?>
                    <?php if(isset($_SESSION["login"])){?>
                        <a href="index.php" class="font-text font-size-14 p1 remove-underline"><?php echo $_SESSION["email"]?></a>
                        <span><a href="logout.php" class="font-text font-size-14 remove-underline text-danger">, Đăng xuất</a></span>
                        <?php } ?>
             </div>
        </div>

        <!-- nav -->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <div class="container-fluid">
                <a class="navbar-brand" href="../project2/">Mobile Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active px-2">
                            <a class="nav-link" href="http://localhost/codecuaduc/project2/#top-sale">HOT SALE</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="http://localhost/codecuaduc/project2/#products">Điện thoại <i class="fas fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="http://localhost/codecuaduc/project2/#blogs">Tin tức</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="#">Sắp ra mắt</a>
                        </li>
                    </ul>
                    <form action="#" class="font-size-14 font-rale">
                        <?php if(!isset($_SESSION["login"])){?>
                            <a href="login.php" class="py-2 rounded-pill color-first-bg remove-underline1">
                                <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                                <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                            </a>
                        <?php } ?>
                        <?php if(isset($_SESSION["login"])){?>
                            <a href="cart.php" class="py-2 rounded-pill color-first-bg remove-underline1">
                                <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                                <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getCartData($_SESSION["user_id"])); ?></span>
                            </a>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- main site -->
    <main id="main-site">