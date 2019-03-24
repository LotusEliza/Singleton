<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 2/6/19
 * Time: 4:02 PM
 */

class Book
{
    private $_db = null;

    public function __construct()
    {
        $this->_db = DB::getInstance();
    }

    public function getAllBooks()
    {
        try{
            $result = $this->_db->query("SELECT * FROM books");
        }catch (PDOException $e) {
            echo ($e->getMessage());
        }
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

}