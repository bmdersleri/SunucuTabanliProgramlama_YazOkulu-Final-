<?php include 'header.php';?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>


<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>





<div class="section">
  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <h2>Foto Galeri</h2>
      </div>

      <div class="row">



        <?php 
                    //Galeriden veriler çekilir.
        $galeri=$conn->prepare("SELECT * FROM galeri ORDER BY id DESC");
        $galeri->execute();
        while ($rowGaleri=$galeri->fetch(PDO::FETCH_ASSOC)) { ?>
          <a class="col-md-3 mb-1 cursor-pointer" data-fancybox="foto_galeri" data-src="<?php echo $rowGaleri['img']; ?>" >
            <img src="<?php echo $rowGaleri['img']; ?>">
          </a>

        <?php } ?>



      </div>



    </div>
  </div>
</div>






<?php include 'footer.php'; ?>