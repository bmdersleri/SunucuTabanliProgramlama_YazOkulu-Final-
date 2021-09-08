<?php 
if(get('src')){
	$srctut = get('src');

    $contentQuery = query("select * from blogs where src='$srctut'");
    $contentFetch = fetch($contentQuery);    

}
$desc = settings('post');
$lowerdesc = settings('postldesc');
$title = settings('titlepost');
$photosrc = photo('post');
include view("post");
?>
