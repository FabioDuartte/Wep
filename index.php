<?php

header('Content-Type: text/html; charset=utf-8');

use Library\Restaurant\Core\Autoload as Autoload;
use Library\Restaurant\Core\Router as Router;

define('ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);

require_once ROOT . DS . 'Library/Restaurant/Core/Autoload.php';

$autoload = new Autoload();
$router = new Router();