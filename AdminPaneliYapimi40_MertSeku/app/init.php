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

$langcookie = 1;
if(get('lang')){
	if(strlen(get('lang')) == 1 && is_numeric(get('lang'))){
		setcookie("lang", get('lang'));
		$langcookie = get('lang');
	}
}

require 'system/config.php';

require realpath(".").'/app/classes/class.mysqli.php';

if(isset($_COOKIE['lang']) && !get('lang')) {
	$langcookie = htmlspecialchars(strip_tags(filterUrl($_COOKIE['lang'])));
	if(!is_numeric($langcookie)){
		$langcookie = 1;
	}else{
		if(strlen($langcookie) > 1){
			$langcookie = 1;
		}else{
			$langQuery = query("select * from language where id={$langcookie}");
			if(num($langQuery) <= 0){
				$langcookie = 1;
			}
		}
	}
}

$dlangQuery = query("select name, content from language_content where lang=1");
$default_lang = array();
while($langFetch = fetch($dlangQuery)){
	$_default_lang[$langFetch['name']] = $langFetch['content'];
}

$langQuery = query("select name, content from language_content where lang=" . $langcookie);
$_lang = array();
while($langFetch = fetch($langQuery)){
	$_lang[$langFetch['name']] = $langFetch['content'];
}
?>
