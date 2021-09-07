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
                <h3 class="card-title">Urunler  </h3> </div>

                <?php
                 if(@$_GET['yuklenme']=="basarili"){  ?>
                   <h6 style="color:green">*** Yükleme Başarıyla Yapıldı***</h6>
                 <?php }
                 elseif(@$_GET['yuklenme']=="basarisiz"){ ?> 
                   <h6 style="color:red">***Yükleme Başarısız Oldu***</h6><?php }
                  elseif(@$_GET['yuklenme']=="kullanicivar"){ ?> 
                    <h6 style="color:red">***Kullanıcı Kayıtlı! ***</h6> <?php }
                ?>
             
             
              <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">

                 <div class="form-group"> <!-- urunler ekle -> kategori adlarını açılır listede gösterme-->
                   <label>Kategori seç  </label>
                   <select name="urunkategori" class="form-control select2" style="width: 100%;">
                   
                    <?php  //kategoriler getirilir
                     $katid=$_GET['katid']; #get ile gelen kategori id degeri değişkene atanır

                     $kategori=$baglanti->prepare("SELECT * FROM kategori order by kategori_id ASC"); //sıralı gösterilir
                     $kategori->execute();
                     while ($kategorigetir=$kategori->fetch(PDO::FETCH_ASSOC)) { 

                      $kategori_id=$kategorigetir['kategori_id'] #veritabanından alınan deger

                      ?>
                      <!--gelen id degeri ile veritabanından gelen kategori id aynı ise secilir menuye kategori adı yazılır--->
                     <option <?php if($katid==$kategori_id){ echo "selected";} ?> value="<?php echo $kategori_id ?>" ><?php echo $kategorigetir['kategori_adi'] ?></option>
                    <?php } ?>

                   </select>
                 </div> <!-- açılır liste sonu -->  

                  <!--urunler -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Urunler Resim </label>
                    <input name="urunlerresim" type="file" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Urunler Başlık </label>
                    <input name="urunlerbaslik" type="text" class="form-control" placeholder="Başlık giriniz!">
                  </div>
               

                  <label>Urunler Açıklama </label>
                  <textarea name="urunleraciklama" class="ckeditor" id="editor1"></textarea>  
                  <!--kategori sayfasından -> urunler syafasına giderken gelen kategori_id (katid) degeri alınır-->
                  <input type="hidden" name="katid" value="<?php echo $_GET['katid'] ?>" >


                  <div class="form-group">
                    <label for="exampleInputPassword1">Urunler Sıra  </label>
                    <input name="urunlersira" type="text" class="form-control"  placeholder="Sıra degeri giriniz !">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Urunler Model  </label>
                    <input name="urunlermodel" type="text" class="form-control"  placeholder="Model giriniz !">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Urunler Renk  </label> 
                    <input name="urunlerrenk" type="text" class="form-control"  placeholder="Renk giriniz !">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Urunler Adet  </label>
                    <input name="urunleradet" type="text" class="form-control"  placeholder="Adet giriniz !">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Urunler Fiyat  </label>
                    <input name="urunlerfiyat" type="text" class="form-control"  placeholder="Fiyat giriniz !">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Urunler Anahtar Kelime  </label>
                    <input name="urunleranahtar" type="text" class="form-control"  placeholder="Anahtar Kelime giriniz !">
                  </div>
                    <div class="form-group">
                  <label>Urun Durum  </label>
                  <select name="urunlerdurum" class="form-control select2" style="width: 100%;">
                    <option value="1" selected="selected">Aktif</option>
                    <option value="0">Pasif</option>
                   </select>
                </div>   
                  <div class="form-group">
                  <label>Öne Çıkar  </label>
                  <select name="urunleronecikar" class="form-control select2" style="width: 100%;">
                    <option value="1" selected="selected">Öne Çıkar</option>
                    <option value="0">Öne Çıkarma</option>
                    
                  </select>
                </div>   


                </div>
                <!--urunler -->
               
                <div class="card-footer">
                  <button name="urunlerkaydet" type="submit" class="btn btn-primary">Gönder</button>
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