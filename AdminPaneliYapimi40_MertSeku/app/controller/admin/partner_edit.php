<?php

if (get('id')) {
    $edit_id = get('id');
    $query = query("select * from business_partners where id= " . $edit_id);
    if (num($query) > 0) {
        $values = fetch($query);
    }
}

require controller("admin/partner_add");
