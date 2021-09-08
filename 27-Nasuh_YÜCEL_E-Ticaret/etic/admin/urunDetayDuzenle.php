<?php require_once "../data/select.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | General Form Elements</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


    <!-- Main Sidebar Container -->
    <?php
    $currPage = "ud";
    require_once "solMenu.php";
    $urunDetay = urunCekDetay($db_connection, $_GET["uid"]); // ürünün numarasına göre ürünü getir
    $altMenu_id = altMenuCekWithID($db_connection, $urunDetay[0]['menu_id']);
    $anaMenu_id = anaMenuCekWithID($db_connection, $altMenu_id[0]['menu_id']);
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="toast" id="myToast" style="position: absolute; top: 20px; right: 0;z-index: 5;width: 250px;"
             data-delay="2500">
            <div class="toast-header bg-success">
                <strong class="mr-auto">Bilgilendirme</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                <div>Ürün Güncellendi. Ürüne yeni fotoğraf eklemek için <a href="urunFotoEkle.php?uid=<?php echo $_GET['uid']; ?>">tıklayın </a></div>
            </div>
        </div>
        <div class="toast" id="myToastFotoSilSuccess" style="position: absolute; top: 20px; right: 0;z-index: 5;width: 250px;"
             data-delay="2500">
            <div class="toast-header bg-success">
                <strong class="mr-auto">Bilgilendirme</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                <div>Ürünün Fotoğrafı Silindi. Ürüne yeni fotoğraf eklemek için <a href="urunFotoEkle.php?uid=<?php echo $_GET['uid']; ?>">tıklayın </a></div>
            </div>
        </div>
        <div class="toast" id="myToastError" style="position: absolute; top: 20px; right: 0;z-index: 5;width: 250px;"
             data-delay="2500">
            <div class="toast-header bg-danger">
                <strong class="mr-auto">Bilgilendirme</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                <div>Ürün Güncellenirken Hata Oluştu.</div>
            </div>
        </div>

        <div class="toast" id="myToastFotoSilError" style="position: absolute; top: 20px; right: 0;z-index: 5;width: 250px;"
             data-delay="2500">
            <div class="toast-header bg-danger">
                <strong class="mr-auto">Bilgilendirme</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                <div>Ürün Eklemesi Başarısız (img).</div>
            </div>
        </div>


        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1>Düzenlenecek Ürünler</h1>
                    </div>
                    <div class="col-sm-12">
                        <div class="row ">
                            <div class="col-6 ">
                                <h6>Ürüne yeni fotoğraf eklemek için <a style="z-index: 999;" href="urunFotoEkle.php?uid=<?php echo $_GET['uid'];?>">tıklayın </a> </h6>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">General Form</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row ">
                    <div class="col-6">

                        <div class="card">
                            <div class="card-header bg-primary">Ürün Bilgileri</div>
                            <div class="card-body">
                                <form id="uploadForm" action="../data/insert.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="anaKategori">Ana Kategori</label>
                                        <select name="urunEkle" id="anaKategori" class="form-control">

                                            <option value="0">Lütfen Ana Kategori Seçiniz</option>
                                            <?php

                                            $x = anaMenuCek($db_connection);
                                            foreach ($x as $row) {
                                                ?>
                                                <option <?php if ($anaMenu_id[0]['anaMenu_id'] == $row["menu_id"]) {
                                                    echo "selected";
                                                } ?> value="<?php echo $row["menu_id"]; ?>"><?php echo $row["menuAd"]; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="altKategori">Alt Kategori</label>
                                        <select name="menu_id" id="altKategori" class="form-control altKat_id">
                                            <option value="0">Lütfen Alt Kategori Seçiniz</option>
                                            <?php

                                            $x = altMenuCek($db_connection, $anaMenu_id[0]['anaMenu_id']);
                                            foreach ($x as $row) {
                                                ?>
                                                <option class="silOption" <?php if ($altMenu_id[0]['menu_id'] == $row["menu_id"]) {
                                                    echo "selected";
                                                } ?> value="<?php echo $row["menu_id"]; ?>"><?php echo $row["menuAd"]; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="uAd">Ürün Adı</label>
                                        <input type="text" name="urunAdi" id="uAd" class="form-control" placeholder="Ürün Adı" value="<?php echo $urunDetay[0]["urunAd"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="uFiyat">Ürün Fiyat</label>
                                        <input type="number" name="urunFiyat" id="uFiyat" class="form-control" placeholder="Ürün Fiyat" value="<?php echo $urunDetay[0]["urunFiyat"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="uind">Ürün İndirim</label>
                                        <input type="number" name="urunIndirim" maxlength="2" id="uind" class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="Ürün İndirim" value="<?php echo $urunDetay[0]["urunIndirim"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="uAciklama">Ürün Açıklama</label>
                                        <textarea id="uAciklama" class="form-control" name="urunAciklama" rows="4" cols="50"><?php echo $urunDetay[0]["urunAciklama"]; ?></textarea>
                                    </div>
                                    <a style="z-index: 5;" idd="<?php echo $urunDetay[0]['urun_id']; ?>" type="button" class="btn btn-primary guncelle">Güncelle</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header bg-primary">Ürün Resimleri</div>
                            <div class="card-body text-center tabloOlustur">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Sil</th>
                                        <th>Fotoğraf</th>
                                    </tr>
                                    </thead>
                                    <tbody class="example2">
                                    <?php $urunResimler = resimCek($db_connection, $urunDetay[0]["urun_id"]);

                                    foreach ($urunResimler as $item) {
                                        ?>
                                        <tr id="<?php echo $item[1]; ?>">
                                            <td class=" align-middle"><a href="#">
                                                    <button name="select" class="btn btn-success input-group mb-3 justify-content-center delete" idd="<?php echo $item[1]; ?>">Sil</button>
                                                </a></td>
                                            <td><img src="<?php echo $item[0]; ?>" style="object-fit: contain;" width="300" alt=""></td>
                                        </tr>
                                        <?php
                                    }

                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.1.0
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- AdminLTE App -->
<script src="plugins/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>

    $(document).ready(function () {
        $("#bastim").click(function () {
            $("#myToast").toast('show');
        });
    });


    $(document).ready(function () {
        $(".guncelle").on("click", function () {
            $.ajax({
                url: '../data/update.php',
                type: 'post',
                data: {request: "guncelle", urun_id: $(this).attr('idd'), urunAd: $("#uAd").val(), urunFiyat: $("#uFiyat").val(), urunIndirim: $("#uind").val(), urunAciklama: $("#uAciklama").val(), menu_id: $("#altKategori").val()},
                dataType: 'json',
                success: function (response) {
                    $("#myToast").toast('show');
                },
                error: function (error) {
                    $("#myToastError").toast('show');

                }
            });

        });
    });

    $(document).ready(function () {
        $(".delete").on("click", function () {

            $("#" + $(this).attr('idd')).remove();
            $.ajax({
                url: '../data/delete.php',
                type: 'post',
                data: {request: "fotoSil", foto_id: $(this).attr('idd')},
                dataType: 'json',
                success: function (response) {
                    $("#myToastFotoSilSuccess").toast('show');
                },
                error: function (error) {
                    $("#myToastFotoSilError").toast('show');
                }
            });


        });
    });

</script>
</body>
</html>
