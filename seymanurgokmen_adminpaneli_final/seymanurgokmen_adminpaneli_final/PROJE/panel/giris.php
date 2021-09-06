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
  <h1>ADMİN GİRİŞİ</h1>

  <form method="post" action="">
 
  <hr><br>
 
  <br>
  
  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="username" id="username" placeholder="Kullanıcı adı" required/>
  
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="password" id="password" placeholder="Şifre" required/>
  
  
  <hr><br>
  
   <button  type="submit" name="buton"><a  class="button">GirişYap</a></button>
   <a href="kayit.php" class="button">kaydol</a>
   
    <?php 
	if(isset($_POST["buton"]))
	{
    $username = $_POST["username"];
    $password = $_POST["password"];
	$password2 = md5(password);
	$sorgu = "SELECT * FROM kullanicilar WHERE username='".$username."' AND password='".$password2."'";
	$enter = mysqli_query($baglan,$sorgu);
	if(mysqli_num_rows($enter)>0)
	{
		$_SESSION["admin"] = $_POST["username"];
		echo '<h2 style="color:green">YÖNLENDİRİLİYORSUNUZ..</h2>';
		header("Refresh:2; url=adminsayfasi.php");
	}	
    else{
		echo '<h4 style="color:red">Kullanıcı adı veya şifre YANLIŞ !</h4>';
	}	
	}
?>
  </form>
  
</div>

</body>
</html>
