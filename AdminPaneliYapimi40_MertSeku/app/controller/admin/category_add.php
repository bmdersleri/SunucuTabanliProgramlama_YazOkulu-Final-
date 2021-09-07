<?php
if(!isset($languages)){
	$languages = "";
}
if(!isset($langName)){
	$langName = "EN";
}
if(!isset($lang)){
	$lang = 1;
}
if (isset($edit_id)){
    $photos = "";
	$queryPhoto = query("select * from pcategory where id={$edit_id}");
	while($photo = fetch($queryPhoto)){
		$photos .= $photo['src'];
	}
}

if(post('submit')){	    
	$name = post('name');
    $content = post('content', true);  
	$sort = post('sort');
    $url = permalink($name);

    $values['name'] = $name;
    $values['content'] = $content; 
	$values['sort'] = $sort; 

		if(isset($edit_id)){            			
			if($name && $content && $sort){
				if($activeInsert){
					$query = query("insert into pcategory_content SET categoryid={$edit_id}, name='{$name}', content='{$content}', lang={$lang}, url='{$url}', sort={$sort}");
				}else{
					$query = query("update pcategory_content SET name='{$name}', content='{$content}', url='{$url}', sort={$sort} where categoryid='{$edit_id}' and lang='{$lang}'");
				}
				if($query){
					$success = "Successfully edited!";
				}else{
					$error = "There was an unknown error while processing the request. Try again.";
				}
			}else{
				$error = "Do not leave any blank spaces!";
			}
		}else{
			if($name && $content && $sort){

				$query = query("insert into pcategory set update_at=NOW()");
				if($query){
					$categoryid = $baglan->insert_id;
					$queryLang = query("select * from language");
					$languageContent = [];

					$queryContent = query("insert into pcategory_content (categoryid, name, content, lang,sort, url) values ({$categoryid}, '{$name}', '{$content}', 1 ,{$sort}, '{$url}')");					
					if($queryContent){
						$success = "Successfully added!";
						// go(admin_url('typology_list'), 5);
					}else{
						$error = "There was an unknown error while processing the request. Try again.";
					}
				}else{
					$error = "There was an unknown error while processing the request. Try again.";
				}
			}else{
				$error = "Do not leave any blank spaces!";
			}
		}
}else{
	if(!isset($values)){
		$values['name'] = "";
        $values['content'] = "";        
		$values['sort'] = "";  
	}
}
require view("admin/category_add");
