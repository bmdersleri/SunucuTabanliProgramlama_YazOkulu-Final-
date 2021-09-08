<?php include('header.php'); ?>



<link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">



<div class="page-heading">

    <div class="page-title">

        <div class="row">

            <div class="col-12 col-md-6 order-md-1 order-last">

                <h3>Kahve Yönetim</h3>

            </div>

            <div class="col-12 col-md-6 order-md-2 order-first">

                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Kahve Yönetim</li>

                    </ol>

                </nav>

            </div>

        </div>

    </div>

    <section class="section">

        <div class="card">

            <div class="card-header">

                Tüm Kahve Yönetim

            </div>

            <div class="card-body">

                <form method="POST" action="func.php" class="mb-5" enctype="multipart/form-data">

                    <label>Kategori Seçiniz </label>
                    <select name="kahve_kategori" required="" class="form-control mb-3">
                        <option value="">Kahve Seçiniz</option>

                        <?php 
                        $veriCek=$conn->prepare("SELECT * FROM kategoriler");
                        $veriCek->execute();
                        while ($row=$veriCek->fetch(PDO::FETCH_ASSOC)) {?>

                            <option value="<?php echo $row['kategori_id']; ?>"><?php echo $row['kategori_adi']; ?></option>

                        <?php } ?>


                    </select>

                    <label>Kahve Adı</label>
                    <input required="" type="text" name="kahve_adi" class="form-control mb-3">



                    <label>Kahve Görsel</label>
                    <input required="" type="file" name="kahve_img" class="form-control mb-3">



                    <button type="submit" class="btn btn-primary btn-block mt-3" name="kahveEkle">Kahve Ekle</button>

                </form>



                <table class="table table-striped" id="table1">

                    <thead>

                        <tr>
                            <th></th>
                            <th>Görsel</th>
                            <th>Kategori Adı</th>
                            <th>Kahve Adı</th>
                            <th>Sil</th>


                        </tr>

                    </thead>

                    <tbody>


                        <?php 

                        $veriCek=$conn->prepare("SELECT * FROM kategoriler,kahveler WHERE kategoriler.kategori_id = kahveler.kahve_kategori");

                        $veriCek->execute();

                        while ($row=$veriCek->fetch(PDO::FETCH_ASSOC)) {

                            ?>

                            <tr>
                                <td><?php echo $row['kahve_id']; ?></td>
                                <td><img style="height: 100px" src="../<?php echo $row['kahve_img']; ?>"></td>

                                <td><?php echo $row['kategori_adi']; ?></td>
                                <td><?php echo $row['kahve_adi']; ?></td>

                                <td><a href="sil/kahve_sil.php?id=<?php echo $row['kahve_id']; ?>" class="btn btn-danger btn-sm"> Sil </a></td>


                            </tr>



                        <?php } ?>







                    </tbody>

                </table>

            </div>

        </div>



    </section>

</div>





<?php include('footer.php'); ?>



