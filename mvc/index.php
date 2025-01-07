<?php
require_once('controllers/clientController.php');

$controller = new clientsController();

$action = !empty($_GET['a']) ? $_GET['a']:'getAll';

$controller->{$action}();

?>