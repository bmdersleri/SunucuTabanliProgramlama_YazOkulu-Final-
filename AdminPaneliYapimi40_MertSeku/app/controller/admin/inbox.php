<?php
    if (!isset($values)) {
        go(admin_url('inbox_list'));     
    }

require view("admin/inbox");
