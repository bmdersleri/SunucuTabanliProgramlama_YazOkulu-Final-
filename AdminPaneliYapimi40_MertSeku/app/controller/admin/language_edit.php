<?php

if (get('id')) {
    $edit_id = get('id');
    $query = query("select * from language where id= " . $edit_id);
    if (num($query) > 0) {
        $values = fetch($query);
    }
}

require controller("admin/language_add");
