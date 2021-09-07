<?php
$sayfa = "Ürünler";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');

if (isset($_POST['sil'])) {
$silinecekler = implode(', ', $_POST['sil']);
$sorgu = $baglanti->prepare('select * FROM `urunler` WHERE `id` IN (' . $silinecekler . ')');
    $sorgu->execute();
while ($sonuc = $sorgu->fetch()) {
        @unlink('../img/' . $sonuc["foto"]);
    }
    $sorgu = $baglanti->prepare('DELETE FROM `urunler` WHERE `id` IN (' . $silinecekler . ')');
    $sorgu->execute();
}
$sorgu = $baglanti->prepare("SELECT * FROM urunler order by sira");
$sorgu->execute();
?>
<head>
    <script language="javascript"> function confirmDel() {
            var agree = confirm("Silmek istediğinizden emin misiniz?\nBu işlem geri alınamaz!");
            if (agree) {
                return true;
            } else {
                return false;
            }
        } </script>
    <script src="js/tumunusil.js"></script>
</head>
<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Panel</a>
            </li>
            <li class="breadcrumb-item active">Ürünler</li>
        </ol>
        <form action="" method="post">
            <a class="btn btn-primary" href="addProduct.php">Yeni Ürün Ekle</a>
            <a class="btn btn-danger font-18" href="#" data-toggle="modal"
               data-target="#tumunuSil"><i class="fa fa-trash"> Seçilenleri sil</i></a>
            <div class="modal fade" id="tumunuSil" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">İçerik</h5>
                            <button class="close" type="button" data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Seçilen tüm ürünler silinecektir.</div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-danger font-18"><i class="fa fa-trash"> Seçilenleri
                                    sil</i></button>
                            <button class="btn btn-secondary" type="button"
                                    data-dismiss="modal">Kapat
                            </button>

                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Ürünler
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>
                                    <div class="checkbox">
                                        <input type="checkbox" id="select_all" onclick="TumunuSec();" value="">
                                        <label for=""></label>
                                    </div>
                                </th>
                                <th>ID</th>
                                <th>Foto</th>
                                <th>Üst Başlık</th>
                                <th>Başlık</th>
                                <th>İçerik</th>
                                <th>Sıra</th>
                                <th>Aktif</th>
                                <th>Düzenle</th>
                                <th>Sil</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th></>
                                <th>ID</th>
                                <th>Foto</th>
                                <th>Üst Başlık</th>
                                <th>Başlık</th>
                                <th>İçerik</th>
                                <th>Sıra</th>
                                <th>Aktif</th>
                                <th>Düzenle</th>
                                <th>Sil</th>

                            </tr>
                            </tfoot>
                            <tbody>
                            <?php while ($sonuc = $sorgu->fetch()) { ?>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input class="chck" type="checkbox" name="sil[]"
                                                   value="<?php echo $sonuc['id']; ?>">
                                            <label for="<?php echo $sonuc['id']; ?>"></label>
                                        </div>
                                    </td>
                                    <td><?= $sonuc["id"] ?></td>
                                    <td><img src="../img/<?= $sonuc["foto"] ?>" width="150px"/></td>
                                    <td contenteditable="true"
                                        onBlur="veriKaydet(this,'ustBaslik','<?= $sonuc["id"] ?>')"
                                        onClick="duzenle(this);"><?= $sonuc["ustBaslik"] ?></td>
                                    <td contenteditable="true" onBlur="veriKaydet(this,'baslik','<?= $sonuc["id"] ?>')"
                                        onClick="duzenle(this);"><?= $sonuc["baslik"] ?></td>
                                    <td>
                                        <a class="btn btn-info" href="#" data-toggle="modal"
                                           data-target="#icerik<?= $sonuc["id"] ?>">Oku</a>
                                        <div class="modal fade" id="icerik<?= $sonuc["id"] ?>" tabindex="-1"
                                             role="dialog"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">İçerik</h5>
                                                        <button class="close" type="button" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body"><?= $sonuc["icerik"] ?></div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button"
                                                                data-dismiss="modal">Kapat
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                    <td contenteditable="true" onBlur="veriKaydet(this,'sira','<?= $sonuc["id"] ?>')"
                                        onClick="duzenle(this);"><?= $sonuc["sira"] ?></td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" id='<?php echo $sonuc['id'] ?>'
                                                   class="aktifPasif" <?php echo $sonuc['aktif'] == 1 ? 'checked' : '' ?> />
                                            <span class="slider round"></span>
                                        </label></td>

                                    <td><a class="btn btn" href="updateproduct.php?id=<?= $sonuc["id"] ?>"><span
                                                    class="fa fa-edit fa-2x"></span></a></td>
                                    <td>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                           data-target="#sil<?= $sonuc["id"] ?>"><span class="fa fa-trash fa-2x"></span></a>
                                        <div class="modal fade" id="sil<?= $sonuc["id"] ?>" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Sil</h5>
                                                        <button class="close" type="button" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">Ürünü silmek istediğinizden emin misiniz?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary pull-left mx-4" type="button"
                                                                data-dismiss="modal">İptal
                                                        </button>
                                                        <a class="btn btn-danger pull-right mx-4"
                                                           href="delete.php?returnPage=products&sayfa=urunler&id=<?= $sonuc["id"] ?>">Sil</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            } 
                            ?>
                            </tbody>
                        </table>
        </form>
    </div>
</div>
<div class="card-footer small text-muted"></div>
</div>
</div>
<?php
include('inc/footer.php');
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#select_all').on('click', function () {
            if ($('#select_all:checked').length == $('#select_all').length) {
                $('input.chck:checkbox').prop('checked', true);
            } else {
                $('input.chck:checkbox').prop('checked', false);
            }
        });
    });
</script>
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
<script>
    function duzenle(deger) {
        $(deger).css("background", "#fffacd");
    }
    function veriKaydet(deger, alan, id) {
        $(deger).css("background", "#FFF url(yukleniyor.gif) no-repeat right");
        $.ajax({
            url: "updateSave.php",
            type: "POST",
            data: 'alan=' + alan + '&deger=' + deger.innerHTML.split('+').join('{0}') + '&id=' + id,
            success: function (data) {
                if (data == true) {
                    $(deger).css("background", "#fff");
                }
                else {
                    $(deger).css("background", "#f00");
                    $("#sonuc").text("Hata veri düzenlenmedi");
                }
            }
        });
    }
</script>
<script src="js/aktifcustom.js"></script>
<link rel="stylesheet" type="text/css" href="css/switch.css">