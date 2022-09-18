<?php
    include "db/db.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>WAFFLE CITY | History</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/vnd.microsoft.icon" href="assets/favicon.ico">
        <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">

        <!-- Css Start -->
        <!-- Aos Animate -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Swiper Js -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <!-- Owl Carosel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.css">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Custom Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Css End -->

    </head>

<body>
    <!-- Preloader -->
    <div id="preloader">

    </div>

    <!-- Bottom To  Top Button -->
    <a href="#" class="btt-button d-none"><i class="fa-solid fa-arrow-up px-5"></i></a>

    <!-- Top Navigation Bar Start -->
    <?php include "helper/topNav.php"?>


    <!-- Navbar Start -->
    <?php include "helper/menu.php"?>
    <!-- Navbar End -->




    <!-- Bread Cump Start -->


    <section class="container-fluid py-3" style="background-color: #F5F5F5;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pt-4" style="margin-left: 42%;">
                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Welcome</a></li>
                <li class="breadcrumb-item active " aria-current="page">Notre histoire</li>
            </ol>
        </nav>
    </section>


    <!-- Bread Cump End -->



    <!-- Main Section Start -->

    <div class="container-fluid py-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="wrapper-container history-wrapper">
            <?php 
                $sql = "SELECT * FROM  our_history";
                $stmt= $db->query($sql);
                while ($row = $stmt->fetch()) {
                       
            ?>
            <h4 class="pb-4">
                <?php echo $row['title']?>
            </h4>
            <p style="font-weight: 700; ">
            <?php echo $row['history']?>
            </p>
            <?php } ?>
        </div>
    </div>


    <!-- Main Section End -->




    <!-- Branding Start -->
    <?php include "helper/branding.php"?>
    <!-- Branding End -->


    <!-- Footer Start -->
    <?php include "helper/footer.php"?>
    <!-- Footer End -->




    <!-- Script Start -->

    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/0e5659ef6a.js" crossorigin="anonymous"></script>

    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



    <!-- jquery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script>
        // AOS Animation Init
        AOS.init();


        var btn = $('.btt-button');

        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                btn.removeClass('d-none');
            } else {
                btn.addClass('d-none');
            }
        });

        btn.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, '250');
        });

        var brand = $('.navbar-brand');
        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                brand.removeClass('d-none');
            } else {
                brand.addClass('d-none');
            }
        });



        // var sbtn = $('.top-search');
        $('.top-search').click(function () {
            $('.search-form').removeClass('d-none');
        })

        // Preloader
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function () {
            loader.style.display = "none";
        })
    </script>


</body>

</html>