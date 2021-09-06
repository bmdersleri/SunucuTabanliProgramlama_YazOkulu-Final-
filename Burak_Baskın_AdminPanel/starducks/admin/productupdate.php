<script type="text/javascript" src="../js/sweetalert.min.js"></script>
<?php
$page = "Ürünler";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');

$query = $connection->prepare("SELECT * FROM products Where id=:id");
$query->execute(['id' => (int)$_GET["id"]]);
$result = $query->fetch();

       if ($_POST) { 
               $title = $_POST['title']; 
               $content = $_POST['content'];
               $header = $_POST['header'];




               if ($_FILES["photo"]["name"] != "") {
                $photo = strtolower($_FILES['photo']['name']);
                if (file_exists('images/' . $photo)) {
                    $error = "$photo diye bir dosya var";
                } else {
                    $boyut = $_FILES['photo']['size'];
                    if ($boyut > (1024 * 1024 * 2)) {
                        $error = 'Dosya boyutu 2MB den büyük olamaz.';
                    } else {
                        $file_type = $_FILES['photo']['type'];
                        $file_extension = explode('.', $photo);
                        $file_extension = $file_extension[count($file_extension) - 1];

                        if (!in_array($file_type, ['image/png', 'image/jpeg']) || !in_array($file_extension, ['png', 'jpg'])) {
                            
                            $error = 'Hata, dosya türü JPEG veya PNG olmalı.';
                        } else {
                            $file = $_FILES["photo"]["tmp_name"];
                            copy($file, "../img/" . $photo);
                            unlink('../img/' . $result["photo"]); 
                        }
                    }
                }
            } else {

                $photo = $result["photo"];
            }

            if ($title <> "" && $content <> "") { 

                $line = [
                 'id' => $_GET['id'],
                 'photo' => $photo,
                 'title' => $title,
                 'header' => $header,
                 'content' => $content,
             ];

             $sql = "UPDATE products SET photo=:photo, title=:title, header=:header, content=:content WHERE id=:id;";             
             $status = $connection->prepare($sql)->execute($line);

                if ($status)
                {
                    echo '<script>swal("Başarılı","Ürün güncellendi","success").then((value)=>{ window.location.href = "products.php"});
                    </script>';
                } else {
                    echo 'Düzenleme hatası oluştu: '; 
                }
            } else {
                echo 'Hata oluştu: ' . $error; 
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
            <li class="breadcrumb-item active">Ürün Ekle</li>
        </ol>


        <!-- DataTables Example -->
        <div class="card mb-3">

            <div class="card-body">

                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <img src="../img/<?= $result["photo"] ?>" width="150" alt="">
                        <label for="photo">Fotoğraf</label>
                        <input type="file" name="photo" class="form-control-file" id="photo">
                    </div>
                    <div class="form-group">
                        <label>Üst Başlık</label>
                        <input required type="text" value="<?= $result["header"] ?>" class="form-control" name="header"
                        placeholder="Üst başlık">
                    </div>
                    <div class="form-group">
                        <label>Başlık</label>
                        <input required type="text" value="<?= $result["title"] ?>" class="form-control" name="title"
                        placeholder="Başlık">
                    </div>

                    <div class="form-group">
                        <label for="content">İçerik</label>
                        <textarea  name="content" id="content">
                            <?= $result["content"] ?>
                        </textarea>

                        <script>
                            ClassicEditor
                            .create(document.querySelector('#content'))
                            .then(editor => {
                                console.log(editor);
                            })
                            .catch(error => {
                                console.error(error);
                            });
                        </script>

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