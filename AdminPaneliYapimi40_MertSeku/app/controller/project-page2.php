<?php
$seourl = url(1);
$_menu = "";
$projectQuery = query("select * from project_content where url='{$seourl}'");
$is_project = num($projectQuery);
if ($is_project <= 0) {
	go(site_url('404'));
	exit();
}
$projectFetch = fetch($projectQuery);
$id = $projectFetch['projectid'];

$projectQuery = query("select * from project where id=$id");
$row = fetch($projectQuery);

$locationid = $row['location'];
$typologyid = $row['typology'];

$projectInfo = query("select * from project as p, project_content as pc where p.id=pc.projectid and p.id=$id and lang=$langcookie");
if(num($projectInfo) <= 0){
	$projectInfo = query("select * from project as p, project_content as pc where p.id=pc.projectid and p.id=$id and lang=1");
}
$f = fetch($projectInfo);

$contentQuery = query("select * from project_content where projectid={$id} and lang={$langcookie}");
if(num($contentQuery) <= 0){
	$contentQuery = query("select * from project_content where projectid={$id} and lang=1");
}

$locationQuery = query("select * from location_content where locationid={$locationid} and lang={$langcookie}");
if(num($locationQuery) <= 0){
	$locationQuery = query("select * from location_content where locationid={$locationid} and lang=1");
}

$typologyQuery = query("select * from typology_content where typologyid={$typologyid} and lang={$langcookie}");
if(num($typologyQuery) <= 0){
	$typologyQuery = query("select * from typology_content where typologyid={$typologyid} and lang=1");
}

$photoQuery = query("select * from project_photo where projectid={$id}");

$contentFetch = fetch($contentQuery);
$locationFetch = fetch($locationQuery);
$typologyFetch = fetch($typologyQuery);
$photos = "";
while($photoFetch = fetch($photoQuery)){
	$photos .= '
	<div class="swiper-slide">
		<div class="parallax-bg" style="background-image:url(' . site_url($photoFetch['src']) . ')" data-swiper-parallax="-23%"></div>
	</div>';
}

$h1 = $contentFetch['name'];


$desc = "S'THETICS, ".lang('project-name').": ".substr($f['name'], 0, 37) . ", " .lang('location') . ": " .$f['city'] . " - " .$f['country'] . ", " .lang('year') .": ". $f['year']; // YAPILAN İŞLER GELİNCE BURAYA EKLE SEO'DA GÖZÜKSÜN

require view('project-page2');
