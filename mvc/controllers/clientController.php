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
    function Profile()
    {      
        $selectid= $this->model->getId();
        if ($_GET['action'] == 'viewProfile') {
            require_once('./views/perfil.php');
        }
        else {
            require_once('./views/alterar.php');
        }
        
        
    }
    function Update($name,$email,$phone){
        $change= $this->model->Change($name,$email,$phone);
        $selectid= $this->model->getId();
        require_once('./views/perfil.php');
    }
    function Inserir($name,$email,$phone){
        $inserir = $this->model->Inserir($name,$email,$phone);
        header('location:./index.php');
    }
    function Delete(){
        $delete= $this->model->Delete();
        header('location:./index.php');
    }

}
?>