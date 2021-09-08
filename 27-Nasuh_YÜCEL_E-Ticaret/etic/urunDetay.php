<?php require_once "data/select.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php $urunDetay = urunCekDetay($db_connection, $_GET["uid"]); // ürünün numarasına göre ürünü getir
$title = $urunDetay[0]["urunAd"]; // title
require_once "header.php"; ?> <!-- Header import -->
<body>
<!-- Wrapper Start -->
<div class="wrapper standart">
    <div class="container mt20">
        <div class="row">
            <div class="col-5 offset-1">
                <div class="card">
                    <?php $urunResimler = resimCek($db_connection, $_GET["uid"]); ?> <!-- Ürünün resmini getir -->
                    <div class="text-center p-4"><img id="main-image" style="object-fit: contain;" src="<?php echo substr($urunResimler[0][0], "3", strlen($urunResimler[0][0]) + 100); ?>" width="350" height="350" alt=""/></div>
                    <div class="thumbnail text-center">
                        <?php foreach ($urunResimler as $item) { ?>
                            <img onclick="change_image(this)" src="<?php echo substr($item["fotoYol"], "3", strlen($urunResimler[0][0]) + 100); ?>" width="70" style="object-fit: contain;" alt="">
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-12 balsamiqBold"><h3><?php echo $urunDetay[0]["urunAd"] ?></h3></div>
                </div>
                <div class="row mt10">
                    <div class="col-4 balsamiqBold yaziBoyutu25">
                        <span class="indirimSonraki"><?php echo $urunDetay[0]["urunFiyat"] - ($urunDetay[0]["urunFiyat"] / 100 * $urunDetay[0]["urunIndirim"]); ?>TL</span>
                        <span class="indirimOncesiDetay yaziBoyutu25"><?php echo $urunDetay[0]["urunFiyat"]; ?>TL</span>
                    </div>
                </div>
                <div class="row mt10">
                    <div class="d-flex align-items-center mt-2">
                        <label class="radio secenek"> <input type="radio" name="ram" value="128GB" checked><span>128GB</span> </label>
                        <label class="radio secenek"> <input type="radio" name="ram" value="256GB"><span>256GB</span></label>
                        <label class="radio secenek"> <input type="radio" name="ram" value="256GB"><span>512GB</span></label></div>
                </div>
                <div class="row mt20">
                    <form id="sepet" action="sepeteEkle.php" method="post">
                        <div class="col-6">
                            <a style="z-index: 5;" type="button" class="btn btn-primary sepetE" idd="<?php echo $urunDetay[0]["urun_id"]; ?>">Sepete Ekle</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt20 justify-content-center">
            <div class="col-8 mt20">
                <div class="card">
                    <div class="card-header">
                        <h5><?php echo $urunDetay[0]["urunAd"]; ?></h5>
                    </div>
                    <div class="card-body">
                        <?php echo $urunDetay[0]["urunAciklama"]; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Başlangıç-->
<?php require_once "footer.php" ?>
<!-- Footer Bitiş-->
</body>
</html>