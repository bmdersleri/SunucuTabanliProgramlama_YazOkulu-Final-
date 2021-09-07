<?php
$page = 'Ana Sayfa';
include('inc/vt.php');
include('inc/head.php');
include('inc/nav.php');

$query = $connection->prepare("SELECT * FROM homepage");
$query->execute();
$result = $query->fetch();

?>

    <section class="page-section clearfix">
        <div class="container">
            <div class="intro">
                <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/<?= $result['photo'] ?>" alt="">
                <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                    <h2 class="section-heading mb-4">

                        <span class="section-heading-lower"><?= $result['toptitle'] ?></span>
                    </h2>
                    <p class="mb-3">
                        <?= $result['topcontent'] ?>
                    </p>
                    <div class="intro-button mx-auto">
                        <a class="btn btn-primary btn-xl" href="#"><?= $result['link'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner text-center rounded">
                        <h2 class="section-heading mb-4">

                            <span class="section-heading-lower"><?= $result['subtitle'] ?></span>
                        </h2>
                        <?= $result['subcontent'] ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include('inc/footer.php');
?>