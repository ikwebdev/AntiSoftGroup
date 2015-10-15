<?php
/**
 * Created by PhpStorm.
 * User: vanek
 * Date: 15.10.2015
 * Time: 21:16
 */
spl_autoload_register(function ($className) {
    var_dump($className);
    include('lib' . "/" . $className . ".php");
});