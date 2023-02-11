<?php

require 'Routing.php';

$path = $_SERVER['REQUEST_URI'];
$path = trim($path, '/');
$path = parse_url($path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('main_menu', 'DefaultController');
Router::get('solo_game', 'DefaultController');

Router::run($path);