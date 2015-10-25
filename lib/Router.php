<?php
/**
 * Created by PhpStorm.
 * User: vanek
 * Date: 15.10.2015
 * Time: 23:04
 */
class Router
{
    private $_page_info;

    public function __construct()
    {

    }

    public function start($url)
    {
        $o_url = new Url($url);
        $o_url->getPageInfo();
    }
}