<?php include 'include/header.php'; ?>
    <section class="content-header">
        <h1>
            Hakkımda
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

<?php
$hakkimda = $db->prepare("SELECT * FROM hakkimda WHERE id=:id");
$hakkimda->execute(["id" => 1]);

$row = $hakkimda->fetch(PDO::FETCH_OBJ);

 ?>

    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
            <div class="row">
              <div class="box">
                <div class="box-header">
                  Hakkımda Bilgiler
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
                      <label>Resim</label>
                      <input type="file" name="resim" />
                    </div>
                    <div class="form-group">
                      <label>Açıklamalar</label>
                      <textarea name="aciklamalar" class="form-control" /><?= $row->aciklamalar; ?></textarea>
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
                   $guncelle = $db->prepare("UPDATE hakkimda SET

                                         resim =:resim,
                                         aciklamalar=:aciklamalar
                                         WHERE id=:id");
                   $guncelle->execute([

                     "resim"  => $resimAdi,
                     "aciklamalar"  => $_POST["aciklamalar"],
                     "id"  => 1
                   ]);
                   if ($guncelle) {
                     header ("location:hakkimda.php?durum=ok");
                   }else {
                     header ("location:hakkimda.php?durum=no");
                   }
                }
              }else {
                $guncelle = $db->prepare("UPDATE hakkimda SET


                                      aciklamalar=:aciklamalar
                                      WHERE id=:id");
                $guncelle->execute([


                  "aciklamalar"  => $_POST["aciklamalar"],
                  "id"  => 1
                ]);
                if ($guncelle) {
                  header ("location:hakkimda.php?durum=ok");
                }else {
                  header ("location:hakkimda.php?durum=no");
                }
             }
         }



       ?>


    <!-- /.content -->
<?php include 'include/footer.php'; ?>
