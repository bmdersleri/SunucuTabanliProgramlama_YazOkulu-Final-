<?php
$sayfa = 'Magaza';
include('inc/vt.php');
include('inc/head.php');
include('inc/nav.php');

$sorgu1 = $baglanti->prepare("SELECT * FROM magaza");
$sorgu1->execute();
$sonuc1 = $sorgu1->fetch();

?>
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper"><?= $sonuc1['ustBaslik'] ?></span>
                        <span class="section-heading-lower"><?= $sonuc1['anaBaslik'] ?></span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <?php
                        $sorgu2 = $baglanti->prepare("SELECT * FROM magazasaat");
                        $sorgu2->execute();
                        while ($sonuc2 = $sorgu2->fetch()) {
                            ?>

                            <li class="list-unstyled-item list-hours-item d-flex">
                                <?= $sonuc2['gun'] ?>
                                <span class="ml-auto"><?= $sonuc2['saat'] ?></span>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                    <p class="address mb-5">
                        <?= $sonuc1['adres'] ?>
                    </p>
                    <p class="mb-0">
                        <?= $sonuc1['telefon'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include('inc/footer.php');
?>