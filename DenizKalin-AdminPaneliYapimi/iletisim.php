<?php
$sayfa="İletişim";
include("inc/vt.php");
$tanimlama="iletişim sayfası";
$key="iletişim";
include("inc/head.php");
?>

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase mt-3">İLETİŞİM</h2>
                    <h3 class="section-subheading text-white">Bize ulaşın.</h3>
                </div>
                <form id="contactForm" name="sentMessage" method="post" action="iletisim.php">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" name="txtAd" type="text" placeholder=" Adınız Soyadınız *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" name="txtEmail" placeholder="Email adresiniz *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="mesaj" name="txtMesaj" placeholder="Mesajınız *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Gönder</button>
                    </div>
                </form>

                <?php
                if($_POST){
                    $sorgu=$baglanti->prepare("insert into iletisimformu SET ad=:ad, email=:email, mesaj=:mesaj");
                    $ekle=$sorgu->execute(
                            [
                                    'ad'=>htmlspecialchars($_POST["txtAd"]),
                                'email'=>htmlspecialchars($_POST["txtEmail"]),
                                'mesaj'=>htmlspecialchars($_POST["txtMesaj"]),

                            ]
                    );

                    if($ekle){
                        echo"<script> alert('Başarılı')</script>";
                    }
                }
                ?>
            </div>
        </section>
<?php
include("inc/footer.php");
?>
