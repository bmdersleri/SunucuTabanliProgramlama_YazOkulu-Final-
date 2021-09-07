<?php
include('dbconn.php');
$id=$_GET['id'];

$sql="delete from department where id='$id'";
$query=mysqli_query($db,$sql);

if($query)
{
	echo "<script>
		alert('veriler silindi');
		location.href='department_delete_0.php';
			</script>";
}
else
{
	echo "Hata";
}
?>