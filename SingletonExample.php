<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 2/6/19
 * Time: 3:40 PM
 */

class Singleton
{
    protected static $instance;

    public static function getInstance()
    {
        if(!isset(self::$instance))
        {
            $class = __CLASS__;
            self::$instance = new $class();
            echo "<p>First ititialization</p>";
        }else{
            echo "<p>... ititialization</p>";
        }

        return self::$instance;
    }

    private function __construct()
    {

    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

}

Singleton::getInstance();
Singleton::getInstance();
Singleton::getInstance();