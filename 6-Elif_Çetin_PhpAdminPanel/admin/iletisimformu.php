<?php
$sayfa = "İletişim Formu";
include("inc/adminhead.php");
if (isset($_POST['sil'])&&$_SESSION["yetki"]==1) {
    //Seçilenleri pdo ile toplu silme kodu:
    $silinecekler = implode(', ', $_POST['sil']);
    $sorgu = $baglanti->prepare('DELETE FROM iletisimformu WHERE id IN (' . $silinecekler . ')');
    $sorgu->execute();
}
?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4"><?= $sayfa ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active"><?= $sayfa ?></li>
        </ol>
        <form action="" method="post">

        <div class="card mb-4">
            <div class="card-header">
                <?php
                if ($_SESSION["yetki"] == 1) {

                    ?>
                    <a  href="#"class="btn btn-danger" data-toggle="modal" data-target="#silModal"><span class="fa fa-trash "></span>Seçilenleri Sil</a>
                    <div class="modal fade "id="silModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Sil</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    Silmek istediğinizden emin misiniz?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">İptal</button>
                                    <button type="submit" class="btn btn-danger my-3"> Seçilenleri Sil</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>


            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th><input type="checkbox" id="tumunuSec" onclick="TumunuSec();" value=""></th>
                            <th>No</th>
                            <th>Ad</th>
                            <th>Mail </th>
                            <th>Mesaj</th>
                            <th>Tarih</th>
                            <th></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sorgu = $baglanti->prepare("select * from iletisimformu"); //sorguyu oluşturduk.
                        $sorgu->execute();//sorguyu calıştırdık.
                        while($sonuc = $sorgu->fetch()){
                        ?>
                        <tr>
                            <td>
                                <input class="cbSil" type="checkbox" name="sil[]" value="<?= $sonuc['id']; ?>">
                            </td>
                            <td><?= $sonuc["id"] ?></td>
                            <td> <?=$sonuc["ad"]?></td>
                            <td><?= $sonuc["email"] ?></td>
                            <td>
                            <a  href="#" class="btn btn-primary" data-toggle="modal" data-target="#okuModal<?=$sonuc["id"]?>"> Oku</span></a>
                                <div class="modal fade "id="okuModal<?=$sonuc["id"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Mesaj</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <?= $sonuc["mesaj"] ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>

                                            </div>
                                        </div>
                                    </div>
                                </div></td>

                            <td><?= $sonuc["tarih"] ?></td>
                            <td class="text-center">

                            </td>
                            <?php
                            }
                            ?>

                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</main>
<?php

include("inc/adminfooter.php");
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script type="text/javascript">
    //Tümünü seçme işlemi yapan script kodları:
    $(document).ready(function () {
        $('#tumunuSec').on('click', function () {
            if ($('#tumunuSec:checked').length == $('#tumunuSec').length) {
                $('input.cbSil:checkbox').prop('checked', true);
            } else {
                $('input.cbSil:checkbox').prop('checked', false);

            }
        });
    });
</script>