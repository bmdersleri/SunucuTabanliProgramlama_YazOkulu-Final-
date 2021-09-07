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

if (post('submit')) {
    $location = post('location');


    $values['location'] = $location;


    if (isset($edit_id)) {
        if ($location) {
            if ($activeInsert) {
                $query = query("insert into location_content SET locationid={$edit_id}, location='{$location}', lang={$lang}");
            } else {
                $query = query("update location_content SET location='{$location}' where locationid='{$edit_id}' and lang='{$lang}'");
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
        if ($location) {

            $query = query("insert into location set update_at=NOW()");
            if ($query) {
                $locationid = $baglan->insert_id;
                $queryLang = query("select * from language");
                $languageContent = [];

                $queryContent = query("insert into location_content (locationid, location, lang) values ({$locationid}, '{$location}', 1)");
                if ($queryContent) {
                    $success = "Successfully added!";
                    // go(admin_url('location_list'), 5);
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
        $values['location'] = "";
    }
}
require view("admin/location_add");
