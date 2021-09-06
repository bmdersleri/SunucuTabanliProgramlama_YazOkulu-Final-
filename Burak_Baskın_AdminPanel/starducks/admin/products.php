<?php
$page = "Ürünler";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');

if (isset($_POST['sil'])) {
//print_r($_POST);exit();
$willdeleted = implode(', ', $_POST['sil']);

$query = $connection->prepare('select * FROM `products` WHERE `id` IN (' . $willdeleted . ')');


    $query->execute();
while ($result = $query->fetch()) {

        @unlink('../img/' . $result["photo"]);
    }

    $query = $connection->prepare('DELETE FROM `products` WHERE `id` IN (' . $willdeleted . ')');
    $query->execute();

}


$query = $connection->prepare("SELECT * FROM products");
$query->execute();


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

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Ürünler</li>
        </ol>
        <form action="" method="post">
            <a class="btn btn-primary" href="productadd.php">Yeni Ürün Ekle</a>

            <a class="btn btn-danger font-18" href="#" data-toggle="modal"
               data-target="#tumunuSil"><i class="fa fa-trash"> Seçilenleri sil</i></a>
            <!-- Logout Modal-->
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

            <!-- DataTables Example -->
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
                                <th>Kayıt Numarası</th>
                                <th>Fotoğraf</th>
                                <th>Üst Başlık</th>
                                <th>Başlık</th>
                                <th>İçerik</th>
                                <th>Düzenle</th>
                                <th>Sil</th>

                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Seçilenler</th>
                                <th>Kayıt Numarası</th>
                                <th>Fotoğraf</th>
                                <th>Üst Başlık</th>
                                <th>Başlık</th>
                                <th>İçerik</th>
                                <th>Düzenle</th>
                                <th>Sil</th>

                            </tr>
                            </tfoot>
                            <tbody>

                            <?php while ($result = $query->fetch()) { ?>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input class="chck" type="checkbox" name="sil[]"
                                                   value="<?php echo $result['id']; ?>">
                                            <label for="<?php echo $result['id']; ?>"></label>
                                        </div>
                                    </td>
                                    <td><?= $result["id"] ?></td>
                                    <td><img src="../img/<?= $result["photo"] ?>" width="150px"/></td>
                                    <td contenteditable="true"
                                        onBlur="saveData(this,'header','<?= $result["id"] ?>')"
                                        onClick="update(this);"><?= $result["header"] ?></td>
                                    <td contenteditable="true" onBlur="saveData(this,'header','<?= $result["id"] ?>')"
                                        onClick="update(this);"><?= $result["title"] ?></td>
                                    <td>
                                        <a class="btn btn-info" href="#" data-toggle="modal"
                                           data-target="#content<?= $result["id"] ?>">Oku</a>
                                        <!-- Logout Modal-->
                                        <div class="modal fade" id="content<?= $result["id"] ?>" tabindex="-1"
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
                                                    <div class="modal-body"><?= $result["content"] ?></div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button"
                                                                data-dismiss="modal">Kapat
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        

                                    <td><a class="btn btn" href="productupdate.php?id=<?= $result["id"] ?>"><span
                                                    class="fa fa-edit fa-2x"></span></a></td>
                                    <td>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                           data-target="#sil<?= $result["id"] ?>"><span class="fa fa-trash fa-2x"></span></a>


                                        <!-- Logout Modal-->
                                        <div class="modal fade" id="sil<?= $result["id"] ?>" tabindex="-1" role="dialog"
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
                                                           href="delete.php?sayfa=products&id=<?= $result["id"] ?>">Sil</a>


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
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

</div>
<!-- /.container-fluid -->
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
    function update(value) {
        $(value).css("background", "#fffacd");

    }

    function saveData(value, field, id) {
        $(value).css("background", "#FFF url(yukleniyor.gif) no-repeat right");


        $.ajax({
            url: "updatesave.php",
            type: "POST", 
            data: 'field=' + field + '&value=' + value.innerHTML.split('+').join('{0}') + '&id=' + id,

            success: function (data) {
                if (data == true) {
                    $(value).css("background", "#fff");

                }

                else {
                    $(value).css("background", "#f00");
                    $("#sonuc").text("Hata veri düzenlenmedi");

                }
            }
        });
    }
</script>
<script src="js/aktifcustom.js"></script>
<link rel="stylesheet" type="text/css" href="css/switch.css">