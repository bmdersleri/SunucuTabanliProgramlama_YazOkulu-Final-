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
	$queryPhoto = query("select * from typology where id={$edit_id}");
	while($photo = fetch($queryPhoto)){
		$photos .= $photo['src'];
	}
}

if(post('submit')){	
    // $src = post('src');
	$typology = post('typology');    
    $url = permalink($typology);

	// if($typology){
	// 	$values['src'] = $src;
	// }
    // $values['src']  = $src;
	$values['typology'] = $typology;
    

		if(isset($edit_id)){
            // if($src){
			// 	$query = query("update typology SET name='{$typology}' where id={$edit_id}");
			// }			
			if($typology){
				if($activeInsert){
					$query = query("insert into typology_content SET typologyid={$edit_id}, typology='{$typology}', lang={$lang}, url='{$url}'");
				}else{
					$query = query("update typology_content SET typology='{$typology}', url='{$url}' where typologyid='{$edit_id}' and lang='{$lang}'");
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
			if($typology){

				$query = query("insert into typology set update_at=NOW()");
				if($query){
					$typologyid = $baglan->insert_id;
					$queryLang = query("select * from language");
					$languageContent = [];

					$queryContent = query("insert into typology_content (typologyid, typology, lang, url) values ({$typologyid}, '{$typology}', 1 , '{$url}')");					
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
		$values['typology'] = "";
        // $values['src']  = "";
	}
}
require view("admin/typology_add");
