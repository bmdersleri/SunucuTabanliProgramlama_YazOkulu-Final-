<?php
include('dbconn.php');


$name=$_POST['name'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$department=$_POST['department'];
$age=$_POST['age'];
$email=$_POST['email'];


$sql="insert into emp_table(name,gender,phone,department_name,age,email_id) values(
'$name','$gender','$phone','$department','$age','$email')"; 
$query=mysqli_query($db,$sql); 
		if($query) 
		{     
			echo"<script>alert('Eklendi'); 
				location.href='../index_1.php';
					</script>";	
		}
		else
		{
			echo"<script>alert ('Hata');
				</script>";
		}


?>

