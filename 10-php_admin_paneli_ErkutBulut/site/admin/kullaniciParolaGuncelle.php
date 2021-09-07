<?php
$sayfa = "Kullanıcılar";
include('inc/ahead.php');
if ($_SESSION["yetki"] != "1") {
    echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
    echo "<script> Swal.fire({title:'Hata!',text:'Yetkisiz kullanıcı',icon:'error',confirmButtonText:'Tamam'}).then((value)=>{if(value.isConfirmed){window.location.href='anasayfa.php'}})</script>";
    exit;
}
$sorgu = $baglanti->prepare("SELECT * FROM kullanici where id=:id");
$sorgu->execute(['id'=>$_GET['id']]);
$sonuc = $sorgu->fetch();
if ($_POST) {


    if ($_POST["kadi"] != '' && $_POST["parola"] != '' && $_POST["parola"] == $_POST["pTekrar"]) {
        $ekleSorgu = $baglanti->prepare('UPDATE kullanici SET kadi=:kadi, parola=:parola where id=:id');
        $ekle = $ekleSorgu->execute([
            'kadi' => $_POST['kadi'],
            'parola' => md5("56" . $_POST['parola'] . "23"),
            'id'=>$_GET['id']
            
            

        ]);
        if ($ekle) {
            echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
            echo "<script> Swal.fire({title:'Başarılı!',text:'Güncelleme başarılı',icon:'success',confirmButtonText:'Tamam'}).then((value)=>{if(value.isConfirmed){window.location.href='kullanici.php'}})</script>";
        } else {
            echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
            echo "<script> Swal.fire({title:'Hata!',text:'Güncelleme başarısız',icon:'error',confirmButtonText:'Tamam'})</script>";
        }
    }
    else {
        echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
        echo "<script> Swal.fire({title:'Hata!',text:'Parola aynı değil',icon:'error',confirmButtonText:'Tamam'})</script>";
    }
}
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Kullanıcı Güncelle</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Kullanıcı Güncelle</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Kullanıcı Adı</label><br>
                        <input type="text" name="kadi" required class="form-control" value="<?= $sonuc["kadi"] ?>">
                    </div>

                    <div class="form-group">
                        <label>Parola</label>
                        <input type="password" name="parola" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Parola Tekrar</label>
                        <input type="password" name="pTekrar" required class="form-control">
                    </div><br>

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