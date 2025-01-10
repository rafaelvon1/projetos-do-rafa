<?php
include('./controllers/controller.php');

$controller = new Chamado();
if (isset($_GET['action']) == 'inserir') {
    $mensagem = $_POST['mensagem'];
    
    echo $controller->Dados($mensagem) ;
    if ($controller->Dados($mensagem) == 0) {
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