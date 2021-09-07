<?php
$page = 'Magaza';
include('inc/vt.php');
include('inc/head.php');
include('inc/nav.php');

$query1 = $connection->prepare("SELECT * FROM store");
$query1->execute();
$result1 = $query1->fetch();

?>
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper"><?= $result1['toptitle'] ?></span>
                        <span class="section-heading-lower"><?= $result1['maintitle'] ?></span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <?php
                        $query2 = $connection->prepare("SELECT * FROM openingtime");
                        $query2->execute();
                        while ($result2 = $query2->fetch()) {
                            ?>

                            <li class="list-unstyled-item list-hours-item d-flex">
                                <?= $result2['day'] ?>
                                <span class="ml-auto"><?= $result2['time'] ?></span>
                            </li>
                            <?php
                        } //while sonu
                        ?>

                    </ul>
                    <p class="address mb-5">
                        <?= $result1['adress'] ?>
                    </p>
                    <p class="mb-0">
                        <small>
                            <em>İstediğiniz Zaman Arayın!</em>
                        </small>
                        <br>
                        <?= $result1['phone'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

$query3 = $connection->prepare("SELECT * FROM about_us");
$query3->execute();
$result3 = $query3->fetch();//query çalıştırılıp veriler alınıyor

?>

<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/<?= $result3['photo'] ?>" alt="">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper"><?= $result3['toptitle'] ?></span>
                            <span class="section-heading-lower"><?= $result3['title'] ?></span>
                        </h2>
                        <?= $result3['content'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include('inc/footer.php');
?>
