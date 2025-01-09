<?php
define('HOST','localhost');
define('DATABASENAME','mensagem');
define('USER','root');
define('PASSWORD','');

class Connect{
    protected $connection;
    function __construct()
    {
        $this->connectData();
    }
    function connectData()
    {
        try {
            $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER,PASSWORD);
        } catch (PDDException $th) {
            echo"erro".$th->getMessage();
            die();
        }
    }
}
?>