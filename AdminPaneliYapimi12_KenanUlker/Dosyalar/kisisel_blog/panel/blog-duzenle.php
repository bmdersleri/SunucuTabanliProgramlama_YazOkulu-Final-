<?php 
//Gelen idye göre blog detaylarını çekme
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  include 'inc/header.php';
  $blogData = $conn->query("SELECT * FROM blog WHERE id = '$id' ")->fetch(PDO::FETCH_ASSOC);
}else {
  //Eğer id gelmemişse blog ayar sayfasına yönlendirir.
  header("location:blog-ayar.php");
}

?>



<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">


        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header">
              <h3 class="h6 text-uppercase mb-0">Blog Güncelle</h3>
            </div>
            <div class="card-body">
              <p>Bu kısımdan blog güncelleyebilirsiniz..</p>
              <form method="POST" action="islemler.php" enctype="multipart/form-data" >
                <input type="hidden" name="id" value="<?php echo $blogData['id']; ?>">


                <div class="row" >


                  <div class="col-md-12 text-center">
                    <img style="height: 500px;width: auto;" src="../<?php echo $blogData['resim']; ?>" class="img-fluid">
                  </div>

                  <div class="col-md-12" >
                    <div class="form-group">
                      <label class="form-control-label">Blog Başlık</label>
                      <input name="baslik" type="text" class="form-control" value="<?php echo $blogData['baslik']; ?>">
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
                   <textarea rows="9" class="form-control" name="text"><?php echo $blogData['text']; ?></textarea>
                    </div>
                  </div>



                </div>





                <div class="form-group">       
                  <button type="submit" name="blogGuncelle" class="btn btn-primary">Güncelle</button>
                </div>

              </form>
            </div>
          </div>
        </div>




      </div>
    </section>



  </div>



  <?php include 'inc/footer.php'; ?>