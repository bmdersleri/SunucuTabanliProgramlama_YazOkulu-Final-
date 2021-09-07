<?php
	$id = get("id");
	if(!$id){
		go(admin_url('project_list'));
		exit;
	}
	$delete = get('deleteSrc');
	if($delete){

		$q = query("delete from project_photo where projectid={$id} and src='{$delete}'");
		if($q){
			if(file_exists(realpath('.') . '/' . $delete)){
				unlink(realpath('.') . '/' . $delete);
				$success = "Deleted!";
			}
		}else{
			$error = "Can not be deleted!" . "delete from project_photo where projectid={$id} and src='{$delete}'";
		}
	}
	$query = query("select * from project_content where projectid={$id} and lang=1");
	if(num($query) <= 0){
		go(admin_url('project_list'));
		exit;
	}

	if (isset($_POST["submit"])) {

		$tut = explode(",", $_POST["sort"]);
		for ($i = 0; $i < count($tut); $i++) {
			query("UPDATE project_photo SET sort='" . $i . "' WHERE id=" . $tut[$i]);
		}
	}


	$photos = "";
	$queryPhoto = query("select * from project_photo where projectid={$id} ORDER BY sort ASC");
	while($photo = fetch($queryPhoto)){
		$photos .= '<span id="' . $photo['id'] . '" class="img"><img src="' . site_url($photo['src']) . '" width="200" alt="" /><a href="' . admin_url('project_photo?id=' . $id . '&deleteSrc=' . $photo['src']) . '" class="delete"><i class="fa fa-close"></i></a></span>';
	}

	$result = fetch($query);
	$h1 = 'Add photos to project named: ' .$result['name'];
	$h2 = 'You can sort photos by drag and drop. The first photo will be used for project preview.';

	require view("admin/project_photo");
?>
