<?php require_once 'header.php'; ?>            
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">

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
                        </div>

                        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                            <!-- Login Form s-->
                            <form action="islem.php" method="POST" >
                                <div class="login-form">
                                    <h4 class="login-title">Giriş Yap 
                                        <?php if (@$_GET['durum']=="hata") { ?>
                                            <b style="color:red"> Kullanıcı adı yada şifre hatalı </b> <?php }    ?>

                                        <?php if (@$_GET['durum']=="gulegule") { ?>
                                            <b style="color:green; font-style: italic;"> Güle Güle </b> <?php }    ?>
                                        <?php if (@$_GET['durum']=="girisyap") { ?>
                                            <b style="color:green; font-style: italic;">Lütfen Giriş Yapın.. </b> <?php }    ?>
                                    </h4>

                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Kullanıcı Adı</label>
                                            <input name="kadi" required="" class="mb-0" type="text" placeholder="Kullanıcı Adı">
                                        </div> <!-- required ile alanların dolumu zorunlu yapıldır-->
                                        <div class="col-12 mb-20">
                                            <label>Şifre</label>
                                            <input name="sifre" required="" class="mb-0" type="password" placeholder="Şifre">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                                <input type="checkbox" id="remember_me">
                                                <label for="remember_me">Hatırla!</label>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <button name="login" class="register-button mt-0">Gİrİş </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Login Content Area End Here -->
           <?php require 'footer.php'; ?>