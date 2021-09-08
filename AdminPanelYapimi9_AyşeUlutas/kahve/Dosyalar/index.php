<?php include 'header.php'; 

//Anasayfa bilgilerini veritabanından getirme
$anasayfa = $conn->query("SELECT * FROM anasayfa")->fetch(PDO::FETCH_ASSOC);
?>

<style>
  
  .kahveYazi{
    display: block;
    color: white;
    width: 100%;
  }
</style>

<div class="section">
  <div class="container">
    <div class="row">

      <div class="col-lg-3">
        <img src="<?php echo $anasayfa['yazi_img']; ?>" class="img-fluid">
      </div>



      <div class="col-lg-9">
        <h2><?php echo $anasayfa['yazi_baslik']; ?></h2>
        <p><?php echo $anasayfa['yazi_icerik']; ?> </p>


      </div>


    </div>
  </div>
</div>




<div class="section section-padding pt-0">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">

        <div class="section-title">
          <h4 class="title">Son Eklenen Ürünler</h4>
        </div>

        <div class="row">



            <?php 
            $kahve=$conn->prepare("SELECT * FROM kategoriler,kahveler WHERE kategoriler.kategori_id = kahveler.kahve_kategori");
            $kahve->execute();
            while ($rowKahve=$kahve->fetch(PDO::FETCH_ASSOC)) {?>


          <div class="col-md-3">
            <div class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
              <div class="andro_product-thumb">
                <img src="<?php echo $rowKahve['kahve_img']; ?>" alt="kahve">
              </div>
              

              <div class="andro_product-footer">
                
                <div class="andro_product-buttons">
                  <p  class="andro_btn-custom primary kahveYazi"><?php echo $rowKahve['kahve_adi']; ?></p>
                  <a href="<?=seo('kategori-'.$rowKahve["kategori_adi"]).'-'.$rowKahve["kategori_id"]?>"   class="andro_btn-custom light "><?php echo $rowKahve['kategori_adi']; ?></a>
                </div>
              </div>
            </div>
          </div>

        <?php } ?>



        </div>

      </div>



    </div>

  </div>
</div>
<!-- Featured Products End -->






<?php include 'footer.php'; ?>