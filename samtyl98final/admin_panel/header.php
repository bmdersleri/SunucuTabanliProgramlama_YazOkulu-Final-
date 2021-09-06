<?php 

$kullaniciadi="root";
$sifre="";
$sunucu="localhost";
$database="ots";

$baglan=new mysqli($sunucu,$kullaniciadi,$sifre,$database) or die("Unable to connect");
$ayar_sorgula = $baglan->query("select * from ayarlar");
$ayar_cek = mysqli_fetch_assoc($ayar_sorgula);

$menu_sorgula = $baglan->query("select * from menu");
$menu_cek = mysqli_fetch_assoc($menu_sorgula);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
<title><?php echo $ayar_cek['site_adi']; ?> </title>
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Old Thief Studio &raquo; Feed" href="http://www.oldthiefstudio.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Old Thief Studio &raquo; Comments Feed" href="http://www.oldthiefstudio.com/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/www.oldthiefstudio.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.5.3"}};
			!function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='http://www.oldthiefstudio.com/wp-includes/css/dist/block-library/style.min.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-theme-css'  href='http://www.oldthiefstudio.com/wp-includes/css/dist/block-library/theme.min.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='coblocks-frontend-css'  href='http://www.oldthiefstudio.com/wp-content/plugins/coblocks/dist/coblocks-style.css?ver=cb804cec39cf5c1f5ba6808500c3d8aa' type='text/css' media='all' />
<link rel='stylesheet' id='signify-style-css'  href='http://www.oldthiefstudio.com/wp-content/themes/signify/style.css?ver=20201116-91407' type='text/css' media='all' />
<link rel='stylesheet' id='signify-dark-style-css'  href='http://www.oldthiefstudio.com/wp-content/themes/signify-dark/style.css?ver=20201116-91402' type='text/css' media='all' />
<link rel='stylesheet' id='signify-fonts-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%7CPlayfair+Display&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='signify-block-style-css'  href='http://www.oldthiefstudio.com/wp-content/themes/signify/css/blocks.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='http://www.oldthiefstudio.com/wp-content/themes/signify/css/font-awesome/css/font-awesome.css?ver=4.7.0' type='text/css' media='all' />
<!--[if lt IE 9]>
<script type='text/javascript' src='http://www.oldthiefstudio.com/wp-content/themes/signify/js/html5.min.js?ver=3.7.3' id='signify-html5-js'></script>
<![endif]-->
<script type='text/javascript' src='http://www.oldthiefstudio.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp' id='jquery-core-js'></script>
<link rel="https://api.w.org/" href="http://www.oldthiefstudio.com/wp-json/" /><link rel="alternate" type="application/json" href="http://www.oldthiefstudio.com/wp-json/wp/v2/pages/11" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.oldthiefstudio.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.oldthiefstudio.com/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.5.3" />
<link rel="canonical" href="http://www.oldthiefstudio.com/" />
<link rel='shortlink' href='http://www.oldthiefstudio.com/' />
<link rel="alternate" type="application/json+oembed" href="http://www.oldthiefstudio.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.oldthiefstudio.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://www.oldthiefstudio.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.oldthiefstudio.com%2F&#038;format=xml" />
	        <style type="text/css" rel="header-image">
	            .custom-header .wrapper:before {
	                background-image: url( http://www.oldthiefstudio.com/wp-content/uploads/2020/11/cropped-aaf9c3aacda9d3bcaf572d366a2d39ba.jpg);
					background-position: center top;
					background-repeat: no-repeat;
					background-size: cover;
	            }
	        </style>
	    <link rel="icon" href="http://www.oldthiefstudio.com/wp-content/uploads/2020/11/cropped-thief-1659457-1409979-32x32.png" sizes="32x32" />
<link rel="icon" href="http://www.oldthiefstudio.com/wp-content/uploads/2020/11/cropped-thief-1659457-1409979-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="http://www.oldthiefstudio.com/wp-content/uploads/2020/11/cropped-thief-1659457-1409979-180x180.png" />
<meta name="msapplication-TileImage" content="http://www.oldthiefstudio.com/wp-content/uploads/2020/11/cropped-thief-1659457-1409979-270x270.png" />
</head>
<body class="home page-template-default page page-id-11 wp-embed-responsive page-template-front-page fluid-layout navigation-classic no-sidebar content-width-layout excerpt header-media-fluid has-header-media absolute-header header-media-text-disabled has-header-image color-scheme-default menu-type-classic menu-style-full-width color-scheme-dark">


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	<header id="masthead" class="site-header">
		<div class="site-header-main">
			<div class="wrapper">
				
<div class="site-branding">
	
	<div class="site-identity">
					<p class="site-title"><a href="<?php echo $menu_cek['menu_bir_url']; ?>" rel="home"><?php echo $ayar_cek['site_adi']; ?></a></p>
					<p class="site-description"><?php echo $ayar_cek['site_aciklama']; ?></p>
			</div><!-- .site-branding-text-->
</div><!-- .site-branding -->

					<div id="site-header-menu" class="site-header-menu">
		<div id="primary-menu-wrapper" class="menu-wrapper">
			<div class="menu-toggle-wrapper">
				<button id="menu-toggle" class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><span class="menu-label">Menu</span></button>
			</div><!-- .menu-toggle-wrapper -->

			<div class="menu-inside-wrapper">
				<nav id="site-navigation" class="main-navigation default-page-menu" role="navigation" aria-label="Primary Menu">

									<ul id="primary-menu" class="menu nav-menu">
									<li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-11 current_page_item menu-item-20"><a href="<?php echo $menu_cek['menu_bir_url']; ?>" aria-current="page"><?php echo $menu_cek['menu_bir']; ?></a></li>

									<?php
										$menuleri_sor = $baglan->query("select * from menuler");
										
										while($menuleri_cek = mysqli_fetch_assoc($menuleri_sor)) {
											$menu_isim =   $menuleri_cek["menu_ad"]; 
											echo '<li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-11 current_page_item menu-item-20"><a href="'.$menuleri_cek["menu_link"].'" aria-current="page">'.$menuleri_cek["menu_ad"].'</a></li>';

										}
									?>
										

										

	
									</ul>
				
				</nav><!-- .main-navigation -->

							</div><!-- .menu-inside-wrapper -->
		</div><!-- #primary-menu-wrapper.menu-wrapper -->

			</div><!-- .site-header-menu -->
			</div><!-- .wrapper -->
		</div><!-- .site-header-main -->
	</header><!-- #masthead -->

	
<div class="custom-header header-media">
	<div class="wrapper">
				<div class="custom-header-media">
			<div id="wp-custom-header" class="wp-custom-header"><img src="<?php echo $ayar_cek['site_bg']; ?>"/></div>	
					</div>
			</div><!-- .wrapper -->
	<div class="custom-header-overlay"></div><!-- .custom-header-overlay -->
</div><!-- .custom-header -->



<div id="portfolio-content-section" class="section portfolio-section section-boxed no-section-heading">
	<div class="wrapper">
		
		<div class="section-content-wrapper layout-three">
			<div class="grid">
				
			</div>
		</div><!-- .section-content-wrap -->
	</div><!-- .wrapper -->
</div><!-- #portfolio-section -->


	<div id="content" class="site-content">
		<div class="wrapper">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="singular-content-wrap">	