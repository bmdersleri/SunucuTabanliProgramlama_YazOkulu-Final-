<?php
$sayfa = "Sosyal Medya";
include('inc/ahead.php');
if($_SESSION["yetki"]!="1"){
    echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
        echo "<script> Swal.fire({title:'Hata!',text:'Yetkisiz kullanıcı',icon:'error',confirmButtonText:'Tamam'}).then((value)=>{if(value.isConfirmed){window.location.href='anasayfa.php'}})</script>";
        exit;
}
$sorgu = $baglanti->prepare("SELECT * FROM linkler where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();
if ($_POST) {
    $guncelleSorgu = $baglanti->prepare("UPDATE linkler set facebook=:facebook, twitter=:twitter, instagram=:instagram, linkedin=:linkedin, youtube=:youtube where id=:id");
    $guncelle=$guncelleSorgu->execute([
        'facebook'=>$_POST["facebook"],
        'twitter'=>$_POST["twitter"],
        'instagram'=>$_POST["instagram"],
        'linkedin'=>$_POST["linkedin"],
        'youtube'=>$_POST["youtube"],
        'id'=>(int)$_GET["id"]
    ]);
    if($guncelle){
        echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
        echo "<script> Swal.fire({title:'Başarılı!',text:'Güncellendi',icon:'success',confirmButtonText:'Tamam'}).then((value)=>{if(value.isConfirmed){window.location.href='link.php'}})</script>";
    }
}
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Sosyal Medya Güncelle</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Sosyal Medya Güncelle</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" name="facebook" required class="form-control" value="<?= $sonuc["facebook"] ?>">
                    </div>
                    <div class="form-group">
                        <label>Twitter</label>
                        <input type="text" name="twitter" required class="form-control" value="<?= $sonuc["twitter"] ?>">
                    </div>
                    <div class="form-group">
                        <label>İnstagram</label>
                        <input type="text" name="instagram" required class="form-control" value="<?= $sonuc["instagram"] ?>">
                    </div>
                    <div class="form-group">
                        <label>	Linkedin</label>
                        <input type="text" name="linkedin" required class="form-control" value="<?= $sonuc["linkedin"] ?>">
                    </div>
                    <div class="form-group">
                        <label>Youtube</label>
                        <input type="text" name="youtube" required class="form-control" value="<?= $sonuc["youtube"] ?>">
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