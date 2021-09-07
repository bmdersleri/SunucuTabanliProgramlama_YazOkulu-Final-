<?php

@$baglanti = new mysqli('localhost', 'root', '', 'ucakv2'); 
    if(mysqli_connect_error()) 
    {
        echo mysqli_connect_error();
        exit; 
    }

$baglanti->set_charset("utf8"); 

?>