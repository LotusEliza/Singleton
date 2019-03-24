<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 2/6/19
 * Time: 3:53 PM
 */

class DB
{
    private static $_db = null;

    public static function getInstance()
    {
        $configs=include ('config.php');
        $host=$configs['db']['host'];
        $username=$configs['db']['username'];
        $passwd=$configs['db']['passwd'];
        $name=$configs['db']['dbname'];
        $dbport=$configs['db']['dbport'];

        if(self::$_db === null){
            try{
                self::$_db = new PDO("mysql:host=" . $host . ';port=' . $dbport . ';dbname=' . $name, $username, $passwd);
                self::$_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }

        return self::$_db;
    }

    private function __construct(){ }
    private function __clone(){ }
//    private function __wakeup(){
//
//    }

}