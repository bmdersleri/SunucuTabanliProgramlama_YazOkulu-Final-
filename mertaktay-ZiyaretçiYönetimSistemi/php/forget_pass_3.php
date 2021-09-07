<?php
session_start();
include('dbconn.php');

$userone=$_SESSION['user'];
$newpassword=$_POST['newpassword'];
$confirmpassword=$_POST['confirmpassword'];
if($newpassword==$confirmpassword)
{
	$sql="UPDATE login_user SET Password='$confirmpassword' where username='$userone'";
	$query=mysqli_query($db,$sql);
	if($query)
	{
		echo "<script>
			alert('Your new Password is Update');
			location.href='../index.html';
			</script>";
	}
	else
	{
		echo "<script>
			alert('Error');
			</script>";
	}
}
else
{
		echo "<script>
		alert('Password are not same please Try again');
		location.href='forgot_pass.php';
			 </script>";
}
?>
