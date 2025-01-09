<?php
require_once('./config/connect.php');
class Model extends Connect{
    function __construct(){
        parent::__construct();
    }
    function getAll(){
        $sqlSelect = $this->connection->query("SELECT * from mensagem");
        $resultQuery = $sqlSelect->fetchAll();
        return $resultQuery;
    }
    function Inserir($mensagem){
        $sqlSelect = $this->connection->query("INSERT into mensagem value (null,'$mensagem')");
        $resultQuery = $sqlSelect->fetchAll();
        return $resultQuery;
    }
}
?>