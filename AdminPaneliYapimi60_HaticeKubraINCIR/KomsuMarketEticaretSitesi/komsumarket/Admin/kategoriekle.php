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
                <h3 class="card-title">Kategoriler  </h3> </div>

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

                  

                  <!--kategori -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Adı: </label>
                    <input name="kategoriadi" type="text" class="form-control" placeholder="Kategori giriniz!">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kategori Sıra:  </label>
                    <input name="sira" type="text" class="form-control"  placeholder="Sıra degeri giriniz!">
                  </div>
                  <div class="form-group">
                  <label>Kategori Durum:  </label>
                  <select name="kategoridurum" class="form-control select2" style="width: 100%;">
                    <option value="1" selected="selected">Aktif</option>
                    <option value="0">Pasif</option>
                    
                  </select>
                </div>                       
                </div>
                <!--kategori -->
               
                <div class="card-footer">
                  <button name="kategorikaydet" type="submit" class="btn btn-primary">Gönder</button>
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