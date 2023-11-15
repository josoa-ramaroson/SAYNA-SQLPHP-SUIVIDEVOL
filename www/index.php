<?php

use app\Controllers\PaysController;

include ('../include.php');

//Kernel\Connexion::get();
//include ('../app/Views/index.php');

$controllerName = 'app\\Controllers\\'.$_GET['controller'].'Controller';
$actionName = $_GET['action'];

$controller = new $controllerName();
$view = $controller->$actionName();
$view -> display();