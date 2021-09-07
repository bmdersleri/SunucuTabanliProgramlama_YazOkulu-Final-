<?php
$sayfa="Ana Sayfa";
include("inc/vt.php");
$sorgu=$baglanti->prepare("select * from anasayfa"); //sorguyu oluşturduk.
$sorgu->execute();//sorguyu calıştırdık.
$sonuc=$sorgu->fetch();//sonuçları aldırdık.//tablolardaki verileri sonuc değişkenine aldık.
include("inc/head.php");
$tanimlama=$sonuc["tanimlama"];//değişkenimi oluşturdum
$tanimlama=$sonuc["anahtar"]
?>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading"><?=$sonuc['ustBaslik']?></div>

            <div class="masthead-heading text-uppercase"><?=$sonuc['altBaslik']?></div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?php echo $sonuc['link'] ?>"><?php echo $sonuc['linkMetin'] ?></a>
        </div>
    </header>
    <!-- Clients-->
    <div class="py-5">
        <div class="container">
            <div class="row">
                <?php

                $sorgu2=$baglanti->prepare("select * from referans where aktif=1 order by sira"); //sorguyu oluşturduk.//sadece aktif 1 e eşit olanları gösterecek pasife düştüğünde göstermiyecek//order bay da sıralama işlemi için
                $sorgu2->execute();//sorguyu calıştırdık.
                while($sonuc2=$sorgu2->fetch()) {
                    ?>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="<?php echo $sonuc2['link'] ?>"><img class="img-fluid d-block mx-auto" src="assets/img/logos/<?php echo $sonuc2['foto'] ?>" alt="" /></a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
<?php
include("inc/footer.php");
?>