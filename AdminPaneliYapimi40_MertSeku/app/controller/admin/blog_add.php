<?php
if(!isset($languages)){
	$languages = "";
}
if(!isset($langName)){
	$langName = "EN";
}

if(post('submit')){
	$title = post('title');
	$tag = post('tag');
	$content = post('content', true);
	$url = permalink($title);

	$values['title'] = post_unsafe('title');
	$values['tag'] = post_unsafe('tag');
	$values['content'] =  post_unsafe('content', true);

	if($title && $tag && $content && $url != ""){
		if(isset($edit_id)){
			if($activeInsert){
				$query = query("insert into blog_content SET title='{$title}', tag='{$tag}', content='{$content}', url='{$url}', lang={$lang}, blogid={$edit_id}");
			}else{
				$query = query("update blog_content SET title='{$title}', tag='{$tag}', content='{$content}', url='{$url}' where blogid={$edit_id} and lang={$lang}");
			}

			if($query){
				$success = "Successfully edited!";
			}else{
				$error = "There was an unknown error while processing the request. Try again.";
			}
		}else{
			$query = query("insert into blog set update_at=NOW()");
			if($query){
				$blogid = $baglan->insert_id;
				$queryLang = query("select * from language");
				$languageContent = [];

				$queryContent = query("insert into blog_content (title, tag, content, url, lang, blogid) values ('{$title}', '{$tag}', '{$content}', '{$url}', 1, {$blogid})");
				if($queryContent){
					$success = "Successfully added!";
					// go(admin_url('blog_list'), 5);
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
		$values['tag'] = "";
		$values['content'] = "";
	}
}

require view("admin/blog_add");
