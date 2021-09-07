<?php
if (post('submit')) {
    $name = post('name');
    $shortcode = post('shortcode');
    $code = post('code');
    
    $values['name'] = $name;
    $values['shortcode'] = $shortcode;       
    $values['code'] = $code;

    if (isset($edit_id)) {
        if ($name || $shortcode || $code) {
            $query = query("update language SET name='{$name}',shortcode='{$shortcode}',code='{$code}' where id={$edit_id}");
            if ($query) {
                $success = "Successfully updated!";
                // go(admin_url('language_list'), 5);
            } else {
                $error = "There was an unknown error while processing the request. Try again.";
            }
        } else {
            $error = "Do not leave any blank spaces!";
        }
    } else {
        if ($name && $shortcode && $code) {

            $query = query("insert into language (name,shortcode,code) values ('{$name}','{$shortcode}','{$code}')");
            if ($query) {
                $success = "Successfully added!";
                // go(admin_url('language_list'), 5);
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
        $values['shortcode'] = "";
        $values['code'] = "";
    }
}
require view("admin/language_add");
