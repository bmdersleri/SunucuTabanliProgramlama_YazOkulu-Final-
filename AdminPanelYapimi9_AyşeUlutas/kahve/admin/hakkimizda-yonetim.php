<?php include('header.php');
$hakkimizda = $conn->query("SELECT * FROM hakkimizda")->fetch(PDO::FETCH_ASSOC); ?>



<link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">



<div class="page-heading">

    <div class="page-title">

        <div class="row">

            <div class="col-12 col-md-6 order-md-1 order-last">

                <h3>Hakkımızda Yönetim</h3>

            </div>

            <div class="col-12 col-md-6 order-md-2 order-first">

                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Hakkımızda Yönetim</li>

                    </ol>

                </nav>

            </div>

        </div>

    </div>

    <section class="section">

        <div class="card">

            <div class="card-header">
                Hakkımızda Yönetim

            </div>

            <div class="card-body">
                <form method="POST" action="func.php" enctype="multipart/form-data">
                    
                <input type="file" name="resim" class="form-control">

                <textarea rows="7" name="hakkimizda" class="form-control mt-3 mb-3" ><?php echo $hakkimizda['hakkimizda']; ?></textarea>
                <button type="submit" class="btn btn-primary" name="hakkimizdaGuncelle">Güncelle</button>

                </form>


            </div>

        </div>



    </section>

</div>





<?php include('footer.php'); ?>










