
<body>
<div class="bradcam_area bradcam_bg_2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Hizmetlerimiz</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<!-- about_mission  -->
<div class="explorer_europe">
    <div class="container" style="padding-top: 20px;">
        <div class="row align-items-center">
                <?php
                $hizmetler=$VeriGetir("hizmetler","WHERE durum=?",array(1),"ORDER BY sirano ASC");
                if($hizmetler!=false)
                {
                    for($i=0;$i<count($hizmetler);$i++)
                    {
                           if(!empty($hizmetler[$i]["resim"])){$resim=$hizmetler[$i]["resim"];} else {$resim='varsayilan.png';}
                            ?>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single_explorer">
                                <div >
                                    <img src="<?=SITE?>images/hizmetler/<?=$resim?>" height="300px;"
                                         alt="<?=stripslashes($hizmetler[$i]["baslik"])?>">
                                </div>
                                <div class="explorer_bottom d-flex">
                                    <div class="icon">
                                        <i class="flaticon-phone"></i>
                                    </div>
                                    <div class="explorer_info">
                                        <h3><a
                                                    href="<?=SITE?>hizmet-detay/<?=$hizmetler[$i]["seflink"]?>"><?=stripslashes
                                            ($hizmetler[$i]["baslik"])
                                            ?></a></h3>
                                        <p><?=mb_substr(strip_tags(stripslashes($hizmetler[$i]["metin"])),0,120,"UTF-8")
                                            ?>...</p>
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
<!--/ about_mission -->


<!--/ counter_area  -->

<!-- team_area  -->

<!--/ sprayed_area end  -->

<!-- testimonial_area  -->

</body>
