<?php

require_once('./config/connect.php');
class ClientModel extends Connect{
    private $table;
    public $name;
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
    function Change($name,$email,$phone){
        $id = $_GET['id'];
        $sqlSelect = $this->connection->query("UPDATE clients set name = '$name', email = '$email',phone = '$phone' where id = '$id'");
        $resultQuery = $sqlSelect->fetchAll();
        return $resultQuery;
    }
    function Inserir($name,$email,$phone){
        $sqlSelect = $this->connection->query("INSERT into clients values (null,'$name','$email','$phone')");
        $resultQuery = $sqlSelect->fetchAll();
        return $resultQuery;
    }
}
?>