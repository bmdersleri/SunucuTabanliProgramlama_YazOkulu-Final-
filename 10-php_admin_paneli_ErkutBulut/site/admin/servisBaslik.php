<?php
$sayfa = "Servis Başlık";
include('inc/ahead.php');
$sorgu = $baglanti->prepare("SELECT * FROM servis");
$sorgu->execute();
$sonuc = $sorgu->fetch();
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
                <i class="fas fa-table me-1"></i>

            </div>
            <div class="card-body">

                <table class="table table-bordered" id="">
                    <thead>
                        <tr>
                            <th>Başlık</th>
                            <th>Alt Başlık</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $sonuc["baslik"] ?></td>
                            <td><?= $sonuc["altBaslik"] ?></td>
                            
                            <td class="text-center">
                                <?php if ($_SESSION["yetki"] == "1") { ?>
                                    <a href="servisBaslikGuncelle.php?id=<?= $sonuc["id"] ?>">
                                        <span class="fa fa-edit fa-2x"></span>
                                    </a>
                                <?php
                                } ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php

include('inc/afooter.php');
?>