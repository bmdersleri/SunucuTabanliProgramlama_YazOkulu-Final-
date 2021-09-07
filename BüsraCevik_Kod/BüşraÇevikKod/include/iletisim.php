<?php
include 'inc/header.php';
include '../data/baglanti.php';
?>

   <main>
      <!--? Hero Start -->
      <div class="bradcam_area bradcam_bg_2">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                           <div class="bradcam_text  text-center">
                              <h3 style="color: white">İletişim</h3>
                           </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      <!-- Hero End -->
      <!--================Blog Area =================-->
     <div class="explorer_europe">
         <div class="container" style="padding-top: 20px;">
             <div class="row align-items-center">
                    <div class="col-md-7">
                        <?php
                        if($_POST)
                        {
                            if(!empty($_POST["adsoyad"]) && !empty($_POST["mail"]) && !empty($_POST["konu"])
                        && !empty($_POST["mesaj"]))
                                {
                                    $adsoyad=$VT->filter($_POST["adsoyad"]);
                                    $mail=$VT->filter($_POST["mail"]);
                                    $konu=$VT->filter($_POST["konu"]);
                                    $mesaj=$VT->filter($_POST["mesaj"]);
                                    $telefon=$VT->filter($_POST["telefon"]);

                                }
                            else
                                {
                                    echo '<div class="alert alert-danger"> Boş bıraktığınız alanları doldurunuz</div>';
                                }
                        }
                        ?>
                 <form action="#" method="post">
                        <table class="table">
                            <tr>
                                <td>Adınız Soyadınız</td>
                                <td><input type="text" name="adsoyad" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Mail Adresi</td>
                                <td><input type="email" name="mail" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Telefon</td>
                                <td><input type="text" name="telefon" class="form-control" maxlength="11"></td>
                            </tr>
                            <tr>
                                <td>Konu</td>
                                <td><input type="text" name="konu" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Mesajınız</td>
                                <td><textarea name="mesaj" class="form-control">

                                    </textarea>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit"  value="Gönder" class="form-control"></td>
                            </tr>
                        </table>
                 </form>
                    </div>
                 <div class="col-md-5" >
                     <div class="container"  >

                             <h3 style="font-size: 40px;">Bize Ulaşın</h3>
                             <p style="font-size: 24px;">Telefon : <?=$sitetelefon?></p>
                             <p style="font-size: 24px;">Fax : <?=$sitefax?></p>
                             <p style="font-size: 24px;">E-Posta : <?=$sitemail?></p>
                             <p style="font-size: 24px;">Adres : <?=$siteadres?></p>


                     </div>


                     </div>
             </div>

         </div>

     </div>
      <!--================ Blog Area end =================-->

   </main>
    <?php
include 'inc/footer.php';
?>