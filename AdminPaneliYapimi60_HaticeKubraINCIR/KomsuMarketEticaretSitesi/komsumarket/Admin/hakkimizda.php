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
                 if(@$_GET['yuklenme']=="basarili"){  ?>
                   <h6 style="color:green">*** Yükleme Başarıyla Yapıldı***</h6>
                 <?php }
                 elseif(@$_GET['yuklenme']=="basarisiz"){ ?> 
                   <h6 style="color:red">***Yükleme Başarısız Oldu***</h6><?php }
                ?>
             
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">

                  <!--hakkımızda resim  -->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Resim</label>
                    <img style="width:250px" src="resimler/hakkimizda/<?php echo $hakkimizdagetir['hakkimizda_resim'] ?>"> <!--resim veritabanından getirilir -->
                  </div>
                  <input type="hidden" name="eskiresim" value="<?php echo $hakkimizdagetir['hakkimizda_resim'] ?>" >
                  <div class="form-group">
                    <label for="exampleInputPassword1">Resim</label>
                    <input name="resim" type="file" class="form-control">
                  </div>
                  <!--hakkmızda resim sonu -->

                  <!--hakkmızda -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hakkımızda Başlığı</label>
                    <input value="<?php echo $hakkimizdagetir['hakkimizda_baslik'] ?>" name="baslik" type="text" class="form-control" placeholder="Hakkımızda Başlığı giriniz!">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Misyon</label>
                    <input value="<?php echo $hakkimizdagetir['hakkimizda_misyon'] ?>" name="misyon" type="text" class="form-control"  placeholder="Misyon giriniz!">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Vizyon</label>
                    <input value="<?php echo $hakkimizdagetir['hakkimizda_vizyon'] ?>" name="vizyon" type="text" class="form-control"  placeholder="Vizyon giriniz!">
                  </div>      

                  <label>Hakkımızda Açıklama </label>
                  <textarea name="aciklama" class="ckeditor" id="editor1"><?php echo $hakkimizdagetir['hakkimizda_detay'] ?></textarea>        
                </div>
                <!-hakkmızda sonu ->
               
                <div class="card-footer">
                  <button name="hakkimizdakaydet" type="submit" class="btn btn-primary">Gönder</button>
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