<?php
$seourl = url(1);
$contentQuery = query("select * from blog_content where blogid = (select blogid from blog_content where url='{$seourl}') and lang=$langcookie");
if(num($contentQuery) <= 0){
	$contentQuery = query("select * from blog_content where blogid = (select blogid from blog_content where url='{$seourl}') and lang=1");
}

$contentFetch = fetch($contentQuery);

$menu =false;

require view('blog');
