<?php
$sayfa="Ana Sayfa";
include ("inc/vt.php");
$sorgu=$baglanti->prepare("select * from anasayfa");
$sorgu->execute();
$sonuc=$sorgu->fetch();
$tanimlama=$sonuc["tanimlama"];
$key=$sonuc["key"];
include("inc/head.php");
?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading"><?=$sonuc["ustBaslik"]?></div>
                <div class="masthead-heading text-uppercase"><?=$sonuc["altBaslik"]?></div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?= $sonuc["link"] ?>"><?= $sonuc["linkMetin"] ?></a>
            </div>
        </header>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </div>
<?php
include("inc/footer.php");
?>