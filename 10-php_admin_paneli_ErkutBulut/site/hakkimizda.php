<?php
$sayfa = "Hakkımızda";
include("inc/vt.php");
$sorgu = $baglanti->prepare("SELECT * FROM hakkimizda");
$sorgu->execute();
$sonuc = $sorgu->fetch();
$tanimlama = $sonuc["tanimlama"];
$key = $sonuc["anahtar"];
include("inc/head.php");
?>

<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase mt-3"><?= $sonuc["baslik"] ?></h2>
            <h3 class="section-subheading text-muted"><?= $sonuc["icerik"] ?></h3>
        </div>
        <ul class="timeline">
            <?php
            $sorgu2 = $baglanti->prepare("SELECT * FROM tarihce");
            $sorgu2->execute();
            $yon = false;
            while ($sonuc2 = $sorgu2->fetch()) {
            ?>
                <li <?php if ($yon == true) echo 'class="timeline-inverted"'; ?>>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/<?= $sonuc2["foto"] ?>" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4><?= $sonuc2["tarih"] ?></h4>
                            <h4 class="subheading"><?= $sonuc2["baslik"] ?></h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted"><?= $sonuc2["icerik"] ?></p>
                        </div>
                    </div>
                </li>
            <?php
                $yon = !$yon;
            }
            ?>
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>
                        Hikayemizin
                        <br />
                        Parçası
                        <br />
                        Ol!
                    </h4>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase"><?= $sonuc["altBaslik"] ?></h2>
            <h3 class="section-subheading text-muted"><?= $sonuc["altIcerik"] ?></h3>
        </div>
        <div class="row">
            <?php
            $sorgu3 = $baglanti->prepare("SELECT * FROM takim where aktif=1 order by sira");
            $sorgu3->execute();
            while ($sonuc3 = $sorgu3->fetch()) {
            ?>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/<?= $sonuc3["foto"] ?>" alt="" />
                        <h4><?= $sonuc3["isim"] ?></h4>
                        <p class="text-muted"><?= $sonuc3["gorev"] ?></p>
                        <a class="btn btn-dark btn-social mx-2" href="<?= $sonuc3["twitter"] ?>"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="<?= $sonuc3["facebook"] ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="<?= $sonuc3["linkedin"] ?>"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <p class="large text-muted"><?= $sonuc["altIcerik2"] ?></p>
            </div>
        </div>
    </div>
</section>

<?php
include("inc/footer.php");
?>