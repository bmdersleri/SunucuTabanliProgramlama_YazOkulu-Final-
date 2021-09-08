<<?php include 'include/header.php'; ?>
    <section class="content-header">
        <h1>
            Ayarlar
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

<?php


$ayarlar = $db->prepare("SELECT * FROM ayarlar WHERE id=:id");
$ayarlar->execute(["id" => 1]);

$row = $ayarlar->fetch(PDO::FETCH_OBJ);


?>

    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
            <div class="row">
              <div class="box">
                <div class="box-header">
                  Site ayarları
                </div>
                <div class="box-body">
                  <?php
                    if (@$_GET["durum"] == "ok") {
                     ?>
                       <div class="alert alert-success" >
                         Bilgiler başarıyla güncellendi.
                       </div>
                       <?php
                      }
                      if (@$_GET["durum"] == "no") {
                       ?>
                         <div class="alert alert-danger">
                           Bir hata meydana geldi.
                         </div>
                         <?php
                      }
                  ?>




                  <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Site Başlığı</label>
                      <input name="siteBaslik" class="form-control" value="<?= $row->sitem_baslik ?>"/>
                    </div>
                    <div class="form-group">
                      <label>Site Anahtar Kelime</label>
                      <input name="siteKeyw" class="form-control" value="<?= $row->sitem_keywords ?>"/>
                    </div>
                    <div class="form-group">
                      <label>Site Açıklama</label>
                      <input name="siteAciklama" class="form-control" value="<?= $row->sitem_description ?>"/>
                    </div>
                    <div class="form-group">
                      <label>Facebook</label>
                      <input name="face" class="form-control" value="<?= $row->sitem_facebook ?>"/>
                    </div>
                    <div class="form-group">
                      <label>Twitter</label>
                      <input name="twit" class="form-control" value="<?= $row->sitem_twitter ?>"/>
                    </div>
                    <div class="form-group">
                      <label>E-mail</label>
                      <input name="mail" class="form-control" value="<?= $row->sitem_email ?>"/>
                    </div>
                    <div class="form-group">
                      <label>Kullanıcı Adı</label>
                      <input name="kuadı" class="form-control" value="<?= $row->site_kullaniciadi ?>"/>
                    </div>
                    <div class="form-group">
                      <label>Şifre</label>
                      <input name="pass" class="form-control" value="<?= $row->sitem_password ?>"/>
                    </div>
                    <div class="form-group">
                      <label>Ad Soyad</label>
                      <input name="İsimSoyisim" class="form-control" value="<?= $row->sitem_adsoyad ?>"/>
                    </div>
                    <div class="form-group">
                      <label>Meslek</label>
                      <input name="meslek" class="form-control" value="<?= $row->sitem_meslek ?>"/>
                    </div>
                    <div class="form-group">
                      <label>resim</label>
                      <input name="resim" type="file"/>
                    </div>
                    <div class="form-group">
                      <label>Site Durum</label>
                       <select class="form-control" name="durum">
                         <option value="1">Açık</option>
                         <option value="0">Kapalı</option>
                       </select>
                    </div>

                    <div class="form-group">

                      <button type="submit" class="btn btn-primary">Güncelle</button>
                    </div>
                  </forms>
                </div>
              </div>

            </div>
        </div>

    </section>

<?php
    if ($_POST) {
      if ($_FILES["resim"]["name"]) {
        $resimAdi = $_FILES["resim"]["name"];
        $resimYolu = "../assets/upload/".$resimAdi;

        if (move_uploaded_file($_FILES["resim"]["tmp_name"],$resimYolu)) {
          $guncelle = $db->prepare("UPDATE ayarlar SET
            sitem_baslik=:baslik,
            sitem_keywords=:keywords,
            sitem_description=:description,
            sitem_durum=:durum,,
            sitem_facebook=:facebook,
            sitem_twitter=:twitter,
            sitem_email=:email,
            site_kullaniciadi=:kuadı,
            sitem_password=:pass,
            sitem_adsoyad=:İsimSoyisim,
            sitem_meslek=:meslek,
            sitem_resim=:resim
            WHERE id=:id");
          $guncelle->execute([
            "baslik"  => $_POST["siteBaslik"],
            "keywords"  => $_POST["siteKeyw"],
            "description"  => $_POST["siteAciklama"],
            "durum"  => $_POST["durum"],
            "facebook"  => $_POST["face"],
            "twitter"  => $_POST["twit"],
            "email"  => $_POST["mail"],
            "kuadı"  => $_POST["kuadı"],
            "pass"  => $_POST["pass"],
            "İsimSoyisim"  => $_POST["İsimSoyisim"],
            "meslek"  => $_POST["meslek"],
            "resim"  => $resimAdi,
            "id"        => 1
          ]);

          if ($guncelle) {

            header("location:ayarlar.php?durum=ok");
          }else {
            header("location:ayarlar.php?durum=no");
          }
        }
      }else {
        $guncelle = $db->prepare("UPDATE ayarlar SET
          sitem_baslik=:baslik,
          sitem_keywords=:keywords,
          sitem_description=:description,
          sitem_durum=:durum,,
          sitem_facebook=:facebook,
          sitem_twitter=:twitter,
          sitem_email=:email,
          site_kullaniciadi=:kuadı,
          sitem_password=:pass,
          sitem_adsoyad=:İsimSoyisim,
          sitem_meslek=:meslek
          WHERE id=:id");
        $guncelle->execute([
          "baslik"  => $_POST["siteBaslik"],
          "keywords"  => $_POST["siteKeyw"],
          "description"  => $_POST["siteAciklama"],
          "durum"  => $_POST["durum"],
          "facebook"  => $_POST["face"],
          "twitter"  => $_POST["twit"],
          "email"  => $_POST["mail"],
          "kuadı"  => $_POST["kuadı"],
          "pass"  => $_POST["pass"],
          "İsimSoyisim"  => $_POST["İsimSoyisim"],
          "meslek"  => $_POST["meslek"],
          "id"      => 1
        ]);

        if ($guncelle) {

          header("location:ayarlar.php?durum=ok");
        }else {
          header("location:ayarlar.php?durum=no");
        }
      }
      }




     ?>






    <!-- /.content -->
<?php include 'include/footer.php'; ?>
