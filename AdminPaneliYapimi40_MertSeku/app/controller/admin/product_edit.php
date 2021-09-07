<?php

$lang = get('lang') ? get('lang') : 1;

if(get('id')){
	$edit_id = get('id');
	$query = query("select * from product as b, product_content as bc where bc.productid = b.id and productid=$edit_id  and lang=1");
	$query1 = query("select * from product as b, product_content as bc where bc.productid = b.id and productid=$edit_id and lang=". $lang);

	
	$activeInsert = false;
	if(num($query) > 0){
		$values = fetch($query);
		$activeInsert = true;
	}
	if(num($query1) > 0){
		$values = fetch($query1);
		$activeInsert = false;
	}
	$langName = "";
	$languages = '<ul class="nav nav-pills mb-4 justify-content-end">';
	$langQuery = query("select * from language");
	while($langFetch = fetch($langQuery)){
		if($lang == $langFetch['id']){
			$langName =  $langFetch['shortcode'];
		}
		$languages .= '<li class="nav-item"><a href="'. admin_url('product_edit?id=' . $edit_id . '&lang='. $langFetch['id']) .'" class="nav-link' .
		($lang == $langFetch['id'] ? ' active' : ' text-muted') .
		'">'.$langFetch['shortcode'].'</a></li>';
	}
	$languages .= '</ul>';
}


require controller("admin/product_add");

