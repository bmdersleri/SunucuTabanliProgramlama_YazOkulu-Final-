<?php
$sayfa = "Referanslar";
include("inc/adminhead.php");
if($_SESSION["yetki"]!=1)//kullanıcı yetkisi 1 e eşit değilse
{
    echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
    echo"<script>Swal.fire({title:'HATA!', text:'Yetkisiz kullanıcı',icon:'error', confirmButtonText:'Geri dön'}).then((value)=>{
    if(value.isConfirmed){window.location.href='referans.php.'}})</script>";
    exit;

}
$id=$_GET['id'];
$sorgu=$baglanti->prepare("select * from referans where id=:id"); //sorguyu oluşturduk.
$sorgu->execute(['id'=>$id]);
$sonuc=$sorgu->fetch();

if($_POST) {
    $aktif = 0;
    if (isset($_POST["aktif"])) $aktif = 1;
    $hata = '';
    $foto = '';


    if ($_POST["link"] != '' && $_POST["sira"] != '' && $_FILES["foto"]['name'] != '') {
        if ($_FILES['foto']['error'] != 0) {
            $hata .= 'Dosya yüklenirken hata oluştu';
        } else if (file_exists('../assets/img/logos/' . strtolower($_FILES["foto"]['name']))) {
            $hata .= 'Aynı dosyadan var';
        } else if ($_FILES['foto']['size'] > (1024 * 1024 * 2)) {
            $hata .= 'Dosya boyutu 2 mb den büyük olamaz';

        } else if (!in_array($_FILES['foto']['type'], ['image/png', 'image/jpeg'])) {
            $hata .= 'Dosya türü png veya jpeg olmalı';

        } else {
            copy($_FILES['foto']['tmp_name'],'../assets/img/logos/' . strtolower($_FILES["foto"]['name']));
            unlik('../assets/img/logos/' . $sonuc['foto']);
            $foto = strtolower($_FILES["foto"]['name']);

        }
        if ($hata != '') {
            echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
            echo "<script>Swal.fire({title:'HATA!', text:'$hata',icon:'error', confirmButtonText:'Kapat'})</script>";
        }
    } else {
        $foto = $sonuc['foto'];//kullanıcı foto yüklemek istemezse veri ucmaması için
    }
    if ($_POST["link"] != '' && $_POST["sira"] != '' && $hata == '') {
        $Sorgu = $baglanti->prepare('UPDATE referans SET foto=:foto, link=:link, sira=:sira ,aktif=:aktif where id=:id');
        $guncelle = $Sorgu->execute([
            'foto' => $foto,
            'link' => $_POST["link"],
            'sira' => $_POST["sira"],
            'aktif' => $aktif,
            'id' => $id
        ]);

        if ($guncelle) {
            echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
            echo "<script>Swal.fire({title:'Basarılı', text:'Başarıyla Güncellendi.',icon:'success', confirmButtonText:'Kapat'}).then((value)=>{
    if(value.isConfirmed){window.location.href='referans.php'}})</script>";
        }
    }


}
?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Referans Güncelle</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Referans Güncelle</li>
        </ol>


        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>

            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <img width="200" src="../assets/img/logos/<?= $sonuc["foto"] ?>"alt=""><br>
                        <lable>Foto</lable>
                        <input type="file" name="foto"  class="form-control-file" ></div>
                    <div class="form-group">
                        <lable>Link</lable>
                        <input type="text" name="link" required class="form-control" value="<?= $sonuc["link"] ?>">
                    </div>

                    <div class="form-group">
                        <lable>Sıra</lable>
                        <input type="text" name="sira" required class="form-control" value="<?= $sonuc["sira"] ?>">
                    </div>
                    <div class="form-group form-check">
                        <lable>
                            <input type="checkbox" name="aktif"  class="form-check-input"<?=$sonuc['aktif']==1?'checked':''?>>Aktif mi</lable>
                    </div>
                    <div class="form-group">

                        <input type="submit"  value="Güncelle" class="btn btn-primary">
                    </div>


                </form>
            </div>
        </div>
    </div>
</main>
<?php

include("inc/adminfooter.php");
?>

