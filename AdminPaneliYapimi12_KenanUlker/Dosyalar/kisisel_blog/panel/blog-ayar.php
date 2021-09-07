<?php include 'inc/header.php';

?>



<div class="page-holder w-100 d-flex flex-wrap">



  <div class="container-fluid px-xl-5">
    <section class="py-5">

      <div class="row">


        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header">
              <h3 class="h6 text-uppercase mb-0">Blog Sayfa Ayar</h3>
            </div>


            <div class="card-body">
              <p>Bu kısımdan blog ayarı yapabilirsiniz.</p>
              <a href="blog-ekle.php" class="btn btn-primary mb-3">Blog Ekle</a>

              <div class="table-responsive">
                
              <table class="table table-striped table-hover card-text">
                <thead>
                  <tr>

                    <th>#</th>
                    <th>Görsel</th>
                    <th>Başlık</th>
                    <th width="150"></th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
                  //Blog Listesi çekme
                  $veriCek=$conn->prepare("SELECT * FROM blog ORDER BY id DESC");
                  $veriCek->execute();
                  while ($row=$veriCek->fetch(PDO::FETCH_ASSOC)) {  ?>
                    <tr>
                      <th scope="row"><?php echo $row['id']; ?></th>
                      <th><img style="height: 150px;width: auto;object-fit: cover;" src="../<?php echo $row['resim'] ?>"></th>
                     
                      <th scope="row"><?php echo $row['baslik']; ?></th>
                      

                      <th><a href="blog-duzenle.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm"><i class="fa fa-edit" > </i></a>
                       <a href="ajax/blog_sil.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash" > </i></a> </th>
                      

                    </tr>


                  <?php } ?>


                </tbody>
              </table>
            </div>

            </div>
          </div>




        </div>




      </section>



    </div>



    <?php include 'inc/footer.php'; ?>