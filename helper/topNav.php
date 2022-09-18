<?php
    $sql = "SELECT * FROM header";
    $stmt= $db->query($sql);
    while ($head=$stmt->fetch()) {
    
    
?>
<section class="header">
        <div class="container-fluid top-nav-contact">
            <div class="col-md-12 wrapper-container top-nav-wrapper d-flex flex-flow">
                <div class=" tn-item me-3">
                    <?php echo $head['textOne']?> : <?php echo $head['numberOne']?>
                </div>
                <!-- <div class="tn-item">
                <?php // echo $head['textTwo']?> : <?php // echo $head['numberTwo']?>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Top Navigation Bar End -->

    <!-- Main Navigation Start -->
    <div class="container-fluid parent-main-nav py-4">
        <div class="wrapper-container mt-2">
            <div class="col-md-12 main-nav">
                <div class="row top-navigation-main">
                    <div class="col-md-6 phone-col-md-6">
                        <div class="row d-flex aligh-item-center main-nav-phone">
                            <div class="col-md-1 pt-3">
                                <a href="#" class="phone-incon">
                                    <i class="fa-solid fa-phone-flip"></i>
                                </a>
                            </div>
                            <div class="col-md-11 phone-body ps-4 pt-1">
                                <p class="ps-2">
                                <?php echo $head['callText']?> <br>
                                    <span class="text-center fw-bold ps-4 fs-6"><?php echo $head['callNumber']?></span>
                                </p>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="img-fluid top-search-img">
                            <img style="border-radius: 50%;width: 250px" class="img-fluid top-logo" src="assets/img/<?php echo $head['logo']?>" alt="">
                        </div>

                    </div>
                    <!-- <div class="col-md-3 pt-3 top-search-container">
                        <div class="top-search-wrapper text-end">
                            <a href="#" class="top-search"><i class="fa-solid fa-magnifying-glass"></i></a>
                            <form class="d-flex pt-3 search-form d-none" role="search">
                                <input type="text" class="rounded ps-3 py-1 fs-7 search-item" placeholder="Search.."
                                    name="search2">

                                <button type="submit" class="border-0 p-1 search-btn"><i
                                        class="fa fa-search"></i></button>
                            </form>
                        </div>

                    </div> -->
                </div>
            </div>
        </div>
    </div>

<?php } ?>