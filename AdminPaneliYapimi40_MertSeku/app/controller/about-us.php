<?php

$contentQuery = query("select * from blog_content where blogid=54 AND lang={$langcookie}");
if(num($contentQuery) <= 0){
	$contentQuery = query("select * from blog_content where blogid=54 AND lang=1");
}
$contentFetch = fetch($contentQuery);

$menu =false;

$h1 = $contentFetch['title'];

$desc = "Serkan Bayram". "  "  .lang("staff-title"). " / " .$contentFetch['content'];

require view('about-us');
