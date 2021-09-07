<?php 
$contentQuery = query("select * from blog_content where blogid=54 AND lang={$langcookie}");
if(num($contentQuery) <= 0){
	$contentQuery = query("select * from blog_content where blogid=54 AND lang=1");
}
$contentFetch = fetch($contentQuery);

$desc = $contentFetch['content'];
include view("index")


?>
