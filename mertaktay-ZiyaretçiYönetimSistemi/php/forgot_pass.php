<!DOCTYPE html>
<html>
<head>
	<title>Şifreyi güncelle</title>
	<style>
			.main
		{
			width: 100%;
			text-align: center;
			padding: 30px;
			height: 640px;
			
		}
		.main h2
		{
			color: white;
			font-size: 38px;
		}
		body
		{
			margin:0px;
			background:-webkit-linear-gradient(#384e72, #4b648c ,#60789e,#4b648c, #384e72);
		}
	</style>
</head>
<body>
<form action="forget_pass_3.php" method="post">
	<div class="main">
	<h2>Update your password </h2>
	<input type="password" name="newpassword" placeholder="New Password"  style="width: 300px; height: 10px; border-radius: 10px; border: none; padding: 10px;"><br><br>
	<input type="password" name="confirmpassword" placeholder="Confirm Password" style="width: 300px; height: 10px; border-radius: 10px; border: none; padding: 10px;"><br><br>
	<input type="submit" value="Check" style="width: 200px; height: 25px; border-radius: 10px; border: none; cursor: pointer;">
	</div>
</form>

</body>
</html>