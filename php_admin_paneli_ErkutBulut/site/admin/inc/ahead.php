<?php
session_start();
if (!(isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789")) {
    header("location:login.php");
}
include("../inc/vt.php");
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $sayfa ?> - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Yönetim Paneli</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    
                    
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModel">Çıkış</a>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="logoutModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Çıkış</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Çıkış yapmak istediğinize emin misiniz?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                    <a href="logout.php" class="btn btn-danger">Çıkış</a>
                </div>
            </div>
        </div>
    </div>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link <?= $sayfa == "Dashboard" ? "active" : "" ?>" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Sayfalar</div>
                        <a class="nav-link collapsed <?= $sayfa == "Ana Sayfa" || $sayfa == "Referanslar" ? "active" : "" ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Ana Sayfa
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link <?= $sayfa == "Ana Sayfa" ? "active" : "" ?>" href="anasayfa.php">Ana Sayfa </a>
                                <a class="nav-link <?= $sayfa == "Referanslar" ? "active" : "" ?>" href="referans.php">Referanslar</a>

                            </nav>
                        </div>

                        <a class="nav-link collapsed <?= $sayfa == "Servis" || $sayfa == "Servis" ? "active" : "" ?>" href="#" data-bs-toggle="collapse" data-bs-target="#servis" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Servis
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="servis" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link <?= $sayfa == "Servis Başlık" ? "active" : "" ?>" href="servisBaslik.php">Servis Başlık</a>
                                <a class="nav-link <?= $sayfa == "Servis İçerik" ? "active" : "" ?>" href="servisicerik.php">Servis İçerik</a>

                            </nav>
                        </div>
                        <a class="nav-link collapsed <?= $sayfa == "Portfolyo" || $sayfa == "Portfolyo" ? "active" : "" ?>" href="#" data-bs-toggle="collapse" data-bs-target="#portfolyo" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Portfolyo
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="portfolyo" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link <?= $sayfa == "Portfolyo Başlık" ? "active" : "" ?>" href="portfolyo.php">Portfolyo Başlık</a>
                                <a class="nav-link <?= $sayfa == "Portfolyo İçerik" ? "active" : "" ?>" href="portfolyoicerik.php">Portfolyo İçerik</a>

                            </nav>
                        </div>

                        <a class="nav-link collapsed <?= $sayfa == "Hakkımızda" || $sayfa == "Tarihçe" ? "active" : "" ?>" href="#" data-bs-toggle="collapse" data-bs-target="#hakkimizda" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Hakkımızda
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="hakkimizda" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link <?= $sayfa == "Hakkımızda" ? "active" : "" ?>" href="hakkimizda.php">Hakkımızda</a>
                                <a class="nav-link <?= $sayfa == "Tarihçe" ? "active" : "" ?>" href="tarihce.php">Tarihçe</a>

                            </nav>
                        </div>
                        <?php
                        $sorguOkundu = $baglanti->prepare("SELECT COUNT(*) AS sayi FROM iletisimformu where okundu=0");
                        $sorguOkundu->execute();
                        $sonucOkundu = $sorguOkundu->fetch();
                        ?>
                        <a class="nav-link <?= $sayfa == "İletişim Formu" ? "active" : "" ?>" href="iletisimformu.php">İletişim Formu &nbsp;</a>
                        <?php if ($_SESSION["yetki"] == "1") { ?>
                            <a class="nav-link <?= $sayfa == "Kullanıcılar" ? "active" : "" ?>" href="kullanici.php">Kullanıcılar</a>
                        <?php } ?>
                        <a class="nav-link <?= $sayfa == "Sosyal Medya" ? "active" : "" ?>" href="link.php">Sosyal Medya</a>
                    </div>

                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Giriş yapan :</div>
                    <?= $_SESSION["kadi"] ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">