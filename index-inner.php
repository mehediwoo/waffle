<?php
include "db/db.php";
include "db/session.php";
if (!isset($_GET['product'])) {
    echo "<script>window.open('index.php','_self')</script>";
} else {
    $id = $_GET['product'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>WAFFLE CITY | Product</title>
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
                <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none">Welcome</a></li>
                <li class="breadcrumb-item"><a href="selection.html" class="text-decoration-none">Our Menu</a></li>
                </li>
                <li class="breadcrumb-item active " aria-current="page">Chicken</li>
            </ol>
        </nav>
    </section>


    <!-- Bread Cump End -->


    <!-- Item Wrapper Start -->
    <div class="wrapper-container">
        <div class="row">
            <?php
$sql = "SELECT * FROM  product WHERE id='$id' ";
$stmt = $db->query($sql);
while ($head = $stmt->fetch()) {

    ?>
            <div class="col-lg-5 col-md-12 col-sm-12  pt-3">
                <div class="item-image">
                    <img src="assets/img/<?php echo $head['foodImage'] ?>" alt="" class="img-fluid">
                    <div class="item-sm col-md-2 col-sm-2 col-lg-2 py-4">
                        <img src="assets/img/<?php echo $head['foodImage'] ?>" class="img-fluid" alt="">
                    </div>
                    <div class="product-details">
                        <button id="pdetail-btn">Product Details</button>
                        <!-- <button id="preview">Review</button> -->
                        <hr>
                        <div id="Product-details">
                            <p class=""><?php echo $head['Details'] ?></p>
                        </div>
                        <!-- <div id="review" class="product-review">
                            <button data-bs-toggle="modal" data-bs-target="#reviewModal">Be the first to write your
                                review!</button>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-12 col-sm-12 item-description pt-3">
                <span style="font-size: 19px; font-weight: 700; font-family: 'Philosopher', Helvetica, sans-serif;"
                    class="pt-4">
                    <?php echo $head['foodName'] ?> <br>
                    <hr>
                    <!-- <p class="pb-2" style="font-size: 16px;" data-bs-toggle="modal" data-bs-target="#reviewModal"><i
                            class="fa-solid fa-pen"></i>
                        &nbsp; Write A Comment </p> -->
                    <h5 class="pt-2 text-danger fw-bold"><?php echo $head['price'] ?> <?php echo $head['priceCurrency'] ?></h5>
                    <span style="font-size: 14px; font-weight: 200; font-family: 'Philosopher', Helvetica, sans-serif;">
                    <?php echo $head['Details'] ?>
                    </span>
                    <!-- <div class="social-media pt-4"
                        style="font-size: 16px; font-weight: 600; font-family: 'Philosopher', Helvetica, sans-serif; color: rgb(88, 88, 88)">
                        To Share:
                        <a href=" #"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div> -->
                    <!-- <div class="form-g pb-2 pt-3">
                        <input type="text" name="name" id="" class="form-control" placeholder="example@gmail.com">
                    </div>
                    <div class="text-center product-found pt-4">
                        <a href="#">Let me know when the product is available</a>
                    </div> -->
                </span>
            </div>
            <?php }?>
        </div>
    </div>
    <!-- Item Wrapper End -->



    <!-- Branding Start -->

    <?php include 'helper/branding.php';?>

    <!-- Branding End -->


     <!-- Footer Start -->
     <?php include "helper/footer.php"?>

<!-- Footer End -->


    <!-- Card Modal -->
    <!-- Button trigger modal -->

    <!-- Modal
    <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <p>Write A Review</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5 col-lg-5 col-sm-12">
                                <img src="assets/img/modal-big.jpg" class="img-fluid rounded" alt="">
                                <p style="font-size: 20px; font-weight: 700;" class="pt-2">
                                    Chicken <br>
                                <p style="font-size: 16px;">A succulent chicken salad breaded chicken, ham, corn, rice,
                                    cheese,
                                    tomato, lettuce, black olives.</p>
                                </p>

                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 ps-4">
                                <div class="review-form px-4">
                                    <div class="text-center d-flex justify-content-around pt-3">
                                        <p>Quality</p>
                                        <span class="ratiung text-warning">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                    </div>
                                    <hr>
                                    <form action="" class="review-form">
                                        <div class="form-g pb-2">
                                            <p>Title: *</p>
                                            <input type="text" name="Title" id="" class="form-control">
                                        </div>
                                        <div class="form-g pb-2">
                                            <p>Comment: *</p>
                                            <textarea name="comment" id="" cols="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-g pb-2">
                                            <p>Your Name: *</p>
                                            <input type="text" name="name" id="" class="form-control">
                                        </div>
                                        <p class="pb-4">Required Fild: *</p>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="text-center submit-box">
                            <button class="btn btn-warning px-3">Close</button>
                            <button class="btn btn-danger px-3">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->




    <!-- Script Start -->

    <!-- For Video Auto Play -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.youtube-background.js?v=1.0.8"></script>

    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/0e5659ef6a.js" crossorigin="anonymous"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>




    <!-- Swiper Js -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- jquery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script>
        // AOS Animation Init
        AOS.init();

        $(document).ready(function () {
            $('#review').hide();
            $('#pdetail-btn').click(function () {
                $('#Product-details').show();
                $('#review').hide();
            });
            $('#preview').click(function () {
                $('#review').show();
                $('#Product-details').hide();
            });
        });

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