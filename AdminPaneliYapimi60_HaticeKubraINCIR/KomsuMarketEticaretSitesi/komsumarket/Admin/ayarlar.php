<?php require_once 'header.php';

require_once 'sidebar.php'; 


?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <section class="content">
      <div class="container-fluid">
       
        <!-- Main row -->
        <div class="row">
          

<div class="card card-primary col-md-12">
              <div class="card-header">
                <h3 class="card-title">Genel Ayarlar  </h3> </div>
                <?php 
  if(@$_GET['yuklenme']=="basarili") 
    {  ?>
    <h6 style="color:green">*** Yükleme Başarıyla Yapıldı***</h6>  <?php }
   elseif(@$_GET['yuklenme']=="basarisiz") 
    { ?> 
    <h6 style="color:red">***Yükleme Başarısız Oldu***</h6>  <?php }


                  

              ?>
             
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Başlığı</label>
                    <input value="<?php echo $ayargetir['baslik'] ?>" name="baslik" type="text" class="form-control" placeholder="Site adı giriniz!">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Site Açıklama</label>
                    <input value="<?php echo $ayargetir['aciklama'] ?>" name="aciklama" type="text" class="form-control"  placeholder="Açıklama giriniz!">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Anahtar Kelime</label>
                    <input value="<?php echo $ayargetir['anahtarkelime'] ?>" name="anahtarkelime" type="text" class="form-control"  placeholder="Anahtar Kelimeleri giriniz!">
                  </div>
                                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="ayarkaydet" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>



<div class="card card-primary col-md-12">
                 
                           
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  
                  <input type="hidden" name="eskilogo" value="<?php echo $ayargetir['logo'] ?>"> <!---silinecek eski logo  --->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Logo</label>
                    <img style="width:250px" src="resimler/logo/<?php echo $ayargetir['logo'] ?>"> <!---resim veritabanından getirilir--->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Logo</label>
                    <input name="logo" type="file" class="form-control">
                  </div>
                                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="logokaydet" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>




          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require_once 'footer.php'; ?>