<?php
if(get('id')){
	$edit_id = get('id');	

	$query = query("select * from blogs where id= " . $edit_id);

	$values = fetch($query);
}


if(post('submit')){
	$baslik = post('baslik');
	$icerik = post('icerik', true);
	$src = permalink($baslik);

	$values['baslik'] = post_unsafe('baslik');
	$values['icerik'] =  post_unsafe('icerik', true);

	if($baslik && $icerik && $src != ""){
		if(isset($edit_id)){
				$query = query("update blogs SET baslik='{$baslik}', icerik='{$icerik}', src='{$src}' where id={$edit_id}");
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

require view("admin/blog_edit");
