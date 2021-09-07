<?php require_once 'header.php';

require_once 'sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <section class="content">
      <div class="container-fluid">
       
        <!-- Main row -->
       
                    
         <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Uyeler Tablosu</h3>

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
                  <a href="uyelerekle"><button style="float-right;" type="submit" class="btn btn-success" >Yeni kullanıcı </button></a>
                  <thead>
                    <tr>
                      <th>Kullanıcı Numarası </th>
                      <th>Kullanıcı Ad </th>
                      <th>Tarih </th>
                      <th>Yetki </th>
                      <th>Ad Soyad </th>
                      <th>Adres </th>
                      <th>İl </th>
                      <th>İlçe</th>
                      <th>Telefon </th>
                      <th>Sil </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  //uyeler getirilir
                     $kullanici=$baglanti->prepare("SELECT * FROM kullanici order by kullanici_id ASC"); //sıralı gösterilir
                     $kullanici->execute();
                     while ($kullanicigetir=$kullanici->fetch(PDO::FETCH_ASSOC)) {   ?>
                    <tr>
                      <td><?php echo $kullanicigetir['kullanici_id'] ?></td>
                      <td><?php echo $kullanicigetir['kullanici_adi'] ?></td>
                      <td><?php echo $kullanicigetir['kullanici_zaman'] ?></td>
                      <td><span class="tag tag-success"><?php 
                      if ($kullanicigetir['kullanici_yetki']=="2") {
                        echo "Admin Kullanıcı";
                        
                      }
                      elseif($kullanicigetir['kullanici_yetki']=="1"){
                        echo "Normal Kullanıcı";
                      }

                       ?></span></td>
                      <td><?php echo $kullanicigetir['kullanici_adsoyad'] ?></td>
                      <td><?php echo $kullanicigetir['kullanici_adres'] ?></td>
                      <td><?php echo $kullanicigetir['kullanici_il'] ?></td>
                      <td><?php echo $kullanicigetir['kullanici_ilce'] ?></td>
                      <td><?php echo $kullanicigetir['kullanici_tel'] ?></td>
                      
                      <td><a href="islem/islem.php?kullanicisil&id=<?php echo $kullanicigetir['kullanici_id'] ?>"><button type="submit" class="btn btn-danger">SİL </button></a></td> <!-- kullanıcı id degeri silinmek üzere islem.php gönderilir -->

                                            
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