
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-indigo bg-purple elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text  font-weight-bold">Bm Dersleri</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/samet.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#"  class="d-block text-white"><strong>Kullanici:</strong>  <?php echo $_SESSION['admin_Kullanici_Adi']; ?></a>
          <a href="#"  class="d-block text-white blockquote-footer font-italic font-weight-light text-lowercase "> <?php echo $ayar_cek['site_adi']; ?></a>
          
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 ">
        <ul class="nav nav-pills nav-sidebar  flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Main Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="Menu-Ayar.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                MENU
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Genel Ayarlar
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right bg-indigo">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="site_basligi_ayarlar.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Site Başlığı</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Menu-Ayar.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="footer_ayarlar.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Footer Ayarları</p>
                </a>
              </li>
              
              
            </ul>
          </li>
          
         
          <li class="nav-item">
            <a href="Mail-Ayar.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Mail Ayarları
                <i class=""></i>
              </p>
            </a>
            
          </li>
          
          <li class="nav-header">Ekstra</li>
          <li class="nav-item">
            <a href="takvim.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Takvim
                <span class="badge badge-info right bg-indigo">2</span>
              </p>
            </a>
          </li>
          
                            
              
          
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>