<?php
	$id = get("id");
	if(!$id){
		go(admin_url('index'));
		exit;
	}	
	$photos = "";
	$queryPhoto = query("select * from photos where id={$id}");

	while($photo = fetch($queryPhoto)){
		$photos .= '<span id="' . $photo['id'] . '" class="img"><img src="' . site_url($photo['src']) . '" width="200" alt="" /></span>';
	}

	$result = fetch($queryPhoto);
	$h1 = 'Update photo';
	$h2 = 'You can sort photos by drag and drop. The first photo will be used for product preview.';   
	require view("admin/photo_add");
