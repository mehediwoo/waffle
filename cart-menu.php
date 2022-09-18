<?php
include "db/db.php";
include "db/functions.php";

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>WAFFLE CITY | Menu Cart</title>
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
                <li class="breadcrumb-item active " aria-current="page">Card Menu</li>
            </ol>
        </nav>
    </section>


    <!-- Bread Cump End -->

    <!-- Menu Card Start -->
    <div class="container col-md-12 mt-5 menu-card-container ">
        <h3>Card Menu</h3>
        <div class="flipbook-viewport">
            <div class="container">
                <div class="flipbook shadow">
                    <?php
$sql = "SELECT * FROM menucard";
$stmt = $db->query($sql);
while ($card = $stmt->fetch()) {

    ?>
                    <div style="background-image:url(menu-pages/<?php echo $card['img'] ?>)"></div>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="middle-container">

        </div>

        <div class="flip-control d-flex pt-3">
            <a href="#" id="prev" class=""> <i class="fa-solid fa-arrow-left"></i> </a>
            <p class="px-4 pt-2">Page: <span id="pageFld">1</span> / <?php echo menu(); ?></p>
            <a href="#" id="next" class=""> <i class="fa-solid fa-arrow-right"></i> </a>

        </div>
        <!-- Sound For Flip Page -->
        <audio id="audio" src="page-flip-02.mp3"></audio>
    </div>
    <!-- Menu Card End -->


    <!-- Branding Start -->

    <?php

$logo = "SELECT * FROM  header";
$getLo = $db->query($logo);
while ($result = $getLo->fetch()) {

    ?>
    <section class="container-fluid py-4">
        <div class="branding text-center">
            <img data-aos="fade-down" data-aos-duration="1000" src="assets/img/<?php echo $result['topFooterLogo'] ?>"
                class="img-fluid" style="width: 230px;height: 110px" alt="">
        </div>
    </section>

    <?php }?>

    <!-- Branding End -->


    <!-- Footer Start -->

    <?php include "helper/footer.php"?>

    <!-- Footer End -->



    <!-- Script Start -->


    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/0e5659ef6a.js" crossorigin="anonymous"></script>
    <!-- Jqueary -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Turn JS -->
    <script type="text/javascript" src="assets/js/jquery.min.1.7.js"></script>
    <script type="text/javascript" src="assets/js/modernizr.2.5.3.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
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





        // Turn Js Start
        $(document).ready(function () {
            function loadApp() {

                // Create the flipbook
                var oTurn = $(".flipbook").turn({
                    width: 750,

                    // Height

                    height: 600,

                    // Elevation

                    elevation: 50,

                    // Enable gradients

                    gradients: false,
                    // display: "single",

                    // Auto center this flipbook

                    autoCenter: true,
                    when: {
                        turning: function (e, page, view) {
                            var audio = document.getElementById("audio");
                            audio.play();
                        }
                    },
                    next: true
                });

                $("#prev").click(function (e) {
                    e.preventDefault();
                    oTurn.turn("previous");
                });

                $("#next").click(function (e) {
                    e.preventDefault();
                    oTurn.turn("next");
                });
            }
            $(window).resize(function () {
                var win = $(this); //this = window
                if (win.width() >= 820) {
                    $(".flipbook").turn('display', 'double');
                } else {
                    $(".flipbook").turn('display', 'double');
                }
            });

            $(".flipbook").bind("turned", function (event, page, view) {
                $("#pageFld").html(page);
                console.log(page);
            });

            $("#pageFld").change(function () {
                $(".flipbook").turn("page", $(this).val());
            });

            // alert($('.flipbook').turn('width'));


            yepnope({
                test: Modernizr.csstransforms,
                yep: ['assets/js/turn.js'],
                nope: ['assets/js/turn.html4.min.js'],
                both: ['assets/css/basic.css'],
                complete: loadApp
            });

            // Turn Js End

            // Preloader
            var loader = document.getElementById("preloader");
            window.addEventListener("load", function () {
                loader.style.display = "none";
            })

        });
    </script>

</body>

</html>