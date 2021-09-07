<?php
include('dbconn.php');

$name=$_POST['name'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$user=$_POST['user'];


$image=$_FILES['image']['name'];
$temp_name=$_FILES['image']['tmp_name'];
move_uploaded_file($temp_name,"folder/$image");

$username=$_POST['username'];
$sql="select username from login_user where username='$username'";
$query=mysqli_query($db,$sql);
$count=mysqli_num_rows($query);
if($count>0)
{
	echo "<script>
		alert('username exist ');
		location.href='admin_user_0.php';
	</script>";
}
else
{

		$sql="insert into login_user(username,name,gender,password,phone,image,user) values(
		'$username','$name','$gender','$password','$phone','$image','$user')"; 
		$query=mysqli_query($db,$sql); 
		if($query) 
		{     
			echo"<script>alert('Inserted'); 
				location.href='../index_1.php';
					</script>";	
		}
		else
		{
			echo"<script>alert ('error');
				</script>";
		}
	
}

?>