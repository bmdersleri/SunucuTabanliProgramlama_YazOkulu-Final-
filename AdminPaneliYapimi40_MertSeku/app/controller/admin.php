<?php


$controller = url(1);
if($controller == ""){
	$controller = "index";
}

if(!session('username')){
	$controller = "login";
}

if(!file_exists(controller("admin/" . $controller))){
	require_once controller('404');
}

require_once controller("admin/" . $controller);
?>
