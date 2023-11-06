<?php
class db{
protected $connection;

function setconnection(){
    try{
        $this->connection=new PDO("mysql:host=localhost; dbname=DBMS_project","root","");
        
    }catch(PDOException $e){
        echo "Error";
       


    }
}

}
