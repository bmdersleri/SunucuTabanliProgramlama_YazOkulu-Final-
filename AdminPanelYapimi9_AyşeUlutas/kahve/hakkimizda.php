<?php include 'header.php';

//Hakkımızda bilgilerini veritabanından getirme
$hakkimizda = $conn->query("SELECT * FROM hakkimizda")->fetch(PDO::FETCH_ASSOC);

 ?>


<style>
  .hakkimizda {
    padding: 50px;
    margin-top: 100px;
  }
</style>


<div class="row align-items-center">

  <div class="col-lg-4 mb-lg-20 andro_single-img-wrapper hakkimizda">
    <img src="<?php echo $hakkimizda['resim']; ?>" alt="img">
    <div class="andro_dots"></div>
  </div>
  <div class="col-lg-8 p-5">
    <div class="section-title-wrap mr-lg-30">
      <h2 class="title">Hakkımızda</h2>
      <p class="subtitle"><?php echo $hakkimizda['hakkimizda']; ?></p>

      
    </div>
  </div>

</div>









<?php include 'footer.php'; ?>