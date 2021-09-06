<?php
$page = 'Hakkımızda';
include('inc/vt.php');
include('inc/head.php');
include('inc/nav.php');

$query = $connection->prepare("SELECT * FROM about_us");
$query->execute();
$result = $query->fetch();

?>


    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/<?= $result['photo'] ?>" alt="">
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper"><?= $result['toptitle'] ?></span>
                                <span class="section-heading-lower"><?= $result['title'] ?></span>
                            </h2>
                            <?= $result['content'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include('inc/footer.php');
?>