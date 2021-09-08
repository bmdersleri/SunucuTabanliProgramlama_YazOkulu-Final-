<?php ob_start();
session_start();
include 'ayar.php';


if (isset($_SESSION["admin_giris"])) 

{

    header('location:index.php');

}

?>

<!DOCTYPE html>

<html lang="tr">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> ADMİN</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">

    <link rel="stylesheet" href="assets/css/app.css">

    <link rel="stylesheet" href="assets/css/pages/auth.css">



</head>



<body>

    <div id="auth">



        <div class="row h-100">

            <div class="col-lg-5 col-12">

                <div id="auth-left">

                    <div class="auth-logo">

                        <a href="index.php">ADMİN</a>

                    </div>

                    <h1 class="auth-title">Giriş Yap</h1>



                    <form action="func.php" method="POST">

                        <div class="form-group position-relative has-icon-left mb-4">

                            <input name="yonetici_email" type="text" class="form-control form-control-xl" placeholder="E-mail" required="">

                            <div class="form-control-icon">

                                <i class="bi bi-envelope"></i>

                            </div>

                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">

                            <input name="sifre" type="password" class="form-control form-control-xl" placeholder="Parola" required="">

                            <div class="form-control-icon">

                                <i class="bi bi-shield-lock"></i>

                            </div>

                        </div>

                        

                        <button name="girisYap" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Giriş Yap</button>

                    </form>

                    



                    

                </div>

            </div>

            <div class="col-lg-7 d-none d-lg-block">

                <div id="auth-right">



                </div>

            </div>

        </div>



    </div>





    <?php include 'alerts.php'; ?>

</body>



</html>