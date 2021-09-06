<?php
$sayfa="Tarihçe";
include("inc/ahead.php");

?>


                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Ana Sayfa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item active">Ana Sayfa</li>


                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive"></div>
                                <table class="table table-bordered id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tarih</th>
                                            <th>Başlık</th>
                                            <th>İçerik</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>



                                    <tbody>

                                    <?php
                                    $sorgu=$baglanti->prepare("select * from tarihce");
                                    $sorgu->execute();
                                    $sonuc=$sorgu->fetch();
                                    ?>
                                    <tr>
                                        <td><?= $sonuc["tarih"] ?></td>
                                        <td><?= $sonuc["baslik"] ?></td>
                                        <td><?= $sonuc["icerik"] ?></td>
                                        <td><?= $sonuc["foto"] ?></td>
                                        <td class="text-center"><a href="tarihceGuncelle.php?id=<?=$sonuc["id"]?>">
                                                <span class="fa fa-edit fa-2x"></span>
                                            </a>
                                        </td>
                                       <td class"text-center">
                                       <?php if ($_SESSION["yetki"]=="1") {
                                           ?>
                                           <a href="#" data-toggle="modal" data-target="#siLModal<?= $sonuc["id"] ?>">
                                           <span class="fa fa-trash fa-2x text-danger"></span></a>

<?php
include("inc/afooter.php");
?>