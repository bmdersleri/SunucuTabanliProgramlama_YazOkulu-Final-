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
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../../index3.html" class="brand-link">
            <img src="img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="kategoriEkle.php" class="nav-link">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Kategori Ekle
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="urunEkle.php" class="nav-link ">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Ürün Ekle
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="urunDuzenle.php" class="nav-link active">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Ürün Detay
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="oneCikanUrunler.php" class="nav-link ">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Öne Çıkanlar
                            </p>
                        </a>
                    </li>
                    <!-- menu-open
                    <li class="nav-item ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Forms
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="../forms/general.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>General Elements</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../forms/advanced.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Advanced Elements</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../forms/editors.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Editors</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../forms/validation.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Validation</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="../kanban.html" class="nav-link">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Kanban Board
                            </p>
                        </a>
                    </li> -->
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

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
                <div>Menü eklemesi başarılı.</div>
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
                <div>Ürün Eklemesi Başarısız (img).</div>
            </div>
        </div>


        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Düzenlenecek Ürünler</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">General Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header bg-primary">Ürün Bilgileri</div>
                            <div class="card-body">
                                <form id="urunDuzenleForm" action="../data/select.php" method="post"
                                      enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>Ana Kategori</label>
                                        <select name="urunEkle" id="anaKategori" class="form-control">
                                            <option value="0">Lütfen Ana Kategori Seçiniz</option>
                                            <?php
                                            $x = anaMenuCek($db_connection);
                                            foreach ($x as $row) {
                                                ?>
                                                <option value="<?php echo $row["menu_id"]; ?>"><?php echo $row["menuAd"]; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="altKategori">Alt Kategori</label>
                                        <select name="menu_id" id="altKategori" class="form-control altKat_id">
                                            <option value="0">Lütfen Alt Kategori Seçiniz</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ürün Adı</label>
                                        <input type="text" name="urunAdi" class="form-control" placeholder="Ürün Adı">
                                    </div>
                                    <input hidden name="urunDuzenle">

                                    <input type="button" id="urunDuzenle_btn" class="btn btn-primary"
                                           value="Ürün Listele" class="btnSubmit"/>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card">
                            <div class="card-header bg-primary">Ürün Resmi</div>
                            <div class="card-body text-center tabloOlustur">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Öne Çıkana Ekle</th>
                                        <th>Ürün Adı</th>
                                        <th>Ürün Fiyat</th>
                                        <th>Ürün İndirim</th>
                                    </tr>
                                    </thead>
                                    <tbody class="example2">

                                    </tbody>
                                </table>
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


    $("#urunDuzenle_btn").on("click", function () {
        var form = $("#urunDuzenleForm");
        var url = form.attr('action');
        console.log(form.serialize());
        $.ajax({
            type: "POST",
            url: url,
            dataType: "json",
            data: form.serialize(),
            success: function (response) {
                $("#myToast").toast('show');
                var len = response.length;
                $("tr").remove(".silTR");
                $("td").remove(".silTD");
                $("a").remove(".silA");
                for (var i = 0; i < len; i++) {
                    var urun_id = response[i]['urun_id'];
                    var urunAd = response[i]['urunAd'];
                    var urunFiyat = response[i]['urunFiyat'];
                    var urunIndirim = response[i]['urunIndirim'];

                    $(".example2").append("<tr class='silTR'>");
                    $(".example2").append("<td class='silTD'><a class='silA' href='urunOneCikanEkle.php?uid=" + urun_id + "'><button name='select' class='btn btn-success input-group mb-3 justify-content-center'>Öne Çıkan</button></a class='silA></td  class='silTD'>");
                    $(".example2").append("<td class='silTD'>" + urunAd + "</td class='silTD'>");
                    $(".example2").append("<td class='silTD'>" + urunFiyat + "</td class='silTD'>");
                    $(".example2").append("<td class='silTD'>" + urunIndirim + "</td class='silTD'>");
                    $(".example2").append("</tr class='silTD'>");
                }
            },
            error: function (error) {
                alert("ERROR_1");
            }
        });
    });


    $(document).ready(function () {
        $('#anaKategori').change(function () {
            var anaMenu_id = $(this).val();
            $.ajax({
                url: '../data/select.php',
                type: 'post',
                data: {request: 1, anaMenu_id: anaMenu_id},
                dataType: 'json',
                success: function (response) {
                    var len = response.length;

                    $("option").remove(".silOption");
                    for (var i = 0; i < len; i++) {
                        var menu_id = response[i]['menu_id'];
                        var menuAd = response[i]['menuAd'];
                        $("#altKategori").append("<option class='silOption' value='" + menu_id + "'>" + menuAd + "</option>");
                    }
                },
                error: function (error) {
                    alert("ERROR_2");
                }
            });

        });
    });

</script>
</body>
</html>
