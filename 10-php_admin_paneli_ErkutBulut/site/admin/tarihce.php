<?php
$sayfa = "Tarihçe";
include('inc/ahead.php');

?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"><?= $sayfa ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active"><?= $sayfa ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="tarihceEkle.php" class="btn btn-primary">Tarihçe Ekle</a>
            </div>
            <div class="card-body">
                <div id="dataTable">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Tarih</th>
                                <th>Başlık</th>
                                <th>İçerik</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sorgu = $baglanti->prepare("SELECT * FROM tarihce");
                            $sorgu->execute();
                            while ($sonuc = $sorgu->fetch()) {
                            ?>
                                <tr>
                                    
                                    <td><img width="200" src="../assets/img/about/<?= $sonuc["foto"] ?>" alt="">
                                    </td>
                                    <td><?= $sonuc["tarih"] ?></td>
                                    <td><?= $sonuc["baslik"] ?></td>
                                    <td><?= $sonuc["icerik"] ?></td>
                                    
                                    <td class="text-center"><?php if ($_SESSION["yetki"] == "1") { ?>
                                            <a href="tarihceGuncelle.php?id=<?= $sonuc["id"] ?>">
                                                <span class="fa fa-edit fa-2x"></span>
                                            </a>
                                        <?php
                                                            } ?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($_SESSION["yetki"] == "1") { ?>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#silModal<?= $sonuc["id"] ?>"><span class="fa fa-trash fa-2x text-danger"></span></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="silModal<?= $sonuc["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Sil</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img width="200" src="../assets/img/logos/<?= $sonuc["foto"] ?>" alt="">
                                                            Silmek istediğinize emin misiniz?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                                                            <a href="sil.php?id=<?= $sonuc["id"] ?>&tablo=tarihce" class="btn btn-danger">Sil</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        } ?>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</main>
<?php

include('inc/afooter.php');
?>