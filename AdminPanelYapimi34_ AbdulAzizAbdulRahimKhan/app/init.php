<?php

ini_set('session.gc_maxlifetime', 3600);
session_set_cookie_params(3600);

session_start();
ob_start();
date_default_timezone_set("Europe/Istanbul");

function auto_load_class($className){
	$classFile = realpath(".").'/app/classes/class.'.strtolower($className).'.php';
	if(file_exists($classFile)){
		include $classFile;
	}
}

spl_autoload_register('auto_load_class');

Helper::Load();

if(session('login')){
	$username = session('username');
	$userid = session('userid');
	$name = session('name');
}
require 'system/config.php';

require realpath(".").'/app/classes/class.mysqli.php';
?>
