<?php

$DB_SERVER="localhost";
$DB_NAME="eticaret_2021";
$DB_USER="root";
$DB_PASS="";
try
{
    $db_connection = new PDO("mysql:host={$DB_SERVER};dbname={$DB_NAME};charset=utf8",$DB_USER,$DB_PASS);
    $db_connection-> setAttribute(PDO::ERRMODE_EXCEPTION,PDO::ATTR_CONNECTION_STATUS);

}
catch (PDOException $e)
{
    echo  $e->getMessage();
}
?>