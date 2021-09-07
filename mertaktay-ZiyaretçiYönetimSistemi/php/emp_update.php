<?php
session_start();
include('dbconn.php');
$id=$_SESSION['id'];
//$id=$_POST['id'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$department=$_POST['department'];
$age=$_POST['age'];
$email=$_POST['email'];


$sql="UPDATE emp_table SET name='$name',gender='$gender',phone='$phone', department_name='$department', age='$age', email_id='$email' WHERE id='$id' ";
$query=mysqli_query($db,$sql); 
		if($query) 
		{     
			echo"<script>alert('Employe Details Update'); 
			location.href='emp_edit1_0.php';
					</script>";	
		}
		else
		{
			echo"<script>alert ('error');
				</script>";
		}

?>

