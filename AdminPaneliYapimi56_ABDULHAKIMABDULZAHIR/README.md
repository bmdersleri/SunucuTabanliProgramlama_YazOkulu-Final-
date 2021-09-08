# php-admin-panel
Admin Panel In PHP Mysql


# Hakkımızda

Youtube Kanalımız: BMDersleri

Bağlantı: https://www.youtube.com/channel/UCIdYgV-XFjv9q0IHtzUTtQw

Kısa Bağlantı: https://bit.ly/32k9MnJ

Github Adresimiz: https://github.com/bmdersleri

Hazırlayan: ABDUL HAKIM ABDUL ZAHIR



This is full admin panel in php and mysql with a demo site you can download from here. This is for junior developer , we can face vary problem  at starting phase of development therefor we post this admin panel for startup developer.You use and modify this admin panel according  to your project.

## Technology :-
1. PHP
2. Mysql
3. HTML5
4. CSS3
5. Bootstrap

Download  file and Change Few file and Enjoy : -

Step first make data base and import sql file from uni/db/uni.sql

Step second and  go to uni/include/ and open dbclass.php
` private $host = "localhost";
  private $user = "root"; // change this from your user name
  private $password = ""; // change from your password
  private $database = "uni"; // change from your database name`

Step third and  go to uni/include/ and open project_class.php

`public $baseurl= "http://127.0.0.1/uni/"; // change from this url by your base url if
 public $admindir="manage";                 // you change the  folder name uni to other
 public $prifix ="uni_";
 public $admin  ="admin";
 public $slider = "slider";
 public $home     = "home";
 public $about     = "about";
 public $gallery   = "gallery";
 public $media     = "media";
 public $contact   ="contact";
 public $logo        ="logo";`



