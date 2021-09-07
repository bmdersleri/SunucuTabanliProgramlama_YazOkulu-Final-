<?php 
@session_start();
@ob_start();
define("DATA", "data/");
define("SAYFA", "include/");
define("SINIF", "class/");
include_once(DATA."baglanti.php");
define ("SITE",$siteURL);
if(!empty($_SESSION["ID"]) && !empty($_SESSION["adsoyad"]) && !empty($_SESSION["mail"]))
{
	
}
else
{
	?>
	<meta http-equiv="refresh" content="0;url=<?=SITE?>giris-yap">
	<?php
	exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?="$sitebaslik"  ?></title>
	<meta http-equiv="keywords" content="<?="$siteanahtar" ?>"> 
    <meta http-equiv="description" content="<?= "$siteaciklama" ?>"> 
	<link rel="stylesheet" href="<?=SITE?>fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	<link href="<?=SITE?>https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="<?=SITE?>css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">

</head>
<body>
	
    <div class="container-fluid">
        <?php
		include_once(DATA."headerr.php");
		include_once(DATA."menuu.php");
		include_once(SAYFA."homee.php");
		include_once(DATA."footerr.php");
		?>
    </div>
    <script src="<?=SITE?>js/jquery.min.js"></script>
    <script src="<?=SITE?>js/templatemo-script.js"></script>
</body>
</html>