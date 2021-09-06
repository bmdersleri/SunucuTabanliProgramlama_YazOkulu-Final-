<?php 

session_start();
if(isset($_SESSION['admin_Kullanici_Adi'])){
  
} else {
  header('Location:login.php');
}


include 'header.php'; 
include 'navbar.php'; 

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Site Genel Ayarları</h1>
            <p>Websitenizin ana bölümlerini ve ayarlarını buradan kontrol edebilir ve güncelleyebilirsiniz.</p>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
              <li class="breadcrumb-item active">Site Genel Ayarları</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Başlık ve İçerik</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="islem.php" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Site Title</label>
                    <div class="col-sm-10">
                      <input type="text" name="title" class="form-control" value="<?php echo $ayar_cek['site_adi']; ?>" id="inputEmail3"  placeholder="Exp: Maku">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Site İsmi</label>
                    <div class="col-sm-10">
                      <input type="text" name="site_adi"class="form-control"value="<?php echo $ayar_cek['site_adi']; ?>" id="inputPassword3" placeholder="Exp: Maku">
                    </div>
                    
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Site Açıklaması</label>
                    <div class="col-sm-10">
                      <input type="text" name="site_aciklama" value="<?php echo $ayar_cek['site_aciklama']; ?>" class="form-control" id="inputPassword3" placeholder="Exp: Maku">
                    </div>
                    
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info" name="kayit_Baslik"> Kaydet</button>
                  
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Genel Ayarlar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="islem.php" method="POST">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Telefon</label>
                        <input type="text" name="site_telefon" value="<?php echo $ayar_cek['site_telefon']; ?>" class="form-control" placeholder="Exp: 53X XXX XX XX">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Adres</label>
                        <input class="form-control" name = "site_adres" value="<?php echo $ayar_cek['site_adres']; ?>" rows="3" placeholder="Exp: Burdur Mehmet Akif Ersoy Üniversitesi  İstiklal Yerleşkesi 15030 / BURDUR ..."></input>
                      </div>
                    </div>
                    
                  </div>

                  <!-- input states -->
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Logo</label>
                    <input type="text" name="" class="form-control is-warning" id="inputWarning" placeholder="Enter your logo img path. Exp: img/asset/logo.png">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Arkaplan</label>
                    <input type="text" name="site_bg" value="<?php echo $ayar_cek['site_bg']; ?>" class="form-control is-warning" id="inputWarning" placeholder="Enter your background img path. Exp: img/asset/background.png">
                  </div>
                 

                  <div class="row">
                    
                    <div class="col-sm-6">
                    <label class="col-form-label" ><i class=""></i> Resmi Mail</label>
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1">
                          <label class="form-check-label"  >sametyl98@gmail.com</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1" checked>
                          <label class="form-check-label">sametyl97@icloud.com</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" disabled>
                          <label class="form-check-label">info@gmail.com</label>
                        </div>
                        
                      </div>
                      
                    </div>
                    
                  </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-info" name="kayit_Detay"> Kaydet</button>
                  
                </div>
                 

                  
                </form>
              </div>
              <!-- /.card-body -->
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php include 'footer.php'; ?>