<?php include 'admin/ayar.php';
//Site ayarlarını veritabanından getirme
$site = $conn->query("SELECT * FROM site_ayar")->fetch(PDO::FETCH_ASSOC);


//sef
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

<!DOCTYPE html>
<html lang="tr" dir="ltr">



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $site['title']; ?></title>

  <!-- Vendor Stylesheets -->
  <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
  <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/plugins/slick.css">
  <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
  <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">

  <!-- Icon Fonts -->
  <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome/css/all.min.css">

  <!-- Coffeez Style sheet -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

</head>

<body>

  <!-- Prealoder start -->
  <div class="andro_preloader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>
  <!-- Prealoader End -->







  <aside class="andro_aside andro_aside-left">
    <a class="navbar-brand" href="index.php"> <mig src="<?php echo $site['logo']; ?>" alt="logo"> </a>

      <ul>


        <li class="menu-item ">  <a href="index.php">Anasayfa</a> </li>

        <?php 
        $kategori=$conn->prepare("SELECT * FROM kategoriler");
        $kategori->execute();
        while ($rowKategori=$kategori->fetch(PDO::FETCH_ASSOC)) {?>

          <li class="menu-item"> <a href="<?=seo('kategori-'.$rowKategori["kategori_adi"]).'-'.$rowKategori["kategori_id"]?>"><?php echo $rowKategori['kategori_adi']; ?></a> </li>

        <?php } ?>

        <li class="menu-item"> <a href="hakkimizda">Hakkımızda</a> </li>
        <li class="menu-item"> <a href="foto-galeri">Foto Galeri</a> </li>

        <li class="menu-item"> <a href="iletisim">İletişim </a> </li>


      </ul>

    </aside>
    <div class="andro_aside-overlay aside-trigger-left"></div>


    <!-- Header Start -->
    <header class="andro_header header-1 can-sticky">

      <!-- Topheader Start -->
      <div class="andro_header-top">
        <div class="container">
          <div class="andro_header-top-inner">
            <ul class="andro_header-top-sm andro_sm p-2">
              <li> <a href="<?php echo $site['fb']; ?>"> <i class="fab fa-facebook-f"></i> </a> </li>
              <li> <a href="<?php echo $site['ig']; ?>"> <i class="fab fa-instagram"></i> </a> </li>

            </ul>


          </div>
        </div>
      </div>

      <div class="andro_header-middle">
        <div class="container">
          <nav class="navbar">
            <!-- Logo -->
            <a class="navbar-brand" href="index.php"> <img src="<?php echo $site['logo']; ?>" alt="logo"> </a>



            <div class="andro_header-controls">

              <ul class="andro_header-controls-inner">
                <li class="andro_header-favorites"> 
                  <a href="hesabim" title="Hesabım"> <i class="fa fa-user"></i> </a> </li>

                </ul>

                <!-- Toggler -->
                <div class="aside-toggler aside-trigger-left">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>

              </div>
            </nav>
          </div>
        </div>




        <div class="andro_header-bottom">
          <div class="container">

            <div class="andro_header-bottom-inner">

              <!-- Menu -->
              <ul class="navbar-nav">
                <li class="menu-item ">  <a href="index.php">Anasayfa</a> </li>

                <?php 
                $kategori=$conn->prepare("SELECT * FROM kategoriler");
                $kategori->execute();
                while ($rowKategori=$kategori->fetch(PDO::FETCH_ASSOC)) {?>

                  <li class="menu-item"> <a href="<?=seo('kategori-'.$rowKategori["kategori_adi"]).'-'.$rowKategori["kategori_id"]?>"><?php echo $rowKategori['kategori_adi']; ?></a> </li>

                <?php } ?>

                <li class="menu-item"> <a href="hakkimizda">Hakkımızda</a> </li>
                <li class="menu-item"> <a href="foto-galeri">Foto Galeri</a> </li>

                <li class="menu-item"> <a href="iletisim">İletişim </a> </li>
              </ul>






            </div>

          </div>
        </div>


      </header>




