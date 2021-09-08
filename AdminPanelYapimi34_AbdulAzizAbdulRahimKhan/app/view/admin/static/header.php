<!DOCTYPE html>
<html lang="tr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Admin Panel</title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?= admin_asset_url('images/favicon.jfif') ?>">
	<link rel="stylesheet" href="<?= admin_asset_url('vendor/owl-carousel/css/owl.carousel.min.css') ?>">
	<link rel="stylesheet" href="<?= admin_asset_url('vendor/owl-carousel/css/owl.theme.default.min.css') ?>">
	<link href="<?= admin_asset_url('/vendor/jqvmap/css/jqvmap.min.css') ?>" rel="stylesheet">

	<link href="<?= admin_asset_url('vendor/summernote/summernote.css') ?>" rel="stylesheet">
	<link href="<?= admin_asset_url('css/style.css') ?>" rel="stylesheet">
	<link href="<?= admin_asset_url('css/custom.css') ?>" rel="stylesheet">
	<script type="text/javascript">
		var site = "<?= site_url() ?>";
		var admin_url = "<?= admin_url() ?>";
	</script>
</head>

<body>

	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>

	<div id="main-wrapper">
		<div class="nav-header">
			<a href="<?= admin_url() ?>" class="brand-logo">
				<img class="logo-abbr" src="<?= admin_asset_url('images/minilogo.png') ?>" alt="">
				<img class="brand-title" style="margin-left: 10px " src="<?= admin_asset_url('images/logo.svg') ?>" alt="">
			</a>

			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>

		<div class="header">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left"></div>
						<ul class="navbar-nav header-right">
							<li class="nav-item dropdown header-profile">
								<a class="nav-link" href="#" role="button" data-toggle="dropdown">
									<i class="mdi mdi-account" style="font-size: 1.8em;position: absolute;left: -10px;top: 50%;transform: translate(-50%, -50%);"></i>
									<span style="font-size: .8em"><?= session('name') ?></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right">

									<a href="<?= admin_url('logout') ?>" class="dropdown-item">
										<i class="icon-key"></i>
										<span class="ml-2">Logout </span>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>

		<div class="quixnav">
			<div class="quixnav-scroll">
				<ul class="metismenu" id="menu">
					<li class="nav-label first">Maın Menu</li>

					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-book"></i><span class="nav-text">Blog</span></a>
						<ul aria-expanded="false">
							<li><a href="<?= admin_url('blog_add') ?>">Add New</a></li>
							<li><a href="<?= admin_url('blog_list') ?>">Blog List</a></li>
						</ul>
					</li>

					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-cog"></i><span class="nav-text">Site Settings</span></a>
						<ul aria-expanded="false">
							<li>
								<a href="<?= admin_url('settings_list') ?>">Settings List</a>
								<a href="<?= admin_url('photos_list') ?>">Photos List</a>
							</li>

						</ul>
					</li>

					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-eercast"></i><span class="nav-text">About Settings</span></a>
						<ul aria-expanded="false">
							<li>
								<a href="<?= admin_url('about_edit?id=1') ?>">Edit About</a>
							</li>

						</ul>
					</li>



				</ul>
			</div>
		</div>