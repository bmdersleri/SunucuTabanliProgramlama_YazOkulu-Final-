<?php
if(!isset($languages)){
	$languages = "";
}
if(!isset($langName)){
	$langName = "EN";
}
if (isset($edit_id)){
    $photos = "";
	$queryPhoto = query("select * from slider where id={$edit_id}");
	while($photo = fetch($queryPhoto)){
		$photos .= $photo['src'];
	}
}
if(post('submit')){

	$title = post('title');
	$subtitle = post('subtitle');
	$url = post('url');
	$content = post('content');
	$sort = post('sort');
	$designedby = post('designedby');


	$values['title'] = post_unsafe('title');
	$values['subtitle'] = post_unsafe('subtitle');
	$values['url'] = post_unsafe('url');
	$values['content'] =  post_unsafe('content');
	$values['sort'] =  post_unsafe('sort');
	$values['designedby'] =  post_unsafe('designedby');

	if($title && $subtitle && $content && $sort){
		if(isset($edit_id)){
			if($activeInsert){
				$query = query("insert into slider_content SET title='{$title}', subtitle='{$subtitle}', content='{$content}',sort={$sort}, url='{$url}',designedby='{$designedby}', lang={$lang}, sliderid={$edit_id}");
			}else{
				$query = query("update slider_content SET title='{$title}', subtitle='{$subtitle}', content='{$content}',sort={$sort}, url='{$url}',designedby='{$designedby}' where sliderid={$edit_id} and lang={$lang}");
			}

			if($query){
				$success = "Successfully edited!";
			}else{
				$error = "There was an unknown error while processing the request. Try again.";
			}
		}else{
			$query = query("insert into slider set update_at=NOW()");
			if($query){
				$sliderid = $baglan->insert_id;
				$queryLang = query("select * from language");
				$languageContent = [];

				$queryContent = query("insert into slider_content (title, subtitle, content,sort, url, designedby, lang, sliderid) values ('{$title}', '{$subtitle}', '{$content}',{$sort}, '{$url}','{$designedby}', 1, {$sliderid})");
				if($queryContent){
					$success = "Successfully added!";
				}else{
					$error = "There was an unknown error while processing the request. Try again.";
				}
			}else{
				$error = "There was an unknown error while processing the request. Try again.";
			}
		}
	}else{
		$error = "Do not leave any blank spaces!";
	}
}else{
	if(!isset($values)){

			$values['title'] = "";
			$values['subtitle'] = "";
			$values['url'] = "";
			$values['content'] = "";
			$values['sort'] = "";
			$values['designedby'] = "";

	}
}

require view("admin/slider_add");
