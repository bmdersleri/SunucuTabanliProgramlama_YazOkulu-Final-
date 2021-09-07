<head>
<title>Admin Girişi</title>
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
		echo "<th> Kullanıcı Adı</th>";
		echo "<th> Cinsiyet</th>";
		echo "<th> Telefon</th>";
		echo "<th> Pasaport</th>";
		echo "<th> Kullanacı Tipi</th>";
		echo "<th> Resminiz</th>";
		echo "<th> Sil</th>";
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
		echo "<td> <a href='admin_delete_1.php?id=$fetch[0]'>Sil</a></td>";
	echo "</tr>";
}
echo "</table>";
echo "<br><br>";
?>
<form action="../index_1.php">
<!--
<input type="button" id="p3" value="Print" onclick="print12()">
<input type="submit" value="Back"> -->
</form>
<script type="text/javascript">
	function print12()
	{
		w=document.getElementById('p3');
		w.style.display='none';
		window.print();
		w.style.display='block';

	}
</script>

</body>