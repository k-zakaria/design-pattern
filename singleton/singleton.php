<?php
class singleton {
    protected $id;
    protected static $database;

    

    public static function database(){
        if(is_null(static::$database)){
            $pdo = new PDO('mysqle:dbname=test;host=localhost', 'root', '');
        }
        var_dump($pdo);
        return static::$database ;
    }

}