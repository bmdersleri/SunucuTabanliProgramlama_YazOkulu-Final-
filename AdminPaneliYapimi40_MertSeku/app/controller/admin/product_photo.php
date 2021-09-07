<?php
	$id = get("id");
	if(!$id){
		go(admin_url('product_list'));
		exit;
	}
	$delete = get('deleteSrc');
	if($delete){

		$q = query("delete from product_photo where productid={$id} and src='{$delete}'");
		if($q){
			if(file_exists(realpath('.') . '/' . $delete)){
				unlink(realpath('.') . '/' . $delete);
				$success = "Deleted!";
			}
		}else{
			$error = "Can not be deleted!" . "delete from product_photo where productid={$id} and src='{$delete}'";
		}
	}
	$query = query("select * from product_content where productid={$id} and lang=1");
	if(num($query) <= 0){
		go(admin_url('product_list'));
		exit;
	}

	if (isset($_POST["submit"])) {

		$tut = explode(",", $_POST["sort"]);
		for ($i = 0; $i < count($tut); $i++) {
			query("UPDATE product_photo SET sort='" . $i . "' WHERE id=" . $tut[$i]);
		}
	}


	$photos = "";
	$queryPhoto = query("select * from product_photo where productid={$id} ORDER BY sort ASC");
	while($photo = fetch($queryPhoto)){
		$photos .= '<span id="' . $photo['id'] . '" class="img"><img src="' . site_url($photo['src']) . '" width="200" alt="" /><a href="' . admin_url('product_photo?id=' . $id . '&deleteSrc=' . $photo['src']) . '" class="delete"><i class="fa fa-close"></i></a></span>';
	}

	$result = fetch($query);
	$h1 = 'Add photos to product named: ' .$result['name'];
	$h2 = 'You can sort photos by drag and drop. The first photo will be used for product preview.';

	require view("admin/product_photo");
