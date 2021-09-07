<script type="text/javascript" src="../js/sweetalert.min.js"></script>
<?php
$page = "Mağaza";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');

$query = $connection->prepare("SELECT * FROM store Where id=:id");
$query->execute(['id' => (int)$_GET["id"]]);
$result = $query->fetch();

if ($_POST) { 

    $toptitle = $_POST['toptitle']; 
    $maintitle = $_POST['maintitle'];
    $adress = $_POST['adress'];
    $phone = $_POST['phone'];

    
    $hata = "";


    
    if ($toptitle <> "" && $maintitle <> "" && $hata == "") { 
        //Değişecek veriler
        $satir = [
            'id' => $_GET['id'],
            
            'toptitle' => $toptitle,
            'maintitle' => $maintitle,
            'adress' => $adress,
            'phone' => $phone,

        ];


        $sql = "UPDATE store SET toptitle=:toptitle , maintitle=:maintitle , adress=:adress , phone=:phone WHERE id=:id;";
        $durum = $connection->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal("Başarılı","Güncellendi","success").then((value)=>{ window.location.href = "store.php"});

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
            <li class="breadcrumb-item active">Mağaza Düzenle</li>
        </ol>


        <!-- DataTables Example -->
        <div class="card mb-3">

            <div class="card-body">

                <form method="post" action="" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Üst Başlık</label>
                        <input required type="text" value="<?= $result["toptitle"] ?>" class="form-control" name="toptitle"
                        placeholder="toptitle">
                    </div>


                    <div class="form-group">
                        <label>Ana Başlık</label>
                        <input required type="text" value="<?= $result["maintitle"] ?>" class="form-control" name="maintitle"
                        placeholder="maintitle">
                    </div>

                    <div class="form-group">
                        <label for="adress">adress</label>
                        <textarea  name="adress" id="adress">
                            <?= $result["adress"] ?>
                        </textarea>

                        <script>
                            ClassicEditor
                            .create(document.querySelector('#adress'))
                            .then(editor => {
                                console.log(editor);
                            })
                            .catch(error => {
                                console.error(error);
                            });
                        </script>

                    </div>

                    <div class="form-group">
                        <label>phone</label>
                        <input required type="text" value="<?= $result["phone"] ?>" class="form-control" name="phone"
                        placeholder="phone">
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