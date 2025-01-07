<?php
require_once('controllers/clientController.php');
if (isset($_GET['action']) and isset($_GET['id'])) {
    //jogar usuario para o perfil
    if ($_GET['action'] == 'perfil') {
        $controller = new clientsController();
        $controller->Perfil();
    }
    //jogar usuario para alterar
    if ($_GET['action'] == 'excluir') {
        //$controller = new clientsController();
        //$controller->();
    }
    //excluir perfil do usuario 
    if ($_GET['action'] == 'alterar') {
        //$controller = new clientsController();
        //$controller->();
    }

    
}
else {
    $controller = new clientsController();

    $action = !empty($_GET['a']) ? $_GET['a']:'getAll';

    $controller->{$action}(); 
}



?>