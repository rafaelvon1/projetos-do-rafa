<?php

require_once('./config/connect.php');
class ClientModel extends Connect{
    private $table;

    function __construct()
    {
        /*falo q dentro da minha classe connect iniciar o construct */
        parent::__construct();
        $this->table ='clients';
    }
    function getAll()
    {
        $sqlSelect = $this->connection->query("SELECT * from clients");
        $resultQuery = $sqlSelect->fetchAll();
        return $resultQuery;
    }
    function getid()
    {
        $id = $_GET['id'];
        $sqlSelect = $this->connection->query("SELECT * from clients where id = $id");
        $resultQuery = $sqlSelect->fetchAll();
        return $resultQuery;
    }
    function Update(){
        
    }
}
?>