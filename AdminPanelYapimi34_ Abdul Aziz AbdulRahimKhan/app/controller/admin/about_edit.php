<?php
if(get('id')){
	$edit_id = get('id');
	$query = query("select * from about where id= 1");
	$values = fetch($query);
}


if(post('submit')){
	$baslik = post('baslik');
	$icerik = post('icerik', true);
	
	$values['baslik'] = post_unsafe('baslik');
	$values['icerik'] =  post_unsafe('icerik', true);

	if($baslik && $icerik != ""){
		if(isset($edit_id)){
				$query = query("update about SET baslik='{$baslik}', icerik='{$icerik}' where id=1");
			if($query){
				$success = "Successfully edited!";
			}else{
				$error = "There was an unknown error while processing the request. Try again.";
			}
		}
	}else{
		$error = "Do not leave any blank spaces!";
	}
}else{
	if(!isset($values)){
		$values['baslik'] = "";
		$values['icerik'] = "";
	}
}

require view("admin/about_edit");
