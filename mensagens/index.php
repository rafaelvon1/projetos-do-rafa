<?php
include('./controllers/controller.php');

$controller = new Chamado();
if (isset($_GET['action']) == 'inserir') {
    $mensagem = $_POST['mensagem'];
    $controller->Inserir($mensagem);
    
}
else {
    $controller->getall();
}

?>