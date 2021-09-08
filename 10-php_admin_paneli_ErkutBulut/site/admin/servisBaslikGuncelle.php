<?php
$sayfa = "Servis Başlık";
include('inc/ahead.php');

$sorgu = $baglanti->prepare("SELECT * FROM servis where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();
if ($_POST) {
    $guncelleSorgu = $baglanti->prepare("UPDATE servis set baslik=:baslik, altBaslik=:altBaslik where id=:id");
    $guncelle=$guncelleSorgu->execute([
        'baslik'=>$_POST["baslik"],
        'altBaslik'=>$_POST["altBaslik"], 
        'id'=>(int)$_GET["id"]
    ]);
    if($guncelle){
        echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
        echo "<script> Swal.fire({title:'Başarılı!',text:'Güncellendi',icon:'success',confirmButtonText:'Tamam'}).then((value)=>{if(value.isConfirmed){window.location.href='servisBaslik.php'}})</script>";
    }
}
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Servis Başlık Güncelle</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Servis Başlık Güncelle</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Başlık</label>
                        <input type="text" name="baslik" required class="form-control" value="<?= $sonuc["baslik"] ?>">
                    </div>
                    <div class="form-group">
                        <label>Alt Başlık</label>
                        <input type="text" name="altBaslik" required class="form-control" value="<?= $sonuc["altBaslik"] ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" value="Güncelle" class="btn btn-primary">
                    </div>
                </form </div>
            </div>
        </div>
</main>
<?php

include('inc/afooter.php');
?>