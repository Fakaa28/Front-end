<?php
require_once "models/Cliente.php";

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET' :
        echo json_encode(Cliente::getAll());
        break;

        default :

        break;
}