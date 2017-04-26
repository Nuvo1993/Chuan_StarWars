<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 4/25/2017
 * Time: 12:21 AM
 */

require_once ('connection.php');

if(isset($_GET['controller']) && isset($_GET['action'])){
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else{
    $controller = 'pages';
    $action = 'index';
}

require_once('routes.php');