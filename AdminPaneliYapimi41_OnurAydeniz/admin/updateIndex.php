<script type="text/javascript" src="../js/sweetalert.min.js"></script>
<?php
$sayfa = "Ana Sayfa";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');
$sorgu = $baglanti->prepare("SELECT * FROM anasayfa Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();

        if ($_POST) {
             $ustBaslik = $_POST['ustBaslik'];
             $ustIcerik = $_POST['ustIcerik'];
             $link = $_POST['link'];
             $altBaslik = $_POST['altBaslik'];
             $altIcerik = $_POST['altIcerik'];
             $hata = '';
             if ($_FILES["foto"]["name"] != "") {
                $foto = strtolower($_FILES['foto']['name']);
                if (file_exists('images/' . $foto)) {
                    $hata = "$foto diye bir dosya var";
                } else {
                    $boyut = $_FILES['foto']['size'];
                    if ($boyut > (1024 * 1024 * 2)) {
                        $hata = 'Dosya boyutu 2MB den büyük olamaz.';
                    } else {
                        $dosya_tipi = $_FILES['foto']['type'];
                        $dosya_uzanti = explode('.', $foto);
                        $dosya_uzanti = $dosya_uzanti[count($dosya_uzanti) - 1];
                        if (!in_array($dosya_tipi, ['image/png', 'image/jpeg']) || !in_array($dosya_uzanti, ['png', 'jpg'])) {
                            $hata = 'Hata, dosya türü JPEG veya PNG olmalı.';
                        } else {
                            $dosya = $_FILES["foto"]["tmp_name"];
                            copy($dosya, "../img/" . $foto);
                            unlink('../img/' . $sonuc["foto"]); 
                        }
                    }
                }
            } else {
                $foto = $sonuc["foto"];
            }
            if ($ustBaslik <> "" && $ustIcerik <> "" && $hata == "") { 
                $satir = [
                  'id' => $_GET['id'],
                  'foto' => $foto,
                  'ustBaslik' => $ustBaslik,
                  'ustIcerik' => $ustIcerik,
                  'altBaslik' => $altBaslik,
                  'link' => $link,
                  'altIcerik' => $altIcerik,
              ];
              $sql = "UPDATE anasayfa SET foto=:foto, ustBaslik=:ustBaslik,link=:link, ustIcerik=:ustIcerik, altBaslik=:altBaslik, altIcerik=:altIcerik WHERE id=:id;";     
              $durum = $baglanti->prepare($sql)->execute($satir);
              if ($durum)
              {
               echo '<script>swal("Başarılı","Güncellendi","success").then((value)=>{ window.location.href = "index.php"});
               </script>';
           } else {
                    echo 'Düzenleme hatası oluştu: ';
                }
            } else {
                echo 'Hata oluştu: ' . $hata;
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
                    <li class="breadcrumb-item active">Anasayfa Düzenle</li>
                </ol>                             
                          <div class="card mb-3">
                            <div class="card-body">
                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                      <input type="file" name="foto"/>
                                      <img width="150px" src="../img/<?php echo $sonuc['foto']; ?>" alt="">
                                  </div>
                                  <div class="form-group">
                                    <label>Üst Başlık</label>
                                    <input required type="text" value="<?= $sonuc["ustBaslik"] ?>" class="form-control" name="ustBaslik"
                                    placeholder="Üst başlık">
                                </div>
                                <div class="form-group">
                                    <label for="ustIcerik">Üst İçerik</label>
                                    <textarea  name="ustIcerik" id="ustIcerik">
                                        <?= $sonuc["ustIcerik"] ?>
                                    </textarea>
                                    <script>
                                        ClassicEditor
                                        .create(document.querySelector('#ustIcerik'))
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
                                    <input required type="text" value="<?= $sonuc["link"] ?>" class="form-control" name="link"
                                    placeholder="LİNK">
                                </div>
                                <div class="form-group">
                                    <label>Alt Başlık</label>
                                    <input required type="text" value="<?= $sonuc["altBaslik"] ?>" class="form-control" name="altBaslik"
                                    placeholder="Alt Başlık">
                                </div>
                                <div class="form-group">
                                    <label for="ustIcerik">Alt İçerik</label>
                                    <textarea  name="altIcerik" id="altIcerik">
                                        <?= $sonuc["altIcerik"] ?>
                                    </textarea>
                                    <script>
                                        ClassicEditor
                                        .create(document.querySelector('#altIcerik'))
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