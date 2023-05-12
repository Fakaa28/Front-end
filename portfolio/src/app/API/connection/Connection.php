<?php

class Connection extends Mysqli {
    private $host = 'localhost';
    function __construct(){
        parent::__construct('localhost', 'root', '', 'accs');
        $this->set_charset('utf8');
        $this->connect_error == NULL ? 'Conexión exitosa a la DB' : die('Error al conectarse a la BD');
    } //end __construct
} //end class Connection