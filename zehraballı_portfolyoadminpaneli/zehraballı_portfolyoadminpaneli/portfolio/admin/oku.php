<?php include 'include/header.php'; ?>
    <section class="content-header">
        <h1>
            Dashboard
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

<?php
if ($_GET["id"]) {
    $mesaj = $db->prepare("SELECT * FROM iletisim WHERE id=:id");
    $mesaj->execute(["id" => $_GET["id"]]);
    $row = $mesaj->fetch(PDO::FETCH_OBJ);

    $guncelle = $db->prepare("UPDATE iletisim SET durum=:durum WHERE id=:id");
    $guncelle->execute(["durum" => 1, "id" => $_GET["id"]]);
}
 ?>


    <section class="content">
        <div class="col-md-12">
            <div class="row">
              <div class="box">
                <div class="box-header">
                   <?= $row->isim ?> kişisinden gelen mesaj
                </div>
                <div class="box-body">
                    <table class="table">
                       <tr>
                         <td>İsim Soyisim : </td>
                         <td><?= $row->isim ?></td>
                       </tr>
                       <tr>
                         <td>Email : </td>
                         <td><?= $row->email ?></td>
                       </tr>
                       <tr>
                         <td>Mesaj : </td>
                         <td><?= $row->mesaj ?></td>
                       </tr>

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
