<script type="text/javascript" src="../js/sweetalert.min.js"></script>
<?php
$sayfa = "Mağaza Saat";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');

$sorgu = $baglanti->prepare("SELECT * FROM magazasaat Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();
if ($_POST) {
    $gun = $_POST['gun'];
    $saat = $_POST['saat'];
    $hata = "";    
    if ($gun <> "" && $saat <> "" && $hata == "") { 
        $satir = [
            'id' => $_GET['id'],
            'gun' => $gun,
            'saat' => $saat,
        ];
        $sql = "UPDATE magazasaat SET gun=:gun, saat=:saat WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);
        if ($durum) {
            echo '<script>swal("Başarılı","Güncellendi","success").then((value)=>{ window.location.href = "storeclock.php"});</script>';
        } else {
            echo 'Düzenleme hatası oluştu: ';
        }
    }
    if ($hata != "") {
        echo '<script>swal("Hata","' . $hata . '","error");</script>';
    }
}
?>
<script src="vendor/CKEditor5/ckeditor.js"></script>
<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Panel</a>
            </li>
            <li class="breadcrumb-item active">Mağaza Çalışma Saati Düzenle</li>
        </ol>
        <div class="card mb-3">
            <div class="card-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Gün</label>
                        <input required type="text" value="<?= $sonuc["gun"] ?>" class="form-control" name="gun"
                               placeholder="Gün">
                    </div>
                      <div class="form-group">
                        <label>Saat</label>
                        <input required value="<?= $sonuc["saat"] ?>" class="form-control" name="saat"
                               placeholder="Saat">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-footer small text-muted"></div>
        <script>
            $(document).ready(function () {
                $('#dataTable').DataTable({
                    language: {
                        info: "_TOTAL_ kayıttan _START_ - _END_ kayıt gösteriliyor.",
                        infoEmpty: "Gösterilecek hiç kayıt yok.",
                        loadingRecords: "Kayıtlar yükleniyor.",
                        zeroRecords: "Tablo boş",
                        search: "Arama:",
                        sLengthMenu: "Sayfada _MENU_ kayıt göster",
                        infoFiltered: "(toplam _MAX_ kayıttan filtrelenenler)",
                        buttons: {
                            copyTitle: "Panoya kopyalandı.",
                            copySuccess: "Panoya %d satır kopyalandı",
                            copy: "Kopyala",
                            print: "Yazdır",
                        },
                        paginate: {
                            first: "İlk",
                            previous: "Önceki",
                            next: "Sonraki",
                            last: "Son"
                        },
                    }
                });
            });

        </script>
        <script src="js/aktifcustom.js"></script>
        <link rel="stylesheet" type="text/css" href="css/switch.css">