<?php
$sayfa = "Ana Sayfa";
include("inc/adminhead.php");
if($_SESSION["yetki"]!=1)//kullanıcı yetkisi 1 e eşit değilse
{
    echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
    echo"<script>Swal.fire({title:'HATA!', text:'Yetkisiz kullanıcı',icon:'error', confirmButtonText:'Geri dön'}).then((value)=>{
    if(value.isConfirmed){window.location.href='anasayfa.php'}})</script>";
    exit;

}



$sorgu = $baglanti->prepare("select * from anasayfa where id=:id");
$sorgu->execute(['id'=> (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();


if($_POST)//veri güncelle

{
    $guncelleSorgu=$baglanti->prepare("update  anasayfa set ustBaslik=:ustBaslik, altBaslik=:altBaslik, 
                     linkMetin=:linkMetin, link=:link, tanimlama=:tanimlama, anahtar=:anahtar where id=:id");
    $guncelle=$guncelleSorgu->execute([
        'ustBaslik'=>$_POST["ustBaslik"],
        'altBaslik'=>$_POST["altBaslik"],
        'linkMetin'=>$_POST["linkMetin"],
        'link'=>$_POST["link"],
        'tanimlama'=>$_POST["tanimlama"],
        'anahtar'=>$_POST["anahtar"],
        'id'=> (int)$_GET["id"]]);


    if($guncelle){
        echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
  echo"<script>Swal.fire({title:'Basarılı', text:'Güncelleme işleminiz Gerçekleşti',icon:'success', confirmButtonText:'Kapat'}).then((value)=>{
    if(value.isConfirmed){window.location.href='anasayfa.php'}})</script>";
    }
}
?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Ana Sayfa Güncelle</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Ana Sayfa Güncelle</li>
        </ol>


        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>

            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <lable>Üst Baslık</lable>
                        <input type="text" name="ustBaslik" required class="form-control" value="<?= $sonuc["ustBaslik"] ?>">
                        <form action="" method="post">
                            <div class="form-group">
                                <lable>Alt Baslık</lable>
                                <input type="text" name="altBaslik" required class="form-control" value="<?= $sonuc["altBaslik"] ?>">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <lable>Link Metin</lable>
                                        <input type="text" name="linkMetin" required class="form-control" value="<?= $sonuc["linkMetin"] ?>">
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <lable>Link</lable>
                                                <input type="text" name="link" required class="form-control" value="<?= $sonuc["link"] ?>">
                                                <form action="" method="post">
                                                    <div class="form-group">
                                                        <lable>Tanımlama</lable>
                                                        <input type="text" name="tanimlama" required class="form-control" value="<?= $sonuc["tanimlama"] ?>">
                                                        <form action="" method="post">
                                                            <div class="form-group">
                                                                <lable>Anahtar</lable>
                                                                <input type="text" name="anahtar" required class="form-control" value="<?= $sonuc["anahtar"] ?>">
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

