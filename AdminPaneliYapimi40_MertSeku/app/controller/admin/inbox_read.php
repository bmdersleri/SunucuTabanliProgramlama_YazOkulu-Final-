<?php

if (get('id')) {
    $edit_id = get('id');
    $query = query("select * from contact_us where id= " . $edit_id);
    if (num($query) > 0) {
        $values = fetch($query);
    }
}

require controller("admin/inbox");
