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
	$queryPhoto = query("select * from business_partners where id={$edit_id}");
	while($photo = fetch($queryPhoto)){
		$photos .= $photo['src'];
	}
}

if (post('submit')) {
    $name = post('name');
    $src = post('src');
    $link = post('link');

    $values['name'] = $name;
    $values['src'] = $src;
    $values['link'] = $link;

    if (isset($edit_id)) {
        if ($name) {
            $query = query("update business_partners SET name='{$name}',link='{$link}' where id={$edit_id}");
            if ($query) {
                $success = "Successfully updated!";
                // go(admin_url('partner_list'), 5);
            } else {
                $error = "There was an unknown error while processing the request. Try again.";
            }
        } else {
            $error = "Do not leave any blank spaces!";
        }
    } else {
        if ($name && $link) {

            $query = query("insert into business_partners (name,src,link) values ('{$name}','{$src}','{$link}')");
            if ($query) {
                $success = "Successfully added!";
                // go(admin_url('partner_list'), 5);
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
        $values['src'] = "";
        $values['link'] = "";
    }
}
require view("admin/partner_add");
