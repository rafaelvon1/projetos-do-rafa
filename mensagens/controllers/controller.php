<?php
require_once('./model/model.php');
class Chamado{
    private $model;
    function __construct()
    {
        $this->model = new Model;
    }
    function getall(){
        $selectAll = $this->model->getAll();
        require_once('./views/index.php');
    }
    function Inserir($mensagem){
        $inserindo = $this->model->Inserir($mensagem);
        header('location: ./index.php');
    }
    
}
?>