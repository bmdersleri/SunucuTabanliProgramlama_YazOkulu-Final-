<head>
<title>Veriyi güncelle</title>	
</head>
<?php
$db=mysqli_connect("localhost","root","","newuser");


$id=$_POST['id'];
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$hobbies=$_POST['hobbies'];
$h=implode(',', $hobbies);

$image=$_FILES['image']['name'];
$temp_name=$_FILES['image']['tmp_name'];

move_uploaded_file($temp_name,"folder/$image");

//$sql="Update form(Name,Username,Password,Gender,Hobbies,Image) values ('$name','$username','$password','$gender','$h','$image')";
$sql="UPDATE form SET Name='$name',Username='$username',Password='$password',Gender='$gender',Hobbies='$h',Image='$image' WHERE id='$id' ";
$query=mysqli_query($db,$sql);

if($query)
{
	echo "<script>
		alert('Data Update');
		location.href='module.html';
		 </script>";
}
else
{
	echo "<script>
		alert('error');
		 </script>";
}



?>