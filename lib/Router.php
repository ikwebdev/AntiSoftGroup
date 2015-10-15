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
        $this -> _get_url_db();
    }

    public function parse_url($url)
    {
        debug($url);
        debug($this -> _page_info);
       // var_dump($url = array_filter(explode('/',$url)));
       /* echo current($url);
        var_dump($url = array_slice($url,1));
        echo current($url);
        var_dump($url = array_slice($url,1));
        echo current($url);*/
    }
    private function _get_url_db()
    {
        $pdo = DbConnect::Instance();
        $sql = 'SELECT * from asg_dev.pages';
        $stmt = $pdo ->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->_page_info = $result;
    }
}