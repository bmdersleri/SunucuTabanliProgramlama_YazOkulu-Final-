<?php 
  $corepage = explode('/', $_SERVER['PHP_SELF']);
    $corepage = end($corepage);
    if ($corepage!=='index.php') {
      if ($corepage==$corepage) {
        $corepage = explode('.', $corepage);
       header('Location: index.php?page='.$corepage[0]);
     }
    }
    
    $id = base64_decode($_GET['id']);
  if (isset($_POST['userupdate'])) {
  	$name = $_POST['name'];
  	$email = $_POST['email'];


  	$query = "UPDATE `users` SET `name`='$name', `email`='$email' WHERE `id`= $id";
  	if (mysqli_query($db_con,$query)) {
  		$datainsert['insertsucess'] = '<p style="color: green;">Kullanıcı Güncellendi!</p>';
  		header('Location: index.php?page=user-profile&edit=success');
  	}else{
  		header('Location: index.php?page=user-profile&edit=error');
  	}
  }
?>
<h1 class="text-primary"><i class="fas fa-user-plus"></i>  Yönetici  Bilgilerini Güncelle!<small class="text-warning"> </small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item" aria-current="page"><a href="index.php">Gösterge Paneli </a></li>
     <li class="breadcrumb-item" aria-current="page"><a href="index.php?page=user-profile">Profiliniz </a></li>
     <li class="breadcrumb-item active" aria-current="page">Profili Güncelle</li>
  </ol>
</nav>

	<?php
		if (isset($id)) {

			$query = "SELECT  `name`, `email` FROM `users` WHERE `id`=$id;";
			$result = mysqli_query($db_con,$query);
			$row = mysqli_fetch_array($result);
		}
	 ?>
<div class="row">
<div class="col-sm-6">
	<form enctype="multipart/form-data" method="POST" action="">
		<div class="form-group">
		    <label for="name">Ad Soyad</label>
		    <input name="name" type="text" class="form-control" id="name" value="<?php echo $row['name']; ?>" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="email">E-posta</label>
		    <input name="email" type="email" class="form-control"  id="email" value="<?php echo $row['email']; ?>" required="">
	  	</div>
	  	
	  	<div class="form-group text-center">
		    <input name="userupdate" value="Profili Güncelle" type="submit" class="btn btn-danger">
	  	</div>
	 </form>
</div>
</div>