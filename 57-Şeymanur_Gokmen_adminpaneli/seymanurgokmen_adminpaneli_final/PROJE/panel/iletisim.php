
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>


<style>
.button {
  background-color: #008CBA; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 2px 2px 2px 700px;
  cursor: pointer;
}

.button1 {font-size: 10px;}
.button2 {font-size: 12px;}
.button3 {font-size: 16px;}
.button4 {font-size: 20px;}
.button5 {font-size: 24px;}
</style>
<title>Teknolojik Etkinlik</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/2col.css" title="2col" />
<link rel="alternate stylesheet" media="screen,projection" type="text/css" href="css/1col.css" title="1col" />
<!--[if lte IE 6]><link rel="stylesheet" media="screen,projection" type="text/css" href="css/main-ie6.css" /><![endif]-->
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/style.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/mystyle.css" />
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
<div id="main">
  <!-- Tray -->
  <div id="tray" class="box">
    <p class="f-left box">
      <!-- Switcher -->
      <span class="f-left" id="switcher"> <a href="javascript:void(0);" rel="1col" class="styleswitch ico-col1" title="Display one column"><img src="design/switcher-1col.gif" alt="1 Column" /></a> <a href="javascript:void(0)" rel="2col" class="styleswitch ico-col2" title="Display two columns"><img src="design/switcher-2col.gif" alt="" /></a> </span> </p>

  </div>
  <!--  /tray -->
  <hr class="noscreen" />
  <!-- Menu -->
  <div id="menu" class="box">
    <ul class="box f-right">
      <li><a href="giris.php"><span><strong>Giriş Yap</strong></span></a></li>
    </ul>
    <ul class="box">
     <div style="margin-left:240px"> 
	  <li><a href="anasayfa.php"><span>ANASAYFA</span></a></li>
      <li><a href="hakkimizda.php"><span>HAKKIMIZDA</span></a></li>
      <li><a href="kurumsal.php"><span>REFERANSLAR</span></a></li>
      <li><a href="etkinlikler.php"><span>ETKİNLİKLER</span></a></li>
      <li><a href="iletisim.php"><span>İLETİŞİM</span></a></li>
	 </div>
     
    </ul>
  </div>
  <!-- /header -->
  <hr class="noscreen" />
  <!-- Columns -->
  <div id="cols" class="box">
    <!-- Aside (Left Column) -->
    <div id="aside" class="box">
      <div class="padding box">
        <!-- Logo (Max. width = 200px) -->
        <p id="logo"><a href="#"><img src="tmp/indir.jpg" alt="" /></a></p>
       
	 
      </div>
      
    </div>
    <!-- /aside -->
    <hr class="noscreen" />
    <!-- Content (Right Column) -->
    <div id="content" class="box">
      <h1>İLETİŞİM</h1>

      
      <!-- Form -->
      <h3 class="tit">İletişim Formu</h3>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST["gonder"]))
{
	if($_POST["kime"] && $_POST["kimden"] && $_POST["konu"] && $_POST["mesaj"] )
	{
		
$mail = new PHPMailer(true);

//$mail->SMTPDebug =2;
$mail->isSMTP();// Set mailer to use SMTP
$mail->CharSet = "utf-8";// set charset to utf8
$mail->SMTPAuth = true;// Enable SMTP authentication
$mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted

$mail->Host = 'smtp.gmail.com';// Specify main and backup SMTP servers
$mail->Port = 587;// TCP port to connect to


$mail->Username = "makuyazokulusunucu@gmail.com";
$mail->Password = "*************";


$mail->setFrom("makuyazokulusunucu@gmail.com",$_POST["kimden"]);
$mail->isHTML(true);
       $mail->Subject = $_POST["konu"];
       $mail->Body =$_POST["mesaj"];
$mail->addAddress($_POST["kime"],"");
	 
	   
         if ($mail->send())
         { 
	       echo '<p style="color:green">MAİLİNİZ BAŞARIYLA GÖNDERİLMİŞTİR... </p>';

         }
		 else
		 {
			 echo '<p style="color:red">İŞLEM GERÇEKLEŞTİRİLEMEDİ...</p>';
		  }
		
	}
	else
	{
		echo '<p style="color:red">HATA !</p>';
	}
}
else
{
	echo "";
}
?>
	  
     <form method="post" action="">
	  <fieldset>
      <legend>Öneri, Fikir veya Görüşleriniz..</legend>
      <table class="nostyle">
        <tr>
          <td style="width:160px;">Gönderilecek E-mail Adresi:</td>
          <td><input type="text" size="50" name="kime" class="input-text" required /> Koordinatör e-mailleri için <a href="hakkimizda.php"> tıklayınız</a></td>
        </tr>
          <tr>
          <td style="width:130px;">Adınız Soyadınız:</td>
          <td><input type="text" size="50" name="kimden" class="input-text" required /></td>
        </tr>
		 <tr>
          <td style="width:70px;">Konu:</td>
          <td><input type="text" size="70" name="konu" class="input-text" required /></td>
        </tr>
        <tr>
          <td class="va-top">Mesajınız:</td>
          <td><textarea name="mesaj" cols="75" rows="7" class="input-text" required ></textarea></td>
        </tr>
      
 </table>
      </fieldset>
	  
        <input type="submit" name="gonder" value="Gönder" class="button button3">     
	 </form>
     
    </div>
    <!-- /content -->
  </div>
  <!-- /cols -->
  <hr class="noscreen" />
  <!-- Footer -->
  <div id="footer" class="box">
    <p class="f-left">&copy; 2009 <a href="#">Your Company</a>, All Rights Reserved &reg;</p>
    <p class="f-right">Templates by <a href="http://www.adminizio.com/">Adminizio</a></p>
  </div>
  <!-- /footer -->
</div>
<!-- /main -->
</body>
</html>
