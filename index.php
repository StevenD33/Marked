<?php

if(isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = strtolower($_GET['page']); // HOME
} else {
    $page ='home';
}

$allPages = scandir('controllers/');
var_dump($allPages);

if (in_array($page.'_controller.php',$allPages)) {
    //inclusion de la page
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'Models/'.$page.'_model.php';
    include_once 'Views/'.$page.'_view.php';
} else {
    //retour d'une erreur
    echo'Erreur 404';
}