<?php include('header.php'); ?>



<link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">



<div class="page-heading">

    <div class="page-title">

        <div class="row">

            <div class="col-12 col-md-6 order-md-1 order-last">

                <h3>Kullanıcılar</h3>

            </div>

            <div class="col-12 col-md-6 order-md-2 order-first">

                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Kullanıcılar</li>

                    </ol>

                </nav>

            </div>

        </div>

    </div>

    <section class="section">

        <div class="card">

            <div class="card-header">

                Tüm Kullanıcılar

            </div>

            <div class="card-body">

                <table class="table table-striped" id="table1">

                    <thead>

                        <tr>
                            <th></th>
                            <th>Kullanıcı E-Posta</th>
                            <th>Kullanıcı Adı</th>


                        </tr>

                    </thead>

                    <tbody>


                        <?php 

                        $veriCek=$conn->prepare("SELECT * FROM kullanicilar");

                        $veriCek->execute();

                        while ($row=$veriCek->fetch(PDO::FETCH_ASSOC)) {

                            ?>

                            <tr>
                                <td><?php echo $row['kul_id']; ?></td>


                                <td><?php echo $row['kul_eposta']; ?></td>

                                <td><?php echo $row['kul_adi']; ?></td>


                            </tr>



                        <?php } ?>







                    </tbody>

                </table>

            </div>

        </div>



    </section>

</div>





<?php include('footer.php'); ?>


