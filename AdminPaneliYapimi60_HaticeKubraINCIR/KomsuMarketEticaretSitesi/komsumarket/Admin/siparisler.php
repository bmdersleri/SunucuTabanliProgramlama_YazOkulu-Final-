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
                <h3 class="card-title">Siparis Tablosu</h3>

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
                      <th>Siparis ID </th>
                      <th>Kullanici ID </th>
                      <th>Urun ID </th>
                      <th>Siparis Zaman </th>
                      <th>Urun Adet  </th>
                      <th>Urun Fiyat </th>
                      <th>Toplam Fiyat </th>
                      <th>Ödeme Türü </th>
                      <th>Sipariş Notu</th>
                      <th>Yeni Adet Sayısı</th> 
                      <th>Onayla </th>
                      <th>Reddet </th>
                      <th>Guncelle </th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php  //siparisler getirilir
                     $siparis=$baglanti->prepare("SELECT * FROM siparisler order by siparis_id DESC"); 
                     $siparis->execute();
                     while ($siparisgetir=$siparis->fetch(PDO::FETCH_ASSOC)) {   ?>
                    <tr>
                      <td><?php echo $siparisgetir['siparis_id'] ?></td>
                      <td><?php echo $siparisgetir['kullanici_id'] ?></td>
                      <td><?php echo $siparisgetir['urun_id'] ?></td>
                      <td><?php echo $siparisgetir['siparis_zaman'] ?></td>
                      <td><?php echo $siparisgetir['urun_adet'] ?></td>
                      <td><?php echo $siparisgetir['urun_fiyat'] ?></td>
                      <td><?php echo $siparisgetir['toplam_fiyat'] ?></td>





                      <td><span class="tag tag-success">
                        <?php 
                          if ($siparisgetir['odeme_turu']=="1") {  echo "Kapıda Ödeme"; }

                          elseif($siparisgetir['odeme_turu']=="0"){    echo "Kart ile Ödeme";    }

                         ?>
                         
                       </span></td> 
                      <td><?php echo $siparisgetir['siparis_not'] ?>   </td>
                      <td><?php echo $siparisgetir['siparis_yeniadet'] ?>   </td>






                      <?php 
                      if ($siparisgetir['siparis_onay']=="0") { #sipariş onay bekliyor   ?>


                      
                      <td><a href="islem/islem.php?siparisonayla&id=<?php echo $siparisgetir['siparis_id'] ?>"><button type="submit" class="btn btn-info"> ONAYLA </button></a></td>
                     
                      <td><a href="islem/islem.php?siparisreddet&id=<?php echo $siparisgetir['siparis_id'] ?>"><button  type="submit" class="btn btn-danger">REDDET </button></a></td> 

                      <td><a href="siparisguncelle?id=<?php echo $siparisgetir['siparis_id'] ?>"><button  type="submit" class="btn btn-success">GÜNCELLE </button></a></td> 
                  

                       <?php  } ?>
                                         
                                           
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