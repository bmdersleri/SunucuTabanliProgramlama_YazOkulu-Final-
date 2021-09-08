<?php
if (post('submit')) {
	$baslik = post('baslik');
	$icerik = post('icerik', true);
	$src = permalink($baslik);

	$values['baslik'] = post_unsafe('baslik');
	$values['icerik'] =  post_unsafe('icerik', true);

	if ($baslik && $icerik && $src != "") {
		$queryContent = query("insert into blogs (baslik, icerik, src) values ('{$baslik}', '{$icerik}', '{$src}')");
		if ($queryContent) {
			$success = "Successfully added!";
		} else {
			$error = "There was an unknown error while processing the request. Try again.";
		}
	}
 else {
	$error = "Do not leave any blank spaces!";
}
}
else{
	if(!isset($values)){
		$values['baslik'] = "";
		$values['icerik'] = "";
	}
}

require view("admin/blog_add");
