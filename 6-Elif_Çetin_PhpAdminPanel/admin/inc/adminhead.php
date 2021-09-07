<?php
session_start();
if(!(isset($_SESSION["oturum"]) && $_SESSION["oturum"]=="1998")){//oturum yoksa
    header("location:login.php");//login sayfasına gidecek.
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
    <title><?php $Sayfa ?>- SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Yönetim Paneli</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
            <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"data-toggle="modal" data-target="#logoutModal">Çıkış</a>
            </div>
        </li>
    </ul>
</nav>
<!-- Modal -->
<div class="modal fade "id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Çıkış</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Çıkış Yapmak istediğinizden emin misiniz?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">İptal</button>
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
                                <a class="nav-link <?php $Sayfa=="Dashboard"?"active":" "?>" href="index.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                                </a>
                                <div class="sb-sidenav-menu-heading">Sayfalar</div>
                                <a class="nav-link collapsed <?php $Sayfa=="Ana Sayfa" ||  $Sayfa=="Referanslar"?"active":" "?>" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Ana Sayfa
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link <?php $Sayfa=="Ana Sayfa"?"active":" "?>" href="anasayfa.php">Ana Sayfa</a>
                                        <a class="nav-link <?php $Sayfa=="Referanslar"?"active":" "?>" href="referans.php">Referanslar</a>
                                    </nav>
                                </div>

                                <a class="nav-link  <?php $Sayfa=="İletişim Formu"?"active":" "?>" href="iletisimformu.php">İletişim Formu</a>
                                <?php   if($_SESSION["yetki"]==1) { ?>
                                <a class="nav-link <?php $Sayfa=="Kullanıcılar"?"active":" "?>" href="kullanici.php">Kullanıcılar</a>
                                <?php } ?>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Giriş Yapan:</div>
                <?=$_SESSION["kadi"]?>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">