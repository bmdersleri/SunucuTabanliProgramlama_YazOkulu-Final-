<?php require_once 'header.php';

require_once 'sidebar.php'; 


# slider_id degerine göre slider tablosundan verileri çekmek için 
$slider=$baglanti->prepare("SELECT * FROM slider where slider_id=:slider_id");
$slider->execute(array(
  'slider_id'=>$_GET['id'] # gelen id degerine eşit olan slider_id getirilir
));
$slidergetir=$slider->fetch(PDO::FETCH_ASSOC);

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <section class="content">
      <div class="container-fluid">
       
        <!-- Main row -->
        <div class="row">
          

<div class="card card-primary col-md-12">
              <div class="card-header">
                <h3 class="card-title">Sliderler  </h3> </div>

                <?php
                 if(@$_GET['yuklenme']=="basarili"){  ?>
                   <h6 style="color:green">*** Yükleme Başarıyla Yapıldı***</h6>
                 <?php }
                 elseif(@$_GET['yuklenme']=="basarisiz"){ ?> 
                   <h6 style="color:red">***Yükleme Başarısız Oldu***</h6><?php }
                  elseif(@$_GET['yuklenme']=="kullanicivar"){ ?> 
                    <h6 style="color:red">***Kullanıcı Kayıtlı! ***</h6> <?php }
                ?>
             
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">

                  

                  <!--Slider  degerlerin veritanından getirilir-->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Resim: </label>
                    <input  name="sliderresim" type="file" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Başlık: </label>
                    <input value="<?php echo $slidergetir['slider_baslik'] ?>" name="sliderbaslik" type="text" class="form-control" placeholder="Slider giriniz!">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Slider Açıklama:  </label>
                    <input value="<?php echo $slidergetir['slider_aciklama'] ?>" name="slideraciklama" type="text" class="form-control"  placeholder="Açıklama giriniz!">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Slider Sıra:  </label>
                    <input value="<?php echo $slidergetir['slider_sira'] ?>" name="slidersira" type="text" class="form-control"  placeholder="Sıra degeri giriniz!">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Slider Link:  </label>
                    <input value="<?php echo $slidergetir['slider_link'] ?>" name="sliderlink" type="text" class="form-control"  placeholder="Link giriniz!">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Slider Buton Adı:  </label>
                    <input value="<?php echo $slidergetir['slider_button'] ?>" name="sliderbutton" type="text" class="form-control"  placeholder="Buton Adı giriniz!">
                  </div>
                  
                  <div class="form-group">
                  <label>Slider Durum:  </label>
                  <select name="sliderdurum" class="form-control select2" style="width: 100%;">
                    <option value="1" <?php if ($slidergetir['slider_durum']=="1") { echo 'selected'; } ?>>Aktif</option>
                    <option value="0" <?php if ($slidergetir['slider_durum']=="0") { echo 'selected'; } ?>>Pasif</option>
                    
                  </select>
                </div>      
                <input type="hidden" name="id" value="<?php echo $slidergetir['slider_id'] ?> ">
                <input type="hidden" name="eskiresim" value="<?php echo $slidergetir['slider_resim'] ?>">
                  <div class="form-group">
                  <label>Slider Banner:  </label>
                  <select name="sliderbanner" class="form-control select2" style="width: 100%;">
                    <option value="1" <?php if ($slidergetir['slider_durum']=="1") { echo 'selected'; } ?>>Slider yap</option>
                    <option value="0" <?php if ($slidergetir['slider_durum']=="0") { echo 'selected'; } ?>>Banner yap</option>
                    
                  </select>
                </div>                  
                </div>
                <!--Slider Sonu -->
               
                <div class="card-footer">
                  <button name="sliderduzenle" type="submit" class="btn btn-primary">Gönder</button>
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