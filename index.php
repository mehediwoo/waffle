<?php
    include "db/db.php";
    include "db/session.php";
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

        <style>

        </style>

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


    <!-- Main Navigation End -->
    <!-- Carosel Start -->
    <div class="container-fluid p-0 carosel-wrapper ">
        <div class="carosel">

            <video id="bgVideo" autoplay loop muted plays-inline>
                <source src="assets/home-background.mp4" type="video/mp4">
            </video>
            <div class="carosel-shadow d-flex justify-content-center">
                <div class="display-1 fw-bold"></div>
                <a id="MuteButton" class="muted" onclick="toggleMute();"></a>
            </div>



        </div>
    </div>
    <!-- Carosel End -->


       <!-- cart Item Start -->
       <div class="container-fluid card-container p-0 mt-5">
        <div class="card-wrapper">
            <div class="cart-bodys">
                <div class=" bg-dark">

                </div>
                <div class="cart-section">
                    <?php 
                    
                    $trnd = "SELECT * FROM  header";
                    $tstmt= $db->query($trnd);
                    while ($result = $tstmt->fetch()) {
                       
                    ?>
                    
                    
                    <div class="cart-header-title text-center pt-5">
                        <div class="text-center">
                            <img style="width: 350px; height: 100px" src="assets/img/<?php echo $result['logo']?>" alt="">
                        </div>
<?php } ?>
                        <h1 class="">Produits tendance</h1>
                        <a href="#" class="btn py-2 px-4 mt-2" style="background-color: #fcb119;"><span
                                class="bg-light text-dark py-1 px-2 borderd">Voir la carte des menus</span></a>
                    </div>
                    <div class="col-md-12 cards-items wrapper-container pt-5">
                        <div class="owl-carousel owl-theme">
                            <?php 
                            $product    = "SELECT * FROM  product ";
                            $productstmt= $db->query($product);
                            while ($allPro = $productstmt->fetch()) {
                            
                            ?>
                            <div class="item">
                                <div class="col-md-3">
                                    <div id="card-for-hover" class="card border-0" style="width: 17rem;">
                                        <a href="index-inner.php?product=<?php echo $allPro['id']?>">
                                            <img src="assets/img/<?php echo $allPro['foodImage'];?>" class="card-img-top" alt="...">
                                            <div class="text-center eye-modal-icon">
                                                <a href="id=<?php echo $allPro['id']?>" class="" data-bs-toggle=""
                                                    data-bs-target="">
                                                    
                                                </a>
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="text-center">
                                                    <p class="pt-3">
                                                    <?php echo $allPro['foodName'];?> <br>
                                                        <span class="fw-bold p-0" style="color: #DB2512;"> <?php echo $allPro['price'];?>
                                                        <?php echo $allPro['priceCurrency'];?></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                               
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- cart Item End -->

    <!-- Testemonial Start -->
    <section data-aos="fade-up" class="container-fluid">
        <div class=" wrapper-container col-md-6">
            <?php
                $sql = "SELECT * FROM header";
                $stmt= $db->query($sql);
                while ($head=$stmt->fetch()) {
                
                
            ?>
            <div class="text-center testemonial-wrapper">
                <img style="margin-top: 100px;border-radius: 50%;width: 200px" src="assets/img/<?php echo $head['logo']?>"  alt="">
                <h1><?php echo $head['productBottomHeading']?></h1>
                <p class="py-4">
                <?php echo $head['ProductBottomText']?>
                </p>
                <a href="selection.php"><button class="btn btn-warning">Voir la carte des menus</button></a>
            </div>
            <?php } ?>
        </div>
    </section>
    <!-- Testemonial End -->


    <!-- Social Media Banneer Section Start -->


    <section data-aos="fade-up" class="wrapper-container pt-5">
        <div class="col-md-12 py-4  ">
            <div class="row">
                <?php
                    $flw = "SELECT * FROM follow ";
                    $getf= $db->query($flw);
                    while ($all = $getf->fetch()) {
                ?> 
                <div class="col-md-4">
                    <a href="<?php echo $all['url'] ?>">
                        <img src="assets/img/<?php echo $all['image'] ?>" class="img-fluid socill" alt="">
                    </a>
                </div>

                <?php } ?>
            </div>
        </div>
    </section>


    <!-- Social Media Banneer Section End -->


    <!-- News Section Start -->

    <section data-aos="fade-up" class="container-fluid news-container p-0 m-0">

        <div class="news-wrapper">
            <div class="news-body">
                <div class="my-2 text-center mt-4">
                    <img style="width: 250px" src="assets/img/Logo-8.png" class="img-fluid mt-2" alt="">
                    <h1 class=" text-light text-center pb-5 mt-4" style="font-family: 'Mitr', sans-serif;">
                        Latest News
                    </h1>
                </div>
            </div>
        </div>

    </section>


    <!-- News Section End -->


    <!-- Branding Start -->

    <?php include "helper/branding.php"?>

    <!-- Branding End -->


    <!-- Footer Start -->
    <?php include "helper/footer.php"?>

    <!-- Footer End -->


    <!-- Card Modal -->
    <!-- Button trigger modal -->

    <!-- Modal
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
    </div> -->




    <!-- Script Start -->

    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/0e5659ef6a.js" crossorigin="anonymous"></script>

    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <!-- jquery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script>
        // AOS Animation Init
        AOS.init();

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dot: false,
            navText: ["<i class='fa-solid fa-arrow-left mt-4'></i>",
                "<i class='fa-solid fa-arrow-right mt-4'></i>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
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
            $('html, body').animate({ scrollTop: 0 }, '250');
        });

        var brand = $('.navbar-brand');
        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                brand.removeClass('d-none');
            } else {
                brand.addClass('d-none');
            }
        });

        // Video Mute Unmute
        function toggleMute() {
            var button = document.getElementById("MuteButton")
            var video = document.getElementById("bgVideo")

            if (video.muted) {
                video.muted = false;
            } else {
                video.muted = true;
            }

            button.classList.toggle('muted');
        }



        // var sbtn = $('.top-search');
        $('.top-search').click(function () {
            $('.search-form').removeClass('d-none');
        });

        // Preloader
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function () {
            loader.style.display = "none";
        })

    </script>


</body>

</html>