<?php 
@session_start();
@ob_start();
define("DATA", "data/");
define("SAYFA", "include/");
define("SINIF", "class/");
include_once(DATA."baglanti.php");
define ("SITE",$siteURL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Seyahat Bloğu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="<?=SITE?>/AnaTema/assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE?>/AnaTema/assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="<?=SITE?>/AnaTema/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="<?=SITE?>/AnaTema/assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="<?=SITE?>/AnaTema/assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=SITE?>/AnaTema/assets/css/custom.css">
  

<?php 
include_once(DATA."anaheader.php");

if($_GET && !empty($_GET["sayfa"]))
{
  $sayfa = $_GET["sayfa"].".php";
  if(file_exists(SAYFA.$sayfa))
  {
    include_once(SAYFA.$sayfa);
  }
  else {
    include_once(SAYFA."homepage.php");
  }

}
else {
  include_once(SAYFA."homepage.php");
}


include_once(DATA."anafooter.php");
?>

<script src="<?=SITE?>/AnaTema/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Load jQuery require for isotope -->
    <script src="<?=SITE?>/AnaTema/assets/js/jquery.min.js"></script>
    <!-- Isotope -->
    <script src="<?=SITE?>/AnaTema/assets/js/isotope.pkgd.js"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
    
    <!-- Bootstrap -->
    <script src="<?=SITE?>/AnaTema/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Templatemo -->
    <script src="<?=SITE?>/AnaTema/assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="<?=SITE?>/AnaTema/assets/js/custom.js"></script>
    

</body>

</html>
