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
	     <?php
      if(isset($_GET['id']))
        {
			$id=$_GET['id'];
			if(isset($_POST['guncelle']))
			{
				   $etkinlikadi = trim($_POST["etkinlikadi"]);
                   $tur = trim($_POST["tur"]);
                   $tarih = trim($_POST["tarih"]);
                   $yer= trim($_POST["yer"]);
                   $koordinator = trim($_POST["koordinator"]);
                   $konusmaci_yonetici = trim($_POST["konusmaci_yonetici"]);
                   $detay = trim($_POST["detay"]);
				
				$sorgu = "UPDATE etkinlikler SET etkinlikadi='".$etkinlikadi."', tur='".$tur."', tarih='".$tarih."',yer='".$yer."', koordinator='".$koordinator."', konusmaci_yonetici='".$konusmaci_yonetici."',detay='".$detay."' WHERE id='".$id."'";
		        $add = mysqli_query($baglan,$sorgu);
				if($add)
		        {
			     echo '<p style="color:green">BİLGİLERİNİZ BAŞARIYLA GÜNCELLENDİ... <br><a href="etkinlikduzenle.php">Görüntüle</a></p>';
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
	    $siralamaSorgusu = mysqli_query($baglan, "SELECT * FROM etkinlikler WHERE ID='".$id."'");
		$kayit = $siralamaSorgusu->fetch_assoc();
		}
     ?>
    <form method="post">
    <label>Etkinlik Adı</label>
    <input type="text" name="etkinlikadi" value="<?php echo $kayit['etkinlikadi']; ?>" class="span3">
    <label>Etkinlik Türü</label>
     <select name="tur" id="" class="span3">
	 	<?php
		$kayitsorgu = "SELECT tur FROM etkinlikler WHERE id='".$id."'";
		$bilgi = mysqli_query($baglan,$kayitsorgu);
	    $row = mysqli_fetch_array($bilgi);
		
		?>
		<option value="Konferans"<?php if ($row[tur] == 'Konferans') echo ' selected="selected"'; ?>>Konferans</option>
		<option value="Seminer"<?php if ($row[tur] == 'Seminer') echo ' selected="selected"'; ?>>Seminer</option>
		<option value="Sempozyum"<?php if ($row[tur] == 'Sempozyum') echo ' selected="selected"'; ?>>Sempozyum</option>
		<option value="Panel"<?php if ($row[tur] == 'Panel') echo ' selected="selected"'; ?>>Panel</option>
		<option value="Fuar"<?php if ($row[tur] == 'Fuar') echo ' selected="selected"'; ?>>Fuar</option>
		<option value="Sektör günleri"<?php if ($row[tur] == 'Sektör günleri') echo ' selected="selected"'; ?>>Sektör günleri</option>
		<option value="Festival"<?php if ($row[tur] == 'Festival') echo ' selected="selected"'; ?>>Festival</option>
		<option value="Yarışma"<?php if ($row[tur] == 'Yarışma') echo ' selected="selected"'; ?>>Yarışma</option>
		<option value="Kamp"<?php if ($row[tur] == 'Kamp') echo ' selected="selected"'; ?>>Kamp</option>

    </select>
	<label>Tarih</label>
    <input type="date" name="tarih" value="<?php echo $kayit['tarih']; ?>"class="span3">
    <label>Yer</label>
    <input type="text" name="yer" value="<?php echo $kayit['yer']; ?>"class="span3">
    <label>Koordinatör</label>
   <select name="koordinator" id="" class="span3">

            <?php 
              $query = "SELECT * FROM `koordinatorler`";

            $result1 = mysqli_query($baglan, $query);
			while($row1 = mysqli_fetch_array($result1)):;?>
			

            <option value="<?php echo $row1[1];?>"<?php if ($row[koordinator] == $row1[1]) echo ' selected="selected"'; ?>><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>    <label>Konuşmacı/Yönetici</label>
    <input type="text" name="konusmaci_yonetici" value="<?php echo $kayit['konusmaci_yonetici']; ?>"class="span3">
	<label>Detay Linki</label>
    <input type="text" name="detay" value="<?php echo $kayit['detay']; ?>" class="span3">
    <input type="submit" name="guncelle" value="Güncelle" class="btn btn-primary pull-right">
    <div class="clearfix"></div>
	
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
