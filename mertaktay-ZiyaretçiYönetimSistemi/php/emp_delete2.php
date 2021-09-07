<?php
include('dbconn.php');
$id=$_GET['id'];

$sql="delete from emp_table where id='$id'";
$query=mysqli_query($db,$sql);

if($query)
{
	echo "<script>
		alert('data deleted');
		location.href='emp_delete1_0.php';
			</script>";
}
else
{
	echo "Error";
}
?>