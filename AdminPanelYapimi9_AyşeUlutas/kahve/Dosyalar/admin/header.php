<?php include 'giris-kontrol.php';


?>

<!DOCTYPE html>

<html lang="tr">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">

    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">

    <link rel="stylesheet" href="assets/css/app.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Yönetim</title>


</head>



<body>

    <div id="app">

        <div id="sidebar" class="active">

            <div class="sidebar-wrapper active">

                <div class="sidebar-header">

                    <div class="d-flex justify-content-between">

                        <div class="logo">

                            <a href="index.php">Yönetim</a>

                        </div>

                        <div class="toggler">

                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>

                        </div>

                    </div>

                </div>

                <div class="sidebar-menu">

                    <ul class="menu">

                        <li class="sidebar-title">Menü</li>





                        <li class="sidebar-item active ">

                            <a href="index.php" class='sidebar-link'>

                                <i class="bi bi-grid-fill"></i>

                                <span>Anasayfa</span>

                            </a>

                        </li>






                        <li class="sidebar-item ">
                            <a href="anasayfa-yonetim.php" class='sidebar-link'>
                                <i class="fa fa-home"></i>
                                <span>Anasayfa Yönetim</span>
                            </a>
                        </li>





                        <li class="sidebar-item ">
                            <a href="kategori-yonetim.php" class='sidebar-link'>
                                <i class="fa fa-image"></i>
                                <span>Kategori Yönetim</span>
                            </a>
                        </li>




                        <li class="sidebar-item ">
                            <a href="kahve-yonetim.php" class='sidebar-link'>
                                <i class="fa fa-image"></i>
                                <span>Kahve Yönetim</span>
                            </a>
                        </li>







                        <li class="sidebar-item ">
                            <a href="hakkimizda-yonetim.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Hakkımızda Yönetim</span>
                            </a>
                        </li>





                        <li class="sidebar-item ">
                            <a href="galeri-yonetim.php" class='sidebar-link'>
                                <i class="fa fa-image"></i>
                                <span>Galeri Yönetim</span>
                            </a>
                        </li>






                        <li class="sidebar-item ">
                            <a href="kullanicilar.php" class='sidebar-link'>
                                <i class="fa fa-users"></i>
                                <span>Kullanıcılar</span>
                            </a>
                        </li>



                        



                        <li class="sidebar-item  ">

                            <a href="profil.php" class='sidebar-link'>

                                <i class="bi bi-person-circle"></i>

                                <span>Profil</span>

                            </a>

                        </li>






                        <li class="sidebar-item  ">

                            <a href="site-ayar.php" class='sidebar-link'>

                                <i class="fa fa-cog"></i>

                                <span>Site Ayar</span>

                            </a>

                        </li>




                        <li class="sidebar-item  ">

                            <a href="cikis.php" class='sidebar-link'>

                                <i class="bi bi-power"></i>

                                <span>Çıkış Yap</span>

                            </a>

                        </li>



                    </ul>

                </div>

                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>

            </div>

        </div>

        <div id="main">

            <header class="mb-3">

                <a href="#" class="burger-btn d-block d-xl-none">

                    <i class="bi bi-justify fs-3"></i>

                </a>

            </header>