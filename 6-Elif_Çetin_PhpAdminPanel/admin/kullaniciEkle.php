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


if($_POST)

{
    $aktif=0;
    if(isset($_POST["aktif"])) $aktif=1;

    if($_POST["kadi"] !='' && $_POST["parola"] !='' && $_POST["yetki"] !='' && $_POST["email"] !='') {

            $ekleSorgu = $baglanti->prepare('insert into kullanıcı SET kadi=:kadi, parola=:parola, yetki=:yetki ,email=:email ,aktif=:aktif ');
            $ekle = $ekleSorgu->execute([

                'kadi' => $_POST["kadi"],
                'parola' => md5("25".$_POST["parola"]."05"),
                'email'=> $_POST["email"],
                'yetki' => $_POST["yetki"],
                'aktif' => $aktif
            ]);

        if ($ekle) {
            echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
            echo "<script>Swal.fire({title:'Basarılı', text:'Ekleme işleminiz Gerçekleşti',icon:'success', confirmButtonText:'Kapat'}).then((value)=>{
    if(value.isConfirmed){window.location.href='kullanici.php'}})</script>";
        }
        else {
            echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
            echo "<script>Swal.fire({title:'HATA!', text:'Ekleme Başarısız',icon:'error', confirmButtonText:'Kapat'})</script>";
        }

    }





}
?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Kullanıcı EKle</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Kullanıcı Ekle</li>
        </ol>


        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>

            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Kullanıcı Adı</label>
                        <input type="text" name="kadi" required class="form-control"value="<?= @$_POST["kadi"] ?>" ></div>
                    <div class="form-group">
                        <label>Parola</label>
                        <input type="password" name="parola" required class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" required class="form-control"value="<?= @$_POST["email"] ?>" >
                    </div>
                    <div class="form-group">
                        <label>Yetki</label><br>
                        <label><input type="radio" name="yetki" value="1">Admin</label><br>
                        <label><input type="radio" name="yetki" value="2" checked>Normal Kullanıcı</label>



                    </div>
                    <div class="form-group form-check">
                        <labell>
                            <input type="checkbox" name="aktif"  class="form-check-input" >Aktif mi</labell>
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

