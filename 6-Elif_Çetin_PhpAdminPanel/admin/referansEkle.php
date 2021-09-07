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


if($_POST)

{
    $aktif=0;
if(isset($_POST["aktif"])) $aktif=1;
$hata='';
if($_POST["link"] !=''&& $_POST["sira"] !='' && $_FILES["foto"]['name'] !='') {
    if ($_FILES['foto']['error'] != 0) {
        $hata .= 'Dosya yüklenirken hata oluştu';
    } else if (file_exists('../assets/img/logos/'.strtolower($_FILES["foto"]['name']))) {
        $hata .= 'Aynı dosyadan var';
    } else if ($_FILES['foto']['size'] > (1024 * 1024 * 2)) {
        $hata .= 'Dosya boyutu 2 mb den büyük olamaz';

    } else if (!in_array($_FILES['foto']['type'], ['image/png','image/jpeg'])) {
        $hata .= 'Dosya türü png veya jpeg olmalı';

    } else {
        copy($_FILES['foto']['tmp_name'], '../assets/img/logos/' . strtolower($_FILES["foto"]['name']));
        $ekleSorgu = $baglanti->prepare('insert into referans SET foto=:foto, link=:link, sira=:sira ,aktif=:aktif ');
        $ekle = $ekleSorgu->execute([
            'foto' => strtolower($_FILES["foto"]['name']),
            'link' => $_POST["link"],
            'sira' => $_POST["sira"],
            'aktif' => $aktif
        ]);

        if ($ekle) {
            echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
            echo "<script>Swal.fire({title:'Basarılı', text:'Ekleme işleminiz Gerçekleşti',icon:'success', confirmButtonText:'Kapat'}).then((value)=>{
    if(value.isConfirmed){window.location.href='referans.php'}})</script>";
        }
    }
    if ($hata != '') {
        echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
        echo "<script>Swal.fire({title:'HATA!', text:'$hata',icon:'error', confirmButtonText:'Kapat'})</script>";
    }

}


}
?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Referans EKle</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Referans Ekle</li>
        </ol>


        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>

            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" required class="form-control-file" ></div>
                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" name="link" required class="form-control" value="<?= @$_POST["link"] ?>">
                            </div>

                                                    <div class="form-group">
                                                        <label>Sıra</label>
                                                        <input type="text" name="sira" required class="form-control" value="<?= @$_POST["sira"] ?>">
                                                    </div>
                                                            <div class="form-group form-check">
                                                                <label>
                                                                <input type="checkbox" name="aktif"  class="form-check-input" >Aktif mi</label>
                                                            </div>
                                                            <div class="form-group">

                                                                <input type="submit"  value="Ekle" class="btn btn-primary">
                                                            </div>


                                                        </form>
                                                    </div>
                                            </div>
                                    </div>
</main>
<?php

include("inc/adminfooter.php");
?>
