<?php
$sayfa = "Kullanıcılar";
include("inc/adminhead.php");
if($_SESSION["yetki"]!=1)//kullanıcı yetkisi 1 e eşit değilse
{
    echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
    echo"<script>Swal.fire({title:'HATA!', text:'Yetkisiz kullanıcı',icon:'error', confirmButtonText:'Geri dön'}).then((value)=>{
    if(value.isConfirmed){window.location.href='anasayfa.php.'}})</script>";
    exit;

}
$sorgu = $baglanti->prepare("select * from kullanıcı where id=:id"); //sorguyu oluşturduk.
$sorgu->execute(['id'=>$_GET['id']]);//sorguyu calıştırdık.
$sonuc = $sorgu->fetch();

if($_POST)

{
    $aktif=0;
    if(isset($_POST["aktif"])) $aktif=1;

    if($_POST["kadi"] !='' && $_POST["parola"] !='' && $_POST["parola"] == $_POST["ptekrar"] ) {

        $ekleSorgu = $baglanti->prepare('update kullanıcı SET kadi=:kadi, parola=:parola where id=:id');
        $ekle = $ekleSorgu->execute([

            'kadi' => $_POST["kadi"],
            'parola' => md5("25".$_POST["parola"]."05"),
            'id'=>$_GET['id']
        ]);

        if ($ekle) {
            echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
            echo "<script>Swal.fire({title:'Basarılı', text:'Güncelleme işleminiz Gerçekleşti',icon:'success', confirmButtonText:'Kapat'}).then((value)=>{
    if(value.isConfirmed){window.location.href='kullanici.php'}})</script>";
        }
        else {
            echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
            echo "<script>Swal.fire({title:'HATA!', text:'Ekleme Başarısız',icon:'error', confirmButtonText:'Kapat'})</script>";
        }
        }
    else {
            echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
            echo "<script>Swal.fire({title:'HATA!', text:'Eksik veri',icon:'error', confirmButtonText:'Kapat'})</script>";
        }



}
?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Parola Güncelle</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Parola Güncelle</li>
        </ol>


        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>

            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Kullanıcı Adı</label>
                        <input type="text" name="kadi" required class="form-control"value="<?=$sonuc["kadi"]?>" ></div>
                    <div class="form-group">
                        <label>Parola</label>
                        <input type="password" name="parola" required class="form-control" >
                    </div>
                    <label>Parola Tekrar</label>
                    <input type="password" name="ptekrar" required class="form-control" >
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


