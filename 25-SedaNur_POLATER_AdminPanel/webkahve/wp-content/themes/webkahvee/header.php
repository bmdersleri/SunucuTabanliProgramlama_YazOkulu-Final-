<!-- Temel html kodlarımızı yazdık -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, inital-scale-1.0">
    <!-- Sitemizin başlığını yazalım -->
    <title> Kahve Molası Web Sitesi </title>
    
    <!-- Footer.php de ve burada bu tanımlama sayesinde admin panel çubuğuna ulaşıyoruz -->
    <?php wp_head(); ?>
</head>
<!-- Wordpressin body etiketi için vermiş olduğu özel sınıfları alıyoruz-->
<body <?php body_class(); ?>>

<header class="top">
<div class="container">
<?php wp_nav_menu (
       array(
           'theme_location' => 'top-menu',
           'menu_class' => 'navigation'
       )
)
?>
</div>
</header>