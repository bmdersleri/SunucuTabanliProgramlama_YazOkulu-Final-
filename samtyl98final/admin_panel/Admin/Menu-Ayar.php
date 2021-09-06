<?php 

session_start();
if(isset($_SESSION['admin_Kullanici_Adi'])){
  
} else {
  header('Location:login.php');
}


include 'header.php'; 
include 'navbar.php'; 

?>


 
  <div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Menu Ayarları</h1>
            <p>Yeni menu ekleme işlemleri ve menu linklerini bu bölmeden ayarlayabilirsiniz.</p>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
              <li class="breadcrumb-item active">Site Genel Ayarları</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Menulerinizi buradan yönetin.</h3>
              </div>
              
              <div class="card-body">
              <div class="row">
              <div class="col-sm">
              <p>Yeni Menu elemanı eklemek için butona tıkayın.</p>
              </div>
              <div class="col-sm12">
              <a class="btn btn-success pull-right" href="menu-ekle.php" role="button">Yeni Menu Ekle</a>
              
              </div>
    
              
              
              </div>
              
              <hr>
              <div class="panel-heading">Ekli Olan Menuler.</div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Menu Id</th>
                    <th>Menu Adı</th>
                    <th>Menu Linkleri</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
										$menuleri_sor = $baglan->query("select * from menuler");
										
										while($menuleri_cek = mysqli_fetch_assoc($menuleri_sor)) {
											$menu_isim =   $menuleri_cek["menu_ad"]; 
											
                  echo '<tr>';
                    echo '<td>'.$menuleri_cek["menu_id"].'</td>';
                    echo '<td>'.$menuleri_cek["menu_ad"].'</td>';
                    echo '<td>'.$menuleri_cek["menu_link"].'</td>';
                    echo '<td>  <a class="btn btn-dark pull-right" href="menu-Duzenle.php?menu_id='.$menuleri_cek["menu_id"].'" role="button">Düzenle</a></td>';
                    echo '<td>  <a class="btn btn-danger pull-right" href="islem.php?menu_id='.$menuleri_cek["menu_id"].'&menukaldir=ok" role="button">Kaldır</a></td>';
                  echo '</tr>';
                }
                ?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Menu Id</th>
                    <th>Menu Adı</th>
                    <th>Menu Linkleri</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              
            </div>
            

            
              
            </div>
            
          </div>
          
        </div>
        
      </div>
      
    </section>
   
  </div>
<?php include 'footer.php'; ?>