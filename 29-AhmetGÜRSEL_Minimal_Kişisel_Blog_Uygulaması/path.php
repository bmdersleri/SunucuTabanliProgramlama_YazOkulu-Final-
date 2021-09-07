<?php

define("ROOT_PATH", realpath(dirname(__FILE__)));
define("BASE_URL", "");
define("PROJECT_URL", "");
define("DIRECTORY_URI", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
