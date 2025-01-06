<?php
require_once('../controllers/clientController.php');

$controller = new clientController();

$action = !empty($_GET['a']) ? $_GET['a']:'getAll';

$controller->{$action};

?>