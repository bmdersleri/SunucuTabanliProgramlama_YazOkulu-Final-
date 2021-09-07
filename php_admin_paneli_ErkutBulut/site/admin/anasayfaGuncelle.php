<?php
$sayfa = "Ana Sayfa";
include('inc/ahead.php');
if($_SESSION["yetki"]!="1"){
    echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
        echo "<script> Swal.fire({title:'Hata!',text:'Yetkisiz kullanıcı',icon:'error',confirmButtonText:'Tamam'}).then((value)=>{if(value.isConfirmed){window.location.href='anasayfa.php'}})</script>";
        exit;
}
$sorgu = $baglanti->prepare("SELECT * FROM anasayfa where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();
if ($_POST) {
    $guncelleSorgu = $baglanti->prepare("UPDATE anasayfa set ustBaslik=:ustBaslik, altBaslik=:altBaslik, linkMetin=:linkMetin, link=:link, tanimlama=:tanimlama, anahtar=:anahtar where id=:id");
    $guncelle=$guncelleSorgu->execute([
        'ustBaslik'=>$_POST["ustBaslik"],
        'altBaslik'=>$_POST["altBaslik"],
        'linkMetin'=>$_POST["linkMetin"],
        'link'=>$_POST["link"],
        'tanimlama'=>$_POST["tanimlama"],
        'anahtar'=>$_POST["anahtar"],
        'id'=>(int)$_GET["id"]
    ]);
    if($guncelle){
        echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
        echo "<script> Swal.fire({title:'Başarılı!',text:'Güncellendi',icon:'success',confirmButtonText:'Tamam'}).then((value)=>{if(value.isConfirmed){window.location.href='anasayfa.php'}})</script>";
    }
}
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Ana Sayfa Güncelle</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Ana Sayfa Güncelle</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Üst Başlık</label>
                        <input type="text" name="ustBaslik" required class="form-control" value="<?= $sonuc["ustBaslik"] ?>">
                    </div>
                    <div class="form-group">
                        <label>Alt Başlık</label>
                        <input type="text" name="altBaslik" required class="form-control" value="<?= $sonuc["altBaslik"] ?>">
                    </div>
                    <div class="form-group">
                        <label>Link Metin</label>
                        <input type="text" name="linkMetin" required class="form-control" value="<?= $sonuc["linkMetin"] ?>">
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <input type="text" name="link" required class="form-control" value="<?= $sonuc["link"] ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanımlama</label>
                        <input type="text" name="tanimlama" required class="form-control" value="<?= $sonuc["tanimlama"] ?>">
                    </div>
                    <div class="form-group">
                        <label>Anahtar</label>
                        <input type="text" name="anahtar" required class="form-control" value="<?= $sonuc["anahtar"] ?>">
                    </div>
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