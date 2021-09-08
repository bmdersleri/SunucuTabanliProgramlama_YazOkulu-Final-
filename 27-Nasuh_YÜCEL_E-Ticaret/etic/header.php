<?php require_once "data/select.php";
//"COOKIE ADI","VALUES","ZAMAN","PATH","SERVER",false ,false
// setcookie("asd2","1.2.3.4.5",time()+2629743,"/","localhost",false,false);
// setcookie('Cookie_Isim', '_', time() - 1); //′Cookie_Isim′ isimli çerezi sil
// $_COOKIE['asd2'] ; //’Cookie_Isim’ isimli çerezin değerini al
session_start();
ob_start();
?>
<head>

    <meta charset="UTF-8">
    <title>Bigshop | <?php echo " ". $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- JQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- JQuery UI -->
    <link rel="stylesheet" href="css/jquery.ui.css">


    <!-- FontAwesome -->
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/productSlider.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/test.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/style.css">
    <link rel="stylesheet" href="css/odemeStyle.css">



</head>
<!-- Header Başlangıç-->
<div class="container-fluid header-bg-color">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-3 mt10">
                <a href="index.php"><img src="img/logo.png" alt="logo"></a>
            </div>
            <div class="col-4 mt25">
                <form action="urunAra.php" id="testForm" method="get" style="z-index: 999999;">
                    <div class="input-group mb-3">
                        <form action="/urunAra.php" style="z-index: 999999;">
                            <input type="text" class="form-control" name="urun" id="urunAra" placeholder="Ürün Ara" aria-label="Recipient's username">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-warning" id="ara">Ara</button>
                            </div>
                        </form>
                    </div>
                </form>
            </div>
            <div class="col-3 mt10">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg">
                            <div class="collapse navbar-collapse justify-content-end">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link text-white balsamiqBold fs20" href="#" data-bs-toggle="dropdown"><i class="fas fa-user"></i><?php if (isset($_SESSION['adSoyad'])) {
                                                echo " " . $_SESSION['adSoyad'] ." </a>";
                                                ?>
                                                <ul class="dropdown-menu" style="z-index: 1000;">
                                                    <li><a class="dropdown-item" href="uye.php?u=girisYap"><i class="fas fa-sign-in-alt"></i> Ayarlarım</a></li>
                                                    <li><a class="dropdown-item" href="uye.php?u=uyeOl"><i class="fas fa-user-plus"></i> Siparişlerim</a></li>
                                                    <li><a class="dropdown-item" id="cikis" href="#"><i class="fas fa-user-plus"></i> Çıkış Yap</a></li>
                                                </ul>
                                            <?php
                                            }
                                            else
                                            { echo " Üyelik  </a>"; ?>

                                        <ul class="dropdown-menu" style="z-index: 1000;">
                                            <li><a class="dropdown-item" href="uye.php?u=girisYap"><i class="fas fa-sign-in-alt"></i> Giriş Yap</a></li>
                                            <li><a class="dropdown-item" href="uye.php?u=uyeOl"><i class="fas fa-user-plus"></i> Kayıt Ol</a></li>
                                        </ul>
                                        <?php } ?>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-2 mt10 sepet">

                <a class="text-white balsamiqBold fs20" style="z-index: 4;" href="sepetim.php"><i class="fas fa-shopping-cart"></i> Sepetim</a>
                <span class="badge badge-pill sepetUrunSayisi" style="background:#ff5100;position:relative;top: -15px;left: -102px;z-index: 2;"></span>
            </div>
        </div>
        <div class="row h20"></div>
    </div>
</div>
<script>
    $("#cikis").on("click", function () {
        $.ajax({
            url: 'cikis.php',
            type: 'post',
            data: {istek: "uyeOl"},
            dataType: 'json',
            success: function (response) {
                window.location.href="index.php";
            },
            error: function (error) {
                alert(error.responseText);
            }
        });

    });

    $("#duyuruKapatBtn").on("click", function () {
        $("#duyuruKapat").hide('slow');
    });
</script>
<!-- Header Bitiş-->

<!-- Navbar Başlangıç-->
<div class="container-fluid navbar-bg-color">
    <div class="container">
        <div class="row standartMenu navbar-bg-color">
            <header class="site-navbar js-sticky-header site-navbar-target">
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                            <?php
                            $anaMenu = anaMenuCek($db_connection);
                            foreach ($anaMenu as $row) { ?>
                                <li class="has-children">
                                    <a href="#" class="nav-link"><?php echo $row["menuAd"]; ?></a>
                                    <ul class="dropdown">
                                        <?php
                                        $altMenu = altMenuCek($db_connection, $row[0]);
                                        foreach ($altMenu as $row2) { ?>
                                            <li><a href="urunAra.php?kid=<?php echo $row2["menu_id"]; ?>"
                                                   class="nav-link"><?php echo $row2["menuAd"]; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </header>
        </div>
    </div>
</div>
<!-- Navbar Bitiş-->
