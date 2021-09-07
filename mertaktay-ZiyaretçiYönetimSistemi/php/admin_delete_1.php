<?php
include('dbconn.php');
$id=$_GET['id'];

$sql="delete from login_user where id='$id'";
$query=mysqli_query($db,$sql);

if($query)
{
	echo "<script>
		alert('data deleted');
		location.href='admin_delete_0.php';
			</script>";
}
else
{
	echo "Error";
}
?>