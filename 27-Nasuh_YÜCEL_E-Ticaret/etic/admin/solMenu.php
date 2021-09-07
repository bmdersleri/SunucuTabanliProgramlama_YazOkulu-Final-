<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
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
                <a href="#" class="d-block">Nasuh Yücel</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="index.php" class="nav-link <?php if($currPage =='index'){echo 'active';}?>">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Ana Sayfa
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="kategoriEkle.php" class="nav-link  <?php if($currPage =='ke'){echo 'active';}?>">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Kategori Ekle
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="urunEkle.php" class="nav-link  <?php if($currPage =='ue'){echo 'active';}?>">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Ürün Ekle
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="urunDuzenle.php" class="nav-link  <?php if($currPage =='ud'){echo 'active';}?>">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Ürün Detay
                        </p>
                    </a>
                </li>
                <!-- menu-open -->

                <!-- <li class="nav-item ">

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