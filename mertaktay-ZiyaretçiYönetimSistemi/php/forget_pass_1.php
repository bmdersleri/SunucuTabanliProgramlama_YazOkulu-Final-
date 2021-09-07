<!DOCTYPE html>
<html>
<head>
	<title>şifreyi unut</title>
</head>
<body>
<?php
session_start();
include('dbconn.php');

$username=$_POST['username'];
$sql="Select * from login_user where Username='$username'";
$query=mysqli_query($db,$sql);
$check=mysqli_num_rows($query);
$random=rand(1000,9999);
if($check>0)
{
	$_SESSION['user']=$username;
	$sql="Delete from forgot where username='$username'";
	$query=mysqli_query($db,$sql);
	$sql="Insert into forgot(username,OTP) values('$username','$random')";
	$query=mysqli_query($db,$sql);
	echo "<script>

			alert('Please confirm your OTP and update your password ');
			location.href='../html/forget_pass3.html';
		</script>";
}
else
{
	echo "No such type of username exist in this account";
}


?>
</body>
</html>