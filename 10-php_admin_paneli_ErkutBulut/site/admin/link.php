<?php
$sayfa = "Sosyal Medya";
include('inc/ahead.php');
$sorgu = $baglanti->prepare("SELECT * FROM linkler");
$sorgu->execute();
$sonuc = $sorgu->fetch();
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Sosyal Medya</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Sosyal Medya</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>

            </div>
            <div class="card-body">

                <table class="table table-bordered" id="">
                    <thead>
                        <tr>
                            <th>Facebook</th>
                            <th>Twitter</th>
                            <th>İnstagram</th>
                            <th>Linkedin</th>
                            <th>Youtube</th>
                            
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $sonuc["facebook"] ?></td>
                            <td><?= $sonuc["twitter"] ?></td>
                            <td><?= $sonuc["instagram"] ?></td>
                            <td><?= $sonuc["linkedin"] ?></td>
                            <td><?= $sonuc["youtube"] ?></td>
                            
                            <td class="text-center">
                                <?php if ($_SESSION["yetki"] == "1") { ?>
                                    <a href="linkGuncelle.php?id=<?= $sonuc["id"] ?>">
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