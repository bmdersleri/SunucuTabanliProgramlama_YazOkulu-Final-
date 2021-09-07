<script type="text/javascript" src="../js/sweetalert.min.js"></script>
<?php
$page = "Kullanıcılar";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');


if ($_POST) { 

    $username = $_POST['username'];
    $password = md5('56' . $_POST['password'] . '23');
     $passwordrepeat = md5('56' . $_POST['passwordrepeat'] . '23');

    
    $error = "";


    
    if ($username <> "" && $password <> "" && $error == "") {

        $satir = [                       
            'username' => $username,
            'password' => $password, 


        ];
          if ($password == $passwordrepeat && $password != '' && $username != '') {


        $sql = "INSERT INTO users SET username=:username, password=:password;";
        $durum = $connection->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal("Başarılı","Güncellendi","success").then((value)=>{ window.location.href = "users.php"});

            </script>';

        }
    }
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>';
        }
    }
    if ($error != "") {
        echo '<script>swal("Hata","' . $error . '","error");</script>';
    }
}

?>
<script src="vendor/CKEditor5/ckeditor.js"></script>
<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Kullanıcı Ekle</li>
        </ol>


        <!-- DataTables Example -->
        <div class="card mb-3">

            <div class="card-body">

                <form method="post" action="" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Kullanıcı Adı</label>
                        <input required type="text" class="form-control" name="username" placeholder="Kullanıcı Adınız">
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input required type="text" class="form-control" name="password" placeholder="Yeni password">
                    </div>
                     <div class="form-group">
                        <label>password</label>
                        <input required type="text" class="form-control" name="passwordrepeat" placeholder="passwordyı Tekrar Giriniz">
                    </div>



                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>

                </form>


            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>


        <!-- /.container-fluid -->


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