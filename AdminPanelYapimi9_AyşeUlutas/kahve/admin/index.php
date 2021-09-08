<?php include('header.php');


?>







<div class="page-heading">

    <h3>Yönetim</h3>

</div>

<div class="page-content">

    <section class="row">


        <div class="col-md-12">



            <div class="card p-4">


                <table class="table table-striped" id="table1">

                    <thead>

                        <tr>
                            <th></th>
                            <th>Adı Soyadı</th>
                            <th>Email</th>
                            <th>Mesaj</th>

                            <th width="50"></th>

                        </tr>

                    </thead>

                    <tbody>


                        <?php 

                        $veriCek=$conn->prepare("SELECT * FROM iletisim");
                        $veriCek->execute();
                        while ($row=$veriCek->fetch(PDO::FETCH_ASSOC)) {
                            ?>

                            <tr>
                                <td><?php echo $row['iletisim_id']; ?></td>
                                <td><?php echo $row['ad_soyad']; ?></td>
                                <td><?php echo $row['email']; ?> </td>
                                <td><?php echo $row['mesaj']; ?></td>
                                <td><a href="sil/iletisim_sil.php?id=<?php echo $row['iletisim_id']; ?>" class="btn btn-danger btn-sm"> Sil </a></td>
                            </tr>

                        <?php } ?>



                    </tbody>

                </table>


            </div>

        </div>

    </section>

</div>





<?php include('footer.php'); ?>