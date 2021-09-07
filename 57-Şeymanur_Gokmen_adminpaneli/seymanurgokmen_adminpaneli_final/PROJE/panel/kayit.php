<?php 
 session_start();
 $baglan = mysqli_connect("localhost","root","","panel");
 if(!$baglan)
 {
	 die("connection failed:".mysqli_connect_error());
 }
 else
 {
	 echo "";
 }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Teknolojik Etkinlik</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<link rel="stylesheet" media="screen,projection" type="text/css" href="css/kayitolma.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/switcher.js"></script>
<script type="text/javascript" src="js/toggle.js"></script>
<script type="text/javascript" src="js/ui.core.js"></script>
<script type="text/javascript" src="js/ui.tabs.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".tabs > ul").tabs();
	});
	</script>
</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">

  <a href="anasayfa.php">Anasayfa'ya git</a>
<div style="margin-top:50px" class="testbox">
  <h1>ADMİN KAYIT FORMU</h1>

  <form method="post" action="">
 
  <hr><br>
  <?php 
   $username = trim($_POST["username"]);
   $password = trim($_POST["password"]);
   $email = trim($_POST["email"]);
   $password2 = md5(password);
  
		 if(isset($_POST["buton"]))
	    {
		  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
              echo '<p style="color:red"> GEÇERSİZ E-MAİL ADRESİ ! </p>';

			}
			else{
		      $sorgu = "insert into kullanicilar(username,password,email) values ('".$username."','".$password2."','".$email."')";
		      $add = mysqli_query($baglan,$sorgu);
		      if($add)
		      {
			   echo '<p style="color:green">TEBRİKLER ! KAYDINIZ BAŞARIYLA TAMAMLANDI...<br><a href="giris.php">Giriş yap</a></p>';
	        
		      }
		      else
		      {
			   echo '<p style="color:red"> HATA ! KAYIT İŞLEMİ GERÇEKLEŞTİRİLEMEDİ...</p>';
	        
		       }
			}
	    }
		else
		{
			echo '<p style="color:blue"> Zaten bir hesabınız mı var ? <a href="giris.php" ="button">Giriş yapmak için tıklayınız </a></p>';
	        
		} 
?>
  <br>
  
  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="username" id="username" placeholder="Kullanıcı adı" required/>
  
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="password" id="password" placeholder="Şifre" required/>
  
  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="email" id="email" placeholder="E-mail" required/>
  <hr><br>
   <button style="margin-left:85px" type="submit" name="buton"><a  class="button">Kaydol</a></button>
   
  </form>
</div>

</body>
</html>
