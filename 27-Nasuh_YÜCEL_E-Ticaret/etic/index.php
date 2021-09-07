<?php
require_once "data/select.php";
?>


<!DOCTYPE html>
<html lang="en">
<body>

<?php
$title = "Ana Sayfa";
require_once "header.php" ?>

<!-- Wrapper Start -->
<div class="wrapper">


    <!-- Ana Carousel Başlangıç-->
    <div class="container">
        <div class="row mt20">
            <div class="col-12">
                <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/carousel/banner-1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/carousel/banner-2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/carousel/banner-3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>
    </div>
    <!--  Ana Carousel Bitiş-->

    <!-- Sıcak Fırsatlar Başlangıç-->
    <div class="container mt20 ">
        <div class="row">
            <div class="col-4 firsatStyle balsamiqBold text-center ml-12">Yeni Ürünler</div>
            <div class="col-7"></div>
        </div>
        <div class="row mt-10">
            <div class="col-12">

                <link rel="stylesheet" type="text/css"
                      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
                <script type="text/javascript"
                        src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
                <div class="items ustSlider standart">

                    <?php $yeniUrunListesi = yeniUrunCek($db_connection);

                    foreach ($yeniUrunListesi as $row) {
                        $urunResimler = resimCek($db_connection, $row["urun_id"]);
                        ?>

                        <div class="card">
                            <a href="urunDetay.php?uid=<?php echo $row["urun_id"]; ?>">
                                <div class="product justify-content-center">
                                    <?php if ($row["urunIndirim"] > 0) { ?> <div class="off bg-success" style="width: 90px;">%<?php echo $row["urunIndirim"] ?> indirim</div>
                                    <?php } $urunResimler = resimCek($db_connection, $row["urun_id"]); if (isset($urunResimler[0][0]) == null) { ?>
                                        <div class="row"><img src="img/no_img.png" style="object-fit: contain;" width="200px" alt=""></div>
                                    <?php } else { ?>
                                        <div class="row"><img src="<?php echo substr($urunResimler[0][0], "3", strlen($urunResimler[0][0])); ?>" style="object-fit: contain;" width="200" alt=""></div>
                                    <?php } ?>
                                    <div class="about text-center">
                                        <h6><?php if(strlen($row["urunAd"])>39){ echo mb_substr($row["urunAd"], 0, 39) . "...";} else { echo $row["urunAd"];} ?></h6>
                                        <span class="indirimOncesi"><?php echo $row["urunFiyat"]; ?> TL</span>  <span class="indirimSonraki"><?php echo $row["urunFiyat"] - ($row["urunFiyat"] / 100 * $row["urunIndirim"]); ?> TL</span>
                                    </div>
                                    <div class="cart-button mt-3 px-2 d-flex align-items-center"> <!-- justify-content-between   -->
                                        <a style="z-index: 5;" type="button" class="btn btn-primary sepetE" idd="<?php echo $row["urun_id"]; ?>">Sepete Ekle</a>
                                        <!--  <div class="add"><span class="product_fav"><i class="fa fa-heart"></i></span><span class="product_fav"><i class="fa fa-cart-plus"></i></span></div>-->
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php }

                    ?>


                </div>
            </div>
        </div>
    </div>
    <!-- Sıcak Fırsatlar Bitiş-->

    <!-- Kampanyalar Başlangıç-->
    <div style="border-top: 1px solid black;" class="container mt20 standart balsamiqBold">
        <div class="row">
            <div class="col-11 firsatStyle balsamiqBold ml38">Kampanyalar</div>
        </div>
        <div class="row text-center">
            <div class="col-3">
                <a href="#"><img src="img/nonSliderCards/1.jpg" class="img-fluid" alt="1"></a>
            </div>
            <div class="col-3">
                <a href="#"><img src="img/nonSliderCards/2.jpg" class="img-fluid" alt="2"></a>
            </div>
            <div class="col-3">
                <a href="#"><img src="img/nonSliderCards/3.jpg" class="img-fluid" alt="3"></a>
            </div>
            <div class="col-3">
                <a href="#"><img src="img/nonSliderCards/4.jpg" class="img-fluid" alt="4"></a>
            </div>
        </div>
        <div class="row text-center mt10 yaziBoyutu15">
            <div class="col-3">
                <div class="row">
                    <div class="offset-1 col-10">
                        <a href="#">100 ₺ ve üzeri alışverilerde <span class="bold">kargo bedava</span></a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="offset-1 col-10">
                        <a href="#">Uçak biletlerinde <span class="bold">50 ₺ indirim</span></a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="offset-1 col-10">
                        <a href="#">Her gün yenilenen <span class="bold">fırsatlar</span></a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="offset-1 col-10">
                        <a href="#">Seçili Anne-Çocuk ürünlerinde <span class="bold">50₺ indirim</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kampanyalar Bitiş-->

    <!-- İndirimli ürünler Başlangıç-->
    <div class="container mt40" style="border-top: 1px solid black;">
        <div class="row">
            <div class="col-4 firsatStyle balsamiqBold text-center ml-12">İndirimli Ürünler</div>
            <div class="col-7"></div>
        </div>
        <div class="row mt-10">
            <div class="col-12">

                <link rel="stylesheet" type="text/css"
                      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
                <script type="text/javascript"
                        src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
                <div class="items altSlider standart">
                    <?php $randomUrunler1 = randUrunCek($db_connection);

                    foreach ($randomUrunler1 as $row){ ?>

                        <div class="card">
                            <a href="urunDetay.php?uid=<?php echo $row["urun_id"]; ?>">
                                <div class="product justify-content-center">
                                    <?php if ($row["urunIndirim"] > 0) { ?> <div class="off bg-success" style="width: 90px;margin-left: -50px;">%<?php echo $row["urunIndirim"] ?> indirim</div>
                                    <?php } $urunResimler = resimCek($db_connection, $row["urun_id"]); if (isset($urunResimler[0][0]) == null) { ?>
                                        <div class="row"><img src="img/no_img.png" style="object-fit: contain;" width="200px" alt=""></div>
                                    <?php } else { ?>
                                        <div class="row"><img src="<?php echo substr($urunResimler[0][0], "3", strlen($urunResimler[0][0])); ?>" style="object-fit: contain;" width="200" alt=""></div>
                                    <?php } ?>
                                    <div class="about text-center">
                                        <h6 style="height: 40px;"><?php if(strlen($row["urunAd"])>39){ echo mb_substr($row["urunAd"], 0, 39) . "...";} else { echo $row["urunAd"];} ?></h6>
                                        <span class="indirimOncesi"><?php echo $row["urunFiyat"]; ?> TL</span>  <span class="indirimSonraki"><?php echo $row["urunFiyat"] - ($row["urunFiyat"] / 100 * $row["urunIndirim"]); ?> TL</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Fırsat ürünleri Bitiş-->

    <?php

    $randKategoriCek = randKategoriCek($db_connection);

    ?>

    <!-- Öne Çıkan Kategori 1 Başlangıç-->
    <div style="border-top: 1px solid black;" class="container standart mt40">
        <div class="row">
            <div class="col-11 firsatStyle balsamiqBold"><?php echo $randKategoriCek[0]["menuAd"] ?></div>
        </div>
        <div class="row mt10">
            <?php $randomUrunler = randomUrunCekWithAnaMenu_id($db_connection, $randKategoriCek[0]["menu_id"]);
            $sayac = 0;
            foreach ($randomUrunler as $row) {
                $sayac++;
                ?>

                <div class="col-2  <?php if ($sayac > 6) {
                    echo "mt20";
                } ?>">
                    <div class="card oneCikan">
                        <a href="urunDetay.php?uid=<?php echo $row["urun_id"]; ?>">
                            <?php if ($row["urunIndirim"] > 0) { ?> <div class="off bg-primary" style="width: 60px;margin-left: -20px;margin-top:-5px;">FIRSAT</div>
                            <?php
                            }
                            $urunResimler = resimCek($db_connection, $row["urun_id"]);
                            if (isset($urunResimler[0][0]) == null) {
                                ?>
                                <img src="img/no_img.png" class="mt10" style="object-fit: contain;" width="175"
                                     height="175"
                                     alt="">
                                <?php
                            } else {
                                ?>
                                <img src="<?php echo substr($urunResimler[0][0], "3", strlen($urunResimler[0][0])); ?>"
                                     class="mt10 card-img-top" style="object-fit: contain;" width="150" height="150"
                                     alt="">
                                <?php
                            }
                            ?>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <span class="indirimSonraki">%<?php echo $row["urunIndirim"] . " indirimle <br>" .floor( ($row["urunFiyat"] - ($row["urunFiyat"] / 100 * $row["urunIndirim"]))); ?> TL</span><br>
                                    <span class="indirimOncesi"><?php echo $row["urunFiyat"]; ?> TL</span>
                                </h5>
                                <p class="card-text" style="height: 70px;"><?php if(strlen($row["urunAd"])>39){ echo mb_substr($row["urunAd"], 0, 39) . "...";} else { echo $row["urunAd"];} ?></p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
            }

            ?>
        </div>
    </div>
    <!-- Öne Çıkan Kategori 1 Bitiş-->

    <!-- Öne Çıkan Kategori 2 Başlangıç-->
    <div style="border-top: 1px solid black;" class="container standart mt40 ">
        <div class="row">
            <div class="col-11 firsatStyle balsamiqBold"><?php echo $randKategoriCek[1]["menuAd"] ?></div>
        </div>
        <div class="row mt10">
            <?php $randomUrunler = randomUrunCekWithAnaMenu_id($db_connection, $randKategoriCek[1]["menu_id"]);
            $sayac = 0;
            foreach ($randomUrunler as $row) {
                $sayac++;
                ?>

                <div class="col-2  <?php if ($sayac > 6) {
                    echo "mt20";
                } ?>">
                    <div class="card oneCikan">
                        <a href="urunDetay.php?uid=<?php echo $row["urun_id"]; ?>">
                            <?php if ($row["urunIndirim"] > 0) { ?> <div class="off bg-primary" style="width: 57px;margin-left: -20px;margin-top:-5px;">FIRSAT</div> <?php }
                            $urunResimler = resimCek($db_connection, $row["urun_id"]);
                            if (isset($urunResimler[0][0]) == null) { ?>
                                <img src="img/no_img.png" class="mt10" style="object-fit: contain;" width="175" height="175" alt="">
                                <?php } else { ?>
                                <img src="<?php echo substr($urunResimler[0][0], "3", strlen($urunResimler[0][0])); ?>" class="mt10 card-img-top" style="object-fit: contain;" width="150" height="150" alt="">
                                <?php } ?>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <span class="indirimSonraki">%<?php echo $row["urunIndirim"] . " indirimle " . ($row["urunFiyat"] - ($row["urunFiyat"] / 100 * $row["urunIndirim"])); ?> TL</span><br>
                                    <span class="indirimOncesi"><?php echo $row["urunFiyat"]; ?> TL</span>
                                </h5>
                                <p class="card-text" style="height: 70px;"><?php if(strlen($row["urunAd"])>39){ echo mb_substr($row["urunAd"], 0, 39) . "...";} else { echo $row["urunAd"];} ?></p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
            }

            ?>
        </div>
    </div>
    <!-- Öne Çıkan Kategori 2 Bitiş-->




    <!-- Footer Başlangıç-->
    <?php require_once "footer.php" ?>
    <!-- Footer Bitiş-->
</div>



</body>
</html>