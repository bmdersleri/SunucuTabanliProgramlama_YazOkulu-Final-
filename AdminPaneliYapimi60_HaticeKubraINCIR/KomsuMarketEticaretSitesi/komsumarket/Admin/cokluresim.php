<?php require_once 'header.php';
require_once 'islem/baglanti.php';
require_once 'sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <section class="content">
      <div class="container-fluid">   
         <div class="row">       
             
          <!-- Yükleme işlemi sonucunun başarılı/başarısız olduğunun dönüşü için  -->
            <?php
                 if(@$_GET['yuklenme']=="basarili"){  ?>
                   <h6 style="color:green">*** Yükleme Başarıyla Yapıldı***</h6>
                 <?php }
                 elseif(@$_GET['yuklenme']=="basarisiz"){ ?> 
                   <h6 style="color:red">***Yükleme Başarısız Oldu***</h6><?php }
            ?>
                           
            


          <div class="col-12">
            <form action="resimyukle" method="POST" enctype="multipart/form-data" class="dropzone">
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
</form> 


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Çoklu Resim</h3>

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
                      <th>Resim </th>
                      <th>Sil </th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php   //coklu resim tablosundan veriler urun_id degerlerine göre getirilir ve id degerine göre sıralanır
                     $cokluresim=$baglanti->prepare("SELECT * FROM cokluresim where urun_id=:urun_id order by id ASC"); //sıralı gösterilir
                     $cokluresim->execute(array(
                       'urun_id'=>$_GET['id'] #gelen ürün ıd degerine göre 


                     ));
                     while ($cokluresimgetir=$cokluresim->fetch(PDO::FETCH_ASSOC)) {   ?>

                    <tr>
                      <!--urunlerin resmi --->
                      <td><img style="width:370px;" src="resimler/cokluresim/<?php echo $cokluresimgetir['resim'] ?>"></td>
                      
                                                                  
                      
                      <form action="islem/islem.php" method="post">
                       <input type="hidden" name="urunid" value="<?php echo $_GET['id'] ?>">
                        <input type="hidden" name="id" value="<?php echo $cokluresimgetir['id'] ?>">
                       <input type="hidden" name="resim" value="<?php echo $cokluresimgetir['resim'] ?>">
                      <td><button name="cokresimsil" type="submit" class="btn btn-danger">SİL </button></td> 

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