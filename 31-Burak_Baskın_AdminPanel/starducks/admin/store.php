<?php
$page = "Mağaza";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');

$query = $connection->prepare("SELECT * FROM store");
$query->execute();
$result = $query->fetch();
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
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>                           
                            <th>ÜST Başlık</th>
                            <th>Ana Başlık</th>
                            <th>Adres</th>
                            <th>Telefon</th>
                            <th>Düzenle</th>


                            

                        </tr>
                        </thead>

                        <tbody>                      
                            <tr>
                                <td><?= $result["toptitle"] ?></td>
                                <td><?= $result["maintitle"] ?></td>                              
                               <td>
                                    <a class="btn btn-info" href="#" data-toggle="modal"
                                       data-target="#adres<?= $result["id"] ?>">Oku</a>
                                    <!-- Logout Modal-->
                                    <div class="modal fade" id="adres<?= $result["id"] ?>" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Adresiniz</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body"><?= $result["adress"] ?></div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                            data-dismiss="modal">Kapat
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                   <td><?= $result["phone"] ?></td>                                     
                                
                              <td><a class="btn btn" href="storeupdate.php?id=<?= $result["id"] ?>"><span
                                                class="fa fa-edit fa-2x"></span></a></td>
                                
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    <?php
    include('inc/footer.php');
    ?>



    