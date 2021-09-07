<?php
$sayfa = "Mağaza Saat";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');

$sorgu = $baglanti->prepare("SELECT * FROM magazasaat");
$sorgu->execute();
?>

<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Panel</a>
            </li>
            <li class="breadcrumb-item active">Mağaza Saat</li>
        </ol>
        <div class="card mb-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered"  width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Gün</th>
                            <th>Saat</th>
                            <th>Düzenle</th>                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php while ($sonuc = $sorgu->fetch()) { ?>
                            <tr>
                                <td><?= $sonuc["id"] ?></td>
                                <td><?= $sonuc["gun"] ?></td>
                                <td><?= $sonuc["saat"] ?></td>
                              <td><a class="btn btn" href="updateStoreClock.php?id=<?= $sonuc["id"] ?>"><span class="fa fa-edit fa-2x"></span></a></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted"></div>
        </div>
    </div>
    <?php
    include('inc/footer.php');
    ?>