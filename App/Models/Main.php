<?php

namespace App\Models;

use App\Controllers\MasterController;

require_once '../../index.php';

$name = 'Renato';

$MC = new MasterController();

$client = new Client($name, '050', '@@ola', 'kkOla881244', '33451321');

