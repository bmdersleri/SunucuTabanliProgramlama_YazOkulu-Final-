<?php
$sayfa = "Servis";
include("inc/vt.php");
$sorgu = $baglanti->prepare("SELECT * FROM servis");
$sorgu->execute();
$sonuc = $sorgu->fetch();
$tanimlama = $sonuc["tanimlama"];
$key = $sonuc["anahtar"];
include("inc/head.php");
?>

<!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase mt-3"><?= $sonuc["baslik"] ?></h2>
            <h3 class="section-subheading text-muted"><?= $sonuc["altBaslik"] ?></h3>
        </div>
        <div class="row text-center">
            <?php
            $sorgu2 = $baglanti->prepare("SELECT * FROM servislerimiz WHERE aktif=1 ORDER BY  sira");
            $sorgu2->execute();
            while ($sonuc2 = $sorgu2->fetch()) {
            ?>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas <?= $sonuc2["foto"] ?> fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3"><?= $sonuc2["baslik"] ?></h4>
                    <p class="text-muted"><?= $sonuc2["icerik"] ?></p>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<?php
include("inc/footer.php");
?>