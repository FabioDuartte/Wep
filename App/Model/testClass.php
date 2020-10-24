<?php

require_once "../../Index.php";

use App\Model\Client as Client;

$client = new Client();

$client->getCheck();