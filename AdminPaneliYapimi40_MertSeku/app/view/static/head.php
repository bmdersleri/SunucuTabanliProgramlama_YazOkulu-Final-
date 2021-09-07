<?php
	$proje_adi = "MERT";

	if(!isset($title)){
		if(isset($h1)){
			$title = $h1 . " - MERT";
		}else{
			$title = "MERT";
		}
	}

	if(!isset($desc)){
		$desc =  "MERT";
	}
	else{		
		$htmlfilter = strip_tags(html_entity_decode($desc)); 
		$desc  = mb_substr($htmlfilter, 0, 160);		
	}

	if(!isset($img))
	{
		$img = asset_url("resim/default_img.png");

		$title = mb_substr(strip_tags($title), 0, 160);
		$desc  = mb_substr(strip_tags($desc), 0, 160);
		$_version = "?v=1";

	}

	$activeLang = "EN";
	$langList = "";
	$langs = query("select * from language");
	while ($langsF = fetch($langs)) {
		if ($langcookie == $langsF['id']) {
			$activeLang = $langsF['shortcode'];
		}
		$langList .= '<li><a href="' . '?lang=' . $langsF['id'] . '">' . $langsF['shortcode'] . '</a></li>';
	}
?>
<!DOCTYPE HTML>
<html lang="<?=strtolower($activeLang)?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta http-equiv="X-UA-Compable" content="ie=edge">
	<meta name="robots" content="index, follow">
	<title><?=$title?></title>
	<meta name="author" content="<?=$proje_adi?>">
	<meta name="description" content="<?=$desc?>">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@MERT">
	<meta name="twitter:creator" content="MERT">
	<meta name="twitter:title" content="<?=$title?>">
	<meta name="twitter:description" content="<?=$desc?>">
	<meta name="twitter:image:src" content="<?=$img?>">
	<meta property="og:url" content="<?=$this_link?>">
	<meta property="og:type" content="business:business">
	<meta property="og:title" content="<?=$title?>">
	<meta property="og:image" content="<?=$img?>"/>
	<meta property="og:description" content="<?=$desc?>">
	<meta property="og:site_name" content="<?=$proje_adi?>">
	<meta property="article:author" content="https://www.facebook.com/">
	<meta property="article:publisher" content="https://www.facebook.com/">
	<meta itemprop="name" content="<?=$title?>">
	<meta itemprop="description" content="<?=$desc?>">
	<meta itemprop="image" content="<?=$img?>">
	<link rel="shortcut icon" href="<?= admin_asset_url('images/favicon.ico') ?><?=$_version?>" type="image/x-icon" />
	<link rel="canonical" href="<?=$this_link?>">
	<link rel="stylesheet" href="<?=asset_url('css/animate.css')?>">
	<link rel="stylesheet" href="<?=asset_url('css/site.css')?>">
	<link rel="stylesheet" href="<?=asset_url('plugin/fontawesome/css/fontawesome.min.css')?>">
	<link rel="stylesheet" href="<?=asset_url('plugin/bootstrap5/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link rel="stylesheet" href="<?=asset_url('css/styles.css')?>">
	<link href="<?=asset_url('plugin/twentytwenty-master/css/twentytwenty.css')?>" rel="stylesheet" type="text/css" />
</head>
