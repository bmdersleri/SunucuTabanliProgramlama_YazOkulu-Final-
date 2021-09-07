<?php
$sayfa = "Kullanıcılar";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');

$sorgu = $baglanti->prepare("SELECT * FROM kullanicilar");
$sorgu->execute();

?>

<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Panel</a>
            </li>
            <li class="breadcrumb-item active">Kullanıcılar</li>
        </ol>
          <a class="btn btn-primary" href="addUser.php">Yeni Kullanıcı Ekle</a> <br><br>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Kullanıcılar
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kullanıcı Adı</th>                           
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Kullanıcı Adı</th>                          
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php while ($sonuc = $sorgu->fetch()) { ?>
                            <tr>
                                <td><?= $sonuc["id"] ?></td>
                                <td><?= $sonuc["kadi"] ?></td>
                                <td>
                                  <a class="btn btn" href="updateUser.php?id=<?= $sonuc["id"] ?>"><span class="fa fa-edit fa-2x"></span></a>
                                </td>
                                <td>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#sil<?= $sonuc["id"] ?>"><span class="fa fa-trash fa-2x"></span></a>
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
                                                <div class="modal-body">   <b><?=$sonuc['kadi']?></b>  'Adlı Kullanıcıyı silmek istediğinizden emin misiniz?</div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary pull-left mx-4" type="button"
                                                            data-dismiss="modal">İptal
                                                    </button>
                                                    <a class="btn btn-danger pull-right mx-4"
                                                       href="deleteUser.php?returnPage=users&sayfa=kullanicilar&id=<?= $sonuc["id"] ?>">Sil</a>
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
                </div>
            </div>
            <div class="card-footer small text-muted"></div>
        </div>
    </div>
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
    <link rel="stylesheet" type="text/css" href="css/switch.css">