<?php include 'inc/header.php';

?>



<div class="page-holder w-100 d-flex flex-wrap">



  <div class="container-fluid px-xl-5">
    <section class="py-5">

      <div class="row">


        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header">
              <h3 class="h6 text-uppercase mb-0">Galeri Sayfa Ayar</h3>
            </div>



            <div style="border: 1px solid #eee;" class="card-body">
              <p>Bu galeriyi ekleyebilirsiniz.</p>

              <form action="islemler.php" method="POST" enctype="multipart/form-data">
                
                <input type="file" name="img" class="form-control">

                <button type="submit" name="gorselEkle" class="btn btn-primary btn-block mt-3">Görsel Ekle</button>
              </form>

              

            </div>






            <div class="card-body">
              <p>Bu kısımdan galeriyi silebilirsiniz.</p>

              <div class="table-responsive">
                
              <table class="table table-striped table-hover card-text">
                <thead>
                  <tr>

                    <th>#</th>
                    <th>Görsel</th>
                    <th>Sil</th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
                  //Galeri görsellerini dbden çekme işlemi
                  $veriCek=$conn->prepare("SELECT * FROM galeri ORDER BY id DESC");
                  $veriCek->execute();
                  while ($row=$veriCek->fetch(PDO::FETCH_ASSOC)) {  ?>
                    <tr>
                      <th scope="row"><?php echo $row['id'] ?></th>
                      <th><img style="height: 150px;width: auto;object-fit: cover;" src="../<?php echo $row['img'] ?>"></th>
                     
                      <th> <a href="ajax/galeri_sil.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash" > </i></a> </th>



                      

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