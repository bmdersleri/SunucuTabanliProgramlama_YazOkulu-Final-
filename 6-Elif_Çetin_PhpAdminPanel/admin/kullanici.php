<?php
$sayfa = "Kullanıcılar";
include("inc/adminhead.php");
if($_SESSION["yetki"]!=1)//kullanıcı yetkisi 1 e eşit değilse
{
    echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
    echo"<script>Swal.fire({title:'HATA!', text:'Yetkisiz kullanıcı',icon:'error', confirmButtonText:'Geri dön'}).then((value)=>{
    if(value.isConfirmed){window.location.href='anasayfa.php..'}})</script>";
    exit;

}
if (isset($_POST['sil'])&&$_SESSION["yetki"]==1) {
    //Seçilenleri pdo ile toplu silme kodu:
    $silinecekler = implode(', ', $_POST['sil']);
    $sorgu = $baglanti->prepare('DELETE FROM kullanıcı WHERE id IN (' . $silinecekler . ')');
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
                <a href="kullaniciEkle.php "class="btn btn-primary">Kullanıcı  Ekle</a>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th><input type="checkbox" id="tumunuSec" onclick="TumunuSec();" value=""></th>
                            <th>Kullanıcı Adı</th>
                            <th>Yetki</th>
                            <th>E Mail </th>
                            <th>Aktif</th>
                            <th>Parola<br>Güncelle</th>
                            <th>Güncelle</th>


                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sorgu = $baglanti->prepare("select * from kullanıcı"); //sorguyu oluşturduk.
                        $sorgu->execute();//sorguyu calıştırdık.
                        while($sonuc = $sorgu->fetch()){
                        ?>
                        <tr>
                            <td>
                                <input class="cbSil" type="checkbox" name="sil[]" value="<?= $sonuc['id']; ?>">
                            </td>
                            <td><?= $sonuc["kadi"] ?></td>
                            <td><?= $sonuc["yetki"]==1?'Admin':'Normal Kullanıcı' ?></td>
                            <td><?= $sonuc["email"] ?></td>
                            <td><span class="fa fa-2x fa-<?=$sonuc["aktif"]=="1"?"check text-success":"times  text-danger" ?>"></span></td>
                            <td>
                                <a href="kullaniciParolaGuncelle.php?id=<?= $sonuc["id"] ?>">
                                        <span class="fa fa-key fa-2x"></span>
                                    </a>

                            </td>
                            <td>
                                <a href="kullaniciGuncelle.php?id=<?= $sonuc["id"] ?>">
                                    <span class="fa fa-edit fa-2x"></span>
                                </a>

                            </td>

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
</form>
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



