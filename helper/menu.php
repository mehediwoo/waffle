<section class="container-fluid sticky-top main-navigation" style="background-color: #ffffff;">
        <div class="col-md-12 container-fluid navigation-wrapper">
            <nav class="navbar navbar-expand-lg wrapper-container" style="background-color: #ffffff;">
                <div class="container-fluid">
                <?php
$sql = "SELECT * FROM header";
$stmt = $db->query($sql);
while ($head = $stmt->fetch()) {

    ?>
                    <a class="navbar-brand d-none" href="https://www.wafflecity.ma/"> <img class="" width="135px" 
                            src="assets/img/<?php echo $head['logo']; ?>" style="border-radius: 50%;" alt=""></a>
                            <?php }?>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active px-4" aria-current="page" href="index.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active px-4" aria-current="page" href="cart-menu.php"> La carte du menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active px-4" aria-current="page" href="selection.php">Voir le Sélection</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active px-4" aria-current="page" href="gallary.php">Galerie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active px-4" aria-current="page" href="contact-us.php">Contactez-Nous</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active px-4" aria-current="page" href="history.php">Notre Histoire</a>
                            </li>
                        </ul>
                        <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <a href="#" class="top-search"><i class="fa-solid fa-magnifying-glass"></i></a>
                        </ul> -->
                    </div>
                </div>
            </nav>
        </div>
    </section>