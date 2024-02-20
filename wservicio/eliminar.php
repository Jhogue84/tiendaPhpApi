<?php
    //insercion de productor desde la app de android
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once "../Config/conexion.php";
        $id = $_POST["id"];
        $cadenaSql = "DELETE FROM productos WHERE id = $id";
        
        $rta = $conexion -> query($cadenaSql);
        
        if($conexion->affected_rows > 0 && $rta == true){
            $json = "{'Mensaje': 'Eliminado'}";
            echo json_encode($json);
              
        }
        else{
            $json = "{'Mensaje': 'No existe producto'}";
            echo json_encode($json);
        } 
        $conexion -> close();
        
    }
    else echo "No se realizo la peticion POST, enviando el parametro de eliminacion."
?>