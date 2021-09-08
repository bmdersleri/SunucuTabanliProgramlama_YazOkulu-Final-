<?php

function controller($name){
	return controller . '/' . $name . '.php';
}

function view($name){
	return view . '/' . $name . '.php';
}

function plugin($name){
	return plugin. '/' . $name . '.php';
}

function go($url=NULL, $time=NULL){
	if($time==NULL){
		header("Location:" . ($url != NULL ? $url : site_url()));
	}else{
		header("Refresh:" . $time . ";url=" . ($url != NULL ? $url : site_url()));
	}
}

function getBugun(){
    $trh = "";
    $trh .= date("d");
    $trh .= ' '.getAy(date("m"));
    $trh .= ' '.date("Y");
    $trh .= ' '.getGun(date("N"));
    $trh .= ' '.date("G:i");
    return $trh;
}

function getGun($i){
    $t = "";
    $i==1?$t="Pazartesi":($i==2?$t="Salı":($i==3?$t="Çarşamba":($i==4?$t="Perşembe":($i==5?$t="Cuma":($i==6?$t="Cumartesi":($i==7? $t="Pazar":null))))));
    return $t;
}

function getAy($i){
    $t="";
    $i==1?$t="Ocak":($i==2?$t="Şubat":($i==3?$t="Mart":($i==4?$t="Nisan":($i==5?$t="Mayıs":($i==6?$t="Hazıran":($i==7?$t="Temmuz":($i==8?$t="Ağustos":($i==9?$t="Eylül":($i==10?$t="Ekim":($i==11?$t="Kasım":($i==12?$t="Aralık":null)))))))))));
    return $t;
}
