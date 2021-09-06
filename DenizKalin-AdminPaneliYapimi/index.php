<?php
$sayfa="Ana Sayfa";
include("inc/vt.php");
include("inc/head.php");

$sorgu=$baglanti->prepare("select * from anasayfa");
$sorgu->execute();
$sonuc=$sorgu->fetch();
?>

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading"><?php echo $sonuc["ustBaslik"] ?></div>
                <div class="masthead-heading text-uppercase"><?php echo $sonuc["altBaslik"] ?></div>

            </div>
        </header>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row">

                    <?php
                    $sorgu2=$baglanti->prepare("select * from referans WHERE akfit=1 ");
                    $sorgu2->execute();
                    while($sonuc2=$sorgu2->fetch())
                    {
                    ?>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/<?php echo $sonuc2["foto"] ?>" alt="" /></a>
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

