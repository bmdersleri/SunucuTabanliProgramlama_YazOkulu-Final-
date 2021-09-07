<?php  include "php/liste.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>kaydet</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#F0E5CF;">
	<div class="container" >
		<div class="box">
			<h4 class="display-4 text-center"> Liste </h4> <br>
			
			 <?php if (isset($_GET['başarı'])) { ?>
		   <div class="alert alert-success" role="alert">
			  <?php echo $_GET['başarı']; ?>
		    </div>
		   <?php } ?>
			<?php if(mysqli_num_rows($result)){ ?>
			
			<table class="table table-striped">
				  <thead>
					<tr>
					  <th scope="col">#</th>
					  <th scope="col">İsim</th>
					  <th scope="col">Soyad</th>
					  <th scope="col">Sınıf</th>
					  <th scope="col">Numara</th>
					  <th scope="col">Düzenle</th>
					</tr>
				  </thead>
				  <tbody>
				  <?php  
				  $i=0;
				  while($rows=mysqli_fetch_assoc($result)) {
					  $i++;
					  					
				  ?>
					<tr>
					  <th scope="row"><?=$i?></th>
					  <td><?=$rows['isim']?></td>
					  <td><?php echo $rows ['soyad'] ?></td>
					  <td><?php echo $rows ['sınıf'] ?></td>
					  <td><?php echo $rows ['numara'] ?></td>
					  <td> <a href="guncelle.php? id= <?=$rows['id']?> " class="btn btn-success">Güncelle </a>
					   <td> <a href="php/sil.php? id= <?=$rows['id']?> " class="btn btn-danger">Sil </a>
					</tr>
					
					
					<?php } ?>
				  </tbody>
				</table>
				<?php } ?>
				<div class="link-right" >
					<a href="admin.php" class="link-primary">Kaydet </a>
	</div>
</body>
</html>