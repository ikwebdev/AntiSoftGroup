<?php
require_once('../lib/misc_functions.php');
require_once('../lib/autoloader.php');


$router = new Router();
$router -> start($_SERVER['REQUEST_URI']);




