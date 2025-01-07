<?php
require_once('./model/client.php');

class clientsController{

    private $model;
    function __construct()
    {
        $this->model= new ClientModel();
    }
    function getAll()
    {
        $selectAll= $this->model->getAll();
        require_once('./views/index.php');
    }
    function Perfil()
    {      
        $selectid= $this->model->getId();
        require_once('./views/perfil.php');
    }
    function Alterar(){
        $alterar= $this->model->Alterar();
        require_once('./views/index.php');
    }

}
?>