<?php
require_once('./model/client.php');

class clientsController{

    private $model;
    public $resultData;
    function __construct()
    {
        $this->model= new ClientModel();
    }
    function getAll()
    {
        $resultData= $this->model->getAll();
        require_once('./views/index.php');
    }

}
?>