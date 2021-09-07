<?php
session_start();
include('dbconn.php');

$username=$_POST['username'];
$password=$_POST['password'];
$user=$_POST['user'];


$sql="select * from login_user where username='$username'";
$query=mysqli_query($db,$sql);
$check=mysqli_num_rows($query); 
if($check>0)
{
	$fetch=mysqli_fetch_array($query);
	if($fetch['password']==$password )
	{	
		$_SESSION['user']=$username;
		if($fetch['user']==$user && $fetch['user']=='admin')
		{
			echo "<script>
				location.href='../index_1.php';
			</script>";
		}
		elseif ($fetch['user']==$user && $fetch['user']=='guard') {
			echo "<script>
				location.href='../dashboard.php';
			</script>";
		}
		else
		{
			echo "<script>
				alert('Please select correct User Type');
				location.href='../index.html';
			</script>";
		}
	}
	else
	{
		echo "<script>
				alert('şifre yanlış');
				location.href='../index.html';
			</script>";
	}
}
else
{
			echo "<script>
				alert('Kullanıcı adı yanlış');
				location.href='../index.html';
			</script>";
}

?>