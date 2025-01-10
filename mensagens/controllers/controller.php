<?php
require_once('./model/model.php');
class Chamado{
    private $model;
    public $mensagem;
    function __construct()
    {
        $this->model = new Model;
    }
    function getall(){
        $selectAll = $this->model->getAll();
        require_once('./views/index.php');
    }
    function Filtro($mensagem){
        $this->mensagem = trim($mensagem);
        if (empty($this->mensagem )) {
            //nao existe nada escrito
            return 0;
        }
        else {
            //tem caracter
            return 1;
        }
        
    }
    function Inserir(){
        $inserindo = $this->model->Inserir($this ->mensagem);
        header('location: ./index.php');
    }
    
}
?>