<script type="text/javascript" src="../js/sweetalert.min.js"></script>
<?php
$page = "Ana Sayfa";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');

$query = $connection->prepare("SELECT * FROM homepage Where id=:id");
$query->execute(['id' => (int)$_GET["id"]]);
$result = $query->fetch();



        if ($_POST) {
             $toptitle = $_POST['toptitle']; 
             $topcontent = $_POST['topcontent'];
             $link = $_POST['link'];
             $subtitle = $_POST['subtitle'];
             $subcontent = $_POST['subcontent'];
             $error = '';



             if ($_FILES["photo"]["name"] != "") {
                $photo = strtolower($_FILES['photo']['name']);
                if (file_exists('images/' . $photo)) {
                    $error = "$photo diye bir dosya var";
                } else {
                    $boyut = $_FILES['photo']['size'];
                    if ($boyut > (1024 * 1024 * 2)) {
                        $error = 'file boyutu 2MB den büyük olamaz.';
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

            if ($toptitle <> "" && $topcontent <> "" && $error == "") {
                //Değişecek veriler
                $line = [
                  'id' => $_GET['id'],
                  'photo' => $photo,
                  'toptitle' => $toptitle,
                  'topcontent' => $topcontent,
                  'subtitle' => $subtitle,
                  'link' => $subtitle,
                  'subcontent' => $subcontent,
              ];

              $sql = "UPDATE homepage SET photo=:photo, toptitle=:toptitle,link=:link, topcontent=:topcontent, subtitle=:subtitle, subcontent=:subcontent WHERE id=:id;";     
              $status = $connection->prepare($sql)->execute($line);

              if ($status)
              {
               echo '<script>swal("Başarılı","Güncellendi","success").then((value)=>{ window.location.href = "index.php"});

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
                    <li class="breadcrumb-item active">homepage Düzenle</li>
                </ol>

      
                
                       
                      
                          <div class="card mb-3">

                            <div class="card-body">

                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                      <!--form elemanı olarak file kullanıyoruz -->
                                      <input type="file" name="photo"/>
                                      <img width="150px" src="../img/<?php echo $result['photo']; ?>" alt="">
                                  </div>
                                  <div class="form-group">
                                    <label>Üst Başlık</label>
                                    <input required type="text" value="<?= $result["toptitle"] ?>" class="form-control" name="toptitle"
                                    placeholder="Üst başlık">
                                </div>


                                <div class="form-group">
                                    <label for="topcontent">Üst İçerik</label>
                                    <textarea  name="topcontent" id="topcontent">
                                        <?= $result["topcontent"] ?>
                                    </textarea>

                                    <script>
                                        ClassicEditor
                                        .create(document.querySelector('#topcontent'))
                                        .then(editor => {
                                            console.log(editor);
                                        })
                                        .catch(error => {
                                            console.error(error);
                                        });
                                    </script>

                                </div>
                                <div class="form-group">
                                    <label>Link</label>
                                    <input required type="text" value="<?= $result["link"] ?>" class="form-control" name="link"
                                    placeholder="LİNK">
                                </div>
                                <div class="form-group">
                                    <label>Alt Başlık</label>
                                    <input required type="text" value="<?= $result["subtitle"] ?>" class="form-control" name="subtitle"
                                    placeholder="Alt Başlık">
                                </div>


                                <div class="form-group">
                                    <label for="topcontent">Alt İçerik</label>
                                    <textarea  name="subcontent" id="subcontent">
                                        <?= $result["subcontent"] ?>
                                    </textarea>

                                    <script>
                                        ClassicEditor
                                        .create(document.querySelector('#subcontent'))
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
                


       

        <!-- DataTables Example -->

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