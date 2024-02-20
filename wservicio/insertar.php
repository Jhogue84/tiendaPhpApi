<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once "../Config/conexion.php";
        $codigo = $_POST["codigo"];
        $nombre = $_POST["nombre"];
        $vrUnitario = $_POST["vrUnitario"];
        $idMarca = $_POST["idMarca"];
        $imagen = $_POST['imagen'];
        $descripcion = $_POST['descripcion'];
        
        //subir la imagen al servidor y darle un nombre
        $nomImagen = "img_".date('dmY_his').".jpeg";
        $path = "../Resources/img/productos/$nomImagen";
        $path_abs = "http://".$_SERVER['HTTP_HOST']."$path";
        
        file_put_contents($path, base64_decode($imagen));
    
        //insertar datos en la base de datos
        $query = "INSERT INTO productos (codigo, nombre, vrUnitario, imagen, descripcion, idMarca) VALUES ('$codigo', '$nombre', $vrUnitario, '$nomImagen', '$descripcion', $idMarca)";
        $rta = $conexion->query($query);
        
        if($rta===true){
            //echo "Se ingreso los datos exitosamente !!";
            echo "correcto";
        }
        else echo "error";
        //cerramos todo
        $conexion -> close();
    }
    else{
        echo "<br>No se existe la peticion POST, no hay datos para insertar.";  
        echo $_SERVER['SERVER_NAME']."<BR>";
        echo $_SERVER['HTTP_HOST']."<BR>";
        echo $_SERVER["REQUEST_URI"]."<br>";
    } 
?>