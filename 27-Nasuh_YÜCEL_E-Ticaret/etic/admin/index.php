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
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


    <!-- Main Sidebar Container -->

    <?php
    $currPage ="index";
    require_once "solMenu.php"?>

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
                <div>Ürün eklemesi başarılı.</div>
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

        <div class="toast" id="kategoriEksikToast" style="position: absolute; top: 20px; right: 0;z-index: 5;width: 250px;"
             data-delay="2500">
            <div class="toast-header bg-danger">
                <strong class="mr-auto">Bilgilendirme</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                <div id="hata"></div>
            </div>
        </div>


        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ürün Ekle</h1>
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

<script type="text/javascript">
    $(document).ready(function (e) {
        $("#uploadForm").on('submit', (function (e) {
            e.preventDefault();
            if($("#anaKategori").val()<1)
            {
                $( "p" ).remove( ".hataMSG" );
                $("#hata").append("<p class='hataMSG'>Lütfen Ana Kategori Seçiniz</p>");
                $("#kategoriEksikToast").toast('show');
                return;
            }
            if($("#altKategori").val()<1)
            {
                $( "p" ).remove( ".hataMSG" );
                $("#hata").append("<p class='hataMSG'>Lütfen Alt Kategori Seçiniz</p>");
                $("#kategoriEksikToast").toast('show');
                return;
            }
            if($("#uAd").val()=="")
            {
                $( "p" ).remove( ".hataMSG" );
                $("#hata").append("<p class='hataMSG'>Lütfen Ürün Adı Yazınız</p>");
                $("#kategoriEksikToast").toast('show');
                return;
            }
            if($("#uFiyat").val()=="")
            {
                $( "p" ).remove( ".hataMSG" );
                $("#hata").append("<p class='hataMSG'>Lütfen Ürün Fiyat Yazınız</p>");
                $("#kategoriEksikToast").toast('show');
                return;
            }
            if($("#uind").val()=="")
            {
                $( "p" ).remove( ".hataMSG" );
                $("#hata").append("<p class='hataMSG'>Lütfen Ürün İndirim Yüzdesi Yazınız</p>");
                $("#kategoriEksikToast").toast('show');
                return;
            }
            if($("#clear").val()=="")
            {
                $( "p" ).remove( ".hataMSG" );
                $("#hata").append("<p class='hataMSG'>Lütfen Ürün Fotoğrafı Seçiniz</p>");
                $("#kategoriEksikToast").toast('show');
                return;
            }

            $.ajax({
                url: "../data/insert.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $("#clear").val(null);
                    $("#myToast").toast('show');
                },
                error: function () {
                }
            });
        }));
    });
</script>
<script>

    $(document).ready(function () {
        $("#bastim").click(function () {
            $("#myToast").toast('show');
        });
    });


    $("#urunEkleButon").on("click", function () {
        var form = $("#urunEkleForm");
        var url = form.attr('action');
        $.ajax({
            type: "POST",
            url: url,
            dataType: "json",
            data: form.serialize(),
            success: function (data) {
                $("#myToast").toast('show');
            },
            error: function (error) {
                $("#myToastError").toast('show');
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
                    $( ".silAltMenu" ).remove();
                    for (var i = 0; i < len; i++) {
                        var menu_id = response[i]['menu_id'];
                        var menuAd = response[i]['menuAd'];
                        $("#altKategori").append("<option class='silAltMenu' value='" + menu_id + "'>" + menuAd + "</option>");
                    }
                },
                error: function (error) {

                }
            });

        });
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#test').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#clear").change(function(){
        readURL(this);
    });
</script>
</body>
</html>
