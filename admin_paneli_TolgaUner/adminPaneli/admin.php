<?php
include("ayar.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{

}
?>



<!DOCTYPE html>
<html>
<head>
	<title>kaydet</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body  style="background-color:#F0E5CF;">

	<div class="container" >
		<form action="php/kaydet.php" 
		      method="post"> 
            
		   <h4 class="display-4 text-center">Yönetici Paneli</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="isim">İsim</label>
		     <input type="isim" 
		           class="form-control" 
		           id="isim" 
		           name="isim" 
		            value ="<?php if(isset($_GET['isim']))
								echo($_GET['isim']);?>"
		           placeholder="Öğrencinin adı">
		   </div>

		   <div class="form-group">
		     <label for="soyad">Soyad</label>
		     <input type="soyad" 
		           class="form-control" 
		           id="soyad" 
		           name="soyad" 
		            value ="<?php if(isset($_GET['soyad']))
								echo($_GET['soyad']);?>"
		           placeholder="Öğrencinin soyadı">
		   </div>
		   
		   
		    <div class="form-group">
		     <label for="sınıf">Sınıf</label>
		     <input type="sınıf" 
		           class="form-control" 
		           id="sınıf" 
		           name="sınıf" 
		            value ="<?php if(isset($_GET['sınıf']))
								echo($_GET['sınıf']);?>"
		           placeholder="Öğrencinin sınıfı">
		   </div>
		   
		   
		    <div class="form-group">
		     <label for="numara">Numara</label>
		     <input type="numara" 
		           class="form-control" 
		           id="numara" 
		           name="numara" 
		            value ="<?php if(isset($_GET['numara']))
								echo($_GET['numara']);?>"
		           placeholder="Öğrencinin okul numarası">
		   </div>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="kaydet">Kaydet</button>
				  
				  <a href="liste.php" class="link-primary">Liste/Düzenle</a>
	    </form>
		<?php echo " <a href=logout.php>Çıkış Yap</a>"; ?>
	</div>
	
</body>
</html>