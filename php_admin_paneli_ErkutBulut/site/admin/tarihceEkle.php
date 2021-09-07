<?php
$sayfa = "Tarihçe";
include('inc/ahead.php');
if ($_SESSION["yetki"] != "1") {
    echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
    echo "<script> Swal.fire({title:'Hata!',text:'Yetkisiz kullanıcı',icon:'error',confirmButtonText:'Tamam'}).then((value)=>{if(value.isConfirmed){window.location.href='tarihce.php'}})</script>";
    exit;
}

if ($_POST) {
    $hata = '';
    if ($_POST["tarih"] != '' && $_POST["baslik"] != '' && $_POST["icerik"] != '' && $_FILES["foto"]['name'] != '') {
        if ($_FILES['foto']['error'] != 0) {
            $hata .= 'Dosya yüklenirken hata oluştu.';
        } else if (file_exists('..assets/img/about/' . strtolower($_FILES["foto"]['name']))) {
            $hata .= 'aynı dosyadan mevcut';
        } else if ($_FILES['foto']['size'] > (1024 * 1024 * 10)) {
            $hata .= 'dosya boyutu 10 MB dan büyük olamaz';
        } else if (!in_array($_FILES['foto']['type'], ['image/png', 'image/jpeg'])) {
            $hata .= 'Hata, dosya türü png veya jpeg olmalı';
        } else {
            copy($_FILES['foto']['tmp_name'], '../assets/img/about/' . strtolower($_FILES["foto"]['name']));
            $ekleSorgu = $baglanti->prepare('INSERT INTO tarihce SET foto=:foto, tarih=:tarih, icerik=:icerik, baslik=:baslik');
            $ekle = $ekleSorgu->execute([
                'foto' => strtolower($_FILES["foto"]['name']),
                'tarih' => $_POST['tarih'],
                'icerik' => $_POST['icerik'],
                'baslik' => $_POST['baslik'],
            ]);
            if ($ekle) {
                echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
                echo "<script> Swal.fire({title:'Başarılı!',text:'Ekleme başarılı',icon:'success',confirmButtonText:'Tamam'}).then((value)=>{if(value.isConfirmed){window.location.href='tarihce.php'}})</script>";
            }
        }
        if ($hata != '') {
            echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
            echo "<script> Swal.fire({title:'Hata!',text:'$_hata',icon:'error',confirmButtonText:'Tamam'})</script>";
        }
    }
}
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tarihçe Ekle</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Tarihçe Ekle</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" required class="form-control-file">
                    </div>

                    <div class="form-group">
                        <label>Tarih</label>
                        <input type="text" name="tarih" required class="form-control" value="<?= @$_POST["tarih"] ?>">
                    </div>
                    <div class="form-group">
                        <label>Başlık</label>
                        <input type="text" name="baslik" required class="form-control" value="<?= @$_POST["baslik"] ?>">
                    </div>
                    <div class="form-group">
                        <script src="js/ckeditor5/ckeditor.js"></script>
                        <label>İçerik</label>
                        <textarea name="icerik" id="icerik"><?= @$_POST["icerik"] ?></textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#icerik'))
                                .then(editor => {
                                    console.log(editor);
                                })
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Ekle" class="btn btn-primary">
                    </div>
                </form </div>
            </div>
        </div>
</main>


<?php
include('inc/afooter.php');
?>