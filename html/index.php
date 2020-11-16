<?php

define('ENV', 'prod');
include('../config/setup.php');

$app = new \AndreRibas\Clibrary\App\App();
$app->run();
