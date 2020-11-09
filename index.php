<?php

use Library\Autoload as Autoload;
use Library\Router as Router;

define('DIR_ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);

require_once DIR_ROOT . DS . 'Library/Autoload.php';

$autoload = new Autoload();
$router = new Router();
