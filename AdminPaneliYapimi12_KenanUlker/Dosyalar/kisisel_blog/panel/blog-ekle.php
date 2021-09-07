<?php include 'inc/header.php';

?>



<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">


        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header">
              <h3 class="h6 text-uppercase mb-0">Blog Ekle</h3>
            </div>
            <div class="card-body">
              <p>Bu kısımdan blog ekleyebilirsiniz.</p>
              <form method="POST" action="islemler.php" enctype="multipart/form-data" >


                <div class="row" >




                  <div class="col-md-12" >
                    <div class="form-group">
                      <label class="form-control-label">Blog Başlık</label>
                      <input name="baslik" type="text" class="form-control">
                    </div>
                  </div>


                
                  <div class="col-md-12" >
                    <div class="form-group">
                      <label class="form-control-label">Blog Görsel</label>
                      <input name="resim" type="file" class="form-control">
                    </div>
                  </div>


                
                  <div class="col-md-12" >
                    <div class="form-group">
                      <label class="form-control-label">Blog Yazı</label>
                   <textarea rows="9" class="form-control" name="text"></textarea>
                    </div>
                  </div>



                </div>





                <div class="form-group">       
                  <button type="submit" name="blogEkle" class="btn btn-primary">Ekle</button>
                </div>

              </form>
            </div>
          </div>
        </div>




      </div>
    </section>



  </div>



  <?php include 'inc/footer.php'; ?>