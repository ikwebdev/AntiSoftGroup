<?php
/**
 * Created by PhpStorm.
 * User: vanek
 * Date: 25.10.2015
 * Time: 23:24
 */
namespace lib;
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
        $sql = 'SELECT page_id, file_name, layout, language_id,controller,method,alias,abr FROM asg_dev.page
            LEFT JOIN asg_dev.pages_details ON page.id = pages_details.page_id
            LEFT JOIN asg_dev.languages ON asg_dev.languages.id = pages_details.language_id';
        $stmt = $pdo ->query($sql);
        while($row = $stmt->fetch()){
            $result[$row['abr']][$row['alias']] = $row;
        }
        $this->_pages_info = $result;
    }

    public function getPagesInfo()
    {
        return $this->_pages_info;
    }
    public function getPageInfo()
    {
        $url = array_filter(explode("/",$this->_url));
        $language = $url[1];
        $url = array_slice($url,1);
        $alias = $url[0];
        return $this->_pages_info[$language][$alias];
      }

}