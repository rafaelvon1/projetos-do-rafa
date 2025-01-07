<?php
require_once('controllers/clientController.php');
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'perfil' and isset($_GET['id'])) {
        $controller = new clientsController();
        $controller->Perfil();
    }
    
}
else {
    $controller = new clientsController();

    $action = !empty($_GET['a']) ? $_GET['a']:'getAll';

    $controller->{$action}(); 
}



?>