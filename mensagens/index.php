<?php
include('./controllers/controller.php');

$controller = new Chamado();
if (isset($_GET['action']) == 'inserir') {
    $mensagem = $_POST['mensagem'];
    if ($controller->Filtro($mensagem) == 0) {
        header('location: ./index.php');
    }
    else {
        $controller->Inserir();
    }
    
    
}
else {
    $controller->getall();
}

?>