<?php

require_once "app/init.php";

$_url = get('adress');
$_url = array_filter(explode("/", $_url));
if(!isset($_url[0]) || $_url[0] == 'sayfa' ){
	$_url[0] = 'index';
}


if(!file_exists(controller($_url[0]))){
	$_url[0] = '404';
}

$this_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($_url[0] == 'app'){
	exit;
}

require controller($_url[0]);
