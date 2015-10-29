<?php
/**
 * Created by PhpStorm.
 * User: vanek
 * Date: 15.10.2015
 * Time: 21:16
 *//*
spl_autoload_register(function ($className) {
    include("../lib" . DIRECTORY_SEPARATOR . $className . ".php");
});*/
class Autoloader
{
    const debug = 0;
    public function __construct(){}

    public static function autoload($file)
    {
        debug($file);
        $file = str_replace('\\', '/', $file);
        $path = $_SERVER['DOCUMENT_ROOT'];
        $filepath = $_SERVER['DOCUMENT_ROOT'] . '/lib/' . $file . '.php';

        if (file_exists($filepath))
        {
            require_once($filepath);

        }
        else
        {
            $flag = true;
            Autoloader::recursive_autoload($file, $path, $flag);
        }
    }

    public static function recursive_autoload($file, $path, $flag)
    {
        if (FALSE !== ($handle = opendir($path)) && $flag)
        {
            while (FAlSE !== ($dir = readdir($handle)) && $flag)
            {

                if (strpos($dir, '.') === FALSE)
                {
                    $path2 = $path .'/' . $dir;
                    $filepath = $path2 . '/' . $file . '.php';
                    debug($filepath);
                    if (file_exists($filepath))
                    {
                        $flag = FALSE;
                        require_once($filepath);
                        break;
                    }
                    Autoloader::recursive_autoload($file, $path2, $flag);
                }
            }
            closedir($handle);
        }
    }
}
\spl_autoload_register('Autoloader::autoload');