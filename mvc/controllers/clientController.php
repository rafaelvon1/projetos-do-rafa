<?php
require_once('../model/client.php');

class clientsController{

    private $model;

    function __construct()
    {
        $this->model= new ClientModel();
    }
    function getAll()
    {
        $resultData = $this->model-getAll();
    }

}
?>