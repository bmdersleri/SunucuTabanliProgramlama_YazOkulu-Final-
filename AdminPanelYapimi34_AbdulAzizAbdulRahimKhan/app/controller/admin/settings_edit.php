<?php
if(get('id')){
	$edit_id = get('id');	

	$query = query("select * from settings where id= " . $edit_id);

	$values = fetch($query);
}


if(post('submit')){
	$name = post('name');
	$description = post('description', true);
	

	$values['name'] = post_unsafe('name');
	$values['description'] =  post_unsafe('description', true);

	if($name && $description != ""){
		if(isset($edit_id)){
				$query = query("update settings SET description='{$description}' where id={$edit_id}");
                
			if($query){
				$success = "Successfully edited!";
			}else{
				$error = "There was an unknown error while processing the request. Try again.";
			}
		}
	}else{
		$error = "update settings SET description='{$description}' where id={$edit_id}";
	}
}else{
	if(!isset($values)){
		$values['name'] = "";
		$values['description'] = "";
	}
}

require view("admin/settings_edit");
