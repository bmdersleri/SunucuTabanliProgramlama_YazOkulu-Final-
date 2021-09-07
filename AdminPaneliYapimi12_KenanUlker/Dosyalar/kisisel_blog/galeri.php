<?php include 'header.php';?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>




<section class="section pt-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h5>Galeri</h5>
                </div>
            </div>
        </div>

        <div class="row mb-20">

            <div class="col-lg-12 max-width">



                <div class="row">



                    <?php
                    //Galeriden veriler çekilir.
                    $galeriCek=$conn->prepare("SELECT * FROM galeri ORDER BY id DESC");
                    $galeriCek->execute();
                    while ($rowGaleri=$galeriCek->fetch(PDO::FETCH_ASSOC)) { ?>
                        <a class="col-md-3 mb-1" data-fancybox="galeri" data-src="<?php echo $rowGaleri['img']; ?>" >
                            <img src="<?php echo $rowGaleri['img']; ?>">
                        </a>

                    <?php } ?>


                </div>






            </div>







        </div>

    </div>
</section>







<?php include 'footer.php'; ?>
