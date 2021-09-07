<?php include 'panel/inc/ayar.php';
//Site ayarlarını dbden çekme
$siteData = $conn->query("SELECT * FROM site_ayar")->fetch(PDO::FETCH_ASSOC);
//Yazar bilgilerini dbden çekme
$yazarData = $conn->query("SELECT * FROM yazar")->fetch(PDO::FETCH_ASSOC);


//Seo uyumlu url fonksiyonu
function seo($s) {
    $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',' ',',','?');
    $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','','');
    $s = str_replace($tr,$eng,$s);
    $s = strtolower($s);
    $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
    $s = preg_replace('/\s+/', '-', $s);
    $s = preg_replace('|-+|', '-', $s);
    $s = preg_replace('/#/', '', $s);
    $s = str_replace('\'', '-', $s);
    $s = str_replace('.', '', $s);
    $s = str_replace('!', '', $s);
    $s = str_replace('´', '', $s);
    $s = str_replace('’', '', $s);
    $s = str_replace('&', 've', $s);
    $s = trim($s, '-');
    return $s;

}

 ?>


<!doctype html>
<html lang="tr">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon -->
    <link rel="icon" sizes="16x16" href="<?php echo $siteData['favicon']; ?>">

    <title> <?php echo $siteData['title'] ?></title>

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/elegant-font-icons.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <!--loading -->
    <div class="loading">
        <div class="circle"></div>
    </div>
    <!--/-->

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <!--logo-->
            <div class="logo">
                <a href="index.php">

                    <img src="<?php echo $siteData['logo_dark']; ?>" class="logo-dark">
                    <img src="<?php echo $siteData['logo']; ?>" class="logo-white">
                </a>
            </div>
            <!--/-->

            <!--navbar-collapse-->
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav ml-auto mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link  active" href="index.php" >Anasayfa </a>

                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="hakkimda"> Yazar Hakkında </a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="galeri"> Galeri </a>
                    </li>


                     <li class="nav-item">
                        <a class="nav-link" href="iletisim"> İletişim</a>
                    </li>

                </ul>
            </div>
            <!--/-->

            <!--navbar-right-->
            <div class="navbar-right ml-auto">
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <div class="slider round"></div>
                    </label>
                </div>
                <div class="social-icones">
                    <ul class="list-inline">
                        <li>
                            <a href="<?php echo $siteData['fb']; ?>">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $siteData['ig']; ?>">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>

                    </ul>
                </div>



                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
    <!--/-->
