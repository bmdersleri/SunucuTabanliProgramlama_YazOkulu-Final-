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
            <h1>Kurumsal e-Posta Ayarları</h1>
            <p>Gerekli ayarları buradan girebilirsiniz. Ayarlarınızı doğru şekilde yapıp hostunuza websitenizi yüklediğiniz anda mail sistemi aktif hala geçecektir.</p>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
              <li class="breadcrumb-item active">Kurumsal e-Posta Ayarları</li>
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
                <h3 class="card-title">Ayar Düzenlemeleri</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="islem.php" method="POST">
                <div class="card-body">
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">SMTP Kullanıcı</label>
                    <div class="col-sm-10">
                      <input type="text" name="smtpuser"class="form-control"value="<?php echo $mail_cek['smtpuser']; ?>" id="inputPassword3" placeholder="Exp: Maku">
                    </div>
                    
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">SMTP Host</label>
                    <div class="col-sm-10">
                      <input type="text" name="smtphost"class="form-control"value="<?php echo $mail_cek['smtphost']; ?>" id="inputPassword3" placeholder="Exp: Maku">
                    </div>
                    
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">SMTP Port</label>
                    <div class="col-sm-10">
                      <input type="text" name="smtpport"class="form-control"value="<?php echo $mail_cek['smtpport']; ?>" id="inputPassword3" placeholder="Exp: Maku">
                    </div>
                    
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">SMTP Şifre</label>
                    <div class="col-sm-10">
                      <input type="text" name="smptpass"class="form-control"value="<?php echo $mail_cek['smptpass']; ?>" id="inputPassword3" placeholder="Exp: Maku">
                    </div>
                    
                  </div>
                  
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info" name="kayit_Mail"> Kaydet</button>
                  
                </div>
                <!-- /.card-footer -->
              </form>
            
            </div>
              <!-- /.card-body -->
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php include 'footer.php'; ?>