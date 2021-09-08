
<?php 
if(!empty($_GET["tablo"]))
{
  $tablo=$VT->filter($_GET["tablo"]);
  $kontrol=$VT->VeriGetir("moduller", "WHERE tablo=? AND durum=?", array($tablo, 1), "ORDER BY ID ASC", 1);
  if($kontrol!=false)
  {
?>


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
        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">

            <!-- Start Recent Work -->
            <div class="col-xl-3 col-md-4 col-sm-6 project ui branding">
                <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="service card-img" src="images/<?=$kontrol[0]["baslik"]?>/<?=$veriler[$i]["resim"]?>" alt="Card image">
                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="service-work-content text-left text-light">
                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300"><?=$veriler[$i]["baslik"]?></span>
                            <p class="card-text"><?=$veriler[$i]["aciklama"]?></p>
                        </div>
                    </div>
                </a>
            </div><!-- End Recent Work -->
        </div>
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