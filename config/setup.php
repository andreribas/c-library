<?php

define('PROJECT_ROOT', dirname(__FILE__) . '/..');

$env = getenv('ENV');
$env_file = PROJECT_ROOT . "/config/env.{$env}.php";
file_exists($env_file) && include($env_file);

include(PROJECT_ROOT . '/vendor/autoload.php');
include(PROJECT_ROOT . '/config/routes.php');
include(PROJECT_ROOT . '/config/services.php');
include(PROJECT_ROOT . '/config/functions.php');
