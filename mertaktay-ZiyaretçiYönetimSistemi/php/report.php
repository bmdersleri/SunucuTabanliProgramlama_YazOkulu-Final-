<head>
<title>Rapor</title>
<script type="text/javascript">
	function print11()
	{
		window.print();
	}

</script>
<style>
	body
	{
		text-align: center;
		background-image: url(../images/black_background.jpg);
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
	.new th
	{
		font-family: verdana;
		font-size: 18px;
		color: skyblue;
	}

</style>
</head>
<body>

  
</head>
<body>

<?php
include('dbconn.php');
$from=$_POST['from'];
$to=$_POST['to'];
$sql="Select * from inquery where Date between '$from' and '$to'";
$query=mysqli_query($db,$sql);
echo "<table align='center' border='1' class='new'>";
	echo "<tr>";
		echo "<th> İsim</th>";
		echo "<th> Cinsiyetr</th>";
		echo "<th> Telefon</th>";
		echo "<th> Resminiz</th>";
		echo "<th> Person Meet</th>";
		echo "<th> Departman</th>";
		echo "<th> Zamanında</th>";
		echo "<th> Çıkış Süresi</th>";
	
		echo "<th> Tarih</th>";
	echo "</tr>";


while ($fetch=mysqli_fetch_array($query))
 {
	echo "<tr>";
		echo "<td> $fetch[Name]</td>";
		echo "<td> $fetch[Gender]</td>";
		echo "<td> $fetch[Phone]</td>";
		echo "<td> <img src='$fetch[Image]' width='100' height='100'</td>";
		echo "<td> $fetch[Department]</td>";
		echo "<td> $fetch[Person_Meet]</td>";
		echo "<td> $fetch[In_Time]</td>";
		echo "<td> $fetch[Out_Time]</td>";
		echo "<td> $fetch[Date]</td>";
	echo "</tr>";
}
echo "</table>";
echo "<br><br>";
?>
<form action="#">
<input type="button" id="p1" value="Görüntüle" style="height: 35px; width: 50%; 
border-radius: 10px;border-color: black; margin-left: 100px;" onclick="print1()"><br><br>
		<a href="../index_1.php">	<input type="button" id="p2" value="Geri Dön"
		 style="height: 35px; width: 50%; border-radius: 10px;border-color: black;
		   margin-left: 100px;" ></a><br><br>
</form>
<script type="text/javascript">
		function print1()
	{
		w=document.getElementById('p1');
		w.style.display='none';
		w1=document.getElementById('p2');
		w1.style.display='none';
		window.print();
		w.style.display='block';
		w1.style.display='block';
	}

</script>
</body>