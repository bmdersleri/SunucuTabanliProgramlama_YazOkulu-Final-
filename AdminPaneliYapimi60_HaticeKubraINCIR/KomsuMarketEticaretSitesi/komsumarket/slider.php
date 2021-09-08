
            <div class="slider-with-banner">
                <div class="container">
                    <div class="row">
                        <!-- Begin Slider Area -->
                        <div class="col-lg-8 col-md-8">
                            <div class="slider-area">
                                <div class="slider-active owl-carousel" >
                                    <!-- Slider kısmı -->
                                    <?php //slider_durum degeri=1 yani slider olanlar görüntülenir

                                    $slider=$baglanti->prepare("SELECT * FROM slider where slider_banner=:slider_banner and slider_durum=:slider_durum order by slider_sira ASC");
                                    $slider->execute(array(
                                        'slider_banner'=>1,
                                        'slider_durum'=>1


                                    ));
                                   
                                    while ($slidergetir=$slider->fetch(PDO::FETCH_ASSOC)) {                                   

                                    ?>

                                    <div style="background-image: url(Admin/resimler/slider/<?php echo $slidergetir['slider_resim'] ?>)!important;" class="single-slide align-center-left  animation-style-01 bg-1">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content"> <!-- açıklama, baslık ve buton sliderda resmin yanına getirilir-->
                                            <h4 style="color:black;"><?php echo $slidergetir['slider_aciklama'] ?></h4>
                                            <h2 style="color:black;"><?php echo $slidergetir['slider_baslik'] ?></h2>
                                            
                                            <div class="default-btn slide-btn"> <!-- veritabanındaki slider linkle belirtilen yere gider -->
                                                <a class="links" href="<?php echo $slidergetir['slider_link'] ?>"><?php echo $slidergetir['slider_button'] ?></a>
                                            </div>
                                        </div>
                                    </div>
<?php } ?>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Slider Kısmı sonu -->
                        <!-- Banner kısmı -->
                        <div class="col-lg-4 col-md-4 text-center pt-xs-30">

                            <?php //slider_durum degeri=0 yani banner olanlar görüntülenir 
                             $slider=$baglanti->prepare("SELECT * FROM slider where slider_banner=:slider_banner and slider_durum=:slider_durum order by slider_sira ASC");
                             $slider->execute(array(
                                'slider_banner'=>0,
                                'slider_durum'=>1

                               ));
                                   
                             while ($slidergetir=$slider->fetch(PDO::FETCH_ASSOC)) {  ?>    



                            <div style="margin-top:10px" class="li-banner">
                                <a href="<?php echo $slidergetir['slider_link'] ?>">
                                    <img src="Admin/resimler/slider/<?php echo $slidergetir['slider_resim'] ?>" alt="">
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- Li Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Slider With Banner Area End Here -->