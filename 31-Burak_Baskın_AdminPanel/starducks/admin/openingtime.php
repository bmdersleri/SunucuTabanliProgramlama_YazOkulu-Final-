<?php
$page = "Çalışma Saatleri";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');

$query = $connection->prepare("SELECT * FROM openingtime");
$query->execute();


?>

<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Çalışma Saatleri</li>
        </ol>
        

        <!-- DataTables Example -->
        <div class="card mb-3">

            <div class="card-body">


                <div class="table-responsive">
                    <table class="table table-bordered"  width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Gün</th>
                            <th>Çalışma Saatleri</th>
                            <th>Düzenle</th>

                            

                        </tr>
                        </thead>

                        <tbody>

                        <?php while ($result = $query->fetch()) { ?>
                            <tr>
                                <td><?= $result["id"] ?></td>
                                <td><?= $result["day"] ?></td>
                               
                              
                                <td><?= $result["time"] ?></td>
                                
                              <td><a class="btn btn" href="openingtimeupdate.php?id=<?= $result["id"] ?>"><span
                                                class="fa fa-edit fa-2x"></span></a></td>
                                
                            </tr>
                            <?php
                        }
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
