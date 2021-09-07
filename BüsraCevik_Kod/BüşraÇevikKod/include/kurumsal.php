<?php
if(!empty($_GET["seflink"]))
{
$seflink=$VT->filter($_GET["seflink"]);
$veri=$VT->VeriGetir("kurumsal","WHERE seflink=? AND durum=?",array($seflink,1),"ORDER BY ID ASC");
if($veri!=false)
{
?>
<head>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
</head>
<body>
<div class="bradcam_area bradcam_bg_2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3><?=stripslashes($veri[0]["baslik"])?>></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<!-- about_mission  -->
<div class="about_mission">
    <div class="container">
        <div class="row align-items-center">
            <?php
            if(!empty($veri[0]["resim"]))
            {
                ?>
                <div class="col-xl-6 col-md-6">
                    <img src="<?=SITE?>images/kurumsal/<?=$veri[0]["resim"]?>" style="width: 100% ; height: auto;">
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="about_text">
                        <?=stripslashes($veri[0]["metin"])?>
                    </div>
                </div>
                <?php
            }
            else{
                ?>

                <div class="col-xl-12 col-md-12">
                    <div class="about_text">
                        <?=stripslashes($veri[0]["metin"])?>
                    </div>
                </div>
                <?php
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
<?php
}
}
?>
</body>
