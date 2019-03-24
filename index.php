<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 2/6/19
 * Time: 4:00 PM
 */

function __autoload($class_name){
    require_once $class_name . '.php';
}

//require_once "Book.php";

$books = new Book();
echo '<pre>';
var_dump($books->getAllBooks());
echo '</pre>';