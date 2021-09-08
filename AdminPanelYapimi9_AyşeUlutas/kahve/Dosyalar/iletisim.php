<?php include 'header.php';


?>




<div class="section">
  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <h2>İletişim</h2>
        <?php echo $site['google_maps']; ?>
      </div>

      

      <div class="col-md-12">
        


          <div class="section-title">
            <h4 class="title">Bize Ulaşın</h4>
          </div>

          <form method="POST" action="func.php">
            <div class="row">
              <div class="form-group col-lg-12">
                <input type="text" placeholder="Adınız Soyadınız" class="form-control" name="ad_soyad" value="">
              </div>

              <div class="form-group col-lg-12">
                <input type="email" placeholder="Email Adresiniz" class="form-control" name="email" value="">
              </div>
              <div class="form-group col-lg-12">
                <input type="text" placeholder="Konu" class="form-control" name="konu" value="">
              </div>
              <div class="form-group col-lg-12">
                <textarea name="mesaj" class="form-control" placeholder="Mesajınızı Yazınız" rows="8"></textarea>
              </div>
            </div>
            <button type="submit" class="andro_btn-custom primary" name="mesajGonder">Mesaj Gönder</button>
          </form>

        

      </div>





    </div>
  </div>
</div>






<?php include 'footer.php'; ?>