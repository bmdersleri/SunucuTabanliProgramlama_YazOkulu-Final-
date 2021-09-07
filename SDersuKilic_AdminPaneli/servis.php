<?php
$sayfa='Servis';
include ("inc/vt.php");
$sorgu=$baglanti->prepare("select * from servis");
$sorgu->execute();
$sonuc=$sorgu->fetch();
$tanimlama=$sonuc["tanimlama"];
$key=$sonuc["key"];
include("inc/head.php");
?>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mt-3"><?=$sonuc["baslik"]?></h2>
                <h3 class="section-subheading text-muted"><?=$sonuc["altbaslik"]?></h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                    <h4 class="my-3">Devops</h4>
                    <p class="text-muted">EFK/ELK monitoring, Logging, Docker, Kubernetes</p>
                </div>
            </div>
        </div>
    </section>
<?php
include("inc/footer.php");
?>