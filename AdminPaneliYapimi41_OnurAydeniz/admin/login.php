<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - Login</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="bg-dark">
<?php
session_start();
include("../inc/vt.php");
if (isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789") {
    header("location:index.php");
} 
else if (isset($_COOKIE["cerez"])) {
    $sorgu = $baglanti->prepare("select kadi from kullanicilar");
    $sorgu->execute();
    while ($sonuc = $sorgu->fetch()) {
        if ($_COOKIE["cerez"] == md5("aa" . $sonuc['kadi'] . "bb")) {
            $_SESSION["Oturum"] = "6789";
            $_SESSION["kadi"] = $sonuc['kadi'];
            header("location:index.php");
        }
    }
}
if ($_POST) {
    $txtKadi = $_POST["txtKadi"];
    $txtParola = $_POST["txtParola"];
}
?>
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form id="form1" method="post">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" name="txtKadi" value='<?php echo @$txtKadi ?>' id="inputKadi"
                               class="form-control" placeholder="Email address" required autofocus>
                        <label for="inputKadi">Kullanıcı Adı</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required
                               name="txtParola">
                        <label for="inputPassword">Parola</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" ID="ckbHatirla" name="ckbHatirla"/>
                            Beni hatırla
                        </label>
                        <br>
                        <?php
                        if ($_POST) {
                            $sorgu = $baglanti->prepare("select parola from kullanicilar where kadi=:kadi");
                            $sorgu->execute(array('kadi' => htmlspecialchars($txtKadi)));
                            $sonuc = $sorgu->fetch();
                            if (md5("56" . $txtParola . "23") == $sonuc["parola"]) {
                                $_SESSION["Oturum"] = "6789"; 
                                $_SESSION["kadi"] = $txtKadi;
                                if (isset($_POST["ckbHatirla"])) {
                                    setcookie("cerez", md5("aa" . $txtKadi . "bb"), time() + (60 * 60 * 24 * 7));
                                }
                                header("location:index.php");
                            } else {
                                echo "Kullanıcı adı veya parola yanlış!";
                            }
                        }
                        ?>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-block" ID="btnGiris" value="Giriş"/>
            </form>

        </div>
    </div>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>