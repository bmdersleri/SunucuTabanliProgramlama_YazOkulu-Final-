<?php include 'includes/header.php';?>
        <!-- Navigation Bar -->
   <?php include 'includes/navbar.php';?>
        <!-- Navigation Bar -->
 <div class="container">
 <div class="row">

 </div>
 	<div class="row">
 		<div class="col-xs-4"></div>
 		<div class="col-xs-4">
 		 			<form method="POST" action="registerprocess.php">
				<div class="form-group">
					<label for="username">Kullanıcı adı</label>
					<input type="text" name="username" value= "<?php if(isset($_POST['register'])) { echo $_POST['username']; } ?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Adı</label>
					<input type="text" name="firstname" value= "<?php if(isset($_POST['register'])) { echo $_POST['firstname']; } ?>"class="form-control" required>
				</div>
				<div class="form-group">
					<label>Soyadı</label>
					<input type="text" name="lastname" value= "<?php if(isset($_POST['register'])) { echo $_POST['lastname']; } ?>"class="form-control" required>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" value= "<?php if(isset($_POST['register'])) { echo $_POST['email']; } ?>"class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Parola</label>
					<input type="password" name="password" value= "<?php if(isset($_POST['register'])) { echo $_POST['password']; } ?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Parola Onayla</label>
					<input type="password" name="cpassword" value= "<?php if(isset($_POST['register'])) { echo $_POST['cpassword']; } ?>"class="form-control" required>
				</div>
<button type="submit" class="btn btn-primary" name="register">Kaydol</button>
 			</form>

 		</div>
 		<div class="col-xs-4"></div>
 	</div>

 </div>
</body>
</html>