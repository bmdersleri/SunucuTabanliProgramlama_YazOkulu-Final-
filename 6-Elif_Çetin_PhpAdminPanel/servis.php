<?php
$sayfa = "Servis";
include("inc/vt.php");

$sorgu = $baglanti->prepare("select * from servis"); //sorguyu oluşturduk.
$sorgu->execute();//sorguyu calıştırdık.
$sonuc = $sorgu->fetch();//sonuçları aldırdık.//tablolardaki verileri sonuc değişkenine aldık.
include("inc/head.php");
$tanimlama = $sonuc["tanimlama"];//değişkenimi oluşturdum
$tanimlama = $sonuc["anahtar"];
include("inc/head.php");
?>


<!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase mt-3"><?php echo $sonuc['baslık'] ?></h2>
            <h3 class="section-subheading text-muted"><?php echo $sonuc['altBaslık'] ?></h3>
        </div>
        <div class="row text-center">
            <?php
            $sorgu2 = $baglanti->prepare("select * from servislerim where aktif=1 order by sira"); //sorguyu oluşturduk.//sadece aktif 1 e eşit olanları gösterecek pasife düştüğünde göstermiyecek//order bay da sıralama işlemi için
            $sorgu2->execute();//sorguyu calıştırdık.
            while ($sonuc2 = $sorgu2->fetch()) {
                ?>
                <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas <?php echo $sonuc2['ikon'] ?> fa-stack-1x fa-inverse"></i>
                        </span>
                    <h4 class="my-3"><?php echo $sonuc2['baslik'] ?> </h4>
                    <p class="text-muted"> <?php echo $sonuc2['icerik'] ?></p>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>

<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left">Copyright © Your Website 2020</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-right">
                <a class="mr-3" href="#!">Privacy Policy</a>
                <a href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="assets/mail/jqBootstrapValidation.js"></script>
<script src="assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
