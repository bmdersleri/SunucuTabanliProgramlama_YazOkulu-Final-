<?php include('header.php');
$anasayfa = $conn->query("SELECT * FROM anasayfa")->fetch(PDO::FETCH_ASSOC); ?>



<link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">



<div class="page-heading">

    <div class="page-title">

        <div class="row">

            <div class="col-12 col-md-6 order-md-1 order-last">

                <h3>Anasayfa Yönetim</h3>

            </div>

            <div class="col-12 col-md-6 order-md-2 order-first">

                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Anasayfa Yönetim</li>

                    </ol>

                </nav>

            </div>

        </div>

    </div>

    <section class="section">

        <div class="card">

            <div class="card-header">
                Anasayfa Yönetim

            </div>

            <div class="card-body">
                <form method="POST" action="func.php" enctype="multipart/form-data">
                    
                <input type="file" name="yazi_img" class="form-control mb-3">
                <label>Yazı Başlık</label>
                <input type="text" name="yazi_baslik" value="<?php echo $anasayfa['yazi_baslik']; ?>" class="form-control mb-3">


                <label>Yazı İçerik</label>
                <textarea rows="7" name="yazi_icerik" class="form-control mt-3 mb-3" ><?php echo $anasayfa['yazi_icerik']; ?></textarea>
                <button type="submit" class="btn btn-primary" name="anasayfaGuncelle">Güncelle</button>

                </form>


            </div>

        </div>



    </section>

</div>





<?php include('footer.php'); ?>










