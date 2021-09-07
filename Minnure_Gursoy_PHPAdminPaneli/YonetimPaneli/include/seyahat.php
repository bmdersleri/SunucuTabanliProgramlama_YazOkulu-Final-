<head>
    <title>Purple Buzz - Work Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="<?=SITE?>/AnaTema/assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="<?=SITE?>/AnaTema/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="<?=SITE?>/AnaTema/assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="<?=SITE?>/AnaTema/assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=SITE?>/AnaTema/assets/css/custom.css">
<!--
    
TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
</head>
<?php 
if(!empty($_GET["tablo"]))
{
  $tablo=$VT->filter($_GET["tablo"]);
  $kontrol=$VT->VeriGetir("moduller", "WHERE tablo=? AND durum=?", array($tablo, 1), "ORDER BY ID ASC", 1);
  if($kontrol!=false)
  {
?>

<body>
<?php 
                  $veriler=$VT->VeriGetir($kontrol[0]["tablo"], "", "", "ORDER BY ID ASC");
                  if($veriler!=false)
                  {
                    $sira=0;
                   for($i=0;$i<count($veriler);$i++)
                   {

                     $sira++;
                     ?>
                     <section class="container overflow-hidden py-5">
                     <div class="row projects gx-lg-5">
            <a href="<?=SITE?>/AnaTema/img/assets/our-work-01.jpg" class="col-sm-6 col-lg-4 text-decoration-none project marketing social business">
                <div class="service-work overflow-hidden card mb-5 mx-5 m-sm-0">
                    <img class="card-img-top" src="<?=SITE?>/AnaTema/assets/img/our-work-01.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark"><?=$veriler[$i]["baslik"]?></h5>
                        <p class="card-text light-300 text-dark">
                        <?=$veriler[$i]["aciklama"]?>
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Daha fazla <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
    </section>
                     <?php
                   }
                  }


   }
   else 
   {
     ?>
     <meta http-equiv="refresh" content="0;url=<?= SITE?>">
     <?php
   }
  }
  else {
    ?>
     <meta http-equiv="refresh" content="0;url=<?= SITE?>">
     <?php
  }
  ?>

  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Lightbox -->
    <script src="assets/js/fslightbox.js"></script>
    <script>
        fsLightboxInstances['gallery'].props.loadOnlyCurrentSource = true;
    </script>
    <!-- Load jQuery require for isotope -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.js"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
    <!-- Templatemo -->
    <script src="<?=SITE?>/AnaTema/assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="<?=SITE?>/AnaTema/assets/js/custom.js"></script>

</body>

</html>