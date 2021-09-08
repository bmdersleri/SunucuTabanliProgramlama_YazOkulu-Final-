<?php
	if(session('username')){
		go(admin_url('index'));
	}

	if(post('submit')){
		$username = post('username');
		$password = md5(post('password'));

		$query = query("select * from users where username = '$username' and password = '$password'");
		$tut = fetch($query);
			if($username && $password){
				if ($tut['username'] == $username && $tut['password'] == $password )
				{
					session('username', $tut['username']);
					session('name', $tut['namesurname']);
					go(admin_url('index'));
				}
				else 
				{
					$error = "Username or Password incorrect!!";
				}
			}
			else
			{
				$error = "Do not leave any blank spaces!";
			}
		}


?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>LOGIN</title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?=admin_asset_url('images/favicon.jfif')?>">
	<link href="<?=admin_asset_url('css/style.css')?>" rel="stylesheet">
</head>
<body class="h-100">
	<div class="authincation h-100">
		<div class="container-fluid h-100">
			<div class="row justify-content-center h-100 align-items-center">
				<div class="col-md-5 p-5">
					<div class="authincation-content">
						<div class="row no-gutters">
							<div class="col-xl-12">
								<div class="auth-form">
									<h4 class="text-center mb-5"><img src="<?=admin_asset_url('images/logo.svg')?>" height="50" alt=""></h4>
									<?php if(isset($error)){?>
									<div class="col-lg-12">
										<div class="alert alert-danger alert-dismissible alert-alt fade show">
											<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
											</button>
											<strong><?=$error?></strong>
										</div>
									</div>
									<?php }?>
									<form action="" method="post">
										<div class="form-group">
											<label><strong>Username</strong></label>
											<input type="text" name="username" class="form-control">
										</div>
										<div class="form-group">
											<label><strong>Password</strong></label>
											<input type="password" name="password" class="form-control">
										</div>
										<div class="form-row d-flex justify-content-between mt-4 mb-2">
										</div>
										<div class="text-center">
											<input type="submit" name="submit" class="btn btn-primary btn-block" value="Sign me in" />
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?=admin_asset_url('vendor/global/global.min.js')?>"></script>
	<script src="<?=admin_asset_url('js/quixnav-init.js')?>"></script>
	<script src="<?=admin_asset_url('js/custom.min.js')?>"></script>
</body>
</html>
