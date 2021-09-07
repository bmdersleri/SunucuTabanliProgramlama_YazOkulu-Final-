<?php  

$sname = "localhost";
$uname = "root";
$password = "********";

$db_name = "my_db2";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Bağlanma Hatası ";
}