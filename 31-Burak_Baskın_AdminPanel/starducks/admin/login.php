<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
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

    $query = $connection->prepare("select username from users");
    $query->execute();


    while ($result = $query->fetch()) {

        if ($_COOKIE["cerez"] == md5("aa" . $result['username'] . "bb")) {

            $_SESSION["Oturum"] = "6789";
            $_SESSION["username"] = $result['username'];

            header("location:index.php");
        }
    }
}

if ($_POST) {
    $txtusername = $_POST["txtusername"]; 
    $txtpassword = $_POST["txtpassword"]; 
}
?>
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form id="form1" method="post">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" name="txtusername" value='<?php echo @$txtusername ?>' id="inputusername"
                               class="form-control" placeholder="Email address" required autofocus>
                        <label for="inputusername">Kullanıcı Adı</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required
                               name="txtpassword">
                        <label for="inputPassword">Şifre</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" ID="ckbhatirla" name="ckbhatirla"/>
                            Beni hatırla
                        </label>
                        <br>
                        <?php
                        if ($_POST) {

                            $query = $connection->prepare("select password from users where username=:username");
                            $query->execute(array('username' => htmlspecialchars($txtusername)));
                            $result = $query->fetch();


                            if (md5("56" . $txtpassword . "23") == $result["password"]) {
                                $_SESSION["Oturum"] = "6789"; 
                                $_SESSION["username"] = $txtusername;

                                if (isset($_POST["ckbhatirla"])) {
                                    setcookie("cerez", md5("aa" . $txtusername . "bb"), time() + (60 * 60 * 24 * 7));
                                }
                                header("location:index.php"); 
                            } else {

                                echo "Kullanıcı adı veya password yanlış!";
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

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
