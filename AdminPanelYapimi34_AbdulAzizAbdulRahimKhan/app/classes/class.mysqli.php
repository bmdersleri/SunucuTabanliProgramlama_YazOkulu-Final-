<?php

try{
	$baglan = new mysqli($config['db']['host'], $config['db']['user'], $config['db']['pass'], $config['db']['name']);
	if ($baglan->connect_error){
		die('Connect Error (' . $baglan->connect_errno . ') ' . $baglan->connect_error);
	}
} catch(Exception $v){
	echo "Bağlantı Hatası:".$v->getMessage();
	exit;
}

function query($s=""){
	global $baglan;
	return $baglan->query($s);
}

function fetch($s){
	return $s->fetch_assoc();
}

function fetch_all($s){
	return $s->fetch_all();
}

function num($s){
	return $s->num_rows;
}

function insert_id(){
	global $baglan;
	return ;
}

## Karakter Sorunu ##
mysqli_set_charset($baglan, "utf8");
