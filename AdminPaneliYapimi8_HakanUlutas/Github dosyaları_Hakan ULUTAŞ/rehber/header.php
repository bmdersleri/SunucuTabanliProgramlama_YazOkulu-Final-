<?php include 'yonetim/ayar.php';
$veri = $conn->query("SELECT * FROM site_ayar")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html lang="tr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo $veri['title']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $veri['favicon']; ?>">

	<!-- STYLES -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/all.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/slick.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- preloader -->
<div id="preloader">
	<div class="book">
		<div class="inner">
			<div class="left"></div>
			<div class="middle"></div>
			<div class="right"></div>
		</div>
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>

<!-- site wrapper -->
<div class="site-wrapper">

	<div class="main-overlay"></div>

	<!-- header -->
	<header class="header-default">
		<nav class="navbar navbar-expand-lg">
			<div class="container-xl">
				<!-- site logo -->
				<a class="navbar-brand" href="index.php"><img style="height: 100px" src="<?php echo $veri['logo']; ?>" alt="logo" /></a> 

				<div class="collapse navbar-collapse">
					<!-- menus -->
					<ul class="navbar-nav mr-auto">
						
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Anasayfa</a>
						</li>


						<li class="nav-item">
							<a class="nav-link" href="galeri">Galeri</a>
						</li>


						<li class="nav-item">
							<a class="nav-link" href="hakkimizda">Hakkımızda</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="ziyaretci-defteri">Ziyaretçi Defter</a>
						</li>


						<li class="nav-item">
							<a class="nav-link" href="iletisim">İletişim</a>
						</li>
						
						
						
					</ul>
				</div>

				<!-- header right section -->
				<div class="header-right">
					<!-- social icons -->
					<ul class="social-icons list-unstyled list-inline mb-0">
						<li class="list-inline-item"><a href="<?php echo $veri['fb']; ?>"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="<?php echo $veri['ig']; ?>"><i class="fab fa-instagram"></i></a></li>
					</ul>
					<!-- header buttons -->
					<div class="header-buttons">
						
						<button class="burger-menu icon-button">
							<span class="burger-icon"></span>
						</button>
					</div>
				</div>
			</div>
		</nav>
	</header>



