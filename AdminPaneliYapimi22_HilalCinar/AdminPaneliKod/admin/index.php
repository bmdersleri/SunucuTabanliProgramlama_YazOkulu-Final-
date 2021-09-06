
<?php define("admin",true);?>
<?php session_start();?>
<?php include("ayar.php");?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>KİTAP FUARI Admin Paneli</title>
	<link rel="stylesheet" href="../css/styles.css" />
	<link rel="stylesheet" href="../css/reset.css" />
	<link rel="stylesheet" href="../css/admin.css" />
</head>
<body>
	<?php 
	if($_SESSION){
		
		if($_SESSION["rutbe"] == 1){
			?>
			<div class="admin-genel"> 
			<div class="admin-header"> 
			<h2><a href="/admin/">KİTAP FUARI <span style="color:red;">Admin Paneli</span></a>
			<span style="float:right; margin-right:30px;"><a href="/index.php">Siteyi Görüntüle</a></span>
			</h2>
			<div class="uye">
			Admin Paneline Hoşgeldiniz : <?php echo $_SESSION["uye"];?></div>
			</div>
			<div class="admin-icerik"> 
			<div class="admin-menu"> 
			<ul> 
			<li><a href="/admin/">Anasayfa</a></li>
			<li><a href="/admin/?do=konular">Konular</a></li>
			<li><a href="/admin/?do=uyeler">Üyeler</a></li>
			<li><a href="/admin/?do=yorumlar">Yorumlar</a></li>
			<li><a href="/admin/?do=kategoriler">Kategoriler</a></li>
			<li><a href="/admin/?do=sabit_sayfalar">Sabit Sayfalar</a></li>
			<li><a href="/admin/?do=cikis">Çıkış</a></li>
			</ul>
			</div>
			<?php 
			  
			  $do = @$_GET["do"];
			  
			  if(file_exists("{$do}.php")){
				  
				  include("{$do}.php");
				  
			  }else {
				  
				 include("anasayfa.php"); 
				  
			  }
			  
			
			?>
			</div>
			</div>
			<?php
			
			
		}else {
			
			echo '<div class="hata">Admin panelinde yetkiniz bulunmuyor!</div>';
		}
		
	}else{
		
		echo '<div class="hata">Admin paneline girebilmek için üye girişi yapmanız gerekiyor!</div>';
	}
	
	?>
	
	
</body>
</html>


















