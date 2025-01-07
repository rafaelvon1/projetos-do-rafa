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
        $sqlSelect = $this->connection->query("SELECT * from $this->table");
        $resultQuery = $sqlSelect->fetchAll();
        return $resultQuery;
    }
}
?>