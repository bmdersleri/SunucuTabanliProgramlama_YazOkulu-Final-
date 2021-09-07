

<!DOCTYPE html>
<html>
<head>
	<title>Giriş</title>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


	<style type="text/css">



		@import url('https://fonts.googleapis.com/css?family=Numans');

		html,body{

			background-color: #161929;
			height: 100%;
			font-family: 'Numans', sans-serif;
		}

		.container{
			height: 100%;
			align-content: center;
		}

		.card{

			margin-top: auto;
			margin-bottom: auto;
			padding: 25px;
			box-shadow: 0 0 10px black;
			background: rgb(26,33,57);
			background: linear-gradient(0deg, rgba(26,33,57,1) 0%, rgba(22,25,41,1) 60%, rgba(24,30,51,1) 100%);

		}


		.input-group-prepend span{
			width: 50px;

			color: #898792;
			border-radius: 0px!important;
			border-right: 0px!important;
			background: rgb(26,33,57);
			background: linear-gradient(0deg, rgba(26,33,57,1) 0%, rgba(22,25,41,1) 60%, rgba(24,30,51,1) 100%);

		}

		input {

			border-left: 0px!important;
			background: rgb(26,33,57);
			background: linear-gradient(0deg, rgba(26,33,57,1) 0%, rgba(22,25,41,1) 60%, rgba(24,30,51,1) 100%);
			border-radius: 0px!important;
		}

		input:focus{
			box-shadow: 0 0 10px black;
			border-color: #fff!important;

		}
		.login_btn{
			color: #898792;
			background-color: #1a2139;
			width: 100px;
			border: 1px solid #898792;
			border-radius: 0px!important;
		}





	</style>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>
<body>
	<div  class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">


				<div class="card-body">
					<form method="POST" action="islemler.php" >
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="k_adi" class="form-control">

						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-lock"></i></span>
							</div>
							<input type="password" name="sifre" class="form-control">
						</div>

						<div class="form-group">
							<button type="submit" name="girisYap" class="btn float-right login_btn">Giriş Yap </button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</body>
</html>