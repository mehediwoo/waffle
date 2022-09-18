<?php
include "db/db.php";
if (isset($_GET['iteam'])) {
    $id = $_GET['iteam'];
} else {
    header('Location:selection.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>WAFFLE CITY</title>
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
                <li class="breadcrumb-item"><a href="selection.php" class="text-decoration-none">Our Menu</a></li>
                <?php
$sql = "SELECT * FROM product_cate WHERE id='$id' ";
$stmt = $db->query($sql);
while ($cateRow = $stmt->fetch()) {

    ?>
                <li class="breadcrumb-item active " aria-current="page"><?php echo $cateRow['name'] ?></li>
                <?php }?>
            </ol>
        </nav>
    </section>


    <!-- Bread Cump End -->


    <!-- Selection Items Start -->

    <div class="container-fluid py-3">
        <div class="px-5">
            <div class="row">
                <?php
$sqls = "SELECT * FROM product_cate WHERE id='$id' ";
$stmts = $db->query($sqls);
while ($cateRows = $stmts->fetch()) {

    ?>
                <div class="col-lg-3 col-md-12 col-sm-12 items-input pt-4">
                    <input type="text" value="<?php echo $cateRows['name'] ?>" class="py-3 ps-3 form-control mb-3"
                        style="border-radius: 20px; border: 2px solid #8e8e8e5b;" readonly>

                </div>
                <?php }?>

                <div class="col-sm-12 col-md-12 col-lg-9 pt-4">
                    <?php
$qry = "SELECT * FROM product_cate WHERE id='$id' ";
$getqry = $db->query($qry);
while ($getRow = $getqry->fetch()) {

    ?>
                    <div class="items-imgs">
                        <img src="assets/img/selection/<?php echo $getRow['img'] ?>" class="img-fluid" alt=""
                            style="border-radius: 10px;">
                    </div>
                    <div class="items-content pt-3">
                        <span class="pb-1"><?php echo $getRow['name'] ?></span>
                        <p>
                            <?php echo $getRow['descrp'] ?>
                        </p>
                    </div>
                    <?php }?>

                    <!-- <input type="text" value="There Are 3 Products" class="py-3 ps-3 form-control my-4 "
                        style="border-radius: 20px; border: 2px solid #8e8e8e5b;"> -->
                    <div class="items-container text-center">

                        <div class="row mx-auto">
                            <?php
$pro = "SELECT * FROM  product WHERE cate_id='$id' ";
$getpro = $db->query($pro);
while ($allPro = $getpro->fetch()) {

    ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                                <div id="card-for-hover" class="card"
                                    style="width: 17rem; border: 2px solid rgba(133, 133, 133, 0.245);">
                                    <a href="index-inner.php?product=<?php echo $allPro['id'] ?>">
                                        <img src="assets/img/<?php echo $allPro['foodImage'] ?>" class="card-img-top img-fluid" alt="">
                                        <div class="text-center eye-modal-icon">
                                            <a href="#" class="" data-bs-toggle=""
                                                data-bs-target="">
                                                <!-- <i class="fa-solid fa-eye"></i> -->
                                            </a>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="text-center">
                                                <p class="pt-3">
                                                <?php echo $allPro['foodName'] ?> <br>
                                                    <span class="fw-bold p-0" style="color: #DB2512;"><?php echo $allPro['price'] ?>
                                                    <?php echo $allPro['priceCurrency'] ?></span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Selection Items End -->

    <!-- Branding Start -->
    <?php include "helper/branding.php"?>
     <!-- Branding End -->


    <!-- Footer Start -->
    <?php include "helper/footer.php"?>
     <!-- Footer End -->


    <!-- Card Modal -->
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="assets/img/modal-big.jpg" class="img-fluid rounded" alt="">
                            </div>
                            <div class="col-md-8 ps-4">
                                <div class="row">
                                    <div class="col-md-2 modal-small-pic">
                                        <img src="assets/img/modal-big.jpg" class="img-fluid rounded pt-4" alt="">
                                    </div>
                                    <div class="col-md-10">
                                        <p class="fw-bold pb-2 fs-6"
                                            style="border-bottom: 2px solid rgba(168, 168, 168, 0.526);">Duplex</p>

                                        <p class="fw-bold py-1 fs-6" style="color: #D32512;">25,00 Tk</p>
                                        <p class="fw-bold">
                                            TTC <br>
                                        <p class="fs-6">
                                            Une succulente salade chicken poulet pané, jambon, maïs, riz, fromage,
                                            tomate, laitue, olives noires.
                                        </p>
                                        </p>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="d-flex modal-socialmedia">
                            <p>Share:</p>
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <hr>
                        <input type="text" placeholder="Enter Mail" class="form-control" style="border-radius: 20px;">

                        <div class="text-center py-3">
                            <button class="btn btn-danger px-5" style="border-radius: 10px;">Prévenez-moi lorsque le
                                produit est disponible</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Script Start -->

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