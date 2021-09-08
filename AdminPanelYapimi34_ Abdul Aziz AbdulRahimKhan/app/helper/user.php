<?php


function session($name, $value = null){
    if($value){
        $_SESSION[$name] = $value;
    }
    if(isset($_SESSION[$name])){
        return $_SESSION[$name];
    }
}

function islogin($login = true){
	if($login){
		if(session('login')){
			go();
			exit;
		}
	}else{
		if(!session('login')){
			go();
			exit;
		}
	}
}
