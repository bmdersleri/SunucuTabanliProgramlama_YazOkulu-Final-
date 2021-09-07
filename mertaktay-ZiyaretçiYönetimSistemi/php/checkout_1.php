<?php
include('dbconn.php');
date_default_timezone_set('Asia/Kolkata');
$date=date("Y-m-d");
$out_time=date("h:i");
$phone=$_POST['phone'];
$sql="select max(Id) from inquery where Phone='$phone'";
$query1=mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($query1);
$p= $fetch[0];
/*
$sql="select * from inquery where Phone='$phone' and Date='$date' and Id='$p'";
$query=mysqli_query($db,$sql);
$count=mysqli_num_rows($query);
if($count<0)
{
	echo "<script>
		alert('phone number exist');
	</script>";
}
else
{
	echo "<script>
		alert('not exist');
	</script>";
} */

$sql="UPDATE inquery SET Out_Time='$out_time' where Phone='$phone' and Date='$date' and Id='$p'";
$query=mysqli_query($db,$sql);
if($query)
{
	echo "<script>
		alert('Visitor Out time Update');
		location.href='../dashboard.php';
		</script>";
}
else
{
	echo "<script>
		alert('Error');
		location.href='checkout.php';
		</script>";
}

?>