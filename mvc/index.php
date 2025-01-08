<?php
require_once('controllers/clientController.php');
if (isset($_GET['action']) or isset($_GET['id'])) {
    //jogar usuario para o perfil
    if ($_GET['action'] == 'viewProfile' or $_GET['action'] == 'viewUpdate') {
        $controller = new clientsController();
        $controller->Profile();
    }
    //jogar usuario para alterar
    elseif ($_GET['action'] == 'Delete') {
        //$controller = new clientsController();
        //$controller->();
    }
    //excluir perfil do usuario 
    elseif ($_GET['action'] == 'Update') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $controller = new clientsController();
        $controller->Update($name,$email,$phone);
    }
    elseif ($_GET['action'] == 'viewInserir') {
        require_once('views/adicionar.php');
        
    }
    elseif ($_GET['action'] == 'Inserir') {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $controller = new clientsController();
        $controller->Inserir($name,$email,$phone);
    }

    
}
else {
    $controller = new clientsController();

    $action = !empty($_GET['a']) ? $_GET['a']:'getAll';

    $controller->{$action}(); 
}



?>