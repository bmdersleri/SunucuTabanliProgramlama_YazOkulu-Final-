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
    $oldPhoto = base64_decode($_GET['photo']);

  if (isset($_POST['updatestudent'])) {
  	$name = $_POST['name'];
  	$roll = $_POST['roll'];
  	$address = $_POST['address'];
  	$pcontact = $_POST['pcontact'];
  	$class = $_POST['class'];
  	
  	if (!empty($_FILES['photo']['name'])) {
  		 $photo = $_FILES['photo']['name'];
	  	 $photo = explode('.', $photo);
		 $photo = end($photo); 
		 $photo = $roll.date('Y-m-d-m-s').'.'.$photo;
  	}else{
  		$photo = $oldPhoto;
  	}
  	

  	$query = "UPDATE `student_info` SET `name`='$name',`roll`='$roll',`class`='$class',`city`='$address',`pcontact`='$pcontact',`photo`='$photo' WHERE `id`= $id";
  	if (mysqli_query($db_con,$query)) {
  		$datainsert['insertsucess'] = '<p style="color: green;">Öğrenci Bilgileri Güncellendi!</p>';
		if (!empty($_FILES['photo']['name'])) {
			move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo);
			unlink('images/'.$oldPhoto);
		}	
  		header('Location: index.php?page=all-student&edit=success');
  	}else{
  		header('Location: index.php?page=all-student&edit=error');
  	}
  }
?>
<h1 class="text-primary"><i class="fas fa-user-plus"></i>  Öğrenci Güncelle<small class="text-warning"> Öğrenci Güncelleme Formu!</small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item" aria-current="page"><a href="index.php">Gösterge Paneli </a></li>
     <li class="breadcrumb-item" aria-current="page"><a href="index.php?page=all-student"> Toplam Öğrenci </a></li>
     <li class="breadcrumb-item active" aria-current="page">Öğrenci Güncelle</li>
  </ol>
</nav>

	<?php
		if (isset($id)) {
			$query = "SELECT `id`, `name`, `roll`, `class`, `city`, `pcontact`, `photo`, `datetime` FROM `student_info` WHERE `id`=$id";
			$result = mysqli_query($db_con,$query);
			$row = mysqli_fetch_array($result);
		}
	 ?>
<div class="row">
<div class="col-sm-6">
	<form enctype="multipart/form-data" method="POST" action="">
		<div class="form-group">
		    <label for="name">Öğrenci Adı</label>
		    <input name="name" type="text" class="form-control" id="name" value="<?php echo $row['name']; ?>" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="roll">Öğrenci Numarası</label>
		    <input name="roll" type="text" class="form-control" pattern="[0-9]{6}" id="roll" value="<?php echo $row['roll']; ?>" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="address">Yaşadığı Şehir</label>
		    <input name="address" type="text" class="form-control" id="address" value="<?php echo $row['city']; ?>" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="pcontact">Ebeveyn İletişim Numarası</label>
		    <input name="pcontact" type="text" class="form-control" id="pcontact" value="<?php echo $row['pcontact']; ?>" pattern="[0-9]{}" placeholder="01........." required="">
	  	</div>
	  	<div class="form-group">
		    <label for="class">Öğrenci Sınıfı</label>
		    <select name="class" class="form-control" id="class" required="" value="">
		    	<option>Seç</option>
		    	<option value="1.sınıf" <?= $row['class']=='1.sınıf'? 'selected':'' ?>>1.</option>
		    	<option value="2.sınıf" <?= $row['class']=='2.sınıf'? 'selected':'' ?>>2.</option>
		    	<option value="3.sınıf" <?= $row['class']=='3.sınıf'? 'selected':'' ?>>3.</option>
		    	<option value="4.sınıf" <?= $row['class']=='4.sınıf'? 'selected':'' ?>>4.</option>
		    	<option value="5.sınıf" <?= $row['class']=='5.sınıf'? 'selected':'' ?>>5.</option>
		    </select>
	  	</div>
	  	<div class="form-group">
		    <label for="photo">Öğrenci Fotoğrafı</label>
		    <input name="photo" type="file" class="form-control" id="photo">
	  	</div>
	  	<div class="form-group text-center">
		    <input name="updatestudent" value="Öğrenci Güncelle" type="submit" class="btn btn-danger">
	  	</div>
	 </form>
</div>
</div>