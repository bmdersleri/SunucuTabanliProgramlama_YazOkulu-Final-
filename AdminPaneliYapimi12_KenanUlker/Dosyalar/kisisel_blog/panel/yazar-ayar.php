<?php include 'inc/header.php';
//yazar verileri dbden çekilir
$yazarData = $conn->query('SELECT * FROM yazar')->fetch(PDO::FETCH_ASSOC);

?>



<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">


        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header">
              <h3 class="h6 text-uppercase mb-0">Yazar AYAR</h3>
            </div>
            <div class="card-body">
              <p>Bu kısımdan yazar ayarlarını düzenleyebilirsiniz.</p>
              <form method="POST" action="islemler.php" enctype="multipart/form-data" >

                <div class="row" >


                  <div class="col-md-12" >
                    <div class="form-group">
                      <label class="form-control-label">Yazar Görsel</label>
                      <input name="yazar_img" type="file" class="form-control">
                    </div>
                  </div>


                
                  <div class="col-md-12" >
                    <div class="form-group">
                      <label class="form-control-label">Yazar Adı</label>
                      <input name="yazar_adi" type="text" class="form-control" value="<?php echo $yazarData['yazar_adi']; ?>">
                    </div>
                  </div>


                
                  <div class="col-md-12" >
                    <div class="form-group">
                      <label class="form-control-label">Yazar Hakkında</label>
                      <textarea rows="7" class="form-control" name="yazar_hakkinda"><?php echo $yazarData['yazar_hakkinda']; ?></textarea>
                    </div>
                  </div>







                </div>




                <div class="form-group">       
                  <button type="submit" name="yazarGuncelle" class="btn btn-primary">Güncelle</button>
                </div>

              </form>
            </div>
          </div>
        </div>




      </div>
    </section>



  </div>



  <?php include 'inc/footer.php'; ?>