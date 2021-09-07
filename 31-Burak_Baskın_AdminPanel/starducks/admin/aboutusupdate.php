<script type="text/javascript" src="../js/sweetalert.min.js"></script>
<?php
$page = "Hakkımızda";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');

$query = $connection->prepare("SELECT * FROM about_us Where id=:id");
$query->execute(['id' => (int)$_GET["id"]]);
$result = $query->fetch();


       if ($_POST) { 

    $toptitle = $_POST['toptitle']; 
    $content = $_POST['content'];
    $title = $_POST['title'];
    $error = '';



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
                    $dosya = $_FILES["photo"]["tmp_name"];
                    copy($dosya, "../img/" . $photo);
                            unlink('../img/' . $result["photo"]); 
                        }
                    }
                }
            } else {

                $photo = $result["photo"];
            }

            if ($toptitle <> "" && $content <> "" && $title <> "" && $error == "") { 
                $line = [

                    'id' => $_GET['id'],
                    'photo' =>$photo,
                    'toptitle' => $toptitle,
                    'title' => $title,
                    'content' => $content,
                ];

                $sql = "UPDATE about_us SET photo=:photo, toptitle=:toptitle, title=:title,  content=:content WHERE id=:id;";   
                $status = $connection->prepare($sql)->execute($line);

                if ($status)
                {
                   echo '<script>swal("Başarılı","Güncellendi","success").then((value)=>{ window.location.href = "aboutus.php"});
                   </script>';

               } else {
                    echo 'Düzenleme hatası oluştu: '; 
                }
            } else {
                echo 'Hata oluştu: ' . $error;
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
                    <li class="breadcrumb-item active">Hakkımızda Düzenle</li>
                </ol>


                <!-- DataTables Example -->
                <div class="card mb-3">

                    <div class="card-body">

                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <img src="../img/<?= $result["photo"] ?>" width="150" alt="">
                                <label for="photo">photo</label>
                                <input type="file" name="photo" class="form-control-file" id="photo">
                            </div>
                            <div class="form-group">
                                <label>Üst Başlık</label>
                                <input required type="text" value="<?= $result["toptitle"] ?>" class="form-control" name="toptitle"
                                placeholder="Üst başlık">
                            </div>

                            <div class="form-group">
                                <label>Başlık</label>
                                <input required type="text" value="<?= $result["title"] ?>" class="form-control" name="title"
                                placeholder="Başlık">
                            </div>

                            <div class="form-group">
                                <label for="ustcontent">İçerik</label>
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