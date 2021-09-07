<script type="text/javascript" src="../js/sweetalert.min.js"></script>
<?php
$page = "Çalışma timeleri";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');

$query = $connection->prepare("SELECT * FROM openingtime Where id=:id");
$query->execute(['id' => (int)$_GET["id"]]);
$result = $query->fetch();

if ($_POST) { 

    $day = $_POST['day']; 
    $time = $_POST['time'];
  
    
    $hata = "";

    
    if ($day <> "" && $time <> "" && $hata == "") { 
        $satir = [
            'id' => $_GET['id'],
            
            'day' => $day,
            'time' => $time,
          
        ];



        $sql = "UPDATE openingtime SET day=:day, time=:time WHERE id=:id;";
        $durum = $connection->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal("Başarılı","Güncellendi","success").then((value)=>{ window.location.href = "openingtime.php"});

</script>';
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

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Çalışma Saatlerini Düzenle</li>
        </ol>


        <!-- DataTables Example -->
        <div class="card mb-3">

            <div class="card-body">

                <form method="post" action="" enctype="multipart/form-data">
                   
                    <div class="form-group">
                        <label>Gün</label>
                        <input required type="text" value="<?= $result["day"] ?>" class="form-control" name="day"
                               placeholder="Gün">
                    </div>
                   

                    
                  
                      <div class="form-group">
                        <label>Çalışma Saatleri</label>
                        <input required value="<?= $result["time"] ?>" class="form-control" name="time"
                               placeholder="time">
                    </div>
                   

                    

                    

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Güncelle</button>
                    </div>

                </form>


            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>


        <!-- /.container-fluid -->


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