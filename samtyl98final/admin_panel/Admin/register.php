<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MAKÜ | Log in</title>


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

<link rel="stylesheet" href="dist/css/adminlte.min.css">

<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

<link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
<style>

  body{
    background-image: url("dist/img/background.jpg") ;
    -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
    background-size: cover;
  }

</style>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-dark">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Samet YÜKSEL</b>Admin</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Aramıza katılın</p>

      <form action="islem.php" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="admin_Kullanici_Adi" placeholder="İsim Soyisim">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="admin_email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="admin_sifre" placeholder="Şifre">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="admin_sifre_kontrol" placeholder="Şifre Doğrulama">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-dark">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#" style="color:red">terms</a>
              </label>
            </div>
          </div>
          
          <div class="col-4">
            <button type="submit" class="btn btn-dark btn-block" name="register">Kayıt Ol</button>
          </div>
        
        </div>
      </form>

      

      <a href="login.html" class="text-center text-dark">Panele zaten üyeyim</a>
    </div>
   
  </div>
</div>



<script src="../../plugins/jquery/jquery.min.js"></script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
