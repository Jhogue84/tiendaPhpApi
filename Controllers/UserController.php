<?php

include_once '../Models/UserModel.php';

if (isset($_POST["accion"])) {
    $accion = $_POST["accion"];
    //echo "accion: ".$accion ."<br>";
    if ($accion == "Iniciar Sesion") {
        //llamamos al metodo iniciarSesion()
        UserModel::loguear($usuario, $clave);
    }
    
    
}
?>