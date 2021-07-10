<?php
require __DIR__ . '/../vendor/autoload.php';

$url = substr($_SERVER['REQUEST_URI'], 1);

$url = explode('/', $url);

$controller = $url[0] && $url[0] ? $url[0] : 'page';

var_dump($url);
