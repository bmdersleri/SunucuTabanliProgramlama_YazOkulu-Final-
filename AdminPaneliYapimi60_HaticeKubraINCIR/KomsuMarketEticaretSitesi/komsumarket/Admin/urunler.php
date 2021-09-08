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
                <h3 class="card-title">Urunler Tablosu</h3>

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
                  <!--kategori id degeri alındı -->
                  <a href="urunlerekle?katid=<?php echo $_GET['katid'] ?> "><button style="float-right;" type="submit" class="btn btn-success" >Yeni urunler </button></a>
                  <thead>
                    <tr>
                      <th>Urunler Resim </th>
                      <th>Urunler Başlık </th>
                      <th>Urunler Model </th>
                      <th>Urunler Renk  </th>
                      <th>Urunler Sıra  </th>
                      <th>Urunler Durum </th>
                      <th>Urunler Adet Sayısı </th>
                      <th>Düzenle </th>
                      <th>Sil </th>
                      <th>Çoklu Resim </th>
                      
                    </tr>
                  </thead>
                  <tbody>

                    <?php  // gelen kategori_id (katid) degerine göre urunler getirilir
                     $urunler=$baglanti->prepare("SELECT * FROM urunler where kategori_id=:kategori_id order by urun_id ASC"); //sıralı gösterilir
                     $urunler->execute(array(
                       'kategori_id'=>$_GET['katid'] 

                        ));
                     while ($urunlergetir=$urunler->fetch(PDO::FETCH_ASSOC)) {   ?>
                    <tr>
                      <td><img style="width:150px;" src="resimler/urunler/<?php echo $urunlergetir['urun_resim'] ?>"></td>
                      <td><?php echo $urunlergetir['urun_baslik'] ?></td>
                      <td><?php echo $urunlergetir['urun_model'] ?></td>
                      <td><?php echo $urunlergetir['urun_renk'] ?></td>
                      <td><?php echo $urunlergetir['urun_sira'] ?></td>
                      <td><?php echo $urunlergetir['urun_durum'] ?></td>
                      <td><?php echo $urunlergetir['urun_adet'] ?></td>                     
                                          
                      
                      <td><a href="urunlerduzenle.php?id=<?php echo $urunlergetir['urun_id'] ?>&katid=<?php echo $urunlergetir['kategori_id'] ?>"><button type="submit" class="btn btn-info"> DÜZENLE </button></a></td><!-- urunler id degeri düzenleme üzere urunlerduzenle gönderilir -->
                     <form action="islem/islem.php" method="post">
                       <input type="hidden" name="id" value="<?php echo $urunlergetir['urun_id'] ?>">
                       <input type="hidden" name="resim" value="<?php echo $urunlergetir['urun_resim'] ?>">
                       <input type="hidden" name="katid" value="<?php echo $_GET['katid'] ?>">
                      <td><button name="urunlersil" type="submit" class="btn btn-danger">SİL </button></td> <!-- urunler id ve resim degeri silinmek üzere islem.php gönderilir -->



                    </form> 
                    <!--çoklu resim sayfasına ıd yönlendirmesi --->
                    <td><a href="cokluresim?id=<?php echo $urunlergetir['urun_id'] ?>"><button class="btn btn-success">Çoklu Resim</button></a></td>

                                           
                                           
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