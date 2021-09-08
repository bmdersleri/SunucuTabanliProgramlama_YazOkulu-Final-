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
                <h3 class="card-title">Abone Tablosu</h3>

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
                      <th>Abone Email </th>
                      
                      <th>Sil </th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php  //aboneler getirilir
                     $abone=$baglanti->prepare("SELECT * FROM abone "); 
                     $abone->execute();
                     while ($abonegetir=$abone->fetch(PDO::FETCH_ASSOC)) {   ?>
                    <tr>
                      <td><?php echo $abonegetir['abone_email'] ?></td>
                      
                      
                     
                     
                      <td><a href="islem/islem.php?abonesil&id=<?php echo $abonegetir['abone_id'] ?>"><button type="submit" class="btn btn-danger">SİL </button></a></td> 
                      
                      
                                            
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