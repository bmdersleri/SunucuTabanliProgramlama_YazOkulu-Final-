<?php
include('dbconn.php');


$department_name=$_POST['department_name'];

$sql="select department_name from department where department_name='$department_name'";
$query=mysqli_query($db,$sql);
$count=mysqli_num_rows($query);
if($count>0)
{
	echo"<script>
		alert('Department already Exist');
		location.href='department.php'; 
					</script>";	
}
else
{
	$sql="insert into department(department_name) values('$department_name')";
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

