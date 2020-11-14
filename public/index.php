<?php

// Automatic class detection and inclusion of its file
include('../vendor/autoload.php');
include('../config/setup.php');

$app = new \AndreRibas\Clibrary\App();
$app->run();
