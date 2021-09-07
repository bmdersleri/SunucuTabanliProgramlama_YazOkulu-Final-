<head>
<title>Admin Giriş</title>

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

$sql="Select * from login_user";
$query=mysqli_query($db,$sql);
echo "<table align='center' border='1'>";
	echo "<tr>";
		echo "<th> İsim</th>";
		echo "<th> Kullanıcı adı</th>";
		echo "<th>Cinsiyet</th>";
		echo "<th> Telefon</th>";
		echo "<th> Pasaport</th>";
		echo "<th> Kullanıcı tipi</th>";
		echo "<th> Resminiz</th>";
	echo "</tr>";


while ($fetch=mysqli_fetch_array($query))
 {
	echo "<tr>";
		echo "<td> $fetch[name]</td>";
		echo "<td> $fetch[username]</td>";
		echo "<td> $fetch[gender]</td>";
		echo "<td> $fetch[phone]</td>";
		echo "<td> $fetch[password]</td>";
		echo "<td> $fetch[user]</td>";
		echo "<td> <img src='folder/$fetch[image]' width='100' height='100'</td>";
	echo "</tr>";
}
echo "</table>";
echo "<br><br>";
?>
<form action="../index_1.php">
<!--<input type="button" id="p2" value="Print" onclick="print11()">
<input type="submit" value="Back">  -->
</form></body>
<script type="text/javascript">
	function print11()
	{
		w=document.getElementById('p2');
		w.style.display='none';
		window.print();
		w.style.display='block';

	}
</script>