<?php

require_once 'vendor/autoload.php';

session_start();
$app = new VulnerableApp();
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$app->route($path);

