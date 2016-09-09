<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
    $website = require_once __DIR__.'/../app/app.php';
    $website->run();
?>