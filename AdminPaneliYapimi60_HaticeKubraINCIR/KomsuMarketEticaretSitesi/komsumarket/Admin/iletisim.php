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
                <h3 class="card-title">İletişim Ayarları  </h3> </div>
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
                    <label for="exampleInputEmail1">Telefon Numarası </label>
                    <input value="<?php echo $ayargetir['telefon'] ?>" name="telefon" type="text" class="form-control" placeholder="Telefon Numarası giriniz!">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Adres</label>
                    <input value="<?php echo $ayargetir['adres'] ?>" name="adres" type="text" class="form-control"  placeholder="Adres giriniz!">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mail</label>
                    <input value="<?php echo $ayargetir['email'] ?>" name="email" type="text" class="form-control"  placeholder="Mail adresi giriniz!">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mesai</label>
                    <input value="<?php echo $ayargetir['mesai'] ?>" name="mesai" type="text" class="form-control"  placeholder="Mesai saatini giriniz!">
                  </div>
                             

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="iletisimkaydet" type="submit" class="btn btn-primary">Gönder</button>
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