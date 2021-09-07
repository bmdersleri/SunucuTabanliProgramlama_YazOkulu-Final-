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

if(post('submit')){
	$pcategoryid = post('pcategoryid');
	$name = post('name');	
	$content = post('content', true);
	$url = permalink($name);

	$values['pcategoryid'] = $pcategoryid;
	$values['name'] = $name;	
	$values['content'] = $content;

	

		if(isset($edit_id)){
			if($name && $content && $url){
				$query = query("update product_content SET name='{$name}', content='{$content}', url='{$url}' where productid={$edit_id} and lang={$lang}");
				
			}
			if($pcategoryid && $name && $content){
				if($activeInsert){
					$query = query("insert into product_content (productid, name, content, lang, url) values ('{$edit_id}', '{$name}', '{$content}', '{$lang}', '{$url}')");
				}else{
					$query = query("update product SET pcategoryid={$pcategoryid} where id={$edit_id}");

				}
				if($query){
					$success = "Successfully added!";
				}else{
					$error = "There was an unknown error while processing the request. Try again.";
				}
			}else{
				$error = "Do not leave any blank spaces!";
			}
		}else{
			if($pcategoryid && $name && $content && $url){

				$query = query("insert into product (pcategoryid) values ($pcategoryid)");
				if($query){
					$productid = $baglan->insert_id;
					$queryLang = query("select * from language");
					$languageContent = [];

					$queryContent = query("insert into product_content (productid, name, content, lang, url) values ('{$productid}', '{$name}', '{$content}', 1, '{$url}')");
					if($queryContent){
						$success = "Successfully added!";
						// go(admin_url('product_list'), 5);
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
		$values['pcategoryid'] = "";
		$values['name'] = "";	
		$values['content'] = "";
	}
}
	if($lang==1){
		$categorygonder = '';
		$categorytut = query("select * from pcategory_content where lang=". $lang);
		while($tut = fetch($categorytut)){
			$selected = '';
			if($values['pcategoryid'] == $tut['categoryid']){
				$selected = 'selected="selected"';
			}
			$categorygonder .= '<option value="'.$tut['categoryid'].'" '.$selected.'>'.$tut['name'].'</option>';
		}		
	}
	
	$categoryselected = '';	
	if($lang>1){		
		$categorytut = query("select * from product as p, pcategory_content as tc where p.pcategoryid = tc.categoryid and p.id=$edit_id and lang=". $lang);
		while($t = fetch($categorytut)){			
			$categoryid = $t['categoryid'];
			$name = $t['name'];	
			$categoryselected .= '<option value="'.$categoryid.'">'.$name.'</option>';					
		}		
	}

require view("admin/product_add");
