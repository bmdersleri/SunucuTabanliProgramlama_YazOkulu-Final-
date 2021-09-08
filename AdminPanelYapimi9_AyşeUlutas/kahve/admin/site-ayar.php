<?php include('header.php');

$ayarData = $conn->query('SELECT * FROM site_ayar')->fetch(PDO::FETCH_ASSOC);


?>



<div class="page-heading">

    <div class="page-title">

        <div class="row">

            <div class="col-12 col-md-6 order-md-1 order-last">

                <h3>Site Ayar</h3>

            </div>

            <div class="col-12 col-md-6 order-md-2 order-first">

                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Site Ayar</li>

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


                                <div class="col-md-6 mb-3">
                                    <label>Logo</label><br>
                                    <img style="height: 150px!important" class="img-fluid" src="../<?php echo $ayarData['logo']; ?>" alt="">
                                </div>


                                <div class="col-md-6 mb-3">
                                    <label>Favicon</label><br>
                                    <img  style="height: 150px!important" class="img-fluid" src="../<?php echo $ayarData['favicon']; ?>"  alt="">
                                </div>






                                <div style="box-shadow: inset 0 0 10px #ccc;padding: 25px;margin-bottom: 35px;" class="col-md-12">



                                    <form action="func.php" method="POST" enctype="multipart/form-data">

                                        <div class="col-md-12 col-12">

                                            <div class="form-group">

                                                <label >Logo</label>

                                                <input  type="file" class="form-control"

                                                name="logo" value="">

                                            </div>

                                        </div>

                                        


                                        <div class="col-md-12 col-12">

                                            <div class="form-group">

                                                <label >Favicon</label>

                                                <input type="file" class="form-control"

                                                name="favicon" value="">

                                            </div>

                                        </div>



                                        <div class="col-md-12 col-12">

                                            <div class="form-group">

                                                <label >Site Title</label>

                                                <input type="text" class="form-control"

                                                name="title" value="<?php echo $ayarData['title']; ?>">

                                            </div>

                                        </div>


                                        <div class="col-md-12 col-12">

                                            <div class="form-group">

                                                <label >Google Maps</label>
                                    <textarea class="form-control" name="google_maps"><?php echo $ayarData['google_maps']; ?></textarea>


                                            </div>

                                        </div>


                                        <div class="col-md-12 col-12">

                                            <div class="form-group">

                                                <label >Facebook</label>

                                                <input type="text" class="form-control"

                                                name="fb" value="<?php echo $ayarData['fb']; ?>">

                                            </div>

                                        </div>


                                        <div class="col-md-12 col-12">

                                            <div class="form-group">

                                                <label >İnstagram</label>

                                                <input type="text" class="form-control"

                                                name="ig" value="<?php echo $ayarData['ig']; ?>">

                                            </div>

                                        </div>



                                        <div class="col-md-12 col-12">

                                            <div class="form-group">

                                                <label >Copyright</label>

                                                <input type="text" class="form-control"

                                                name="copy" value="<?php echo $ayarData['copy']; ?>">

                                            </div>

                                        </div>


                                        <div class="col-12 d-flex justify-content-end">

                                            <button name="siteAyarGuncelle" type="submit"

                                            class="btn btn-success me-1 mb-1">Güncelle</button>

                                            

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