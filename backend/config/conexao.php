<?php

class Database{
    protected static $db;

    private function __construct()
    {
        try{
            $db_host= "localhost";
            $db_user = "root";
            $db_name = "sistema_balada";
            $db_password = "";

            self::$db = new PDO("msyql:host = $db_host; dbname=$db_name", $db_user,$db_password);
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$db->exec('SET NAMES utf8');
        }catch(PDOException $e){
            die("CONNECTION ERROR: ". $e->getMessage());
        }
    } 

    public function conexao(){
        if(!self::$db){
            new Database();
        }
        return self::$db;
    }
}

?>