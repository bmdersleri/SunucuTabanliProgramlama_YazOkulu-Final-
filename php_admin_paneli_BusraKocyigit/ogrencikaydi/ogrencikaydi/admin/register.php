<?php require_once 'db_con.php'; 
	session_start();
	if (isset($_POST['register'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$c_password = $_POST['c_password'];

		$photo = explode('.', $_FILES['photo']['name']);
		$photo= end($photo);
		$photo_name= $username.'.'.$photo;

		$input_error = array();
		if (empty($name)) {
			$input_error['name'] = "İsim Boş Bırakılamaz";
		}
		if (empty($email)) {
			$input_error['email'] = "E-mail Boş Bırakılamaz";
		}
		if (empty($username)) {
			$input_error['username'] = "Kullanıcı Adı Boş Bırakılamaz";
		}
		if (empty($password)) {
			$input_error['password'] = "Şifre Boş Bırakılamaz";
		}
		if (empty($photo)) {
			$input_error['photo'] = "Fotoğraf Boş Bırakılamaz";
		}

		if (!empty($password)) {
			if ($c_password!==$password) {
				$input_error['notmatch']="Şifreler Birbiriyle Eşleşmiyor!";
			}
		}

		if (count($input_error)==0) {
			$check_email= mysqli_query($db_con,"SELECT * FROM `users` WHERE `email`='$email';");

			if (mysqli_num_rows($check_email)==0) {
				$check_username= mysqli_query($db_con,"SELECT * FROM `users` WHERE `username`='$username';");
				if (mysqli_num_rows($check_username)==0) {
					if (strlen($username)>7) {
						if (strlen($password)>7) {
								$password = sha1(md5($password));
							$query = "INSERT INTO `users`(`name`, `email`, `username`, `password`, `photo`, `status`) VALUES ('$name', '$email', '$username', '$password','$photo_name','inactive');";
									$result = mysqli_query($db_con,$query);
								if ($result) {
									move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo_name);
									header('Location: register.php?insert=sucess');
								}else{
									header('Location: register.php?insert=error');
								}
						}else{
							$passlan="Şifre 8 Karakterden Fazla Olmalıdır";
						}
					}else{
						$usernamelan= 'Kullanıcı Adı 8 Karakterden Fazla Olmalıdır';
					}
				}else{
					$username_error="Bu Kullanıcı Adı Zaten Mevcut!";
				}
			}else{
				$email_error= "Bu email Zaten Mevcut!";
			}
			
		}
		
	}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Yönetici Kaydı</title>
  </head>
  <body>
    <div class="container"><br>
          <h1 class="text-center">Yönetici Kayıt Sistemi</h1><hr><br>
          <div class="d-flex justify-content-center">
          	<?php 
          		if (isset($_GET['insert'])) {
          			if($_GET['insert']=='sucess'){ echo '<div role="alert" aria-live="assertive" aria-atomic="true" align="center" class="toast alert alert-success fade hide" data-delay="2000">Yönetici Kaydedildi,Lütfen bir yönetici ile iletişime geçip heabınızı aktive edin!</div>';}
          		}
          	;?>
          </div>
          <div class="row animate__animated animate__pulse">
            <div class="col-md-8 offset-md-2">
             	<form method="POST" enctype="multipart/form-data">
				  <div class="form-group row">
				    <div class="col-sm-6">
				      <input type="text" class="form-control" value="<?= isset($name)? $name:'' ?>" name="name" placeholder="Name" id="inputEmail3"><?= isset($input_error['name'])? '<label for="inputEmail3" class="error">'.$input_error['name'].'</label>':'';  ?>
				    </div>
				    <div class="col-sm-6">
				      <input type="email" class="form-control" value="<?= isset($email)? $email:'' ?>" name="email" placeholder="Email" id="inputEmail3"><?= isset($input_error['email'])? '<label class="error">'.$input_error['email'].'</label>':'';  ?>
				      <?= isset($email_error)? '<label class="error">'.$email_error.'</label>':'';  ?>
				    </div>
				  </div>
				  <div class="form-group row">
				  	<div class="col-sm-4">
				      <input type="text" name="username" value="<?= isset($username)? $username:'' ?>" class="form-control" id="inputPassword3" placeholder="Username"><?= isset($input_error['usrname'])? '<label class="error">'.$input_error['username'].'</label>':'';  ?><?= isset($username_error)? '<label class="error">'.$username_error.'</label>':'';  ?><?= isset($usernamelan)? '<label class="error">'.$usernamelan.'</label>':'';  ?>
				    </div>
				    <div class="col-sm-4">
				      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password"><?= isset($input_error['password'])? '<label class="error">'.$input_error['password'].'</label>':'';  ?> <?= isset($passlan)? '<label class="error">'.$passlan.'</label>':'';  ?>  
				    </div>
				    <div class="col-sm-4">
				      <input type="password" name="c_password" class="form-control" id="inputPassword3" placeholder="Confirm Password"><?= isset($input_error['notmatch'])? '<label class="error">'.$input_error['notmatch'].'</label>':'';  ?> <?= isset($passlan)? '<label class="error">'.$passlan.'</label>':'';  ?>
				    </div>
				  </div>
				  <div class="row">
				  	<div class="col-sm-3"><label for="photo">Fotoğrafınızı Seçin</label></div>
				  	<div class="col-sm-9">
				      <input type="file" id="photo" name="photo" class="form-control" id="inputPassword3" >
				      <br>
				    </div>
				  </div>
				  <div class="text-center">
				      <button type="submit" name="register" class="btn btn-danger">Kayıt Ol</button>
				    </div>
				  </div>
				</form>
            </div>
          </div>
            <div class="text-center"> Eğer kullanıcı hesabınız varsa, <a href="login.php">şimdi giriş </a> yapabilirsiniz!</div>
    </div>
    <footer style = "position: absolute;bottom: 0;width: 100%;">
    	<p> Copyright &copy; 2021  </p>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	$('.toast').toast('show')
    </script>
  </body>
</html>