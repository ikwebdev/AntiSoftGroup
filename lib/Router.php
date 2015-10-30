<?php
/**
 * Created by PhpStorm.
 * User: vanek
 * Date: 15.10.2015
 * Time: 23:04
 */
namespace lib;
class Router
{
    private $_page_info;

    public function __construct()
    {

    }

    public function start($url)
    {
        $o_url = new Url($url);
        $page_info = $o_url->getPageInfo();
        $this->_initController($page_info['controller'],$page_info['method']);
    }

    private function _initController($controller,$method) {
        //debug($controller.$method);
        $ctrl = new $controller();
        $ctrl->$method();
    }
}