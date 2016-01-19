<?php

include('Connector.php');
include('GuardarForm.php');

error_reporting(0);
session_start();
$ID = $_POST['ID_pantalla']; // con esto decide de que pantalla viene la peticion

    if ($ID == "01") {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];

        $almacenar = new GuardarForm($nombre, $correo, $contrasena);
        echo $almacenar->insert_formsql();
    }

?>