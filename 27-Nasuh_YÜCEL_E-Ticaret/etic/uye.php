<?php require_once "data/select.php"; ?>

<!DOCTYPE html>
<html lang="en">

<?php require_once "header.php"; ?>
<body>
<!-- Wrapper Start -->
<div class="wrapper standart">

    <div class="toast" id="myToast" style="position: absolute; top: 60px; right: 0;z-index: 5;width: 250px;"
         data-delay="1000">
        <div class="toast-body">
            <div>Kayıt Başarılı.</div>
        </div>
    </div>

    <div class="container" style="height: 350px;margin-top: 50px;">

        <?php if (!isset($_SESSION['adSoyad'])) { ?>
        <div class="row">
            <div class="col-4 offset-4">
                <div class="card">
                    <h5 class="card-header">
                        <ul id="mytabs" class="nav nav-pills justify-content-center">
                            <li class="<?php if (isset($_GET['u'])) {
                                if ($_GET['u'] == 'girisYap') {
                                    echo 'active';
                                }
                            } else echo 'active' ?>"><a href="#girisForm" class="nav-link" data-toggle="pill">Giriş
                                    Yap</a>
                            </li>
                            <li class="<?php if (isset($_GET['u'])) {
                                if ($_GET['u'] == 'uyeOl') {
                                    echo 'active';
                                }
                            } ?>"><a href="#kayitForm" class="nav-link" data-toggle="pill">Kayıt Ol</a></li>
                        </ul>
                    </h5>
                    <div class="card-body">
                        <div class="tab-content">
                            <div id="girisForm" class="tab-pane fade <?php if (isset($_GET['u'])) {
                                if ($_GET['u'] == 'girisYap') {
                                    echo ' in active';
                                }
                            } else echo ' in active' ?>">
                                <form action="cikis.php" method="post">
                                    <div class="row justify-content-center">
                                        <div class="col-9">
                                            <div class="mb-3 mt10">
                                                <input type="email" class="form-control" id="girisEmail"
                                                       placeholder="E-posta adresi">
                                            </div>
                                            <div class="mb-3 mt10">
                                                <input type="password" class="form-control" id="girisSifre"
                                                       placeholder="Şifre">
                                            </div>
                                            <div class="mb-3 mt10">
                                                <a id="girisYap">
                                                    <button style="width: 280px;" type="button" class="btn btn-primary">
                                                        Giriş Yap
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="kayitForm" class="tab-pane fade <?php if (isset($_GET['u'])) {
                                if ($_GET['u'] == 'uyeOl') {
                                    echo ' in active';
                                }
                            } ?>"
                            <form action="cikis.php" method="post">
                                <div class="row justify-content-center">
                                    <div class="col-9">
                                        <div class="mb-3 mt10">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mb-3 mt10">
                                                        <input type="email" class="form-control" id="ad"
                                                               style="margin-left:-8px;width: 140px;"
                                                               placeholder="Ad">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3 mt10">
                                                        <input type="email" class="form-control" id="soyad"
                                                               style="margin-left:-13px;width: 140px;"
                                                               placeholder="Soyad">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 " style="margin-left:-8px;width: 290px;">
                                                <input type="email" class="form-control" id="kayitEmail"
                                                       placeholder="E-posta adresi">
                                            </div>
                                            <div class="mb-3 mt10">
                                                <input type="password" style="margin-left:-8px;width: 290px;"
                                                       class="form-control" id="kayitSifre" placeholder="Şifre">
                                            </div>
                                            <div class="mb-3 mt10">
                                                <a id="kayitOl">
                                                    <button style="margin-left:-8px;width: 290px;" type="button"
                                                            class="btn btn-primary">Kayıt Ol
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
</div>
<?php
require_once "footer.php";
?>
<link href="js/req/toastr.css" rel="stylesheet" />
<script src="js/req/toastr.js"></script>
<script>

    $("#kayitOl").on("click", function () {
        var ad = $('#ad').val();
        var soyad = $('#soyad').val();
        var kayitEmail = $('#kayitEmail').val();
        var kayitSifre = $('#kayitSifre').val();
        $.ajax({
            url: 'data/insert.php',
            type: 'post',
            data: {istek: "uyeOl", kayitEmail: kayitEmail, kayitSifre: kayitSifre, ad: ad, soyad: soyad},
            dataType: 'json',
            success: function (response) {
                toastr.options = {
                    "closeButton": true,
                    "positionClass": "toast-bottom-right",
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "2000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr["success"]("Kayıt başarılı. Yönlendiriliyorsunuz.");

                setTimeout(function () {
                    window.location.href = "index.php";
                }, 1800);
            },
            error: function (error) {
                alert(error.responseText);
            }
        });

    });

    $("#girisYap").on("click", function () {
        var girisEmail = $('#girisEmail').val();
        var girisSifre = $('#girisSifre').val();
        $.ajax({
            url: 'data/select.php',
            type: 'post',
            data: {request: 2, girisEmail: girisEmail, girisSifre: girisSifre},
            dataType: 'json',
            success: function (response) {
                toastr.options = {
                    "closeButton": true,
                    "positionClass": "toast-bottom-right",
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "2000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr["success"]("Giriş başarılı. Yönlendiriliyorsunuz.");

                setTimeout(function () {
                    window.location.href = "index.php";
                }, 1800);

            },
            error: function (error) {
                alert("test");
                alert(error.responseText);
            }
        });

    });

</script>


</body>
</html>
