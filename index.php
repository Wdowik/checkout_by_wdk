<?php

declare(strict_types=1);

namespace App;
use mysqli;
session_start();


require_once('utils/src/controller.php');
require_once('utils/debug.php');

$request = [
    'get'  => $_GET,
    'post' => $_POST
];
$config = require_once('utils/src/config/config.php');

Controller::configuration($config);
($controller = new controller($request));
$controller->run();





// require_once("layout.php");