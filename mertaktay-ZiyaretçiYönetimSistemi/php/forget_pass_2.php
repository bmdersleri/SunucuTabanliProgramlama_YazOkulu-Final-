<?php
session_start();
include('dbconn.php');

$userone=$_SESSION['user'];
$OTP=$_POST['OTP'];

$sql="Select * from forgot where username='$userone'";
$query=mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($query);
if($fetch['OTP']==$OTP)
{
	echo "<script>
		alert('OTP confirmed');
		location.href='forgot_pass.php';
			</script>";

}
else
{
	echo "<script>
		alert('Type wrong OTP please confirm it and Try again');
		location.href='../html/forget_pass3.html';
			</script>";	
}

?>


