<?php
$contentQuery = query("select * from about where id=1");

$contentFetch =fetch($contentQuery);


    $icerik = '
    <h1 style="text-align: center">'.$contentFetch['baslik'].'</h1>
    <p>'.$contentFetch['icerik'].'</p> 
    
    
    ';
                      
$desc = settings('about');
$lowerdesc = settings('aboutldesc');
$title = settings('titleabout');
$photosrc = photo('about');
include view("about");
