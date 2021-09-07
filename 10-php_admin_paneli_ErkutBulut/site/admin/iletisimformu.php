<?php
$sayfa = "İletişim Formu";
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

            </div>
            <div class="card-body">
                <div id="dataTable">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>

                                <th>İD</th>
                                <th>Ad</th>
                                <th>Email</th>
                                <th>Mesaj</th>
                                <th>Tarih</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sorgu = $baglanti->prepare("SELECT * FROM iletisimformu order by okundu");
                            $sorgu->execute();
                            while ($sonuc = $sorgu->fetch()) {
                            ?>
                                <tr <?php if ($sonuc["okundu"] == 0) echo 'class= "font-weight-bold"' ?>>

                                    <td><?= $sonuc["id"] ?></td>
                                    <td><?= $sonuc["ad"] ?></td>
                                    <td><?= $sonuc["email"] ?></td>
                                    <td class="text-center">
                                        <a id="<?= $sonuc["id"] ?>" href="#" class="btn btn-primary oku" data-bs-toggle="modal" data-bs-target="#okuModal<?= $sonuc["id"] ?>">Mesajı Oku</a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="okuModal<?= $sonuc["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Mesaj</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?= $sonuc["mesaj"] ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center"><?= $sonuc["tarih"] ?></td>
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
                                                            Silmek istediğinize emin misiniz?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                                                            <a href="sil.php?id=<?= $sonuc["id"] ?>&tablo=iletisimformu" class="btn btn-danger">Sil</a>
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
