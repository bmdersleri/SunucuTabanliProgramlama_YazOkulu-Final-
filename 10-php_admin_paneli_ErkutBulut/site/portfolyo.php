<?php
$sayfa = "Portfolyo";
include("inc/vt.php");
$sorgu = $baglanti->prepare("SELECT * FROM portfolyo");
$sorgu->execute();
$sonuc = $sorgu->fetch();
$tanimlama = $sonuc["tanimlama"];
$key = $sonuc["anahtar"];
include("inc/head.php");
?>

<section class="page-section bg-light " id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase mt-3"><?= $sonuc["baslik"] ?></h2>
            <h3 class="section-subheading text-muted"><?= $sonuc["altBaslik"] ?></h3>
        </div>
        <div class="row">
            <?php
            $sorgu2 = $baglanti->prepare("SELECT * FROM portfolyolar WHERE aktif=1 ORDER BY  sira");
            $sorgu2->execute();
            while ($sonuc2 = $sorgu2->fetch()) {
            ?>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal<?= $sonuc2["id"] ?>">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/<?= $sonuc2["kfoto"] ?>" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading"><?= $sonuc2["client"] ?></div>
                            <div class="portfolio-caption-subheading text-muted"><?= $sonuc2["category"] ?></div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-modal modal fade" id="portfolioModal<?= $sonuc2["id"] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project Details Go Here-->
                                            <h2 class="text-uppercase"><?= $sonuc2["baslik"] ?></h2>
                                            <p class="item-intro text-muted"><?= $sonuc2["aciklama"] ?></p>
                                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/<?= $sonuc2["bfoto"] ?>" alt="" />
                                            <p><?= $sonuc2["icerik"] ?></p>
                                            <ul class="list-inline">
                                                <li>Date: <?= $sonuc2["date"] ?></li>
                                                <li>Client: <?= $sonuc2["client"] ?></li>
                                                <li>Category: <?= $sonuc2["category"] ?></li>
                                            </ul>
                                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                <i class="fas fa-times mr-1"></i>
                                                Kapat
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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