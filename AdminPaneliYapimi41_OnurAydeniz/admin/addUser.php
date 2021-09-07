<script type="text/javascript" src="../js/sweetalert.min.js"></script>
<?php
$sayfa = "Kullanıcılar";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');

if ($_POST) {
    $kadi = $_POST['kadi'];
    $parola = md5('56' . $_POST['parola'] . '23');
    $parolatekrar = md5('56' . $_POST['parolatekrar'] . '23');
    $hata = "";    
    if ($kadi <> "" && $parola <> "" && $hata == "") 
    {
        $satir = [                       
            'kadi' => $kadi,
            'parola' => $parola, 
        ];
        if ($parola == $parolatekrar && $parola != '' && $kadi != '') {
            $sql = "INSERT INTO kullanicilar SET kadi=:kadi, parola=:parola;";
            $durum = $baglanti->prepare($sql)->execute($satir);
            if ($durum) {
                echo '<script>swal("Başarılı","Güncellendi","success").then((value)=>{ window.location.href = "users.php"});</script>';
            }
        }
        else {
                echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>';
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
            <li class="breadcrumb-item active">Kullanıcı Ekle</li>
        </ol>
        <div class="card mb-3">
            <div class="card-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Kullanıcı Adı</label>
                        <input required type="text" class="form-control" name="kadi" placeholder="Kullanıcı Adınız">
                    </div>
                    <div class="form-group">
                        <label>Parola</label>
                        <input required type="text" class="form-control" name="parola" placeholder="Yeni Parola">
                    </div>
                     <div class="form-group">
                        <label>Parola</label>
                        <input required type="text" class="form-control" name="parolatekrar" placeholder="Parolayı Tekrar Giriniz">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-footer small text-muted"></div>
        <?php
        include('inc/footer.php');
        ?>
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