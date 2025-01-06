<?php

require_once('../config/connct.php');
class ClientModel extends Connect{
    private $table;

    function __construct()
    {
        /*falo q dentro da minha classe connect iniciar o construct */
        parent::__construct();
        $this->table = 'clients';
    }
    function getAll()
    {
        
    }
}
?>