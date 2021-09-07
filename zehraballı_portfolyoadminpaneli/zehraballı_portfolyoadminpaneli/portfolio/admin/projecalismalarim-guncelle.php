<?php include 'include/header.php'; ?>
    <section class="content-header">
        <h1>
            Proje Çalışmaları Güncelle
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
<?php
    if ($_GET["id"]) {
      $calismaDetay =$db->prepare("SELECT * FROM projecalismalarim WHERE id=:gelenid");
      $calismaDetay->execute(["gelenid" => $_GET["id"]]);
      $row = $calismaDetay->fetch(PDO::FETCH_OBJ);
    }
?>
    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
            <div class="row">
              <div class="box">
                <div class="box-header">
                  Proje Çalışmalarımı Ekle
                </div>
                <div class="box-body">

                  <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Başlık</label>
                      <input type="text" name="baslik" class="form-control" placeholder="Proje başlığını giriniz" value="<?= $row->baslik ?>"/>
                    </div>
                    <div class="form-group">
                      <label>Açıklama</label>
                      <input type="file" name="resim"/>
                    </div>
                    <div class="form-group">
                      <label>Açıklama</label>
                      <textarea name="aciklama" class="form-control" placeholder="Açıklama giriniz"><?= $row->aciklama ?></textarea>
                    </div>
                    <div class="form-group">

                      <button type="submit" class="btn btn-primary">Güncelle</button>
                    </div>
                  </forms>
                  <img src="../assets/upload/<?= $row->resim ?>" alt="" height="100">
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
                 $ekle = $db->prepare("UPDATE projecalismalarim SET
                                       baslik =:baslik,
                                       resim =:resim,
                                       aciklama=:aciklama
                                       WHERE id=:id");
                 $ekle->execute([
                   "baslik"  => $_POST["baslik"],
                   "resim"  => $resimAdi,
                   "aciklama"  => $_POST["aciklama"],
                   "id"  => $_GET["id"]
                 ]);
                 if ($ekle) {
                   echo "Güncelleme işlemi başarılı";
                 }else {
                   echo "Bir hata meydana geldi";
                 }
              }
            }else {
              $ekle = $db->prepare("UPDATE projecalismalarim SET
                                    baslik =:baslik,
                                    aciklama=:aciklama
                                    WHERE id=:id" );
              $ekle->execute([
                "baslik"    => $_POST["baslik"],
                "aciklama"  => $_POST["aciklama"],
                "id"        => $_GET["id"]
              ]);
              if ($ekle) {
                echo "Güncelleme işlemi başarılı";
              }else {
                echo "Bir hata meydana geldi";
              }
            }
       }



     ?>
  <!-- /.content -->
<?php include 'include/footer.php'; ?>
