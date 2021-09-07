<?php  include 'php/guncelle.php' ; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Güncelle</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#F0E5CF;">
	<div class="container">
		<form action="php/guncelle.php" 
		      method="post"> 
            
		   <h4 class="display-4 text-center">Güncelle</h4><hr><br>
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
		            value ="<?=$row['isim']?>"
		   </div>
		   <div class="form-group">
		     <label for="soyad">Soyad</label>
		     <input type="soyad" 
		           class="form-control" 
		           id="soyad" 
		           name="soyad" 
		            value ="<?=$row['soyad']?>"

		   </div>	   	
		    <div class="form-group">
		     <label for="sınıf">Sınıf</label>
		     <input type="sınıf" 
		           class="form-control" 
		           id="sınıf" 
		           name="sınıf" 
		            value ="<?=$row['sınıf']?>"

		   </div>  
		    <div class="form-group">
		     <label for="numara">Numara</label>
		     <input type="numara" 
		           class="form-control" 
		           id="numara" 
		           name="numara" 
		            value ="<?=$row['numara']?>"

		   </div>
		   
		   <input type="text" 
						name="id"
						value="<?=$row['id']?>"
						hidden>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="güncelle">Güncelle</button>
				  <a href="liste.php" class="link-primary">Liste/Düzenle</a>
	    </form>
	</div>
</body>
</html>