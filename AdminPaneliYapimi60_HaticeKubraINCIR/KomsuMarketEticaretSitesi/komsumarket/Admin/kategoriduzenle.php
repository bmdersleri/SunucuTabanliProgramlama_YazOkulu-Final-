<?php require_once 'header.php';

require_once 'sidebar.php'; 


# kategori_id degerine göre kategori tablosundan verileri çekmek için 
$kategori=$baglanti->prepare("SELECT * FROM kategori where kategori_id=:kategori_id");
$kategori->execute(array(
  'kategori_id'=>$_GET['id'] # gelen id degerine eşit olan kategori_id getirilir
));
$kategorigetir=$kategori->fetch(PDO::FETCH_ASSOC);

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

                  
                  <!---kategori degerleri veritabanından getirilir ----->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Adı: </label>
                    <input value="<?php echo $kategorigetir['kategori_adi'] ?>" name="kategoriadi" type="text" class="form-control" placeholder="Kategori Adı">
                  </div>
                  <input type="hidden" name="kategori_id" value="<?php echo $kategorigetir['kategori_id'] ?>"> 
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kategori Sıra:  </label>
                    <input value="<?php echo $kategorigetir['kategori_sira'] ?>" name="sira" type="text" class="form-control"  placeholder="Kategori Sıra">
                  </div>
                  <div class="form-group">
                  <label>Kategori Durum:  </label>
                  <select name="kategoridurum" class="form-control select2" style="width: 100%;">
                    <!-- düzenleme kısmına aktif -> aktif,  pasif-> pasif olarak gonderilmesi -->
                    <option value="1" <?php if ($kategorigetir['kategori_durum']=="1") { echo 'selected'; } ?>>Aktif</option>
                    <option value="0"  <?php if ($kategorigetir['kategori_durum']=="0") { echo 'selected'; } ?>>Pasif</option>
                    
                  </select>
                </div>                       
                </div>
                <!--kategori sonu --->
               
                <div class="card-footer">
                  <button name="kategoriduzenle" type="submit" class="btn btn-primary">Gönder</button>
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