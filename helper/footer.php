<section class="footer-container container-fluid p-0">
        <div class="footer-wrapper">
            <div class="footer-body wrapper-container text-light">
                <div class="row py-3 footer-body-wrapper">
                    <div class="col-md-2">
                        <?php 
                        $socialIcon  = "SELECT * FROM  footer_social";
                        $getIcon     = $db->query($socialIcon);
                        while ($all = $getIcon->fetch()) {
                        ?>
                            <a style="color: white" href="<?php echo $all['url']; ?>">
                                <i class="<?php echo $all['fontawesome']; ?> pe-4 fw-normal fs-5"></i>
                            </a>
                        <?php } ?>
                    </div>
                    <div class="col-md-10 text-end copyright">
                        <a href="#" class="text-light text-decoration-none">
                            <?php 
                            $footerText  = "SELECT * FROM  footertext";
                            $getText     = $db->query($footerText);
                            while ($alltext = $getText->fetch()) {
                            ?>
                            <p>
                                © <?php echo $alltext['text']; ?>
                            </p>
                            <?php } ?>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>