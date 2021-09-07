<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Page Title - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Kullanıcı Giriş Sayfası</h3></div>
                            <div class="card-body">

                                <?php

                                session_start();
                                include("../inc/vt.php");//(../ ifadesi bir üst dizine geçmesinini saglar.//saglar bir üst dizinden vt.php dosyasını çağırmış oluyoruz.)
                                if (isset( $_SESSION["oturum"]) && $_SESSION["oturum"] == "1998"){
                                    header("location:index.php");
                                }

                                else if (isset($_COOKIE["cerez"])){
                                    $sorgu = $baglanti->prepare("select kadi,yetki from kullanıcı where  aktif=1");//kullanıcı varmı varsa aktifmi
                                    $sorgu->execute();
                                    while($sonuc = $sorgu->fetch()){

                                        if(["cerez"]==  md5("aa" . $sonuc["kadi"]. "bb")){
                                            $_SESSION["oturum"] = "1998";//rastgele bir değer verdim.
                                            $_SESSION["kadi"] = $sonuc["kadi"];//kullanıcı adını oluşturdum.
                                            $_SESSION["yetki"] = $sonuc["yetki"];
                                            header("location:index.php");
                                        }
                                    }

                                }


                                if($_POST)//kullanıcı girişe tıklamışmı tıklamamısmı onu sorgulatır.
                                {
                                    $kadi=$_POST["txtKadi"];//kullanıcının girdiği kullanıcı adı değerini kullanıcı adına atar.
                                    $parola=$_POST["txtParola"];//kullanıcının girdiği parola değerini parola adına atar.
                                }
                             // echo md5("25"."1908"."05");//bu şekilde parolamın karşılıgını aldırdım//
                                ?>

                                <form method="post"action="login.php">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputEmailAddress">Kullanıcı Adı</label>
                                        <input class="form-control py-4" id="inputEmailAddress" name="txtKadi" value="<?php echo @$kadi?>"type="text" placeholder="Kullanıcı adı" />
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Parola</label>
                                        <input class="form-control py-4" id="inputPassword"name="txtParola" type="password" placeholder="Parola" />
                                    </div>
                                    <div class="form-group">
                                   <img src="../inc/captcha.php"alt=""/>
                                        <input class="form-control py-4" id="inputPassword"name="captcha" type="text" placeholder="Güvenlik Kodunu Giriniz" />
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox"name="cbHatirla"/>
                                            <label class="custom-control-label" for="rememberPasswordCheck">Beni Hatırla</label>
                                        </div>
                                    </div>

                                    <a class="small" href="password.html">Şifrenimi unuttun?</a>
                                    <input type="submit" class="btn btn-primary" value="Giriş Yap" />
                            </div>
                            </form>
                            <script type="text/javascript"src="../js/sweetalert2.all.min.js"></script>
                            <?php
                            if($_POST)//kullanıcı giriş yaptımı?
                            {
                                if( $_SESSION["captcha"]==$_POST["captcha"]){
                                $sorgu = $baglanti->prepare("select parola,yetki from kullanıcı where kadi=:kadi and aktif=1");//kullanıcı varmı varsa aktifmi
                                $sorgu->execute(["kadi" => htmlspecialchars($kadi)]);//htmlspecialchars güvenlik sorunlarını önler
                                $sonuc = $sorgu->fetch();//sonuçları aldırdık.

                                if (  md5("25".$parola."05")==$sonuc["parola"])//sonuc parolayla aynımı
                                {
                                    $_SESSION["oturum"] = "1998";//rastgele bir değer verdim.
                                    $_SESSION["kadi"] = $kadi;//kullanıcı adını oluşturdum.
                                    $_SESSION["yetki"] = $sonuc["yetki"];//sonuc içersindeki yetkisini yolladım.

                                    if (isset($_POST["cbHatirla"]))//beni hatırla kısmı kontrol ediliyor.kullanıcı varsa true döner.
                                    {
                                        setcookie("cerez", md5("aa" . $kadi . "bb"), time() + (60 * 60 * 24 * 7));
                                        //setcookie cerez ismini verdim
                                        //ve çerezde saklanacak bilgiyi yazdım.time ile ne kadar süre saklanacağını belirledim
                                        //buradaki time şimdiki zamanı ifade eder.60*60*24 1 günü ifade eder
                                        //  bunun 7 ile çarpılmasıylada 1 hafta elde edilir
                                    }

                                    header("location:index.php");}//aynıysa sisteme dahil ediyoruz
                                else{

                                    echo "<script> swal.fire('Hata!', 'Kullanıcı adı veya parola hatalı', 'error')</script>";
                                }

                                }
                                else{

                                    echo "<script> swal.fire('Hata!', 'Güvenlik kodunu hatalı girdiniz', 'error')</script>";
                                }
                            }
                             ?>
                        </div>
                        <div class="card-footer text-center">
                            <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>
</div>
<div id="layoutAuthentication_footer">
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2020</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>
</html>
