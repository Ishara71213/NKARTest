<?php

class Dbh{

    protected $connection =false; 
    
    protected function connect(){
        include_once(__DIR__.'/../config.php');
        try{
            if(!$this->connection){
                $con= new PDO("mysql:host={$config['server']};dbname={$config['dbname']}",$config['dbuser'],$config['dbpass']);
                $con->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
                $con->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE,\PDO::FETCH_ASSOC);
                $this->connection=$con;
                return $this->connection;
            }
        }catch(\PDOException $e){
            echo $e->getMessage();
            exit(); 
        }
    }
}