<?php include 'include/header.php'; ?>
    <section class="content-header">
        <h1>
            İletişim
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>


    <section class="content">
        <div class="col-md-12">
            <div class="row">
              <div class="box">
                <div class="box-header">
                  Mesajlarım
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                      <thead>
                        <th>#ID</th>
                        <th>İsim Soyisim</th>
                        <th>Email</th>
                        <th>Tarih</th>
                        <th>Durum</th>
                        <th>İşlem</th>
                      </thead>
                      <tbody>
                        <?php
                          $iletisim = $db->query("SELECT * FROM iletisim")->fetchAll(PDO::FETCH_OBJ);
                          foreach ($iletisim as $row) {
                            ?>
                            <tr>
                               <td><?= $row->id ?></td>
                               <td><?= $row->isim ?></td>
                               <td><?= $row->email ?></td>
                               <td><?= $row->tarih ?></td>
                               <td>
                                  <?php
                                   if ($row->durum == 0) {
                                     echo '<span class="label label-danger">Okunmadı</span>';
                                   }else {
                                     echo '<span class="label label-success">Okundu</span>';
                                   }
                                  ?>
                               </td>
                               <td>
                                  <a href="?sil=<?= $row->id ?>"<i class="fa fa-trash text-danger"></i></a>
                                  <a href="oku.php?id=<?= $row->id ?>"<i class="fa fa-eye text-primary"></i></a>
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
      $sil = $db->prepare("DELETE FROM iletisim WHERE id=:silinecekid");
      $sil->execute(["silinecekid" => $_GET["sil"]]);

    if (@$_GET["sil"]) {
      header("Location:iletisim.php");
      }
    }


 ?>

    <!-- /.content -->
<?php include 'include/footer.php'; ?>
