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
	$name = post('name');
	$typology = post('typology');
	$location = post('location');
	$city = post('city');
	$year = post('year');
	$projectarea = post('projectarea');
	$customer = post('customer');
	$country = post('country');
	$designedby = post('designedby');
	$url = permalink($name);

	$values['name'] = $name;
	$values['typology'] = $typology;
	$values['location'] = $location;
	$values['city'] = $city;
	$values['year'] = $year;
	$values['projectarea'] = $projectarea;
	$values['customer'] = $customer;
	$values['country'] = $country;
	$values['designedby'] = $designedby;

		if(isset($edit_id)){
			if($name && $customer && $url && $country){
				$query = query("update project_content SET name='{$name}', customer='{$customer}', country='{$country}',designedby='{$designedby}', url='{$url}' where projectid={$edit_id} and lang={$lang}");			
				
			}
			if($typology && $location && $city && $year){
				if($activeInsert){
					$query = query("insert into project_content (projectid, name, customer, designedby, lang, country, url) values ('{$edit_id}', '{$name}', '{$customer}', '{$designedby}', '{$lang}', '{$country}', '{$url}')");
				}else{
					$query = query("update project SET typology={$typology}, location={$location}, city='{$city}', year='{$year}', projectarea='{$projectarea}' where id={$edit_id}");					
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
			if($name && $typology && $location && $city && $year && $customer && $url){
				$query = query("insert into project (typology, location, city, year, projectarea) values ('{$typology}', '{$location}', '{$city}','{$year}','{$projectarea}')");
				if($query){
					$projectid = $baglan->insert_id;
					$queryLang = query("select * from language");
					$languageContent = [];
					$queryContent = query("insert into project_content (projectid, name, customer,designedby, country, lang, url) values ('{$projectid}', '{$name}', '{$customer}', '{$designedby}', '{$country}', 1, '{$url}')");
					if($queryContent){
						$success = "Successfully added!";
						go(admin_url('project_list'), 5);
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
		$values['typology'] = "";
		$values['location'] = "";
		$values['city'] = "";
		$values['year'] = "";
		$values['projectarea'] = "";
		$values['customer'] = "";
		$values['country'] = "";
		$values['designedby'] = "";
	}
}
	if($lang==1){
		$typologygonder = '';
		$typologytut = query("select * from typology_content where lang=". $lang);
		while($tut = fetch($typologytut)){
			$selected = '';
			if($values['typology'] == $tut['typologyid']){
				$selected = 'selected="selected"';
			}
			$typologygonder .= '<option value="'.$tut['typologyid'].'" '.$selected.'>'.$tut['typology'].'</option>';
		}
		$locationgonder = '';
		$locationtut = query("select * from location_content where lang=". $lang);
		while($tut = fetch($locationtut)){
			$selected = '';
			if($values['location'] == $tut['locationid']){
				$selected = 'selected="selected"';
			}
			$locationgonder .= '<option value="'.$tut['locationid'].'" '.$selected.'>'.$tut['location'].'</option>';
		}
	}

	$typologyselected = '';
	$locationselected = '';
	if($lang > 1){
		$typologytut = query("select * from project as p, typology_content as tc where p.typology = tc.typologyid and p.id=$edit_id and lang=". $lang);
		while($t = fetch($typologytut)){
			$typologyid = $t['typologyid'];
			$typology = $t['typology'];
			$typologyselected .= '<option value="'.$typologyid.'">'. $typology .'</option>';
		}
		$locationtut = query("select * from project as p, location_content as lc where p.location = lc.locationid and p.id=$edit_id and lang=". $lang);
		while($l = fetch($locationtut)){
			$locationid = $l['locationid'];
			$location = $l['location'];
			$locationselected .= '<option value="'.$locationid.'">'. $location .'</option>';
		}
	}

require view("admin/project_add");
