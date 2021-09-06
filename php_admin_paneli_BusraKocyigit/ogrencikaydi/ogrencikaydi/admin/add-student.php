<?php 
  $corepage = explode('/', $_SERVER['PHP_SELF']);
    $corepage = end($corepage);
    if ($corepage!=='index.php') {
      if ($corepage==$corepage) {
        $corepage = explode('.', $corepage);
       header('Location: index.php?page='.$corepage[0]);
     }
    }

  if (isset($_POST['addstudent'])) {
  	$name = $_POST['name'];
  	$roll = $_POST['roll'];
  	$address = $_POST['address'];
  	$pcontact = $_POST['pcontact'];
  	$class = $_POST['class'];
  	
  	$photo = explode('.', $_FILES['photo']['name']);
  	$photo = end($photo); 
  	$photo = $roll.date('Y-m-d-m-s').'.'.$photo;

  	$query = "INSERT INTO `student_info`(`name`, `roll`, `class`, `city`, `pcontact`, `photo`) VALUES ('$name', '$roll', '$class', '$address', '$pcontact','$photo');";
  	if (mysqli_query($db_con,$query)) {
  		$datainsert['insertsucess'] = '<p style="color: green;">Öğrenci Kaydı Başarıyla Gerçekleşti!</p>';
  		move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo);
  	}else{
  		$datainsert['inserterror']= '<p style="color: red;">Öğrenci Kaydı Yapılamadı,Lütfen Bilgilerinizi Tekrar Kontrol Edin!</p>';
  	}
  }
?>
<h1 class="text-primary"><i class="fas fa-user-plus"></i>  Öğrenci Ekle<small class="text-warning"> Yeni Öğrenci Ekleme Formu!</small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item" aria-current="page"><a href="index.php">Gösterge Paneli </a></li>
     <li class="breadcrumb-item active" aria-current="page">Öğrenci Kaydet </li>
  </ol>
</nav>

<div class="row">
	
<div class="col-sm-6">
		<?php if (isset($datainsert)) {?>
	<div role="alert" aria-live="assertive" aria-atomic="true" class="toast fade" data-autohide="true" data-animation="true" data-delay="2000">
	  <div class="toast-header">
	    <strong class="mr-auto">Öğrenci Kaydı Bildirimi</strong>
	    <small><?php echo date('d-M-Y'); ?></small>
	    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
	      <span aria-hidden="true">&times;</span>
	    </button>
	  </div>
	  <div class="toast-body">
	    <?php 
	    	if (isset($datainsert['insertsucess'])) {
	    		echo $datainsert['insertsucess'];
	    	}
	    	if (isset($datainsert['inserterror'])) {
	    		echo $datainsert['inserterror'];
	    	}
	    ?>
	  </div>
	</div>
		<?php } ?>
	<form enctype="multipart/form-data" method="POST" action="">
		<div class="form-group">
		    <label for="name">Öğrenci Adı</label>
		    <input name="name" type="text" class="form-control" id="name" value="<?= isset($name)? $name: '' ; ?>" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="roll">Öğrenci Numarası</label>
		    <input name="roll" type="text" value="<?= isset($roll)? $roll: '' ; ?>" class="form-control" pattern="[0-9]{6}" id="roll" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="address">Yaşadığı Şehir</label>
		    <input name="address" type="text" value="<?= isset($address)? $address: '' ; ?>" class="form-control" id="address" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="pcontact">Ebeveyn İletişim Numarası </label>
		    <input name="pcontact" type="text" class="form-control" id="pcontact" pattern="[0-9]{}" value="<?= isset($pcontact)? $pcontact: '' ; ?>" placeholder="0xxxxxxxxxx" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="class">Öğrenci Sınıfı</label>
		    <select name="class" class="form-control" id="class" required="">
		    	<option>Seç</option>
		    	<option value="1.sınıf">1.</option>
		    	<option value="2.sınıf">2.</option>
		    	<option value="3.sınıf">3.</option>
		    	<option value="4.sınıf">4.</option>
		    	<option value="5.sınıf">5.</option>
		    </select>
	  	</div>
	  	<div class="form-group">
		    <label for="photo">Öğrenci Fotoğrafı</label>
		    <input name="photo" type="file" class="form-control" id="photo" required="">
	  	</div>
	  	<div class="form-group text-center">
		    <input name="addstudent" value="Öğrenci Ekle" type="submit" class="btn btn-danger">
	  	</div>
	 </form>
</div>
</div>