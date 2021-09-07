<!-- Tema ile ilgili her şey burada gerçekleşir-->
<?php
// bootstrap ve css dosyalarını çalıştırma fonksiyonlarını tanımladık
function load_stylesheets()
{
    wp_register_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.min.css',array(), false, 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css',array(), false, 'all');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts','load_stylesheets');

// Eski Sayfa ekle alanı 
add_filter('use_block_editor_for_post_type', '__return_false', 100);

// Resim ekleme
add_theme_support('post-thumbnails');
add_image_size('small', 100, 100, true);

//Menü ekleme 
add_theme_support('menus');
// Sayfamızda bulunacak menüleri tanımlıyoruz
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    ));


register_sidebar (
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'class' => '',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        )
);