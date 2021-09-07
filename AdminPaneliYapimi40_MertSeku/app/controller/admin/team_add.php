<?php
if (!isset($languages)) {
	$languages = "";
}
if (!isset($langName)) {
	$langName = "EN";
}
if (!isset($lang)) {
	$lang = 1;
}
if (isset($edit_id)){
    $photos = "";
	$queryPhoto = query("select * from team where id={$edit_id}");
	while($photo = fetch($queryPhoto)){
		$photos .= $photo['src'];
	}
}
if (post('submit')) {
	$name = post('name');
	$title = post('title');

	if ($name) {
		$values['name'] = $name;
	}
	$values['title'] = $title;

	if (isset($edit_id)) {
		if ($name) {
			$query = query("update team SET name='{$name}' where id={$edit_id}");
		}
		if ($title) {
			if ($activeInsert) {
				$query = query("insert into team_content SET teamid={$edit_id}, title='{$title}', lang={$lang}");
			} else {
				$query = query("update team_content SET title='{$title}' where teamid='{$edit_id}' and lang='{$lang}'");
			}
			if ($query) {
				$success = "Successfully edited!";
			} else {
				$error = "There was an unknown error while processing the request. Try again.";
			}
		} else {
			$error = "Do not leave any blank spaces!";
		}
	} else {
		if ($name && $title) {

			$query = query("insert into team (name) values ('{$name}')");
			if ($query) {
				$teamid = $baglan->insert_id;
				$queryLang = query("select * from language");
				$languageContent = [];

				$queryContent = query("insert into team_content (teamid, title, lang) values ({$teamid}, '{$title}', 1)");
				echo "insert into team_content (teamid, title, lang) values ({$teamid}, '{$title}', 1)";
				if ($queryContent) {
					$success = "Successfully added!";
					go(admin_url('team_list'), 5);
				} else {
					$error = "There was an unknown error while processing the request. Try again.";
				}
			} else {
				$error = "There was an unknown error while processing the request. Try again.";
			}
		} else {
			$error = "Do not leave any blank spaces!";
		}
	}
} else {
	if (!isset($values)) {
		$values['name'] = "";
		$values['title'] = "";
	}
}
require view("admin/team_add");
