<?php include 'inc/header.php';
$veri = $conn->query('SELECT * FROM site_ayar')->fetch(PDO::FETCH_ASSOC);

?>



<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">


        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header">
              <h3 class="h6 text-uppercase mb-0">SİTE AYAR</h3>
            </div>
            <div class="card-body">
              <p>Bu kısımdan site ayarlarını düzenleyebilirsiniz.</p>
              <form method="POST" action="islemler.php" enctype="multipart/form-data" >


                <div class="row" >




                  <div class="col-md-4" >
                    <div class="form-group">
                      <label class="form-control-label">Favicon</label>
                      <input name="favicon" type="file" class="form-control">
                    </div>
                  </div>


                
                  <div class="col-md-4" >
                    <div class="form-group">
                      <label class="form-control-label">Logo</label>
                      <input name="logo" type="file" class="form-control">
                    </div>
                  </div>


                
                  <div class="col-md-4" >
                    <div class="form-group">
                      <label class="form-control-label">Logo Dark</label>
                      <input name="logo_dark" type="file" class="form-control">
                    </div>
                  </div>




                  <div class="col-md-6" >
                    <div class="form-group">
                      <label class="form-control-label">Facebook</label>
                      <input name="fb" type="text" class="form-control" value="<?php echo $veri['fb']; ?>">
                    </div>
                  </div>



                  <div class="col-md-6" >
                    <div class="form-group">
                      <label class="form-control-label">İnstagram</label>
                      <input name="ig" type="text" class="form-control" value="<?php echo $veri['ig']; ?>">
                    </div>
                  </div>



                  <div class="col-md-12" >
                    <div class="form-group">
                      <label class="form-control-label">Copyright</label>
                      <input name="copy" type="text" class="form-control" value="<?php echo $veri['copy']; ?>">
                    </div>
                  </div>




                </div>



                <div class="form-group">
                  <label class="form-control-label">Site Title</label>
                  <input name="title" type="text" placeholder="Title:" class="form-control" 
                  value="<?php echo $veri['title']; ?>">
                </div>




                <div class="form-group">
                  <label class="form-control-label">Google Maps</label>
                  <textarea name="google_maps" rows="3" class="form-control" ><?php echo $veri['google_maps'] ?></textarea>
                </div>

                





                <div class="form-group">       
                  <button type="submit" name="siteAyarGuncelle" class="btn btn-primary">Güncelle</button>
                </div>

              </form>
            </div>
          </div>
        </div>




      </div>
    </section>



  </div>



  <?php include 'inc/footer.php'; ?>