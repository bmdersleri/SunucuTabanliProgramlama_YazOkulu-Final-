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

<style>
.flat-table {
  display: block;
  font-family: sans-serif;
  -webkit-font-smoothing: antialiased;
  font-size: 115%;
  overflow: auto;
  width: auto;
  
  th {
    background-color: rgb(112, 196, 105);
    color: white;
    font-weight: normal;
    padding: 20px 30px;
    text-align: center;
  }
  td {
    background-color: rgb(238, 238, 238);
    color: rgb(111, 111, 111);
    padding: 20px 30px;
  }
}

.button {
  background-color: #008CBA; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
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
      <h1>Koordinatör Düzenle/sil</h1>
 <h3 class="tit">Koordinatörler<h3>
     

<table class="flat-table">
  <tbody>
    <tr>
      <th>AD SOYAD<th>
      <th>E MAİL</th>
      <th>TELEFON</th>
      <th>ÜNVAN</th>
      <th></th>
	  <th></th>
    </tr>
	<?php
	  $bul = "SELECT * FROM koordinatorler";
	  $veriler =mysqli_query($baglan,$bul);
	  if(mysqli_num_rows($veriler)>0)
	  {
	     while($veri = $veriler->fetch_assoc())
		 {
	  
	  ?>
    <tr>
      <td><?php echo $veri["adsoyad"];?></td>
      <td><?php echo $veri["email"];?></td>
      <td><?php echo $veri["telefon"];?></td>
      <td><?php echo $veri["unvan"];?></td>
      <td><a href="koordinatorguncelle.php?id=<?php echo $veri["id"];?>">Bilgileri Güncelle</a></td>
	  <td><button type="submit" class="button button2"><a style="color:white" href="koordinatorsil.php?id=<?php echo $veri["id"];?>">SİL</a></button></td>
    </tr>
    </tr>
  	 <?php  }} ?> 
  </tbody>
	</table>

     
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
