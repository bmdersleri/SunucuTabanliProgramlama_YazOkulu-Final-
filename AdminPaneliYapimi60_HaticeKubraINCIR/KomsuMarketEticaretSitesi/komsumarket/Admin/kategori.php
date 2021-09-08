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
                <h3 class="card-title">Kategori Tablosu</h3>

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
                  <a href="kategoriekle"><button style="float-right;" type="submit" class="btn btn-success" >Yeni Kategori </button></a>
                  <thead>
                    <tr>
                      <th>Kategori Numarası </th>
                      <th>Kategori Ad </th>
                      <th>Kategori Sıra </th>
                      <th>Kategori Durum </th>
                      <th>Düzenle </th>
                      <th>Sil </th>
                      <th>Ürünler </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  //kategoriler getirilir
                     $kategori=$baglanti->prepare("SELECT * FROM kategori order by kategori_sira ASC"); //sıralı gösterilir
                     $kategori->execute();
                     while ($kategorigetir=$kategori->fetch(PDO::FETCH_ASSOC)) {   ?>
                    <tr>
                      <td><?php echo $kategorigetir['kategori_id'] ?></td>
                      <td><?php echo $kategorigetir['kategori_adi'] ?></td>
                      <td><?php echo $kategorigetir['kategori_sira'] ?></td>
                      
                      <td><span class="tag tag-success"><?php 
                      if ($kategorigetir['kategori_durum']=="1") {
                        echo "Aktif";
                        
                      }
                      elseif($kategorigetir['kategori_durum']=="0"){
                        echo "Pasif";
                      }

                       ?>
                         
                       </span></td>
                      
                      <td><a href="kategoriduzenle.php?id=<?php echo $kategorigetir['kategori_id'] ?>"><button type="submit" class="btn btn-info"> DÜZENLE </button></a></td><!-- kategori id degeri düzenleme üzere kategoriduzenle gönderilir -->
                     
                      <td><a href="islem/islem.php?kategorisil&id=<?php echo $kategorigetir['kategori_id'] ?>"><button type="submit" class="btn btn-danger">SİL </button></a></td> <!-- kategori id degeri silinmek üzere islem.php gönderilir -->
                      

                       <!--urunler tablosundaki kategorilerin id degeri linkte gönderilir-->
                      <td><a href="urunler?katid=<?php echo $kategorigetir['kategori_id'] ?>"><button type="submit" class="btn btn-success">GİT </button></a></td> <!--Ürünlere git -->

                                            
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