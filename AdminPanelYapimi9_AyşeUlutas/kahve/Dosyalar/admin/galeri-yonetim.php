<?php include('header.php'); ?>



<link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">



<div class="page-heading">

    <div class="page-title">

        <div class="row">

            <div class="col-12 col-md-6 order-md-1 order-last">

                <h3>Galeri</h3>

            </div>

            <div class="col-12 col-md-6 order-md-2 order-first">

                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Galeri</li>

                    </ol>

                </nav>

            </div>

        </div>

    </div>

    <section class="section">

        <div class="card">

            <div class="card-header">

                Tüm Galeri

            </div>

            <div class="card-body">

                <form method="POST" action="func.php" class="mb-5" enctype="multipart/form-data">
                    

                <input type="file" name="img" class="form-control">
                <button type="submit" class="btn btn-primary btn-block mt-3" name="gorselEkle">Görsel Ekle</button>

                </form>



                <table class="table table-striped" id="table1">

                    <thead>

                        <tr>
                            <th></th>
                            <th>Görsel</th>
                            <th>Sil</th>


                        </tr>

                    </thead>

                    <tbody>


                        <?php 

                        $veriCek=$conn->prepare("SELECT * FROM galeri");

                        $veriCek->execute();

                        while ($row=$veriCek->fetch(PDO::FETCH_ASSOC)) {

                            ?>

                            <tr>
                                <td><?php echo $row['id']; ?></td>


                                <td><img src="../<?php echo $row['img']; ?>" style="height: 100px;width: auto;"></td>

                               <td><a href="sil/galeri_sil.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"> Sil </a></td>


                            </tr>



                        <?php } ?>







                    </tbody>

                </table>

            </div>

        </div>



    </section>

</div>





<?php include('footer.php'); ?>



