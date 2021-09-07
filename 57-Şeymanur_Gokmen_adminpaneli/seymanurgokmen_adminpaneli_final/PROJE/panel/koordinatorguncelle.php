<?php 

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

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<style>
.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}
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
    <p class="f-right">
	
	<?php
	session_start();
	
		$admin = $_SESSION['admin'];
	    if(isset($_SESSION['admin'])){
			echo "admin: ".$admin."";
	      echo '<strong><a href="cikis.php" id="logout">Çıkış Yap</a></strong></p>';
	      
	   }
	    else { header("location:giris.php"); }
	
	?>
	
  </div>
  <!--  /tray -->
  <hr class="noscreen" />
  <!-- Menu -->
  <div id="menu" class="box">
    <ul class="box f-right">
      <li><a href="adminsayfasi.php"><span><strong>Profilim</strong></span></a></li>
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
       
	   
        <!-- Create a new project -->
        <p id="btn-create" class="box"><a href="etkinlikekle.php"><span>Yeni Etkinlik ekle</span></a></p>
		<p id="btn-create" class="box"><a href="etkinlikduzenle.php"><span>Etkinlik Düzenle/sil</span></a></p>
		<p id="btn-create" class="box"><a href="koordinatörekle.php"><span>Koordinatör ekle</span></a></p>
		<p id="btn-create" class="box"><a href="koordinatorduzenle.php"><span>Koordinatör Düzenle/sil</span></a></p>
      </div>
      
    </div>
    <!-- /aside -->
    <hr class="noscreen" />
    <!-- Content (Right Column) -->
    <div id="content" class="box">
      <h1>Etkinlik Koordinatörü ekle</h1>

     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



<div class="container">

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Koordinatör Bilgileri</h4> <hr>
	
	     <?php
if(isset($_GET['id']))
        {
			$id=$_GET['id'];
			if(isset($_POST['guncelle']))
			{
				$adsoyad = $_POST["adsoyad"];
                $email = $_POST["email"];
                $telefon = $_POST["telefon"];
                $unvan = $_POST["unvan"];
				
				$sorgu = "UPDATE koordinatorler SET adsoyad='".$adsoyad."', email='".$email."', telefon='".$telefon."',unvan='".$unvan."' WHERE id='".$id."'";
		        $add = mysqli_query($baglan,$sorgu);
				if($add)
		        {
			     echo '<p style="color:green">BİLGİLERİNİZ BAŞARIYLA GÜNCELLENDİ... <br><a href="koordinatorduzenle.php">Görüntüle</a></p>';
				 header("Refresh:1; url=koordinatorduzenle.php");
		        }
		        else
		        {
			     echo '<p style="color:red"> GÜNCELLEME İŞLEMİ GERÇEKLEŞTİRİLEMEDİ...</p>';
		        }
			}
			else
		     {
			   echo '';
		     }
	    $siralamaSorgusu = mysqli_query($baglan, "SELECT * FROM koordinatorler WHERE ID='".$id."'");
		$kayit = $siralamaSorgusu->fetch_assoc();
}

?>
	
	<form method="post" action="">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="adsoyad" class="form-control" placeholder="Ad Soyad" value="<?php echo $kayit['adsoyad']; ?>" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email" value="<?php echo $kayit['email']; ?>" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
    	<input name="telefon" class="form-control" placeholder="Telefon Numarası" value="<?php echo $kayit['telefon']; ?>" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		</div>
		<select class="form-control" name="unvan">
		<?php
		$kayitsorgu = "SELECT unvan FROM koordinatorler WHERE id='".$id."'";
		$bilgi = mysqli_query($baglan,$kayitsorgu);
	    $row = mysqli_fetch_array($bilgi);
		
		?>
            <option value="Genel Koordinatör"<?php if ($row[unvan] == 'Genel Koordinatör') echo ' selected="selected"'; ?>>Genel Koordinatör</option>
            <option value="Sosyal Aktiviteler Sorumlusu"<?php if ($row[unvan] == 'Sosyal Aktiviteler Sorumlusu') echo ' selected="selected"'; ?>>Sosyal Aktiviteler Sorumlusu</option>
            <option value="İç İlişkiler Sorumlusu"<?php if ($row[unvan] == 'İç İlişkiler Sorumlusu') echo ' selected="selected"'; ?>>İç İlişkiler Sorumlusu</option>
            <option value="Dış İlişkiler Sorumlusu"<?php if ($row[unvan] == 'Dış İlişkiler Sorumlusu') echo ' selected="selected"'; ?>>Dış İlişkiler Sorumlusu</option>
            <option value="Teknoloji ve Grafik Sorumlusu"<?php if ($row[unvan] == 'Teknoloji ve Grafik Sorumlusu') echo ' selected="selected"'; ?>>Teknoloji ve Grafik Sorumlusu</option>

		</select>
	</div> <!-- form-group end.// -->

      <div class="form-group">
        <button type="submit" name="guncelle" class="btn btn-primary btn-block">Bilgileri Güncelle</button>
    </div> <!-- form-group// --> 
	
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->


<br><br>
</article>
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
