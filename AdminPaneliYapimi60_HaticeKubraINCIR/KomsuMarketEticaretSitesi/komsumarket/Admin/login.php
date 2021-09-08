<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Komşu Market E-Ticaret Giriş</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="background-color:#dff5e0" class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Komşu </b>Market</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">
        <?php
        if(@$_GET['durum']=="hata")
        { ?>
          <p style="color:red" class="login-box-msg">Kullanıcı adı yada şifre hatalı !</p>
       <?php  }
       elseif(@$_GET['durum']=="gulegule")
        { ?>
          <p  class="login-box-msg">Görüşmek üzere </p>
       <?php  }
        else
        {
          echo "Giriş Bilgilerini Giriniz! ";

        }

        ?>
         
       </p>

      <form action="islem/islem.php" method="post">
        <div class="input-group mb-3">
          <input name="kadi" type="text" class="form-control" placeholder="Kullanıcı Adınız: ">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-paper-plane"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="sifre" type="password" class="form-control" placeholder="Şifreniz: ">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-unlock"></span> 

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Hatırla!
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button name="girisyap" type="submit" class="btn btn-success btn-block" >Giriş</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


</body>
</html>
