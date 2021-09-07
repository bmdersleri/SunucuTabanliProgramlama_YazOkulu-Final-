<?php
require_once "data/select.php"; ?>

<!DOCTYPE html>
<html lang="en">
<?php $title = "Sepetim"; ?>
<?php require_once "header.php"; ?>
<body>
<!-- Wrapper Start -->
<div class="wrapper standart">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 offset-1 sepetBosEkle">
                <?php
                $odenmesiGereken = 0;
                if (isset($_COOKIE["sepet"])) {
                    if ($_COOKIE['sepet'] != "") {
                        $sepetListesi = explode('.', $_COOKIE["sepet"]);
                        $sepetListesiSayi = $sepetListesi;
                        $sepetListesi = array_unique($sepetListesi);
                        sort($sepetListesi, SORT_NUMERIC);
                        for ($i = 0; $i < count($sepetListesi); $i++) {
                            /** @noinspection PhpUndefinedVariableInspection */
                            $urun = sepeteUrunCek($db_connection, $sepetListesi[$i]);
                            $urunResimler = resimCek($db_connection, $urun[0]["urun_id"]);
                            $indirimliFiyat = $urun[0]["urunFiyat"] - ($urun[0]["urunFiyat"] / 100 * $urun[0]["urunIndirim"]);

                            $sayac = 0;
                            foreach ($sepetListesiSayi as $row) {
                                if ($row[0] . $row[1] == $urun[0]["urun_id"]) {
                                    $sayac++;
                                }
                            }
                            //$indirimliFiyat *= $sayac;

                            ?>
                            <div id="<?php echo $urun[0]["urun_id"]; ?>" class="row mt20">
                                <div class="row checkout">
                                    <div class="card solMenu">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="row">
                                                        <div class="col-2"><img src="<?php echo substr($urunResimler[0][0], "3", strlen($urunResimler[0][0])); ?>" style="object-fit: contain;" width="200" height="200" alt=""></div>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="row">
                                                        <div class="col-12 balsamiqBold"><h5><?php echo $urun[0]["urunAd"] ?></h5></div>
                                                    </div>
                                                    <div class="row mt10 toplamFiyatDuzenle">
                                                        <div class="col-4 balsamiqBold yaziBoyutu25 ">
                                                            <span class="yaziBoyutu20 fiyat<?php echo $urun[0]["urun_id"]; ?>"><?php echo $indirimliFiyat; ?></span>
                                                            <?php $odenmesiGereken += $indirimliFiyat; ?> <i class="fas fa-lira-sign"></i>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 yaziBoyutu16 mt50 yesil gizle1"><i class="fas fa-truck"></i>Kargo Bedava</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 yaziBoyutu16 mt10 yesil gizle1"><i class="fas fa-info-circle"></i> 50 TL ve üzeri alışverişlerde kargo bedava</div>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <a class="sepettenCikar" idd="<?php echo $urun[0]["urun_id"]; ?>"><i class="fas fa-trash-alt"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="row mt10">
                                                        <div class="col-12">
                                                            <a class="adetEkle" idd="<?php echo $urun[0]["urun_id"]; ?>"><i class="fas fa-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="row mt10">
                                                        <div class="col-12">

                                                            <?php
                                                            echo $sayac;
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="row mt10">
                                                        <div class="col-12">
                                                            <a class="adetCikar" idd="<?php echo $urun[0]["urun_id"]; ?>"><i class="fas fa-minus"></i></a>
                                                        </div>
                                                    </div>-->
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } else { ?>
                        <div class="col-12 text-center mt20" style="height: 250px;"><h4>Sepetinde hiç ürün yok.</h4></div>
                        <?php
                    }
                } else { ?>
                    <div class="col-12 text-center mt20" style="height: 250px;"><h4>Sepetinde hiç ürün yok.</h4></div>
                    <?php
                } ?>
            </div>

            <?php
            if (isset($_COOKIE["sepet"])) {
                if ($_COOKIE['sepet'] != "") { ?>
                    <div class="col-2 offset-1 mt20 sepetTutarSil">
                        <div class="row checkout ">
                            <div class="card solMenu">
                                <div class="card-header">
                                    <h6>ÖDENECEK TUTAR</h6>
                                </div>
                                <div class="card-body sepetTutarEkle" id="test213">

                                    <h5 class="card-title silToplamFiyat"><span class="odenecekTutar "><?php if ($odenmesiGereken < 50) {
                                                echo $odenmesiGereken + 18.90;
                                            } else {
                                                echo $odenmesiGereken;
                                            } ?></span> <i class="fas fa-lira-sign"></i></h5>
                                </div>
                                <div class="card-footer text-muted yaziBoyutu13"
                                     style="border-bottom: 1px solid #d8d8d8;">
                                    <div class="row">
                                        <div class="col-4 yaziBoyutu13">
                                            <span>Kargo</span>
                                        </div>
                                        <div class="col-8 yaziBoyutu13 sagaYasla bedavaEkle">
                                            <?php if ($odenmesiGereken > 49) { ?><span class="yesil sagaYasla bedavaSil">Bedava </span><?php } ?>
                                            <span class=" <?php if ($odenmesiGereken > 49) {
                                                echo 'ustuCizili';
                                            } ?>">18.90 <i class="fas fa-lira-sign"></i></span>
                                        </div>
                                    </div>
                                    <div class="row mt10">
                                        <div class="col-4 yaziBoyutu13">
                                            <span>Ürünler</span>
                                        </div>
                                        <div class="col-8 yaziBoyutu13 sagaYasla sepetTutarEkle2">
                                            <span class="silToplamFiyatAlt"><?php echo $odenmesiGereken; ?></span><span class="silToplamFiyatAlt"> <i class="fas fa-lira-sign"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <a id="alisverisiTamamla">
                                        <button type="button" class="btn btn-primary">Alışverişi Tamamla</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
</div>
<?php
require_once "footer.php";
?>

<script type="text/javascript">

</script>
</body>
</html>
