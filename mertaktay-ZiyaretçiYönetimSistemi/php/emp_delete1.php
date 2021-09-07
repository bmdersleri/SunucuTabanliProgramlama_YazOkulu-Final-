<head>
<title>Çalışan Ayrıntılarını Sil</title>
<style>
	body
	{
		text-align: center;
		background-size: cover;
		background-repeat: no-repeat;
	}

	table
	{

		border-collapse: collapse;
		border:none;
	}
	td
	{
		text-align: center;
		height: 50px;
		width: 150px;
		color: white;
	}
	img
	{
		border: none;
	}
	th
	{
		font-family: verdana;
		font-size: 23px;
		color: skyblue;
	}

</style>
</head>
<body>
<?php
include('dbconn.php');

$sql="Select * from emp_table";
$query=mysqli_query($db,$sql);
echo "<table align='center' border='1'>";
	echo "<tr>";
		echo "<th> İsim</th>";
		echo "<th> Cinsiyet</th>";
		echo "<th> Yaş</th>";
		echo "<th> Telefon</th>";
		echo "<th> E-mail</th>";
		echo "<th> Departmant</th>";
		echo "<th> Sil</th>";
	echo "</tr>";


while ($fetch=mysqli_fetch_array($query))
 {
	echo "<tr>";
		echo "<td> $fetch[name]</td>";
		echo "<td> $fetch[gender]</td>";
		echo "<td> $fetch[age]</td>";
		echo "<td> $fetch[phone]</td>";
		echo "<td> $fetch[email_id]</td>";
		echo "<td> $fetch[department_name]</td>";
		echo "<td> <a href='emp_delete2.php?id=$fetch[0]'>Sil</a></td>";

	echo "</tr>";
}
echo "</table>";
echo "<br><br>";
?>
<form action="../index_1.php">
<!--<input type="submit" value="Back" /> -->
</form>


</body>