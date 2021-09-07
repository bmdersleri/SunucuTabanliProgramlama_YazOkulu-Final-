<?php
$sayfa="İletişim";
include ("inc/vt.php");
$tanimlama="iletisim Sayfası";
$anahtar="iletisim ";
include("inc/head.php");
session_start();
?>

    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mt-3">İletişim</h2>
                <h3 class="section-subheading text-muted">İletişim Sayfamıza Hoşgeldiniz.</h3>
            </div>
            <form id="contactForm" name="sentMessage" method="post" action="iletisim.php">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" name="txtAd" type="text" placeholder="Adınız Soyadınız *" required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" name="txtEmail" type="email" placeholder=" Email Adresiniz *" required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <img src="inc/captcha.php" alt="">
                            <input type="text" class="form-control" placeholder="Güvenlik Kodunu Yazınız" name="captcha" required="required">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" name="txtMesaj" placeholder="Mesajınız *" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Gönder</button>
                </div>
            </form>
            <script type="text/javascript" src="js/sweetalert2.all.min.js"> </script>
            <?php
            if($_POST){
                if( $_SESSION["captcha"]==$_POST["captcha"]){
                $sorgu = $baglanti->prepare("insert into iletisimformu SET ad=:ad, email=:email, mesaj=:mesaj");
                $ekle=$sorgu->execute(
                        [
                            "ad"=>htmlspecialchars($_POST["txtAd"]) ,
                            "email"=>htmlspecialchars($_POST["txtEmail"]),
                            "mesaj"=>htmlspecialchars($_POST["txtMesaj"]),
                        ]);
                if($ekle){

                    echo"<script>Swal.fire('Başarılı!','Mesajınız Bize ulaşmıştır Teşekkürler!','success')</script>";
            }
                }
                else{
                    echo"<script>Swal.fire('HATA!','Tüm alanları dogru doldurdugunuzdan emin olunuz','error')</script>";
                }
            }
            ?>
        </div>
    </section>
<?php
include("inc/footer.php");
?>