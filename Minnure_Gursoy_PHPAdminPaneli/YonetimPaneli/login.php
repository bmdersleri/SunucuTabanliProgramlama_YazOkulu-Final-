<?php 
@session_start();
@ob_start();
define("DATA", "data/");
define("SAYFA", "include/");
define("SINIF", "class/");
include_once(DATA."baglanti.php");
define ("SITE",$siteURL);
if(!empty($_SESSION["ID"]) && !empty($_SESSION["adsoyad"]) && !empty($_SESSION["mail"]))
{
	?>
	<meta http-equiv="refresh" content="0;url=<?=SITE?>">
	<?php
	exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Yönetici Giriş</title>
	<title><?="$sitebaslik"  ?></title>
    <meta http-equiv="keywords" content="<?="$siteanahtar" ?>"> 
    <meta http-equiv="description" content="<?= "$siteaciklama" ?>"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?=SITE?>login-form/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Yönetim Girişi</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?=SITE?>login-form/images/user4-128x128.jpg);"></div>
		      	<h3 class="text-center mb-0">HOŞGELDİNİZ</h3>
		      	<p class="text-center">Lütfen bilgilerinizi kutucuklara giriniz.</p>
				  <?php
                    if($_POST)
					{
                      if(!empty($_POST["kullanıcı"]) && !empty($_POST["sifre"]))
					  {
					    $kullanici=$VT->filter($_POST["kullanıcı"]);
						$sifre=md5($VT->filter($_POST["sifre"]));
						$kontrol=$VT->VeriGetir("kullanıcılar", "WHERE kullanıcı=? AND sifre=?", array($kullanici, $sifre),"ORDER BY ID ASC",1);
						if($kontrol!=false)
						{
							 $_SESSION["kullanıcı"]=$kontrol[0]["kullanıcı"]; 
							 $_SESSION["adsoyad"]=$kontrol[0]["adsoyad"]; 
							 $_SESSION["mail"]=$kontrol[0]["mail"]; 
							 $_SESSION["ID"]=$kontrol[0]["ID"]; 
							 ?>
							 <meta http-equiv="refresh" content="0;url=<?=SITE?>" />
							 <?php
							 
							 exit();
						}
						else
						{
							echo '<div class="alert alert-danger">Kullanıcı adı veya şifre hatalıdır.</div>';
						} 
					  }
					
					else
					{
						echo '<div class="alert alert-danger">Boş bıraktığınız alanları doldurunuz.</div>';
					 }
				    }
				  ?>
						<form action="#" class="login-form" method="POST">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="text" class="form-control" name="kullanıcı" placeholder="Kullanıcı Adı" required>
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input type="password" class="form-control" name="sifre" placeholder="Parola" required>
	            </div>
	            <div class="form-group d-md-flex">
								<div class="w-100 text-md-right">
									<a href="#">Parolamı Unuttum</a>
								</div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn form-control btn-primary rounded submit px-3">Giriş Yap</button>
	            </div>
	          </form>
	          <div class="w-100 text-center mt-4 text">
		          <a href="#">ANA SAYFAYA DÖN</a>
	          </div>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?=SITE?>login-form/js/jquery.min.js"></script>
  <script src="<?=SITE?>login-form/js/popper.js"></script>
  <script src="<?=SITE?>login-form/js/bootstrap.min.js"></script>
  <script src="<?=SITE?>login-form/js/main.js"></script>

	</body>
</html>

