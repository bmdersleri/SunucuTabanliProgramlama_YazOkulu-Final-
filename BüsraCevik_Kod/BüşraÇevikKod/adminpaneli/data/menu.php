<?php 
error_reporting(0); 
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #1986DA">
    <!-- Brand Logo -->
    <a href="<?=SITE?>" class="brand-link">
      <img src="<?=SITE?>dist/img/acme-logo.png" border-radius="5px"  class="brand-image img-circle elevation-1"
           style="opacity: .9">
      <span class="brand-text font-weight-cyan">ACME-Apple Shop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #1986DA">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=SITE?>dist/img/büş.png" class="img-circle elevation-1" alt="User Image">
        </div>
        <div class="info">
                    <p style="color: white">Büşra ÇEVİK</p>
        </div>
      </div>
			 
	
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="<?=SITE?>modul-ekle" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Sayfa Ekle
               
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Sayfalar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <?php
			 $moduller=$VT->VeriGetir("moduller","WHERE durum=?",array(1),"ORDER BY ID ASC");
			 if($moduller!=false)
			 {
				 for($i=0;$i<count($moduller);$i++)
				 {
					 ?>
                      <li class="nav-item">
                        <a href="<?=SITE?>liste/<?=$moduller[$i]["tablo"]?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p><?=$moduller[$i]["baslik"]?></p>
                        </a>
                      </li>
                     <?php
				 }
			 }
			 ?>
             
             
              
              
            </ul>
          </li>
          
           <li class="nav-item">
            <a href="<?=SITE?>iletisim-ayarlari" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                İletişim Ayarları
              </p>
            </a>
          </li>
         <li class="nav-item">
            <a href="<?=SITE?>cikis" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Çıkış Yap
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>