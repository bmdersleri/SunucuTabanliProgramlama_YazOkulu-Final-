<?php require'admin/include/database.php'; ?>
<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Proje Çalışmalarım</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/hoşgeldiniz.jpg" alt="" /></span>
							<h1 id="title"><?= $ayar->sitem_adsoyad ?></h1>
							<p><?= $ayar->sitem_meslek ?></p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<!--

								Prologue's nav expects links in one of two formats:

								1. Hash link (scrolls to a different section within the page)

								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

							-->
							<ul>
								<li><a href="index.php#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Anasayfa</span></a></li>
								<li><a href="index.php#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Proje Çalışmaları</span></a></li>
								<li><a href="index.php#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Hakkımda</span></a></li>
								<li><a href="#index.phpcontact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">İletişim</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="<?= $ayar->sitem_twitter ?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="<?= $ayar->sitem_facebook ?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="mailto:<?= $ayar->sitem_email ?>" class="icon fa-github"><span class="label"><?= $ayar->sitem_email ?></span></a></li>

						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">
