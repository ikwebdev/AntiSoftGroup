<?php
/**
 * Created by PhpStorm.
 * User: vanek
 * Date: 15.10.2015
 * Time: 21:16
 */
spl_autoload_register(function ($className) {
    include("../lib" . DIRECTORY_SEPARATOR . $className . ".php");
});