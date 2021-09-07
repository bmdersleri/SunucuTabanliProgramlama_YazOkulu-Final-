<?php require_once "header.php"; 



?>
            <div class="about-us-wrapper pt-60 pb-40">
                <div class="container">
                    <div class="row">
                        <!-- About Text Start -->
                        <div class="col-lg-6 order-last order-lg-first">
                            <div class="about-text-wrap" >
                                
                                <h2 style="color:black;"><?php echo $hakkimizdagetir['hakkimizda_baslik'] ?></h2><!-- hakkımızda başlık veritabanından-->
                                <p style="color:black;"> <?php echo $hakkimizdagetir['hakkimizda_detay'] ?></p> <!-- hakkımızda detay veri tabanından -->

                                <h4>Misyonumuz:  </h4>
                                <p style="color:black;"> <?php echo $hakkimizdagetir['hakkimizda_misyon'] ?></p> <!--misyon veritabanından--> 

                                <h4>Vizyonumuz:  </h4>
                                <p style="color:black;"> <?php echo $hakkimizdagetir['hakkimizda_vizyon'] ?></p> <!--vizyon veritabanında-->
                            </div>
                        </div>
                        <!-- About Text End -->
                        <!-- About Image Start -->
                        <div class="col-lg-5 col-md-10">
                            <div class="about-image-wrap" style="height: 300px;">
                                <img class="img-full" style="height: 200px; width: 380px;"  src="Admin/resimler/hakkimizda/<?php echo $hakkimizdagetir['hakkimizda_resim'] ?>" alt="About Us" /> <!---resim veritabanında--->
                            </div>
                        </div>
                        <!-- About Image End -->
                    </div>
                </div>
            </div>
            <!-- about wrapper end -->
            
            <!-- team area wrapper start -->
                      
            <?php require_once 'footer.php'; ?>
            