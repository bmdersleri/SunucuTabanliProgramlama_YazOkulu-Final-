<?php

if (get('id')) {
	$edit_id = get('id');
	$lang = get('lang') ? get('lang') : 1;
	$queryTeam = query("select * from team where id= " . $edit_id);
	$queryContent = query("select * from team_content where teamid= " . $edit_id . " and lang=" . $lang);

	$activeInsert = false;
	if (num($queryTeam) > 0) {
		$values = array('title' => '');
		if (num($queryContent) > 0) {
			$values = fetch($queryContent);
		} else {
			$activeInsert = true;
		}
		$valuesTeam = fetch($queryTeam);
		$values['name'] = $valuesTeam['name'];
	}

	$langName = "";
	$languages = '<ul class="nav nav-pills mb-4 justify-content-end">';
	$langQuery = query("select * from language");
	while ($langFetch = fetch($langQuery)) {
		if ($lang == $langFetch['id']) {
			$langName =  $langFetch['shortcode'];
		}
		$languages .= '<li class="nav-item"><a href="' . admin_url('team_edit?id=' . $edit_id . '&lang=' . $langFetch['id']) . '" class="nav-link' .
			($lang == $langFetch['id'] ? ' active' : ' text-muted') .
			'">' . $langFetch['shortcode'] . '</a></li>';
	}
	$languages .= '</ul>';
}

require controller("admin/team_add");
