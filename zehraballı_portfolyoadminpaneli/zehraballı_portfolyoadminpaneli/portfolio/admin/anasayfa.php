<?php include 'include/header.php'; ?>
    <section class="content-header">
        <h1>
            Anasayfa
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

<?php

$anasayfa = $db->prepare("SELECT * FROM anasayfa WHERE id=:id");
$anasayfa->execute(["id" => 1]);

$row = $anasayfa->fetch(PDO::FETCH_OBJ);

 ?>

    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
            <div class="row">
              <div class="box">
                <div class="box-header">
                  Anasayfa ayarları
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




                  <form action="" method="post">
                    <div class="form-group">
                      <label>Yazılar 1</label>
                      <textarea name="yazilar1" class="form-control" /><?= $row->yazilar1; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label>Yazılar 2</label>
                      <textarea name="yazilar2" class="form-control" /><?= $row->yazilar2; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label>Resim</label>
                      <input type="file" name="resim"/>
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
        $guncelle = $db->prepare("UPDATE anasayfa SET yazilar1=:yazilar1,yazilar2=:yazilar2, resim=:resim WHERE id=:id");
        $guncelle->execute([
          "yazilar1"  => $_POST["yazilar1"],
          "yazilar2"  => $_POST["yazilar2"],
          "resim"  => $_POST["resim"],
          "id"        => 1
        ]);

        if ($guncelle) {

          header("location:anasayfa.php?durum=ok");
        }else {
          header("location:anasayfa.php?durum=no");
        }
       }


     ?>






    <!-- /.content -->
<?php include 'include/footer.php'; ?>
