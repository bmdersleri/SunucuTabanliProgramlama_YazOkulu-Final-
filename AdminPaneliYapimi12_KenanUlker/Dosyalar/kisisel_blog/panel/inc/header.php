<?php 
include 'inc/giris-kontrol.php';
include 'inc/ayar.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Yönetim Paneli</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- Google fonts - Popppins for copy-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
  <!-- orion icons-->
  <link rel="stylesheet" href="css/orionicons.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.png?3">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      </head>
      <body>
        <!-- navbar-->
        <header class="header">
          <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a><a href="index.php" class="navbar-brand font-weight-bold text-uppercase text-base">YÖNETİM PANELİ</a>
            <ul class="ml-auto d-flex align-items-center list-unstyled mb-0"></ul>
          </nav>
        </header>
        <div class="d-flex align-items-stretch">
          <div id="sidebar" class="sidebar py-3">
            <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">Menü</div>
            <ul class="sidebar-menu list-unstyled">

              <li class="sidebar-list-item"><a href="index.php" class="sidebar-link text-muted active"><i class="o-home-1 mr-3 text-gray"></i><span>Anasayfa</span></a></li>



            

              <li class="sidebar-list-item"><a href="galeri-ayar.php"  class="sidebar-link text-muted"><i class="fa fa-image mr-3 text-gray"></i><span>Galeri Ayar</span></a>
              </li>



              <li class="sidebar-list-item"><a href="yazar-ayar.php"  class="sidebar-link text-muted"><i class="fa fa-pen mr-3 text-gray"></i><span>Yazar Ayar</span></a>
              </li>





              <li class="sidebar-list-item"><a href="blog-ayar.php"  class="sidebar-link text-muted"><i class="fab fa-blogger mr-3 text-gray"></i><span>Blog Ayar</span></a>
              </li>





              <li class="sidebar-list-item"><a href="site-ayar.php"  class="sidebar-link text-muted"><i class="fa fa-cog mr-3 text-gray"></i><span>Site Ayar</span></a>
              </li>





              <li class="sidebar-list-item"><a href="profil.php"  class="sidebar-link text-muted"><i class="fa fa-user mr-3 text-gray"></i><span>Profil</span></a>
              </li>






              <li class="sidebar-list-item"><a href="cikis.php" class="sidebar-link text-muted"><i class="o-exit-1 mr-3 text-gray"></i><span>Çıkış</span></a></li>
            </ul>


          </div>
