<?php
require_once('../lib/autoloader.php');
require_once('../lib/misc_functions.php');
/*$url = $_SERVER['REQUEST_URI'];
var_dump($url = array_filter(explode('/',$url)));
echo current($url);
var_dump($url = array_slice($url,1));
echo current($url);
var_dump($url = array_slice($url,1));
echo current($url);*/
$pdo = DbConnect::Instance();
$sql = 'SELECT * from asg_dev.pages';
$stmt = $pdo ->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
debug($result);


