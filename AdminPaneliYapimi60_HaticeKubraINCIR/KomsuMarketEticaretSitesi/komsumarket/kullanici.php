<?php require_once 'header.php'; 

#kullanıcı giriş yaptıysa /headerdan $var degeri
if ($var ==0) {  #kullanıcı girişi yoksa

   header("Location:giris?durum=girisyap");
    
}



?>            
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                            <!-- Login Form s-->
                            <form action="Admin/islem/islem.php" method="POST" >
                                <div class="login-form">

                                    <!-- işlem sonucu başarılı7 başarısız gösterimi-->
                                    <h4 class="login-title">Kullanıcı Bilgileri 
                                        <?php if (@$_GET['yuklenme']=="basarisiz") { ?>
                                            <b style="color:red"> Hatalı!  </b> 
                                        <?php } elseif (@$_GET['yuklenme']=="basarili") { ?>
                                            <b style="color:green"> Başarılı!  </b> 
                                            
                                        <?php  }  ?>
                                    </h4>

                                    <!--  kullanıcı bilgilerini günecellemek için kullanici_id degeri gönderilir --->

                                    <input type="hidden" name="kullaniciid" value="<?php echo $kullanicigetir['kullanici_id'] ?>">
                                    <div class="row"> 
                                        <!--Veritabanından gelen değerleri yerine yazdırılır-->
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Kullanıcı Ad Soyad</label>
                                            <input value="<?php echo $kullanicigetir['kullanici_adsoyad'] ?>" name="adsoyad" required="" class="mb-0" type="text" placeholder="Kullanıcı Ad Soyad">
                                        </div> <!-- required ile alanların dolumu zorunlu yapıldır-->
                                        <div class="col-12 mb-20">
                                            <label>Email</label>
                                            <input value="<?php echo $kullanicigetir['kullanici_mail'] ?>" name="email" required="" class="mb-0" type="text" placeholder="Email">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Adres</label>
                                            <input value="<?php echo $kullanicigetir['kullanici_adres'] ?>" name="adres" required="" class="mb-0" type="text" placeholder="Adres">
                                        </div> 
                                        <div class="col-12 mb-20">
                                            <label>Şehir</label>
                                            <input value="<?php echo $kullanicigetir['kullanici_il'] ?>" name="sehir" required="" class="mb-0" type="text" placeholder="Şehir">
                                        </div> 
                                        <div class="col-12 mb-20">
                                            <label>İlçe</label>
                                            <input value="<?php echo $kullanicigetir['kullanici_ilce'] ?>" name="ilce" required="" class="mb-0" type="text" placeholder="İlçe">
                                        </div> 
                                        <div class="col-12 mb-20">
                                            <label>Telefon</label>
                                            <input value="<?php echo $kullanicigetir['kullanici_tel'] ?>" name="telefon" required="" class="mb-0" type="text" placeholder="Telefon">
                                        </div> 
                                       
                                       
                                       
                                       
                                        <div class="col-md-12">
                                            <button name="kullaniciduzenle" class="register-button mt-0">Kaydet </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        



                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <form action="islem.php" method="POST">
                                <div class="login-form">
                                    <h4 class="login-title">Kayıt OL
                                        <!-- Geriye dönen durum degerlerine göre kullanıcıya yapılan hatalar gösterilmektedir-->

                                        <?php if(@$_GET['durum']=="kullanicivar") { ?> 
                                            <i style="color:red"> Bu kullanıcı kayıtlı! </i>

                                        <?php } elseif(@$_GET['durum']=="sifrehata") { ?>
                                            <i style="color:red"> Şifreler aynı değil! </i>


                                        <?php } elseif(@$_GET['durum']=="sifreeksik") { ?>
                                            <i style="color:red"> Şifre 7 karakterden az olamaz! </i>

                                        <?php } elseif(@$_GET['durum']=="basarisiz") { ?>
                                            <i style="color:red"> Başarısız ! </i>

                                        <?php } ?>


                                    </h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Kullanıcı Ad</label>
                                            <input name="kadi" required="" class="mb-0" type="text" placeholder="Kullanıcı Adı">
                                        </div>
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Ad Soyad</label>
                                            <input name="adsoyad"  required="" class="mb-0" type="text" placeholder="Ad/Soyad">
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Email Adresi</label>
                                            <input name="email" required="" class="mb-0" type="email" placeholder="Email Adres">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Şifre</label>
                                            <input name="sifre" required="" class="mb-0" type="password" placeholder="Şifre">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Şifre Tekrar</label>
                                            <input name="sifretekrar" required="" class="mb-0" type="password" placeholder="Şifre Tekrar">
                                        </div>
                                        <div class="col-12">
                                            <button name="kaydol" class="register-button mt-0">Kayıt </button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                            <a href="cikis"><button style="margin-left:510px; background-color:#363f4d; border-color:#363f4d" class="btn btn-info" type=""><i class="fa fa-sign-out"></i>Çıkış</button></a>

                        </div>
                     </div> 
                </div>
            </div>
            <!-- Login Content Area End Here -->
           <?php require 'footer.php'; ?>