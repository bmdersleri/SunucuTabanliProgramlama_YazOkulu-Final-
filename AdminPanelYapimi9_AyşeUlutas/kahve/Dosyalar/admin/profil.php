<?php include('header.php');



$yoneticiData = $conn->query('SELECT * FROM yoneticiler')->fetch(PDO::FETCH_ASSOC);



?>



<div class="page-heading">

    <div class="page-title">

        <div class="row">

            <div class="col-12 col-md-6 order-md-1 order-last">

                <h3>Profilim</h3>

            </div>

            <div class="col-12 col-md-6 order-md-2 order-first">

                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Profilim</li>

                    </ol>

                </nav>

            </div>

        </div>

    </div>

    <section id="multiple-column-form">

        <div class="row match-height">

            <div class="col-12">

                <div class="card">

                    <div class="card-content">

                        <div class="card-body">

                            <div class="row">







                                <div style="box-shadow: inset 0 0 10px #ccc;padding: 25px;margin-bottom: 35px;" class="col-md-12">



                                    <form action="func.php" method="POST">

                                        <div class="col-md-12 col-12">

                                            <div class="form-group">

                                                <label >E-posta</label>

                                                <input required="" type="text" class="form-control"

                                                name="yonetici_email" value="<?php echo $yoneticiData['yonetici_email']; ?>">

                                            </div>

                                        </div>

                                        



                                        <div class="col-12 d-flex justify-content-end">

                                            <button name="yoneticiBilgiGuncelle" type="submit"

                                            class="btn btn-success me-1 mb-1">Güncelle</button>

                                            

                                        </div>





                                    </form>





                                </div>









                                <div style="box-shadow: inset 0 0 10px #ccc;padding: 25px;" class="col-md-12">



                                    <form action="func.php" method="POST">

                                        <div class="col-md-12 col-12">

                                            <div class="form-group">

                                                <label >Yeni Şifre</label>

                                                <input required="" type="password" class="form-control"

                                                placeholder="Yeni Şifre" name="sifre">

                                            </div>

                                        </div>

                                        <div class="col-md-12 col-12">

                                            <div class="form-group">

                                                <label>Yeni Şifre Tekrar</label>

                                                <input required="" type="password" class="form-control"

                                                name="sifreTekrar" placeholder="Yeni Şifre Tekrar">

                                            </div>

                                        </div>







                                        <div class="col-12 d-flex justify-content-end">

                                        <button name="yoneticiSifreGuncelle" type="submit"

                                            class="btn btn-success me-1 mb-1">Güncelle</button>

                                            <button type="reset"

                                            class="btn btn-light-secondary me-1 mb-1">Temizle</button>

                                        </div>





                                    </form>





                                </div>







                            </div>



                        </div>

                    </div>

                </div>

                





            </div>

        </div>

    </section>

    <!-- // Basic multiple Column Form section end -->

</div>



<?php include('footer.php'); ?>