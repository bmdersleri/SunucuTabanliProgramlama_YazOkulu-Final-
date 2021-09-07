<?php require_once 'header.php';

require_once 'sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <section class="content">
      <div class="container-fluid">       
             
          <!-- Yükleme işlemi sonucunun başarılı/başarısız olduğunun dönüşü için  -->
            <?php
                 if(@$_GET['yuklenme']=="basarili"){  ?>
                   <h6 style="color:green">*** Yükleme Başarıyla Yapıldı***</h6>
                 <?php }
                 elseif(@$_GET['yuklenme']=="basarisiz"){ ?> 
                   <h6 style="color:red">***Yükleme Başarısız Oldu***</h6><?php }
            ?>
                           
         <div class="row">              
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Slider Tablosu</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <a href="sliderekle"><button style="float-right;" type="submit" class="btn btn-success" >Yeni slider </button></a>
                  <thead>
                    <tr>
                      <th>Slider Resim </th>
                      <th>Slider Başlık </th>
                      <th>Slider Açıklama </th>
                      <th>Slider Buton  </th>
                      <th>Slider Sıra  </th>
                      <th>Slider Durum </th>
                      <th>Slider Banner </th>
                      <th>Düzenle </th>
                      <th>Sil </th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php  //sliderler getirilir
                     $slider=$baglanti->prepare("SELECT * FROM slider order by slider_id ASC"); //sıralı gösterilir
                     $slider->execute();
                     while ($slidergetir=$slider->fetch(PDO::FETCH_ASSOC)) {   ?>
                    <tr>
                      <td><img style="width:370px;" src="resimler/slider/<?php echo $slidergetir['slider_resim'] ?>"></td>
                      <td><?php echo $slidergetir['slider_baslik'] ?></td>
                      <td><?php echo $slidergetir['slider_aciklama'] ?></td>
                      <td><?php echo $slidergetir['slider_button'] ?></td>
                      <td><?php echo $slidergetir['slider_sira'] ?></td>
                      <td><span class="tag tag-success">
                        <?php 
                          if ($slidergetir['slider_durum']=="1") {  echo "Aktif"; }

                          elseif($slidergetir['slider_durum']=="0"){    echo "Pasif";    }

                         ?>
                         
                       </span></td> 
                      <td><span class="tag tag-success">                     
                        <?php 
                           if ($slidergetir['slider_banner']=="1") { echo "Slider";   }

                           elseif($slidergetir['slider_banner']=="0"){     echo "Banner";    }

                        ?>
                         
                       </span></td>
                      
                      
                      
                      <td><a href="sliderduzenle.php?id=<?php echo $slidergetir['slider_id'] ?>"><button type="submit" class="btn btn-info"> DÜZENLE </button></a></td><!-- slider id degeri düzenleme üzere sliderduzenle gönderilir -->



                     <form action="islem/islem.php" method="post">
                       <input type="hidden" name="id" value="<?php echo $slidergetir['slider_id'] ?>">
                       <input type="hidden" name="resim" value="<?php echo $slidergetir['slider_resim'] ?>">
                       
                      <td><button name="slidersil" type="submit" class="btn btn-danger">SİL </button></td> <!-- slider id ve resim degeri silinmek üzere islem.php gönderilir -->


                    </form>
                                          
                                           
                    </tr>
                    <?php } ?>
                                       
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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