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
            <h1>Site Genel Ayarları</h1>
            <p>Footer bölümünün  ayarlarını buradan kontrol edebilir ve güncelleyebilirsiniz.</p>
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
          
          <div class="col-md-12">
            
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Footer Ayarları</h3>
                
              </div>
              
              <form class="form-horizontal" action="islem.php" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Telif Hakkı</label>
                    <div class="col-sm-10">
                      <input type="text" name="telif_hakki" value="<?php echo $ayar_cek['telif_hakki']; ?>" class="form-control" id="inputEmail3" placeholder="Exp: Copyright 2020-2021">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Copyright Link</label>
                    <div class="col-sm-10">
                      <input type="text" name="telif_url" value="<?php echo $ayar_cek['telif_url']; ?>" class="form-control" id="inputEmail3" placeholder="Exp: www.maku.com">
                    </div>
                  </div>
                
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Copyright ismi</label>
                    <div class="col-sm-10">
                      <input type="text"  name="copyright_isim" value="<?php echo $ayar_cek['copyright_isim']; ?>" class="form-control" id="inputEmail3" placeholder="Exp: sametyl">
                    </div>
                  </div>
                 
                </div>
                
                
                
                <div class="card-footer">
                  <button type="submit" name="kayit_Footer" class="btn btn-dark"> Kaydet</button>
                  
                </div>
                
              </form>
            </div>
            
         
    </section>
    
  </div>
<?php include 'footer.php'; ?>