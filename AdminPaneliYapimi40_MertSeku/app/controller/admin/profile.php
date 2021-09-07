<?php
if (get('id')) {
    $edit_id = get('id');
    $query = query("select * from users where id= " . $edit_id);
    if (num($query) > 0) {
        $values = fetch($query);
    }
}
if (post('submit')) {
    $username = post('username');
    $password = post('password');
    $confirmpassword = post('confirmpassword');
    $namesurname = post('namesurname');

    $values['username'] = $username;
    $values['password'] = $password;
    $values['namesurname'] = $namesurname;

    if (isset($edit_id)) {
        if ($username && $password && $confirmpassword && $namesurname) {
            if ($password == $confirmpassword) {
                if(strlen($password)>=6){
                    $password = md5(post('password'));
                    $query = query("update users SET username='{$username}',password='{$password}',namesurname='{$namesurname}' where id=$edit_id");
                    $success = "User updated";
                }
                else{
                    $error = "Your password must be at least 6 characters.";
                }                
            } else {
                $error = "Password and Confirm must be the same";
            }
        } else {
            $error = "Do not leave any blank spaces!";
        }
    }
}
require view("admin/profile");
