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
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


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
      <h1>Yeni Etkinlik ekle</h1>

<div class="span3">
    <h2>ETKİNLİK</h2>
    <form method="post">
    <label>Etkinlik Adı</label>
    <input type="text" name="etkinlikadi" class="span3">
    <label>Etkinlik Türü</label>
   <select name="tur" id="" class="span3">
      <option value="0">-- Seçiniz --</option>
     <option value="Konferans">Konferans</option>
     <option value="Seminer">Seminer</option>
     <option value="Sempozyum">Sempozyum</option>
     <option value="Panel">Panel</option>
	 <option value="Fuar">Fuar</option>
	 <option value="Sektör günleri">Sektör günleri</option>
     <option value="Festival">Festival</option>
     <option value="Yarışma">Yarışma</option>
     <option value="Kamp">Kamp</option>
    </select>
	<label>Tarih</label>
    <input type="date" name="tarih" class="span3">
    <label>Yer</label>
    <input type="text" name="yer" class="span3">
    <label>Koordinatör</label>
    
     <select name="koordinator" id="" class="span3">
            <option value="0">-- Seçiniz --</option>

            <?php 
              $query = "SELECT * FROM `koordinatorler`";

            $result1 = mysqli_query($baglan, $query);
			while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
	
    <label>Konuşmacı/Yönetici</label>
    <input type="text" name="konusmaci_yonetici" class="span3">
	<label>Detay Linki</label>
    <input type="text" name="detay" class="span3">
    <input type="submit" name="kaydet" value="KAYDET" class="btn btn-primary pull-right">
    <div class="clearfix"></div>
	<?php
   $etkinlikadi = trim($_POST["etkinlikadi"]);
   $tur = trim($_POST["tur"]);
   $tarih = trim($_POST["tarih"]);
   $yer= trim($_POST["yer"]);
   $koordinator = trim($_POST["koordinator"]);
   $konusmaci_yonetici = trim($_POST["konusmaci_yonetici"]);
   $detay = trim($_POST["detay"]);
  
		 if(isset($_POST["kaydet"]))
	    {
		    $ekle = "insert into etkinlikler(etkinlikadi,tur,tarih,yer,koordinator,konusmaci_yonetici,detay) values ('".$etkinlikadi."','".$tur."','".$tarih."','".$yer."','".$koordinator."','".$konusmaci_yonetici."','".$detay."')";
		      $eklenen = mysqli_query($baglan,$ekle);
		      if($eklenen)
		      {
			   echo '<p style="color:green">TEBRİKLER ! KAYDINIZ BAŞARIYLA TAMAMLANDI...</p>';
	        
		      }
		      else
		      {
			   echo '<p style="color:red"> HATA ! KAYIT İŞLEMİ GERÇEKLEŞTİRİLEMEDİ...</p>';
		       }
	    }
		else
		{
			echo '';
		} 
?>
	
    </form>
</div>

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
