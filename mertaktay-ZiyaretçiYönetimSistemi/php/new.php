<?php
session_start();
$e=$_SESSION['qr'];
include('dbconn.php');
if(isset($_POST['submit']))
{
date_default_timezone_set('Asia/Kolkata');
$name=$_POST['name1'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$department=$_POST['department'];
$person_meet=$_POST['person_meet'];
$in_time=date("h:i");
$date=date("Y-m-d");

define('UPLOAD_DIR', 'images/');
	$img=$_POST['image'];
	$s=rand();
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = UPLOAD_DIR . "$s" . '.png';
	$success = file_put_contents($file, $data);
	


$sql="insert into inquery(Name,Gender,Phone,Department,Person_Meet,In_Time,Date,qr_code,Image) values(
'$name','$gender','$phone','$department','$person_meet','$in_time','$date','$e','$file')"; 
$query=mysqli_query($db,$sql); 
if($query) 
		{     
			echo"<script>alert('Inserted'); 
		     	location.href='slip.php';
					</script>";	
		}
		else
		{
			echo "<br>";
			echo"<script>alert ('error');</script>";
		}

}

?>

