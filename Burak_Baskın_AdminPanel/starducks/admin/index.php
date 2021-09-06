<?php
$page = "Ana Sayfa";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');

$querry = $connection->prepare("SELECT * FROM homepage");
$querry->execute();


?>

<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Ana Sayfa</li>
        </ol>


        <!-- DataTables Example -->
        <div class="card mb-3">

            <div class="card-body">


                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>photo</th>
                            <th>Üst Başlık</th>
                            <th>Üst İçerik</th>
                            <th>LİNK</th>
                            <th>Alt Başlık</th>
                            <th>Alt İçerik</th>
                            <th>Düzenle</th>


                        </tr>
                        </thead>

                        <tbody>

                        <?php while ($result = $querry->fetch()) { ?>
                            <tr>
                                <td><?= $result["id"] ?></td>
                                <td><img src="../img/<?= $result["photo"] ?>" width="150px"/></td>
                                <td><?= $result["toptitle"] ?></td>
                                <td><a class="btn btn-info" href="#" data-toggle="modal"
                                       data-target="#icerik<?= $result["id"] ?>">Oku</a>
                                    <!-- Logout Modal-->
                                    <div class="modal fade" id="icerik<?= $result["id"] ?>" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">İçerik</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body"><?= $result["topcontent"] ?></div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                            data-dismiss="modal">Kapat
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><?= $result["link"] ?></td>

                                <td><?= $result["subtitle"] ?></td>
                                <td><a class="btn btn-info" href="#" data-toggle="modal"
                                       data-target="#icerik1<?= $result["id"] ?>">Oku</a>
                                    <!-- Logout Modal-->
                                    <div class="modal fade" id="icerik1<?= $result["id"] ?>" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">İçerik</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body"><?= $result["subcontent"] ?></div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                            data-dismiss="modal">Kapat
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><a class="btn btn" href="homepageupdate.php?id=<?= $result["id"] ?>"><span
                                                class="fa fa-edit fa-2x"></span></a></td>

                            </tr>
                            <?php
                        } //while bitimi
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

    </div>
    <!-- /.container-fluid -->
    <?php
    include('inc/footer.php');
    ?>




