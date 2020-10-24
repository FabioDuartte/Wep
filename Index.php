<?php

header('Content-Type: text/html; charset=utf-8');

use Library\Restaurant\Core\Autoload as Autoload;
use Library\Restaurant\Core\Master\Controller as Controller;

define('DS', DIRECTORY_SEPARATOR);

require_once __DIR__ . DS . 'Library/Restaurant/Core/Autoload.php';

$autoload = new Autoload();
$controller = new Controller();