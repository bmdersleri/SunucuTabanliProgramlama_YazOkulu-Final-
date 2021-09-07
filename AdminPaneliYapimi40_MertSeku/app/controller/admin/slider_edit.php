<?php

if(get('id')){
	$edit_id = get('id');
	$lang = get('lang') ? get('lang') : 1;

	$query = query("select * from slider_content where sliderid= " . $edit_id . " and lang=". $lang);
	$activeInsert = false;
	if(num($query) > 0){
		$values = fetch($query);
	}else{
		$activeInsert = true;
	}
	$langName = "";
	$languages = '<ul class="nav nav-pills mb-4 justify-content-end">';
	$langQuery = query("select * from language");
	while($langFetch = fetch($langQuery)){
		if($lang == $langFetch['id']){
			$langName =  $langFetch['shortcode'];
		}
		$languages .= '<li class="nav-item"><a href="'. admin_url('slider_edit?id=' . $edit_id . '&lang='. $langFetch['id']) .'" class="nav-link' .
		($lang == $langFetch['id'] ? ' active' : ' text-muted') .
		'">'.$langFetch['shortcode'].'</a></li>';
	}
	$languages .= '</ul>';
}


require controller("admin/slider_add");
