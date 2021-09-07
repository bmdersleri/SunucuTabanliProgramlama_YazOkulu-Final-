<?php
$db=mysqli_connect('localhost','root','','newuser');

if($db)
{
	echo "connection established";
}
else
{
	echo "not";
}

$username=$_POST['username'];

$password=$_POST['password'];

$role=$_POST['role'];

echo "<br><br>";

echo $username."<br>";
echo $password."<br>";
echo $role."<br>";

$sql="insert into login(username,password,roll) values('$username','$password','$role')";
$query=mysqli_query($db,$sql);

if($query)
 {
 	echo "Inserted";
}
else
	{
		echo "error";
	}
?>