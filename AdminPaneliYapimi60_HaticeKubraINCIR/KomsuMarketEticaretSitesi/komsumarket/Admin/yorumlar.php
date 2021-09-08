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
                <h3 class="card-title">Yorumlar Tablosu</h3>

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
                  <thead>
                    <tr>
                      <th>Yorum Zaman </th>
                      <th>Yorum Detay </th>
                      <th>Urun ID </th>
                      <th>Kullanıcı ID </th>
                      <th>Onayla </th>
                      <th>Sil </th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php  //yorumlar getirilir
                     $yorumlar=$baglanti->prepare("SELECT * FROM yorumlar order by yorum_id DESC"); //tersten sırala
                     $yorumlar->execute();
                     while ($yorumlargetir=$yorumlar->fetch(PDO::FETCH_ASSOC)) {   ?>
                    <tr>
                      <td><?php echo $yorumlargetir['yorum_zaman'] ?></td>
                      <td><?php echo $yorumlargetir['yorum_detay'] ?></td>
                      <td><?php echo $yorumlargetir['urun_id'] ?></td>
                      <td><?php echo $yorumlargetir['kullanici_id'] ?></td>
                    
                      
                      <td>
                        <form action="islem/islem.php" method="POST">
                          <input type="hidden" name="yorumid" value="<?php echo $yorumlargetir['yorum_id'] ?>">


                          <!-- yorum onaylandığında buton pasif -->
                          <button 
                          <?php if ($yorumlargetir['yorum_onay']=="1") { echo "disabled"; } ?> name="yorumonayla" type="submit" class="btn btn-info">ONAYLA </button></td>

                        </form>
                      <td><a href="islem/islem.php?yorumlarsil&id=<?php echo $yorumlargetir['yorum_id'] ?>"><button type="submit" class="btn btn-danger">SİL </button></a></td> <!-- yorumlar id degeri silinmek üzere islem.php gönderilir -->
                     
                      
                                            
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