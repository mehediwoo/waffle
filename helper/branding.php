<?php 

    $logo = "SELECT * FROM  header";
    $getLo= $db->query($logo);
     while ($result = $getLo->fetch()) {
                       
    ?>
    <section class="container-fluid py-4">
        <div class="branding text-center">
            <img data-aos="fade-down" data-aos-duration="1000" src="assets/img/<?php echo $result['topFooterLogo']?>" class="img-fluid" style="width: 230px;height: 110px" alt="">
        </div>
    </section>

    <?php } ?>