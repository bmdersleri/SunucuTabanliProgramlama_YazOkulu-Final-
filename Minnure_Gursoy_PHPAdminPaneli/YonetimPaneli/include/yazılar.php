
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
                     <div class="row projects gx-lg-5">
            <a href="work-single.html" class="col-sm-6 col-lg-4 text-decoration-none project marketing social business">
                <div class="service-work overflow-hidden card mb-5 mx-5 m-sm-0">
                    <img class="card-img-top" src="<?=SITE?>/AnaTema/assets/img/<?=$veriler[$i]["resim"]?>" alt="...">
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