<?php
require_once('../lib/autoloader.php');
require_once('../lib/misc_functions.php');
require_once('../lib/Router.php');

$router = new Router();
$router -> parse_url($_SERVER['REQUEST_URI']);





