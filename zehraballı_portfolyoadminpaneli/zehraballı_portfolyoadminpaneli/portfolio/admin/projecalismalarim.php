<?php include 'include/header.php'; ?>
    <section class="content-header">
        <h1>
            Proje Çalışmalarım
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>


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
                      <input type="text" name="baslik" class="form-control" placeholder="Proje başlığını giriniz"/>
                    </div>
                    <div class="form-group">
                      <label>Açıklama</label>
                      <input type="file" name="resim"/>
                    </div>
                    <div class="form-group">
                      <label>Açıklama</label>
                      <textarea name="aciklama" class="form-control" placeholder="Açıklama giriniz"/></textarea>
                    </div>
                    <div class="form-group">

                      <button type="submit" class="btn btn-primary">Ekle</button>
                    </div>
                  </forms>
                </div>
              </div>

            </div>
        </div>

    </section>

    <section class="content">
        <div class="col-md-12">
            <div class="row">
              <div class="box">
                <div class="box-header">
                  Proje Çalışmalarım
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                      <thead>
                        <th>#ID</th>
                        <th>Başlıkkbd</th>
                        <th>Açıklama</th>
                        <th>İşlem</th>
                      </thead>
                      <tbody>
                        <?php
                          $projecalismalarim = $db->query("SELECT * FROM projecalismalarim")->fetchAll(PDO::FETCH_OBJ);
                          foreach ($projecalismalarim as $row) {
                            ?>
                            <tr>
                               <td><?= $row->id ?></td>
                               <td><?= $row->baslik ?></td>
                               <td><?= $row->aciklama ?></td>
                               <td>
                                  <a href="?sil=<?= $row->id ?>"<i class="fa fa-trash text-danger"></i></a>
                                  <a href="projecalismalarim-guncelle.php?id=<?= $row->id ?>"<i class="fa fa-edit text-primary"></i></a>
                               </td>
                            </tr>
                            <?php
                              }
                           ?>


                      </tbody>
                    </table>

                    </div>
                  </forms>
                </div>
              </div>

            </div>
        </div>

    </section>


    <?php

    if (@$_GET["sil"]) {
      $sil = $db->prepare("DELETE FROM projecalismalarim WHERE id=:silinecekid");
      $sil->execute(["silinecekid" => $_GET["sil"]]);

    if (@$_GET["sil"]) {
      header("Location:projecalismalarim.php");
      }
    }
       if ($_POST) {
         $resimAdi = $_FILES["resim"]["name"];
         $resimYolu = "../assets/upload/".$resimAdi;
         if (move_uploaded_file($_FILES["resim"]["tmp_name"],$resimYolu)) {
            $ekle = $db->prepare("INSERT INTO projecalismalarim SET
                                  baslik =:baslik,
                                  resim =:resim,
                                  aciklama=:aciklama" );
            $ekle->execute([
              "baslik"  => $_POST["baslik"],
              "resim"  => $resimAdi,
              "aciklama"  => $_POST["aciklama"],
            ]);
            if ($ekle) {
              echo "Ekleme işlemi başarılı";
            }else {
              echo "Bir hata meydana geldi";
            }
         }
       }



     ?>








    <!-- /.content -->
<?php include 'include/footer.php'; ?>
