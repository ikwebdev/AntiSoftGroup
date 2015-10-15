<?php
/**
 * Created by PhpStorm.
 * User: vanek
 * Date: 15.10.2015
 * Time: 20:59
 */
class DbConnect
{
    private $_host = '127.0.0.1';
    private $_db_name = 'asg_dev';
    private $_charset = 'utf_8';
    private $_user = 'root';
    private $_password = '';
    protected static $_instance;
    private $_db;

    private function __construct()
    {
        $this->_make_connection();
    }

    public static function Instance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function _make_connection()
    {
        $dsn = "mysql:host = $this->_host; dbname = $this->_db; charset = $this->_charset";
        $opt = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        try {
            $pdo = new PDO($dsn, $this->_user, $this->_password, $opt);
        } catch (PDOException $e) {
            throw new PDOException('Filed connection to database: ' . $e->getMessage());
        }
        $this->_db = $pdo;
    }

    public function query($sql)
    {
        return $this->_db->query($sql);
    }
}