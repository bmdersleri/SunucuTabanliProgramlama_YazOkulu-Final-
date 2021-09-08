<?php
$config = array();

$config['db']= [
  'host' => 'localhost',
  'name' => 'sunucu_proje',
  'user' => 'root',
  'pass' => ''
];

define('dir', realpath('.'));
define('plugin', dir. '/app/plugin');
define('controller', dir. '/app/controller');
define('view', dir .'/app/view');
define('url', 'http://' . $_SERVER['SERVER_NAME'] . '/sunucu_proje');

$config['default_language'] = 'tr';
$config['ayarlar']['sayfada'] = 30;

?>
