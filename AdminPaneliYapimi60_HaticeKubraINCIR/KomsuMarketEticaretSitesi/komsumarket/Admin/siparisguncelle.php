<?php require_once 'header.php';

require_once 'sidebar.php'; 


# kategori_id degerine göre kategori tablosundan verileri çekmek için 
$siparis=$baglanti->prepare("SELECT * FROM siparisler where siparis_id=:siparis_id");
$siparis->execute(array(
  'siparis_id'=>$_GET['id'] # gelen id degerine eşit olan kategori_id getirilir
));
$siparisgetir=$siparis->fetch(PDO::FETCH_ASSOC);

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <section class="content">
      <div class="container-fluid">
       
        <!-- Main row -->
        <div class="row">
          

<div class="card card-primary col-md-12">
              <div class="card-header">
                <h3 class="card-title">Sipariş Güncelle  </h3> </div>

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

                  
                  <!--sipariş degerleri veritabanından getirilir -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sipariş ID:  </label>
                    <input value="<?php echo $siparisgetir['siparis_id'] ?>" name="siparisid" type="text" class="form-control" placeholder="Kategori Adı">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Sipariş Adet: </label>
                    <input value="<?php echo $siparisgetir['urun_adet'] ?>" name="adet" type="text" class="form-control"  placeholder="Kategori Sıra">
                  </div>
                                       
                </div>
                <!---siparis sonu ---->
               
                <div class="card-footer">
                  <button name="siparisduzenle" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>

         
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require_once 'footer.php'; ?>