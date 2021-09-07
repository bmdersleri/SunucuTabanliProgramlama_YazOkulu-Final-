<?php include 'inc/header.php';

?>



<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">


        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header">
              <h3 class="h6 text-uppercase mb-0">Profil</h3>
            </div>
            <div class="card-body">
              <p>Bu kısımdan profil ayarlarını düzenleyebilirsiniz.</p>
              <form method="POST" action="islemler.php"  >


                <div class="row" >



                  <div class="col-md-6" >
                    <div class="form-group">
                      <label class="form-control-label">Yeni Şifre</label>
                      <input name="sifre" type="password" class="form-control" >
                    </div>
                  </div>



                  <div class="col-md-6" >
                    <div class="form-group">
                      <label class="form-control-label">Yeni Şifre</label>
                      <input name="sifreTekrar" type="password" class="form-control" >
                    </div>
                  </div>







                </div>







                <div class="form-group">       
                  <button type="submit" name="profilGuncelle" class="btn btn-primary">Güncelle</button>
                </div>

              </form>
            </div>
          </div>
        </div>




      </div>
    </section>



  </div>



  <?php include 'inc/footer.php'; ?>