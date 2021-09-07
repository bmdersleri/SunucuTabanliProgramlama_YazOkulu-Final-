<!-- slider_area_start -->
<div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-10">
                        <div class="slider_text text-center justify-content-center">
                            <p>PHP TÜRKİYE</p>
                            <h3>Kurumsal Firma Scripti</h3>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <div class="popular_catagory_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60 text-center">
                        
                        <h3>
                            Projelerimiz?
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
            $hizmetler=$VT->VeriGetir("projeler","WHERE durum=?",array(1),"ORDER BY ID DESC",3);
            if($hizmetler!=false)
            {
                for($i=0;$i<count($hizmetler);$i++)
                {
                    if(!empty($hizmetler[$i]["resim"])){$resim=$hizmetler[$i]["resim"];}else{$resim='varsayilan.png';}
                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single_explorer">
                                <div class="thumb">
                                    <img src="<?=SITE?>images/projeler/<?=$resim?>" alt="<?=stripslashes($hizmetler[$i]["baslik"])?>">
                                </div>
                                <div class="explorer_bottom d-flex">
                                    
                                    <div class="explorer_info">
                                        <h3><a href="<?=SITE?>proje-detay/<?=$hizmetler[$i]["seflink"]?>"><?=stripslashes($hizmetler[$i]["baslik"])?></a></h3>
                                        <p><?=mb_substr(strip_tags(stripslashes($hizmetler[$i]["metin"])),0,120,"UTF-8")?>...</p>
                                         
                                    </div>
                                </div>
                            </div>
                        </div>      
                    <?php
                }
            }
            ?>
            </div>
        </div>
    </div>

    <div class="popular_catagory_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60 text-center">
                        
                        <h3>
                            Neler Yapıyoruz?
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
            $hizmetler=$VT->VeriGetir("hizmetler","WHERE durum=?",array(1),"ORDER BY ID DESC",3);
            if($hizmetler!=false)
            {
                for($i=0;$i<count($hizmetler);$i++)
                {
                    if(!empty($hizmetler[$i]["resim"])){$resim=$hizmetler[$i]["resim"];}else{$resim='varsayilan.jpg';}
                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single_explorer">
                                <div class="thumb">
                                    <img src="<?=SITE?>images/hizmetler/<?=$resim?>" alt="<?=stripslashes($hizmetler[$i]["baslik"])?>">
                                </div>
                                <div class="explorer_bottom d-flex">
                                    
                                    <div class="explorer_info">
                                        <h3><a href="<?=SITE?>hizmet-detay/<?=$hizmetler[$i]["seflink"]?>"><?=stripslashes($hizmetler[$i]["baslik"])?></a></h3>
                                        <p><?=mb_substr(strip_tags(stripslashes($hizmetler[$i]["metin"])),0,120,"UTF-8")?>...</p>
                                         
                                    </div>
                                </div>
                            </div>
                        </div>      
                    <?php
                }
            }
            ?>
            </div>
        </div>
    </div>


    <!-- sprayed_area  -->
    <div class="sprayed_area overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text text-center">
                        <h3>Bize Ulaşın </h3>
                        <p>Soru, fikir ve önerileriniz için iletişim bilgilerimiz</p>
                        <a href="<?=SITE?>iletisim" class="boxed-btn2">İletişime Geç</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    