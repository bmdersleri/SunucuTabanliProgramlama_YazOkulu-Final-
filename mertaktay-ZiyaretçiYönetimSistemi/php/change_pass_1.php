<?php
$db=mysqli_connect("localhost","root","","newuser");

$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST['newpassword'];
$confirmpassword=$_POST['confirmpassword'];
$username=$_POST['username'];
$sql="select * from form where username='$username'";
$query=mysqli_query($db,$sql);
$check=mysqli_num_rows($query);
if($check>0)
{
	$fetch=mysqli_fetch_array($query);
	if($fetch['Password']==$oldpassword)
	{
		if($newpassword==$confirmpassword)
		{
			$sql="UPDATE form SET Password='$confirmpassword' where username='$username'";
			$query=mysqli_query($db,$sql);
			if($query)
			{
				echo "<script>
					alert('password Update');
					 </script>";
			}
			else
			{
				echo "<script>
					alert('error');
					 </script>";
			} 
		}
		else
		{
			echo "your new password and confirm password do not match";
		}
	}
	else
	{
		echo "Your old password do not match";
	}
}
else
{
	echo "username does'nt exist";
}

?>