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
        <title>WAFFLE CITY | Contact</title>
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
                <li class="breadcrumb-item active " aria-current="page">Contactez-Nous</li>
            </ol>
        </nav>
    </section>


    <!-- Bread Cump End -->



    <!-- Main Section Start -->

    <div class="container-fluid">
        <div class="wrapper-container">
            <div class="row">
            <?php
echo error_signal();
echo success_signal();
?>
                <div class="col-lg-3 col-md-3 col-sm-12 pt-4" data-aos="fade-up" data-aos-duration="1000">
                    <?php
$sql = "SELECT * FROM  contact_information";
$stmt = $db->query($sql);
while ($row = $stmt->fetch()) {

    ?>
                    <div class="contact-info-wrapper px-3 pt-3">
                        <p>Information</p>
                        <div class="row contact-info-address">
                            <div class="col-md-2 text-center">
                                <i class="fa-solid fa-location-dot pt-4"></i>
                            </div>
                            <div class="col-md-10">
                                <span><?php echo $row['restName'] ?> </span> <br>
                                <span><?php echo $row['road'] ?> </span><br>
                                <span><?php echo $row['area'] ?> </span><br>
                                <span><?php echo $row['country'] ?></span>
                            </div>
                        </div>
                        <hr>
                        <div class="row contact-info-address pt-2">
                            <div class="col-md-2 text-center">
                                <i class="fa-solid fa-phone pt-2"></i>
                            </div>
                            <div class="col-md-10">
                                <span><?php echo $row['callText'] ?>: </span> <br>
                                <span><?php echo $row['callNumber'] ?> </span>
                            </div>
                        </div>
                        <hr>
                        <div class="row contact-info-address pt-2">
                            <div class="col-md-2 text-center">
                                <i class="fa-solid fa-envelope pt-2"></i>
                            </div>
                            <div class="col-md-10">
                                <span><?php echo $row['emailText'] ?>: </span> <br>
                                <span><?php echo $row['emailAdd'] ?></span>
                            </div>
                        </div>
                    </div>
                    <?php }?>

                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 pt-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="contact-form-wrapper px-4 pt-3">
                        <p>Contactez-Nous</p>
                        <div class="row py-3 contact-us-form">
                            <div class="col-lg-3 col-md-4 col-sm-6 pt-1">
                                <p class="mb-2">Name</p><br>
                                <p class="mb-4">eMail Address</p>
                                <p class="mt-5">Message</p>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6">
                            <?php
if (isset($_POST['submits'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if (empty($name) || empty($email) || empty($message)) {
        $_SESSION['error_signal'] = "All Field Must be filled out";
        echo "<script>window.open('contact-us.php','_self')</script>";

    } else {
        $insert = "INSERT INTO contact(name,email,message) VALUES('$name','$email','$message') ";
        $qry = $db->query($insert);
        if ($qry == true) {
            $_SESSION['success_signal'] = "Successfully";
            echo "<script>window.open('contact-us.php','_self')</script>";
        } else {
            $_SESSION['error_signal'] = "Wrong! ty again";
            echo "<script>window.open('contact-us.php','_self')</script>";
        }

    }
}
?>
                                <form action="" method="post">

                                    <input type="text" name="name"  class="form-control mb-3 w-75"
                                        placeholder="Name...">

                                    <input type="email" name="email"  class="form-control mb-3 w-75"
                                        placeholder="example@gmail.com">

                                    <!-- <input type="file" name="" id="" class="form-control mb-2 files w-75">
                                    <span
                                        style="font-size: 13px; font-family: Philosopher, Helvetica, sans-serif;">Optional</span> -->
                                    <textarea name="message" id="" cols="20" class="form-control mt-2 w-75"
                                        placeholder="How Can I Help You"></textarea>
                                    <div class="text-end pt-4">
                                        <input style="background-color: #FCB119; border:none" type="submit" name="submits" value="Submit" class="btn btn-danger float-right px-4">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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