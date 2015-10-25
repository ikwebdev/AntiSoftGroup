<?php
/**
 * Created by PhpStorm.
 * User: vanek
 * Date: 25.10.2015
 * Time: 23:24
 */
class Url
{
    private $_url;
    private $_pages_info;
    private $_current_page;

    public function __construct($url)
    {
        $this -> _url = $url;
        $this -> _getPagesInfoFromDb();
    }

    private function _getPagesInfoFromDb()
    {
        $pdo = DbConnect::Instance();
        $sql = 'SELECT page_id, file_name, layout, language_id,controller,method,alias FROM asg_dev.pages
            LEFT JOIN asg_dev.pages_details ON pages.id = pages_details.page_id';
        $stmt = $pdo ->query($sql);
     //   $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        while($row = $stmt->fetch()){
            $result[$row['alias']] = $row;
        }
        $this->_pages_info = $result;
    }

    public function getPagesInfo()
    {
        return $this->_pages_info;
    }
    public function getPageInfo()
    {
        debug($this->_url);
       // return $this->_pages_info;
    }

}